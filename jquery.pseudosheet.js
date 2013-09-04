(function($, doc, win) {
    $.fn.extend({
        pseudoSheet: function(settings) {
            settings = $.extend({
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

    $.pseudoSheet = { //jQuery.pseudoSheet
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
                            $(selector).each(function() {
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
                            $obj = obj.$obj = $(this),
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
                            $.each(data, function(i) {
                                if (s.dataHandler[i]) {
                                    var canParse = (data[i].charAt(0) == '='),
                                        objFormula = (data[i].charAt(0) == '=' ? data[i].substring(1, data[i].length) : data[i]),
                                        resultFn = function () {
                                            var obj = {result: formulaParser.parse(objFormula)};
                                            jP.filterValue.call(obj);
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
                    filterValue:function () {
                        var encodedValue, html;
                        if (this.result != u) {
                            this.val = this.result.valueOf();
                            html = this.result.html;
                        } else if (typeof this.val == 'string' && this.val.length > 0) {
                            encodedValue = s.encode(this.val);
                        }

                        if (this.$obj) {
                            this.$obj.html(html || encodedValue || this.val);
                        }
                    },
                    objHandler: {
                        callFunction: function(fn, args) {
                            fn = fn.toUpperCase();
                            args = args || [];

                            if (jP.fn[fn]) {
                                this.fnCount++;
                                var result = jP.fn[fn].apply(this, args);
                                return result;
                            } else {
                                return s.error({error:"Function " + fn + " Not Found"});
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

                            var $obj = $('#' + vars[0]);
                            if (!$obj.length) $obj = $('[name="' + vars[0] + '"]');
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
                                $obj[0] = $(doc.createElement('div'));
                            }

                            return jP.updateObjectValue.apply($obj[0]);
                        },
                        concatenate: function() {
                            return jFN.CONCATENATE.apply(this, arguments).value;
                        }
                    }
                };

            if ($.sheet.fn) { //If the new calculations engine is alive, fill it too, we will remove above when no longer needed.
                //Extend the calculation engine plugins
                jP.fn = $.extend($.sheet.fn, jP.fn);

                //Extend the calculation engine with advanced functions
                if ($.sheet.advancedfn) {
                    jP.fn = $.extend(jP.fn, $.sheet.advancedfn);
                }

                //Extend the calculation engine with finance functions
                if ($.sheet.financefn) {
                    jP.fn = $.extend(jP.fn, $.sheet.financefn);
                }

                if (s.formulaFunctions) {
                    jP.fn = $.extend(jP.fn, s.formulaFunctions);
                }
            }

            //ready the sheet's formulaParser
            jP.FormulaParser = Formula(jP.objHandler);

            return jP;
        }
    };


    var jPE = $.pseudoSheetEngine = {//Pseudo Sheet Formula Engine
        calc: function(jP, ignite) {
            for (var i = 0; i < jP.obj.length; i++) {
                ignite.apply(jP.obj[i]);
            }
        }
    };
})(jQuery, document, window);