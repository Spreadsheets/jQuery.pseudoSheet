jQuery.fn.extend({
	pseudoSheet: function(settings) {
		settings = jQuery.extend({
			error: function(e) {
				this.val = e.error;
				return e.error;
			},
			dataHandler: {
				visible: function(visible) {
					if (visible) {
						this.$obj.show();
					} else {
						this.$obj.hide();
					}
				},
				enabled: function(enabled) {
					if (enabled) {
						this.$obj.removeAttr('disabled');
					} else {
						this.$obj.attr('disabled', true);
					}
				}
			},
			attrHandler: {
				visible: function() {
					return (this.$obj.is(':visible') ? true : false);
				},
				enabled: function() {
					return (this.$obj.is(':enabled') ? true : false);
				},
				value:   function() {
					return jP.objHandler.getObjectValue(this.$obj);
				}
			},
			formulaFunctions: {},
			formulaVariables: {}
		}, settings);

		var jP = jQuery.pseudoSheet.createInstance(this, settings);
		jP.calc();

		return this;
	}
});

jQuery.pseudoSheet = { //jQuery.pseudoSheet
	createInstance: function(obj, s) {

		var u = undefined,
			jP = {
				obj: obj,
				calc: function() {
					jP.calcLast = new Date();
					jPE.calc(jP, jP.updateObjectValue);
				},
				calcLast: 0,
				callStack: 0,
				fn: {
					OBJVAL: function (selector) {
						var values = [];
						jQuery(selector).each(function() {
							jP.updateObjectValue.apply(this);
							if (!isNaN(this.val)) {
								this.val *= 1;
							}
							values.push(this.val || '');
						});

						return (values.length > 1 ? values : values[0]);
					}
				},
				updateObjectValue: function() {
					//first detect if the object exists if not return nothing
					if (!this) return s.error.apply(this, [{error: 'Object not found'}]);

					var	obj = this,
						$obj = obj.$obj = jQuery(this),
						isInput = $obj.is(':input');

					if (isInput) {
						if ($obj.is(':radio,:checkbox')) {
							if ($obj.is(':checked')) {
								this.val = $obj.filter(':checked').val();
							} else {
								this.val = '';
							}
						} else {
							this.val = $obj.val();
						}
					} else {
						this.val = $obj.html();
					}

					$obj.data('oldValue', this.val); //we detect the last value, so that we don't have to update all objects, thus saving resources

					if (this.state) {
						return s.error.apply(this, [{error: "Loop Detected"}]);
					}

					this.state = 'updating';
					this.html = [];
					this.fnCount = 0;
					this.calcCount = (this.calcCount || 0);
					this.calcLast = (this.calcLast || 0);

					if (this.calcLast != jP.calcLast) {
						this.calcLast = jP.calcLast;
						this.calcCount++;
						var formulaParser;
						if (jP.callStack) { //we prevent parsers from overwriting each other
							if (!this.formulaParser) { //cut down on un-needed parser creation
								this.formulaParser = Formula(jP.objHandler);
							}
							formulaParser = this.formulaParser;
						} else {//use the sheet's parser if there aren't many calls in the callStack
							formulaParser = jP.FormulaParser;
						}

						jP.callStack++;
						formulaParser.setObj(this);

						var data = $obj.data();
						jQuery.each(data, function(i) {
							if (s.dataHandler[i]) {
								var canParse = (data[i].charAt(0) == '='),
									objFormula = (data[i].charAt(0) == '=' ? data[i].substring(1, data[i].length) : data[i]),
									resultFn = function () {
										var obj = {result: formulaParser.parse(objFormula)};
										jP.filterValue.apply(obj);
										return obj.val;
									};

								s.dataHandler[i].apply(obj, [resultFn()]);
							}
						});


						if (data.formula) {
							//try {
								if (data.formula.charAt(0) == '=') {
									data.formula = data.formula.substring(1, data.formula.length);
								}

								this.result = formulaParser.parse(data.formula);
							//} catch(e) {
							//	console.log(e);
							//	obj.val = e.toString().replace(/\n/g, '<br />'); //error
							//}
							jP.callStack--;

							jP.filterValue.apply(this);

							if (isInput) {
								$obj.val(this.val);
							} else {
								$obj.html(this.result.html !== u ? this.result.html : this.val);
							}
						}
					}

					obj.state = null;

					return this.val;
				},
				filterValue: function () {
					if (this.result !== u) {
						if (this.result.value !== u) {
							this.val = this.result.value;
							this.html = this.result.html || this.result.value;
						} else {
							this.val = this.result;
						}
					} else {
						this.result = {html: this.val};
					}
				},
				objHandler: {
					callFunction: function(fn, args) {
						args = args || [];

						if (jP.fn[fn]) {
							this.fnCount++;
							var values = [],
								html = [],
								result,
								i = args.length;

							if (i) {
								do {
									if (args[i] != u) {
										if (args[i].value || args[i].html) {
											values.unshift(args[i].value);
											html.unshift(args[i].html);
										} else {
											values.unshift(args[i]);
											html.unshift(args[i]);
										}
									}
								} while (i--);
							}

							result = jP.fn[fn].apply(this, values);
							if (result != null) {
								if (result.html != u) {
									this.html.push(result.html);
								} else {
									this.html.push(null); //reset html if we didn't just get an html value
								}
								if (result.value != u) {
									return result.value;
								}
							}
							return result;
						} else {
							return s.error.apply(this, [{error: "Function Not Found"}]);
						}
					},
					variable: function() {
						var vars = arguments;

						if (vars.length == 1) {
							switch (vars[0].toLowerCase()) {
								case "true" :   return true;
								case "false":   return false;
							}
						}

						if (s.formulaVariables[vars[0]]) {
							return s.formulaVariables[vars[0]];
						}

						var $obj = jQuery('#' + vars[0]);
						if (!$obj.length) $obj = jQuery('[name="' + vars[0] + '"]');
						if (!$obj.length) return s.error.apply(this, [{error: "Object not found"}]);

						if (vars.length > 1) {
							if (s.attrHandler[vars[1]]) {
								return s.attrHandler[vars[1]].apply({
									$obj: $obj,
									vars: vars
								});
							}
							return s.error.apply(this, [{error: "Attribute not found"}]);
						}

						return jP.objHandler.getObjectValue($obj);
					},
					number: function(num) {
						if (isNaN) {
							return num;
						} else {
							return num * 1;
						}
					},
					performMath: function(mathType, num1, num2) {
						switch (mathType) {
							case '+':
								return num1 + num2;
								break;
							case '-':
								return num1 - num2;
								break;
							case '/':
								return num1 / num2;
								break;
							case '*':
								return num1 * num2;
								break;
							case '^':
								return Math.pow(num1, num2);
								break;
						}
					},
					time: function(time, isAMPM) {
						return times.fromString(time, isAMPM);
					},
					getObjectValue: function($obj) {
						if ($obj.is(':radio,:checkbox')) {
							$obj = $obj.filter(':checked');
						}

						//We don't throw an error here if the item doesn't exist, because we have ensured it does, it is most likely filtered at this point
						if (!$obj[0]) {
							$obj[0] = jQuery('<div />');
						}

						return jP.updateObjectValue.apply($obj[0]);
					},
					concatenate: function() {
						return jFN.CONCATENATE.apply(this, arguments).value;
					}
				}
			};

		if (jQuery.sheet.fn) { //If the new calculations engine is alive, fill it too, we will remove above when no longer needed.
			//Extend the calculation engine plugins
			jP.fn = jQuery.extend(jQuery.sheet.fn, jP.fn);

			//Extend the calculation engine with advanced functions
			if (jQuery.sheet.advancedfn) {
				jP.fn = jQuery.extend(jP.fn, jQuery.sheet.advancedfn);
			}

			//Extend the calculation engine with finance functions
			if (jQuery.sheet.financefn) {
				jP.fn = jQuery.extend(jP.fn, jQuery.sheet.financefn);
			}

			if (s.formulaFunctions) {
				jP.fn = jQuery.extend(jP.fn, s.formulaFunctions);
			}
		}

		//ready the sheet's formulaParser
		jP.FormulaParser = Formula(jP.objHandler);

		return jP;
	}
};


var jPE = jQuery.pseudoSheetEngine = {//Pseudo Sheet Formula Engine
	calc: function(jP, ignite) {
		for (var i = 0; i < jP.obj.length; i++) {
			ignite.apply(jP.obj[i]);
		}
	}
};