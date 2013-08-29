<?php
/* Jison generated parser */
namespace Jison;
use Exception;




class formula
{
    public $symbols = array();
    public $terminals = array();
    public $productions = array();
    public $table = array();
    public $defaultActions = array();
    public $version = '0.3.12';
    public $debug = false;
    public $none = 0;
    public $shift = 1;
    public $reduce = 2;
    public $accept = 3;

    function trace()
    {

    }

    function __construct()
    {
        //Setup Parser
        
			$symbol0 = new ParserSymbol("accept", 0);
			$symbol1 = new ParserSymbol("end", 1);
			$symbol2 = new ParserSymbol("error", 2);
			$symbol3 = new ParserSymbol("expressions", 3);
			$symbol4 = new ParserSymbol("expression", 4);
			$symbol5 = new ParserSymbol("EOF", 5);
			$symbol6 = new ParserSymbol("variableSequence", 6);
			$symbol7 = new ParserSymbol("TIME_AMPM", 7);
			$symbol8 = new ParserSymbol("TIME_24", 8);
			$symbol9 = new ParserSymbol("number", 9);
			$symbol10 = new ParserSymbol("STRING", 10);
			$symbol11 = new ParserSymbol("=", 11);
			$symbol12 = new ParserSymbol("+", 12);
			$symbol13 = new ParserSymbol("(", 13);
			$symbol14 = new ParserSymbol(")", 14);
			$symbol15 = new ParserSymbol("<", 15);
			$symbol16 = new ParserSymbol(">", 16);
			$symbol17 = new ParserSymbol("NOT", 17);
			$symbol18 = new ParserSymbol("-", 18);
			$symbol19 = new ParserSymbol("*", 19);
			$symbol20 = new ParserSymbol("/", 20);
			$symbol21 = new ParserSymbol("^", 21);
			$symbol22 = new ParserSymbol("E", 22);
			$symbol23 = new ParserSymbol("FUNCTION", 23);
			$symbol24 = new ParserSymbol("expseq", 24);
			$symbol25 = new ParserSymbol("cell", 25);
			$symbol26 = new ParserSymbol("FIXEDCELL", 26);
			$symbol27 = new ParserSymbol(":", 27);
			$symbol28 = new ParserSymbol("CELL", 28);
			$symbol29 = new ParserSymbol("SHEET", 29);
			$symbol30 = new ParserSymbol("!", 30);
			$symbol31 = new ParserSymbol(";", 31);
			$symbol32 = new ParserSymbol(",", 32);
			$symbol33 = new ParserSymbol("VARIABLE", 33);
			$symbol34 = new ParserSymbol("DECIMAL", 34);
			$symbol35 = new ParserSymbol("NUMBER", 35);
			$symbol36 = new ParserSymbol("%", 36);
			$symbol37 = new ParserSymbol("#", 37);
			$this->symbols[0] = $symbol0;
			$this->symbols["accept"] = $symbol0;
			$this->symbols[1] = $symbol1;
			$this->symbols["end"] = $symbol1;
			$this->symbols[2] = $symbol2;
			$this->symbols["error"] = $symbol2;
			$this->symbols[3] = $symbol3;
			$this->symbols["expressions"] = $symbol3;
			$this->symbols[4] = $symbol4;
			$this->symbols["expression"] = $symbol4;
			$this->symbols[5] = $symbol5;
			$this->symbols["EOF"] = $symbol5;
			$this->symbols[6] = $symbol6;
			$this->symbols["variableSequence"] = $symbol6;
			$this->symbols[7] = $symbol7;
			$this->symbols["TIME_AMPM"] = $symbol7;
			$this->symbols[8] = $symbol8;
			$this->symbols["TIME_24"] = $symbol8;
			$this->symbols[9] = $symbol9;
			$this->symbols["number"] = $symbol9;
			$this->symbols[10] = $symbol10;
			$this->symbols["STRING"] = $symbol10;
			$this->symbols[11] = $symbol11;
			$this->symbols["="] = $symbol11;
			$this->symbols[12] = $symbol12;
			$this->symbols["+"] = $symbol12;
			$this->symbols[13] = $symbol13;
			$this->symbols["("] = $symbol13;
			$this->symbols[14] = $symbol14;
			$this->symbols[")"] = $symbol14;
			$this->symbols[15] = $symbol15;
			$this->symbols["<"] = $symbol15;
			$this->symbols[16] = $symbol16;
			$this->symbols[">"] = $symbol16;
			$this->symbols[17] = $symbol17;
			$this->symbols["NOT"] = $symbol17;
			$this->symbols[18] = $symbol18;
			$this->symbols["-"] = $symbol18;
			$this->symbols[19] = $symbol19;
			$this->symbols["*"] = $symbol19;
			$this->symbols[20] = $symbol20;
			$this->symbols["/"] = $symbol20;
			$this->symbols[21] = $symbol21;
			$this->symbols["^"] = $symbol21;
			$this->symbols[22] = $symbol22;
			$this->symbols["E"] = $symbol22;
			$this->symbols[23] = $symbol23;
			$this->symbols["FUNCTION"] = $symbol23;
			$this->symbols[24] = $symbol24;
			$this->symbols["expseq"] = $symbol24;
			$this->symbols[25] = $symbol25;
			$this->symbols["cell"] = $symbol25;
			$this->symbols[26] = $symbol26;
			$this->symbols["FIXEDCELL"] = $symbol26;
			$this->symbols[27] = $symbol27;
			$this->symbols[":"] = $symbol27;
			$this->symbols[28] = $symbol28;
			$this->symbols["CELL"] = $symbol28;
			$this->symbols[29] = $symbol29;
			$this->symbols["SHEET"] = $symbol29;
			$this->symbols[30] = $symbol30;
			$this->symbols["!"] = $symbol30;
			$this->symbols[31] = $symbol31;
			$this->symbols[";"] = $symbol31;
			$this->symbols[32] = $symbol32;
			$this->symbols[","] = $symbol32;
			$this->symbols[33] = $symbol33;
			$this->symbols["VARIABLE"] = $symbol33;
			$this->symbols[34] = $symbol34;
			$this->symbols["DECIMAL"] = $symbol34;
			$this->symbols[35] = $symbol35;
			$this->symbols["NUMBER"] = $symbol35;
			$this->symbols[36] = $symbol36;
			$this->symbols["%"] = $symbol36;
			$this->symbols[37] = $symbol37;
			$this->symbols["#"] = $symbol37;

			$this->terminals = array(
					5=>&$symbol5,
					7=>&$symbol7,
					8=>&$symbol8,
					10=>&$symbol10,
					11=>&$symbol11,
					12=>&$symbol12,
					13=>&$symbol13,
					14=>&$symbol14,
					15=>&$symbol15,
					16=>&$symbol16,
					17=>&$symbol17,
					18=>&$symbol18,
					19=>&$symbol19,
					20=>&$symbol20,
					21=>&$symbol21,
					22=>&$symbol22,
					23=>&$symbol23,
					26=>&$symbol26,
					27=>&$symbol27,
					28=>&$symbol28,
					29=>&$symbol29,
					30=>&$symbol30,
					31=>&$symbol31,
					32=>&$symbol32,
					33=>&$symbol33,
					34=>&$symbol34,
					35=>&$symbol35,
					36=>&$symbol36,
					37=>&$symbol37
				);

			$table0 = new ParserState(0);
			$table1 = new ParserState(1);
			$table2 = new ParserState(2);
			$table3 = new ParserState(3);
			$table4 = new ParserState(4);
			$table5 = new ParserState(5);
			$table6 = new ParserState(6);
			$table7 = new ParserState(7);
			$table8 = new ParserState(8);
			$table9 = new ParserState(9);
			$table10 = new ParserState(10);
			$table11 = new ParserState(11);
			$table12 = new ParserState(12);
			$table13 = new ParserState(13);
			$table14 = new ParserState(14);
			$table15 = new ParserState(15);
			$table16 = new ParserState(16);
			$table17 = new ParserState(17);
			$table18 = new ParserState(18);
			$table19 = new ParserState(19);
			$table20 = new ParserState(20);
			$table21 = new ParserState(21);
			$table22 = new ParserState(22);
			$table23 = new ParserState(23);
			$table24 = new ParserState(24);
			$table25 = new ParserState(25);
			$table26 = new ParserState(26);
			$table27 = new ParserState(27);
			$table28 = new ParserState(28);
			$table29 = new ParserState(29);
			$table30 = new ParserState(30);
			$table31 = new ParserState(31);
			$table32 = new ParserState(32);
			$table33 = new ParserState(33);
			$table34 = new ParserState(34);
			$table35 = new ParserState(35);
			$table36 = new ParserState(36);
			$table37 = new ParserState(37);
			$table38 = new ParserState(38);
			$table39 = new ParserState(39);
			$table40 = new ParserState(40);
			$table41 = new ParserState(41);
			$table42 = new ParserState(42);
			$table43 = new ParserState(43);
			$table44 = new ParserState(44);
			$table45 = new ParserState(45);
			$table46 = new ParserState(46);
			$table47 = new ParserState(47);
			$table48 = new ParserState(48);
			$table49 = new ParserState(49);
			$table50 = new ParserState(50);
			$table51 = new ParserState(51);
			$table52 = new ParserState(52);
			$table53 = new ParserState(53);
			$table54 = new ParserState(54);
			$table55 = new ParserState(55);
			$table56 = new ParserState(56);
			$table57 = new ParserState(57);
			$table58 = new ParserState(58);
			$table59 = new ParserState(59);
			$table60 = new ParserState(60);
			$table61 = new ParserState(61);
			$table62 = new ParserState(62);
			$table63 = new ParserState(63);
			$table64 = new ParserState(64);
			$table65 = new ParserState(65);
			$table66 = new ParserState(66);
			$table67 = new ParserState(67);
			$table68 = new ParserState(68);
			$table69 = new ParserState(69);
			$table70 = new ParserState(70);
			$table71 = new ParserState(71);
			$table72 = new ParserState(72);
			$table73 = new ParserState(73);
			$table74 = new ParserState(74);
			$table75 = new ParserState(75);
			$table76 = new ParserState(76);
			$table77 = new ParserState(77);
			$table78 = new ParserState(78);

			$tableDefinition0 = array(
				
					2=>new ParserAction($this->none, $table14),
					3=>new ParserAction($this->none, $table1),
					4=>new ParserAction($this->none, $table2),
					6=>new ParserAction($this->none, $table3),
					7=>new ParserAction($this->shift, $table4),
					8=>new ParserAction($this->shift, $table5),
					9=>new ParserAction($this->none, $table6),
					10=>new ParserAction($this->shift, $table7),
					12=>new ParserAction($this->shift, $table10),
					13=>new ParserAction($this->shift, $table8),
					18=>new ParserAction($this->shift, $table9),
					22=>new ParserAction($this->shift, $table11),
					23=>new ParserAction($this->shift, $table12),
					25=>new ParserAction($this->none, $table13),
					26=>new ParserAction($this->shift, $table17),
					28=>new ParserAction($this->shift, $table18),
					29=>new ParserAction($this->shift, $table19),
					33=>new ParserAction($this->shift, $table15),
					35=>new ParserAction($this->shift, $table16),
					37=>new ParserAction($this->shift, $table20)
				);

			$tableDefinition1 = array(
				
					1=>new ParserAction($this->accept)
				);

			$tableDefinition2 = array(
				
					5=>new ParserAction($this->shift, $table21),
					11=>new ParserAction($this->shift, $table22),
					12=>new ParserAction($this->shift, $table23),
					15=>new ParserAction($this->shift, $table24),
					16=>new ParserAction($this->shift, $table25),
					17=>new ParserAction($this->shift, $table26),
					18=>new ParserAction($this->shift, $table27),
					19=>new ParserAction($this->shift, $table28),
					20=>new ParserAction($this->shift, $table29),
					21=>new ParserAction($this->shift, $table30)
				);

			$tableDefinition3 = array(
				
					5=>new ParserAction($this->reduce, $table2),
					11=>new ParserAction($this->reduce, $table2),
					12=>new ParserAction($this->reduce, $table2),
					14=>new ParserAction($this->reduce, $table2),
					15=>new ParserAction($this->reduce, $table2),
					16=>new ParserAction($this->reduce, $table2),
					17=>new ParserAction($this->reduce, $table2),
					18=>new ParserAction($this->reduce, $table2),
					19=>new ParserAction($this->reduce, $table2),
					20=>new ParserAction($this->reduce, $table2),
					21=>new ParserAction($this->reduce, $table2),
					31=>new ParserAction($this->reduce, $table2),
					32=>new ParserAction($this->reduce, $table2),
					34=>new ParserAction($this->shift, $table31)
				);

			$tableDefinition4 = array(
				
					5=>new ParserAction($this->reduce, $table3),
					11=>new ParserAction($this->reduce, $table3),
					12=>new ParserAction($this->reduce, $table3),
					14=>new ParserAction($this->reduce, $table3),
					15=>new ParserAction($this->reduce, $table3),
					16=>new ParserAction($this->reduce, $table3),
					17=>new ParserAction($this->reduce, $table3),
					18=>new ParserAction($this->reduce, $table3),
					19=>new ParserAction($this->reduce, $table3),
					20=>new ParserAction($this->reduce, $table3),
					21=>new ParserAction($this->reduce, $table3),
					31=>new ParserAction($this->reduce, $table3),
					32=>new ParserAction($this->reduce, $table3)
				);

			$tableDefinition5 = array(
				
					5=>new ParserAction($this->reduce, $table4),
					11=>new ParserAction($this->reduce, $table4),
					12=>new ParserAction($this->reduce, $table4),
					14=>new ParserAction($this->reduce, $table4),
					15=>new ParserAction($this->reduce, $table4),
					16=>new ParserAction($this->reduce, $table4),
					17=>new ParserAction($this->reduce, $table4),
					18=>new ParserAction($this->reduce, $table4),
					19=>new ParserAction($this->reduce, $table4),
					20=>new ParserAction($this->reduce, $table4),
					21=>new ParserAction($this->reduce, $table4),
					31=>new ParserAction($this->reduce, $table4),
					32=>new ParserAction($this->reduce, $table4)
				);

			$tableDefinition6 = array(
				
					5=>new ParserAction($this->reduce, $table5),
					11=>new ParserAction($this->reduce, $table5),
					12=>new ParserAction($this->reduce, $table5),
					14=>new ParserAction($this->reduce, $table5),
					15=>new ParserAction($this->reduce, $table5),
					16=>new ParserAction($this->reduce, $table5),
					17=>new ParserAction($this->reduce, $table5),
					18=>new ParserAction($this->reduce, $table5),
					19=>new ParserAction($this->reduce, $table5),
					20=>new ParserAction($this->reduce, $table5),
					21=>new ParserAction($this->reduce, $table5),
					31=>new ParserAction($this->reduce, $table5),
					32=>new ParserAction($this->reduce, $table5),
					36=>new ParserAction($this->shift, $table32)
				);

			$tableDefinition7 = array(
				
					5=>new ParserAction($this->reduce, $table6),
					11=>new ParserAction($this->reduce, $table6),
					12=>new ParserAction($this->reduce, $table6),
					14=>new ParserAction($this->reduce, $table6),
					15=>new ParserAction($this->reduce, $table6),
					16=>new ParserAction($this->reduce, $table6),
					17=>new ParserAction($this->reduce, $table6),
					18=>new ParserAction($this->reduce, $table6),
					19=>new ParserAction($this->reduce, $table6),
					20=>new ParserAction($this->reduce, $table6),
					21=>new ParserAction($this->reduce, $table6),
					31=>new ParserAction($this->reduce, $table6),
					32=>new ParserAction($this->reduce, $table6)
				);

			$tableDefinition8 = array(
				
					2=>new ParserAction($this->none, $table14),
					4=>new ParserAction($this->none, $table33),
					6=>new ParserAction($this->none, $table3),
					7=>new ParserAction($this->shift, $table4),
					8=>new ParserAction($this->shift, $table5),
					9=>new ParserAction($this->none, $table6),
					10=>new ParserAction($this->shift, $table7),
					12=>new ParserAction($this->shift, $table10),
					13=>new ParserAction($this->shift, $table8),
					18=>new ParserAction($this->shift, $table9),
					22=>new ParserAction($this->shift, $table11),
					23=>new ParserAction($this->shift, $table12),
					25=>new ParserAction($this->none, $table13),
					26=>new ParserAction($this->shift, $table17),
					28=>new ParserAction($this->shift, $table18),
					29=>new ParserAction($this->shift, $table19),
					33=>new ParserAction($this->shift, $table15),
					35=>new ParserAction($this->shift, $table16),
					37=>new ParserAction($this->shift, $table20)
				);

			$tableDefinition9 = array(
				
					2=>new ParserAction($this->none, $table14),
					4=>new ParserAction($this->none, $table34),
					6=>new ParserAction($this->none, $table3),
					7=>new ParserAction($this->shift, $table4),
					8=>new ParserAction($this->shift, $table5),
					9=>new ParserAction($this->none, $table6),
					10=>new ParserAction($this->shift, $table7),
					12=>new ParserAction($this->shift, $table10),
					13=>new ParserAction($this->shift, $table8),
					18=>new ParserAction($this->shift, $table9),
					22=>new ParserAction($this->shift, $table11),
					23=>new ParserAction($this->shift, $table12),
					25=>new ParserAction($this->none, $table13),
					26=>new ParserAction($this->shift, $table17),
					28=>new ParserAction($this->shift, $table18),
					29=>new ParserAction($this->shift, $table19),
					33=>new ParserAction($this->shift, $table15),
					35=>new ParserAction($this->shift, $table16),
					37=>new ParserAction($this->shift, $table20)
				);

			$tableDefinition10 = array(
				
					2=>new ParserAction($this->none, $table14),
					4=>new ParserAction($this->none, $table35),
					6=>new ParserAction($this->none, $table3),
					7=>new ParserAction($this->shift, $table4),
					8=>new ParserAction($this->shift, $table5),
					9=>new ParserAction($this->none, $table6),
					10=>new ParserAction($this->shift, $table7),
					12=>new ParserAction($this->shift, $table10),
					13=>new ParserAction($this->shift, $table8),
					18=>new ParserAction($this->shift, $table9),
					22=>new ParserAction($this->shift, $table11),
					23=>new ParserAction($this->shift, $table12),
					25=>new ParserAction($this->none, $table13),
					26=>new ParserAction($this->shift, $table17),
					28=>new ParserAction($this->shift, $table18),
					29=>new ParserAction($this->shift, $table19),
					33=>new ParserAction($this->shift, $table15),
					35=>new ParserAction($this->shift, $table16),
					37=>new ParserAction($this->shift, $table20)
				);

			$tableDefinition11 = array(
				
					5=>new ParserAction($this->reduce, $table22),
					11=>new ParserAction($this->reduce, $table22),
					12=>new ParserAction($this->reduce, $table22),
					14=>new ParserAction($this->reduce, $table22),
					15=>new ParserAction($this->reduce, $table22),
					16=>new ParserAction($this->reduce, $table22),
					17=>new ParserAction($this->reduce, $table22),
					18=>new ParserAction($this->reduce, $table22),
					19=>new ParserAction($this->reduce, $table22),
					20=>new ParserAction($this->reduce, $table22),
					21=>new ParserAction($this->reduce, $table22),
					31=>new ParserAction($this->reduce, $table22),
					32=>new ParserAction($this->reduce, $table22)
				);

			$tableDefinition12 = array(
				
					13=>new ParserAction($this->shift, $table36)
				);

			$tableDefinition13 = array(
				
					5=>new ParserAction($this->reduce, $table25),
					11=>new ParserAction($this->reduce, $table25),
					12=>new ParserAction($this->reduce, $table25),
					14=>new ParserAction($this->reduce, $table25),
					15=>new ParserAction($this->reduce, $table25),
					16=>new ParserAction($this->reduce, $table25),
					17=>new ParserAction($this->reduce, $table25),
					18=>new ParserAction($this->reduce, $table25),
					19=>new ParserAction($this->reduce, $table25),
					20=>new ParserAction($this->reduce, $table25),
					21=>new ParserAction($this->reduce, $table25),
					31=>new ParserAction($this->reduce, $table25),
					32=>new ParserAction($this->reduce, $table25)
				);

			$tableDefinition14 = array(
				
					2=>new ParserAction($this->none, $table37),
					5=>new ParserAction($this->reduce, $table26),
					11=>new ParserAction($this->reduce, $table26),
					12=>new ParserAction($this->reduce, $table26),
					14=>new ParserAction($this->reduce, $table26),
					15=>new ParserAction($this->reduce, $table26),
					16=>new ParserAction($this->reduce, $table26),
					17=>new ParserAction($this->reduce, $table26),
					18=>new ParserAction($this->reduce, $table26),
					19=>new ParserAction($this->reduce, $table26),
					20=>new ParserAction($this->reduce, $table26),
					21=>new ParserAction($this->reduce, $table26),
					31=>new ParserAction($this->reduce, $table26),
					32=>new ParserAction($this->reduce, $table26),
					33=>new ParserAction($this->shift, $table38),
					37=>new ParserAction($this->shift, $table20)
				);

			$tableDefinition15 = array(
				
					5=>new ParserAction($this->reduce, $table37),
					11=>new ParserAction($this->reduce, $table37),
					12=>new ParserAction($this->reduce, $table37),
					14=>new ParserAction($this->reduce, $table37),
					15=>new ParserAction($this->reduce, $table37),
					16=>new ParserAction($this->reduce, $table37),
					17=>new ParserAction($this->reduce, $table37),
					18=>new ParserAction($this->reduce, $table37),
					19=>new ParserAction($this->reduce, $table37),
					20=>new ParserAction($this->reduce, $table37),
					21=>new ParserAction($this->reduce, $table37),
					31=>new ParserAction($this->reduce, $table37),
					32=>new ParserAction($this->reduce, $table37),
					34=>new ParserAction($this->reduce, $table37),
					37=>new ParserAction($this->shift, $table39)
				);

			$tableDefinition16 = array(
				
					5=>new ParserAction($this->reduce, $table39),
					11=>new ParserAction($this->reduce, $table39),
					12=>new ParserAction($this->reduce, $table39),
					14=>new ParserAction($this->reduce, $table39),
					15=>new ParserAction($this->reduce, $table39),
					16=>new ParserAction($this->reduce, $table39),
					17=>new ParserAction($this->reduce, $table39),
					18=>new ParserAction($this->reduce, $table39),
					19=>new ParserAction($this->reduce, $table39),
					20=>new ParserAction($this->reduce, $table39),
					21=>new ParserAction($this->reduce, $table39),
					31=>new ParserAction($this->reduce, $table39),
					32=>new ParserAction($this->reduce, $table39),
					34=>new ParserAction($this->shift, $table40),
					36=>new ParserAction($this->reduce, $table39)
				);

			$tableDefinition17 = array(
				
					5=>new ParserAction($this->reduce, $table28),
					11=>new ParserAction($this->reduce, $table28),
					12=>new ParserAction($this->reduce, $table28),
					14=>new ParserAction($this->reduce, $table28),
					15=>new ParserAction($this->reduce, $table28),
					16=>new ParserAction($this->reduce, $table28),
					17=>new ParserAction($this->reduce, $table28),
					18=>new ParserAction($this->reduce, $table28),
					19=>new ParserAction($this->reduce, $table28),
					20=>new ParserAction($this->reduce, $table28),
					21=>new ParserAction($this->reduce, $table28),
					27=>new ParserAction($this->shift, $table41),
					31=>new ParserAction($this->reduce, $table28),
					32=>new ParserAction($this->reduce, $table28)
				);

			$tableDefinition18 = array(
				
					5=>new ParserAction($this->reduce, $table30),
					11=>new ParserAction($this->reduce, $table30),
					12=>new ParserAction($this->reduce, $table30),
					14=>new ParserAction($this->reduce, $table30),
					15=>new ParserAction($this->reduce, $table30),
					16=>new ParserAction($this->reduce, $table30),
					17=>new ParserAction($this->reduce, $table30),
					18=>new ParserAction($this->reduce, $table30),
					19=>new ParserAction($this->reduce, $table30),
					20=>new ParserAction($this->reduce, $table30),
					21=>new ParserAction($this->reduce, $table30),
					27=>new ParserAction($this->shift, $table42),
					31=>new ParserAction($this->reduce, $table30),
					32=>new ParserAction($this->reduce, $table30)
				);

			$tableDefinition19 = array(
				
					30=>new ParserAction($this->shift, $table43)
				);

			$tableDefinition20 = array(
				
					33=>new ParserAction($this->shift, $table44)
				);

			$tableDefinition21 = array(
				
					1=>new ParserAction($this->reduce, $table1)
				);

			$tableDefinition22 = array(
				
					2=>new ParserAction($this->none, $table14),
					4=>new ParserAction($this->none, $table45),
					6=>new ParserAction($this->none, $table3),
					7=>new ParserAction($this->shift, $table4),
					8=>new ParserAction($this->shift, $table5),
					9=>new ParserAction($this->none, $table6),
					10=>new ParserAction($this->shift, $table7),
					12=>new ParserAction($this->shift, $table10),
					13=>new ParserAction($this->shift, $table8),
					18=>new ParserAction($this->shift, $table9),
					22=>new ParserAction($this->shift, $table11),
					23=>new ParserAction($this->shift, $table12),
					25=>new ParserAction($this->none, $table13),
					26=>new ParserAction($this->shift, $table17),
					28=>new ParserAction($this->shift, $table18),
					29=>new ParserAction($this->shift, $table19),
					33=>new ParserAction($this->shift, $table15),
					35=>new ParserAction($this->shift, $table16),
					37=>new ParserAction($this->shift, $table20)
				);

			$tableDefinition23 = array(
				
					2=>new ParserAction($this->none, $table14),
					4=>new ParserAction($this->none, $table46),
					6=>new ParserAction($this->none, $table3),
					7=>new ParserAction($this->shift, $table4),
					8=>new ParserAction($this->shift, $table5),
					9=>new ParserAction($this->none, $table6),
					10=>new ParserAction($this->shift, $table7),
					12=>new ParserAction($this->shift, $table10),
					13=>new ParserAction($this->shift, $table8),
					18=>new ParserAction($this->shift, $table9),
					22=>new ParserAction($this->shift, $table11),
					23=>new ParserAction($this->shift, $table12),
					25=>new ParserAction($this->none, $table13),
					26=>new ParserAction($this->shift, $table17),
					28=>new ParserAction($this->shift, $table18),
					29=>new ParserAction($this->shift, $table19),
					33=>new ParserAction($this->shift, $table15),
					35=>new ParserAction($this->shift, $table16),
					37=>new ParserAction($this->shift, $table20)
				);

			$tableDefinition24 = array(
				
					2=>new ParserAction($this->none, $table14),
					4=>new ParserAction($this->none, $table49),
					6=>new ParserAction($this->none, $table3),
					7=>new ParserAction($this->shift, $table4),
					8=>new ParserAction($this->shift, $table5),
					9=>new ParserAction($this->none, $table6),
					10=>new ParserAction($this->shift, $table7),
					11=>new ParserAction($this->shift, $table47),
					12=>new ParserAction($this->shift, $table10),
					13=>new ParserAction($this->shift, $table8),
					16=>new ParserAction($this->shift, $table48),
					18=>new ParserAction($this->shift, $table9),
					22=>new ParserAction($this->shift, $table11),
					23=>new ParserAction($this->shift, $table12),
					25=>new ParserAction($this->none, $table13),
					26=>new ParserAction($this->shift, $table17),
					28=>new ParserAction($this->shift, $table18),
					29=>new ParserAction($this->shift, $table19),
					33=>new ParserAction($this->shift, $table15),
					35=>new ParserAction($this->shift, $table16),
					37=>new ParserAction($this->shift, $table20)
				);

			$tableDefinition25 = array(
				
					2=>new ParserAction($this->none, $table14),
					4=>new ParserAction($this->none, $table51),
					6=>new ParserAction($this->none, $table3),
					7=>new ParserAction($this->shift, $table4),
					8=>new ParserAction($this->shift, $table5),
					9=>new ParserAction($this->none, $table6),
					10=>new ParserAction($this->shift, $table7),
					11=>new ParserAction($this->shift, $table50),
					12=>new ParserAction($this->shift, $table10),
					13=>new ParserAction($this->shift, $table8),
					18=>new ParserAction($this->shift, $table9),
					22=>new ParserAction($this->shift, $table11),
					23=>new ParserAction($this->shift, $table12),
					25=>new ParserAction($this->none, $table13),
					26=>new ParserAction($this->shift, $table17),
					28=>new ParserAction($this->shift, $table18),
					29=>new ParserAction($this->shift, $table19),
					33=>new ParserAction($this->shift, $table15),
					35=>new ParserAction($this->shift, $table16),
					37=>new ParserAction($this->shift, $table20)
				);

			$tableDefinition26 = array(
				
					2=>new ParserAction($this->none, $table14),
					4=>new ParserAction($this->none, $table52),
					6=>new ParserAction($this->none, $table3),
					7=>new ParserAction($this->shift, $table4),
					8=>new ParserAction($this->shift, $table5),
					9=>new ParserAction($this->none, $table6),
					10=>new ParserAction($this->shift, $table7),
					12=>new ParserAction($this->shift, $table10),
					13=>new ParserAction($this->shift, $table8),
					18=>new ParserAction($this->shift, $table9),
					22=>new ParserAction($this->shift, $table11),
					23=>new ParserAction($this->shift, $table12),
					25=>new ParserAction($this->none, $table13),
					26=>new ParserAction($this->shift, $table17),
					28=>new ParserAction($this->shift, $table18),
					29=>new ParserAction($this->shift, $table19),
					33=>new ParserAction($this->shift, $table15),
					35=>new ParserAction($this->shift, $table16),
					37=>new ParserAction($this->shift, $table20)
				);

			$tableDefinition27 = array(
				
					2=>new ParserAction($this->none, $table14),
					4=>new ParserAction($this->none, $table53),
					6=>new ParserAction($this->none, $table3),
					7=>new ParserAction($this->shift, $table4),
					8=>new ParserAction($this->shift, $table5),
					9=>new ParserAction($this->none, $table6),
					10=>new ParserAction($this->shift, $table7),
					12=>new ParserAction($this->shift, $table10),
					13=>new ParserAction($this->shift, $table8),
					18=>new ParserAction($this->shift, $table9),
					22=>new ParserAction($this->shift, $table11),
					23=>new ParserAction($this->shift, $table12),
					25=>new ParserAction($this->none, $table13),
					26=>new ParserAction($this->shift, $table17),
					28=>new ParserAction($this->shift, $table18),
					29=>new ParserAction($this->shift, $table19),
					33=>new ParserAction($this->shift, $table15),
					35=>new ParserAction($this->shift, $table16),
					37=>new ParserAction($this->shift, $table20)
				);

			$tableDefinition28 = array(
				
					2=>new ParserAction($this->none, $table14),
					4=>new ParserAction($this->none, $table54),
					6=>new ParserAction($this->none, $table3),
					7=>new ParserAction($this->shift, $table4),
					8=>new ParserAction($this->shift, $table5),
					9=>new ParserAction($this->none, $table6),
					10=>new ParserAction($this->shift, $table7),
					12=>new ParserAction($this->shift, $table10),
					13=>new ParserAction($this->shift, $table8),
					18=>new ParserAction($this->shift, $table9),
					22=>new ParserAction($this->shift, $table11),
					23=>new ParserAction($this->shift, $table12),
					25=>new ParserAction($this->none, $table13),
					26=>new ParserAction($this->shift, $table17),
					28=>new ParserAction($this->shift, $table18),
					29=>new ParserAction($this->shift, $table19),
					33=>new ParserAction($this->shift, $table15),
					35=>new ParserAction($this->shift, $table16),
					37=>new ParserAction($this->shift, $table20)
				);

			$tableDefinition29 = array(
				
					2=>new ParserAction($this->none, $table14),
					4=>new ParserAction($this->none, $table55),
					6=>new ParserAction($this->none, $table3),
					7=>new ParserAction($this->shift, $table4),
					8=>new ParserAction($this->shift, $table5),
					9=>new ParserAction($this->none, $table6),
					10=>new ParserAction($this->shift, $table7),
					12=>new ParserAction($this->shift, $table10),
					13=>new ParserAction($this->shift, $table8),
					18=>new ParserAction($this->shift, $table9),
					22=>new ParserAction($this->shift, $table11),
					23=>new ParserAction($this->shift, $table12),
					25=>new ParserAction($this->none, $table13),
					26=>new ParserAction($this->shift, $table17),
					28=>new ParserAction($this->shift, $table18),
					29=>new ParserAction($this->shift, $table19),
					33=>new ParserAction($this->shift, $table15),
					35=>new ParserAction($this->shift, $table16),
					37=>new ParserAction($this->shift, $table20)
				);

			$tableDefinition30 = array(
				
					2=>new ParserAction($this->none, $table14),
					4=>new ParserAction($this->none, $table56),
					6=>new ParserAction($this->none, $table3),
					7=>new ParserAction($this->shift, $table4),
					8=>new ParserAction($this->shift, $table5),
					9=>new ParserAction($this->none, $table6),
					10=>new ParserAction($this->shift, $table7),
					12=>new ParserAction($this->shift, $table10),
					13=>new ParserAction($this->shift, $table8),
					18=>new ParserAction($this->shift, $table9),
					22=>new ParserAction($this->shift, $table11),
					23=>new ParserAction($this->shift, $table12),
					25=>new ParserAction($this->none, $table13),
					26=>new ParserAction($this->shift, $table17),
					28=>new ParserAction($this->shift, $table18),
					29=>new ParserAction($this->shift, $table19),
					33=>new ParserAction($this->shift, $table15),
					35=>new ParserAction($this->shift, $table16),
					37=>new ParserAction($this->shift, $table20)
				);

			$tableDefinition31 = array(
				
					33=>new ParserAction($this->shift, $table57)
				);

			$tableDefinition32 = array(
				
					5=>new ParserAction($this->reduce, $table41),
					11=>new ParserAction($this->reduce, $table41),
					12=>new ParserAction($this->reduce, $table41),
					14=>new ParserAction($this->reduce, $table41),
					15=>new ParserAction($this->reduce, $table41),
					16=>new ParserAction($this->reduce, $table41),
					17=>new ParserAction($this->reduce, $table41),
					18=>new ParserAction($this->reduce, $table41),
					19=>new ParserAction($this->reduce, $table41),
					20=>new ParserAction($this->reduce, $table41),
					21=>new ParserAction($this->reduce, $table41),
					31=>new ParserAction($this->reduce, $table41),
					32=>new ParserAction($this->reduce, $table41),
					36=>new ParserAction($this->reduce, $table41)
				);

			$tableDefinition33 = array(
				
					11=>new ParserAction($this->shift, $table22),
					12=>new ParserAction($this->shift, $table23),
					14=>new ParserAction($this->shift, $table58),
					15=>new ParserAction($this->shift, $table24),
					16=>new ParserAction($this->shift, $table25),
					17=>new ParserAction($this->shift, $table26),
					18=>new ParserAction($this->shift, $table27),
					19=>new ParserAction($this->shift, $table28),
					20=>new ParserAction($this->shift, $table29),
					21=>new ParserAction($this->shift, $table30)
				);

			$tableDefinition34 = array(
				
					5=>new ParserAction($this->reduce, $table20),
					11=>new ParserAction($this->reduce, $table20),
					12=>new ParserAction($this->reduce, $table20),
					14=>new ParserAction($this->reduce, $table20),
					15=>new ParserAction($this->reduce, $table20),
					16=>new ParserAction($this->reduce, $table20),
					17=>new ParserAction($this->reduce, $table20),
					18=>new ParserAction($this->reduce, $table20),
					19=>new ParserAction($this->shift, $table28),
					20=>new ParserAction($this->shift, $table29),
					21=>new ParserAction($this->shift, $table30),
					31=>new ParserAction($this->reduce, $table20),
					32=>new ParserAction($this->reduce, $table20)
				);

			$tableDefinition35 = array(
				
					5=>new ParserAction($this->reduce, $table21),
					11=>new ParserAction($this->reduce, $table21),
					12=>new ParserAction($this->reduce, $table21),
					14=>new ParserAction($this->reduce, $table21),
					15=>new ParserAction($this->reduce, $table21),
					16=>new ParserAction($this->reduce, $table21),
					17=>new ParserAction($this->reduce, $table21),
					18=>new ParserAction($this->reduce, $table21),
					19=>new ParserAction($this->shift, $table28),
					20=>new ParserAction($this->shift, $table29),
					21=>new ParserAction($this->shift, $table30),
					31=>new ParserAction($this->reduce, $table21),
					32=>new ParserAction($this->reduce, $table21)
				);

			$tableDefinition36 = array(
				
					2=>new ParserAction($this->none, $table14),
					4=>new ParserAction($this->none, $table61),
					6=>new ParserAction($this->none, $table3),
					7=>new ParserAction($this->shift, $table4),
					8=>new ParserAction($this->shift, $table5),
					9=>new ParserAction($this->none, $table6),
					10=>new ParserAction($this->shift, $table7),
					12=>new ParserAction($this->shift, $table10),
					13=>new ParserAction($this->shift, $table8),
					14=>new ParserAction($this->shift, $table59),
					18=>new ParserAction($this->shift, $table9),
					22=>new ParserAction($this->shift, $table11),
					23=>new ParserAction($this->shift, $table12),
					24=>new ParserAction($this->none, $table60),
					25=>new ParserAction($this->none, $table13),
					26=>new ParserAction($this->shift, $table17),
					28=>new ParserAction($this->shift, $table18),
					29=>new ParserAction($this->shift, $table19),
					33=>new ParserAction($this->shift, $table15),
					35=>new ParserAction($this->shift, $table16),
					37=>new ParserAction($this->shift, $table20)
				);

			$tableDefinition37 = array(
				
					5=>new ParserAction($this->reduce, $table27),
					11=>new ParserAction($this->reduce, $table27),
					12=>new ParserAction($this->reduce, $table27),
					14=>new ParserAction($this->reduce, $table27),
					15=>new ParserAction($this->reduce, $table27),
					16=>new ParserAction($this->reduce, $table27),
					17=>new ParserAction($this->reduce, $table27),
					18=>new ParserAction($this->reduce, $table27),
					19=>new ParserAction($this->reduce, $table27),
					20=>new ParserAction($this->reduce, $table27),
					21=>new ParserAction($this->reduce, $table27),
					31=>new ParserAction($this->reduce, $table27),
					32=>new ParserAction($this->reduce, $table27)
				);

			$tableDefinition38 = array(
				
					37=>new ParserAction($this->shift, $table39)
				);

			$tableDefinition39 = array(
				
					33=>new ParserAction($this->shift, $table62)
				);

			$tableDefinition40 = array(
				
					35=>new ParserAction($this->shift, $table63)
				);

			$tableDefinition41 = array(
				
					26=>new ParserAction($this->shift, $table64)
				);

			$tableDefinition42 = array(
				
					28=>new ParserAction($this->shift, $table65)
				);

			$tableDefinition43 = array(
				
					28=>new ParserAction($this->shift, $table66)
				);

			$tableDefinition44 = array(
				
					30=>new ParserAction($this->shift, $table67)
				);

			$tableDefinition45 = array(
				
					5=>new ParserAction($this->reduce, $table7),
					11=>new ParserAction($this->reduce, $table7),
					12=>new ParserAction($this->shift, $table23),
					14=>new ParserAction($this->reduce, $table7),
					15=>new ParserAction($this->shift, $table24),
					16=>new ParserAction($this->shift, $table25),
					17=>new ParserAction($this->shift, $table26),
					18=>new ParserAction($this->shift, $table27),
					19=>new ParserAction($this->shift, $table28),
					20=>new ParserAction($this->shift, $table29),
					21=>new ParserAction($this->shift, $table30),
					31=>new ParserAction($this->reduce, $table7),
					32=>new ParserAction($this->reduce, $table7)
				);

			$tableDefinition46 = array(
				
					5=>new ParserAction($this->reduce, $table8),
					11=>new ParserAction($this->reduce, $table8),
					12=>new ParserAction($this->reduce, $table8),
					14=>new ParserAction($this->reduce, $table8),
					15=>new ParserAction($this->reduce, $table8),
					16=>new ParserAction($this->reduce, $table8),
					17=>new ParserAction($this->reduce, $table8),
					18=>new ParserAction($this->reduce, $table8),
					19=>new ParserAction($this->shift, $table28),
					20=>new ParserAction($this->shift, $table29),
					21=>new ParserAction($this->shift, $table30),
					31=>new ParserAction($this->reduce, $table8),
					32=>new ParserAction($this->reduce, $table8)
				);

			$tableDefinition47 = array(
				
					2=>new ParserAction($this->none, $table14),
					4=>new ParserAction($this->none, $table68),
					6=>new ParserAction($this->none, $table3),
					7=>new ParserAction($this->shift, $table4),
					8=>new ParserAction($this->shift, $table5),
					9=>new ParserAction($this->none, $table6),
					10=>new ParserAction($this->shift, $table7),
					12=>new ParserAction($this->shift, $table10),
					13=>new ParserAction($this->shift, $table8),
					18=>new ParserAction($this->shift, $table9),
					22=>new ParserAction($this->shift, $table11),
					23=>new ParserAction($this->shift, $table12),
					25=>new ParserAction($this->none, $table13),
					26=>new ParserAction($this->shift, $table17),
					28=>new ParserAction($this->shift, $table18),
					29=>new ParserAction($this->shift, $table19),
					33=>new ParserAction($this->shift, $table15),
					35=>new ParserAction($this->shift, $table16),
					37=>new ParserAction($this->shift, $table20)
				);

			$tableDefinition48 = array(
				
					2=>new ParserAction($this->none, $table14),
					4=>new ParserAction($this->none, $table69),
					6=>new ParserAction($this->none, $table3),
					7=>new ParserAction($this->shift, $table4),
					8=>new ParserAction($this->shift, $table5),
					9=>new ParserAction($this->none, $table6),
					10=>new ParserAction($this->shift, $table7),
					12=>new ParserAction($this->shift, $table10),
					13=>new ParserAction($this->shift, $table8),
					18=>new ParserAction($this->shift, $table9),
					22=>new ParserAction($this->shift, $table11),
					23=>new ParserAction($this->shift, $table12),
					25=>new ParserAction($this->none, $table13),
					26=>new ParserAction($this->shift, $table17),
					28=>new ParserAction($this->shift, $table18),
					29=>new ParserAction($this->shift, $table19),
					33=>new ParserAction($this->shift, $table15),
					35=>new ParserAction($this->shift, $table16),
					37=>new ParserAction($this->shift, $table20)
				);

			$tableDefinition49 = array(
				
					5=>new ParserAction($this->reduce, $table15),
					11=>new ParserAction($this->reduce, $table15),
					12=>new ParserAction($this->shift, $table23),
					14=>new ParserAction($this->reduce, $table15),
					15=>new ParserAction($this->reduce, $table15),
					16=>new ParserAction($this->reduce, $table15),
					17=>new ParserAction($this->reduce, $table15),
					18=>new ParserAction($this->shift, $table27),
					19=>new ParserAction($this->shift, $table28),
					20=>new ParserAction($this->shift, $table29),
					21=>new ParserAction($this->shift, $table30),
					31=>new ParserAction($this->reduce, $table15),
					32=>new ParserAction($this->reduce, $table15)
				);

			$tableDefinition50 = array(
				
					2=>new ParserAction($this->none, $table14),
					4=>new ParserAction($this->none, $table70),
					6=>new ParserAction($this->none, $table3),
					7=>new ParserAction($this->shift, $table4),
					8=>new ParserAction($this->shift, $table5),
					9=>new ParserAction($this->none, $table6),
					10=>new ParserAction($this->shift, $table7),
					12=>new ParserAction($this->shift, $table10),
					13=>new ParserAction($this->shift, $table8),
					18=>new ParserAction($this->shift, $table9),
					22=>new ParserAction($this->shift, $table11),
					23=>new ParserAction($this->shift, $table12),
					25=>new ParserAction($this->none, $table13),
					26=>new ParserAction($this->shift, $table17),
					28=>new ParserAction($this->shift, $table18),
					29=>new ParserAction($this->shift, $table19),
					33=>new ParserAction($this->shift, $table15),
					35=>new ParserAction($this->shift, $table16),
					37=>new ParserAction($this->shift, $table20)
				);

			$tableDefinition51 = array(
				
					5=>new ParserAction($this->reduce, $table14),
					11=>new ParserAction($this->reduce, $table14),
					12=>new ParserAction($this->shift, $table23),
					14=>new ParserAction($this->reduce, $table14),
					15=>new ParserAction($this->reduce, $table14),
					16=>new ParserAction($this->reduce, $table14),
					17=>new ParserAction($this->reduce, $table14),
					18=>new ParserAction($this->shift, $table27),
					19=>new ParserAction($this->shift, $table28),
					20=>new ParserAction($this->shift, $table29),
					21=>new ParserAction($this->shift, $table30),
					31=>new ParserAction($this->reduce, $table14),
					32=>new ParserAction($this->reduce, $table14)
				);

			$tableDefinition52 = array(
				
					5=>new ParserAction($this->reduce, $table13),
					11=>new ParserAction($this->reduce, $table13),
					12=>new ParserAction($this->shift, $table23),
					14=>new ParserAction($this->reduce, $table13),
					15=>new ParserAction($this->shift, $table24),
					16=>new ParserAction($this->shift, $table25),
					17=>new ParserAction($this->reduce, $table13),
					18=>new ParserAction($this->shift, $table27),
					19=>new ParserAction($this->shift, $table28),
					20=>new ParserAction($this->shift, $table29),
					21=>new ParserAction($this->shift, $table30),
					31=>new ParserAction($this->reduce, $table13),
					32=>new ParserAction($this->reduce, $table13)
				);

			$tableDefinition53 = array(
				
					5=>new ParserAction($this->reduce, $table16),
					11=>new ParserAction($this->reduce, $table16),
					12=>new ParserAction($this->reduce, $table16),
					14=>new ParserAction($this->reduce, $table16),
					15=>new ParserAction($this->reduce, $table16),
					16=>new ParserAction($this->reduce, $table16),
					17=>new ParserAction($this->reduce, $table16),
					18=>new ParserAction($this->reduce, $table16),
					19=>new ParserAction($this->shift, $table28),
					20=>new ParserAction($this->shift, $table29),
					21=>new ParserAction($this->shift, $table30),
					31=>new ParserAction($this->reduce, $table16),
					32=>new ParserAction($this->reduce, $table16)
				);

			$tableDefinition54 = array(
				
					5=>new ParserAction($this->reduce, $table17),
					11=>new ParserAction($this->reduce, $table17),
					12=>new ParserAction($this->reduce, $table17),
					14=>new ParserAction($this->reduce, $table17),
					15=>new ParserAction($this->reduce, $table17),
					16=>new ParserAction($this->reduce, $table17),
					17=>new ParserAction($this->reduce, $table17),
					18=>new ParserAction($this->reduce, $table17),
					19=>new ParserAction($this->reduce, $table17),
					20=>new ParserAction($this->reduce, $table17),
					21=>new ParserAction($this->shift, $table30),
					31=>new ParserAction($this->reduce, $table17),
					32=>new ParserAction($this->reduce, $table17)
				);

			$tableDefinition55 = array(
				
					5=>new ParserAction($this->reduce, $table18),
					11=>new ParserAction($this->reduce, $table18),
					12=>new ParserAction($this->reduce, $table18),
					14=>new ParserAction($this->reduce, $table18),
					15=>new ParserAction($this->reduce, $table18),
					16=>new ParserAction($this->reduce, $table18),
					17=>new ParserAction($this->reduce, $table18),
					18=>new ParserAction($this->reduce, $table18),
					19=>new ParserAction($this->reduce, $table18),
					20=>new ParserAction($this->reduce, $table18),
					21=>new ParserAction($this->shift, $table30),
					31=>new ParserAction($this->reduce, $table18),
					32=>new ParserAction($this->reduce, $table18)
				);

			$tableDefinition56 = array(
				
					5=>new ParserAction($this->reduce, $table19),
					11=>new ParserAction($this->reduce, $table19),
					12=>new ParserAction($this->reduce, $table19),
					14=>new ParserAction($this->reduce, $table19),
					15=>new ParserAction($this->reduce, $table19),
					16=>new ParserAction($this->reduce, $table19),
					17=>new ParserAction($this->reduce, $table19),
					18=>new ParserAction($this->reduce, $table19),
					19=>new ParserAction($this->reduce, $table19),
					20=>new ParserAction($this->reduce, $table19),
					21=>new ParserAction($this->reduce, $table19),
					31=>new ParserAction($this->reduce, $table19),
					32=>new ParserAction($this->reduce, $table19)
				);

			$tableDefinition57 = array(
				
					5=>new ParserAction($this->reduce, $table38),
					11=>new ParserAction($this->reduce, $table38),
					12=>new ParserAction($this->reduce, $table38),
					14=>new ParserAction($this->reduce, $table38),
					15=>new ParserAction($this->reduce, $table38),
					16=>new ParserAction($this->reduce, $table38),
					17=>new ParserAction($this->reduce, $table38),
					18=>new ParserAction($this->reduce, $table38),
					19=>new ParserAction($this->reduce, $table38),
					20=>new ParserAction($this->reduce, $table38),
					21=>new ParserAction($this->reduce, $table38),
					31=>new ParserAction($this->reduce, $table38),
					32=>new ParserAction($this->reduce, $table38),
					34=>new ParserAction($this->reduce, $table38)
				);

			$tableDefinition58 = array(
				
					5=>new ParserAction($this->reduce, $table9),
					11=>new ParserAction($this->reduce, $table9),
					12=>new ParserAction($this->reduce, $table9),
					14=>new ParserAction($this->reduce, $table9),
					15=>new ParserAction($this->reduce, $table9),
					16=>new ParserAction($this->reduce, $table9),
					17=>new ParserAction($this->reduce, $table9),
					18=>new ParserAction($this->reduce, $table9),
					19=>new ParserAction($this->reduce, $table9),
					20=>new ParserAction($this->reduce, $table9),
					21=>new ParserAction($this->reduce, $table9),
					31=>new ParserAction($this->reduce, $table9),
					32=>new ParserAction($this->reduce, $table9)
				);

			$tableDefinition59 = array(
				
					5=>new ParserAction($this->reduce, $table23),
					11=>new ParserAction($this->reduce, $table23),
					12=>new ParserAction($this->reduce, $table23),
					14=>new ParserAction($this->reduce, $table23),
					15=>new ParserAction($this->reduce, $table23),
					16=>new ParserAction($this->reduce, $table23),
					17=>new ParserAction($this->reduce, $table23),
					18=>new ParserAction($this->reduce, $table23),
					19=>new ParserAction($this->reduce, $table23),
					20=>new ParserAction($this->reduce, $table23),
					21=>new ParserAction($this->reduce, $table23),
					31=>new ParserAction($this->reduce, $table23),
					32=>new ParserAction($this->reduce, $table23)
				);

			$tableDefinition60 = array(
				
					14=>new ParserAction($this->shift, $table71),
					31=>new ParserAction($this->shift, $table72),
					32=>new ParserAction($this->shift, $table73)
				);

			$tableDefinition61 = array(
				
					11=>new ParserAction($this->shift, $table22),
					12=>new ParserAction($this->shift, $table23),
					14=>new ParserAction($this->reduce, $table34),
					15=>new ParserAction($this->shift, $table24),
					16=>new ParserAction($this->shift, $table25),
					17=>new ParserAction($this->shift, $table26),
					18=>new ParserAction($this->shift, $table27),
					19=>new ParserAction($this->shift, $table28),
					20=>new ParserAction($this->shift, $table29),
					21=>new ParserAction($this->shift, $table30),
					31=>new ParserAction($this->reduce, $table34),
					32=>new ParserAction($this->reduce, $table34)
				);

			$tableDefinition62 = array(
				
					30=>new ParserAction($this->shift, $table74)
				);

			$tableDefinition63 = array(
				
					5=>new ParserAction($this->reduce, $table40),
					11=>new ParserAction($this->reduce, $table40),
					12=>new ParserAction($this->reduce, $table40),
					14=>new ParserAction($this->reduce, $table40),
					15=>new ParserAction($this->reduce, $table40),
					16=>new ParserAction($this->reduce, $table40),
					17=>new ParserAction($this->reduce, $table40),
					18=>new ParserAction($this->reduce, $table40),
					19=>new ParserAction($this->reduce, $table40),
					20=>new ParserAction($this->reduce, $table40),
					21=>new ParserAction($this->reduce, $table40),
					31=>new ParserAction($this->reduce, $table40),
					32=>new ParserAction($this->reduce, $table40),
					36=>new ParserAction($this->reduce, $table40)
				);

			$tableDefinition64 = array(
				
					5=>new ParserAction($this->reduce, $table29),
					11=>new ParserAction($this->reduce, $table29),
					12=>new ParserAction($this->reduce, $table29),
					14=>new ParserAction($this->reduce, $table29),
					15=>new ParserAction($this->reduce, $table29),
					16=>new ParserAction($this->reduce, $table29),
					17=>new ParserAction($this->reduce, $table29),
					18=>new ParserAction($this->reduce, $table29),
					19=>new ParserAction($this->reduce, $table29),
					20=>new ParserAction($this->reduce, $table29),
					21=>new ParserAction($this->reduce, $table29),
					31=>new ParserAction($this->reduce, $table29),
					32=>new ParserAction($this->reduce, $table29)
				);

			$tableDefinition65 = array(
				
					5=>new ParserAction($this->reduce, $table31),
					11=>new ParserAction($this->reduce, $table31),
					12=>new ParserAction($this->reduce, $table31),
					14=>new ParserAction($this->reduce, $table31),
					15=>new ParserAction($this->reduce, $table31),
					16=>new ParserAction($this->reduce, $table31),
					17=>new ParserAction($this->reduce, $table31),
					18=>new ParserAction($this->reduce, $table31),
					19=>new ParserAction($this->reduce, $table31),
					20=>new ParserAction($this->reduce, $table31),
					21=>new ParserAction($this->reduce, $table31),
					31=>new ParserAction($this->reduce, $table31),
					32=>new ParserAction($this->reduce, $table31)
				);

			$tableDefinition66 = array(
				
					5=>new ParserAction($this->reduce, $table32),
					11=>new ParserAction($this->reduce, $table32),
					12=>new ParserAction($this->reduce, $table32),
					14=>new ParserAction($this->reduce, $table32),
					15=>new ParserAction($this->reduce, $table32),
					16=>new ParserAction($this->reduce, $table32),
					17=>new ParserAction($this->reduce, $table32),
					18=>new ParserAction($this->reduce, $table32),
					19=>new ParserAction($this->reduce, $table32),
					20=>new ParserAction($this->reduce, $table32),
					21=>new ParserAction($this->reduce, $table32),
					27=>new ParserAction($this->shift, $table75),
					31=>new ParserAction($this->reduce, $table32),
					32=>new ParserAction($this->reduce, $table32)
				);

			$tableDefinition67 = array(
				
					5=>new ParserAction($this->reduce, $table42),
					11=>new ParserAction($this->reduce, $table42),
					12=>new ParserAction($this->reduce, $table42),
					14=>new ParserAction($this->reduce, $table42),
					15=>new ParserAction($this->reduce, $table42),
					16=>new ParserAction($this->reduce, $table42),
					17=>new ParserAction($this->reduce, $table42),
					18=>new ParserAction($this->reduce, $table42),
					19=>new ParserAction($this->reduce, $table42),
					20=>new ParserAction($this->reduce, $table42),
					21=>new ParserAction($this->reduce, $table42),
					31=>new ParserAction($this->reduce, $table42),
					32=>new ParserAction($this->reduce, $table42),
					33=>new ParserAction($this->reduce, $table42),
					37=>new ParserAction($this->reduce, $table42)
				);

			$tableDefinition68 = array(
				
					5=>new ParserAction($this->reduce, $table10),
					11=>new ParserAction($this->reduce, $table10),
					12=>new ParserAction($this->shift, $table23),
					14=>new ParserAction($this->reduce, $table10),
					15=>new ParserAction($this->reduce, $table10),
					16=>new ParserAction($this->reduce, $table10),
					17=>new ParserAction($this->reduce, $table10),
					18=>new ParserAction($this->shift, $table27),
					19=>new ParserAction($this->shift, $table28),
					20=>new ParserAction($this->shift, $table29),
					21=>new ParserAction($this->shift, $table30),
					31=>new ParserAction($this->reduce, $table10),
					32=>new ParserAction($this->reduce, $table10)
				);

			$tableDefinition69 = array(
				
					5=>new ParserAction($this->reduce, $table12),
					11=>new ParserAction($this->reduce, $table12),
					12=>new ParserAction($this->shift, $table23),
					14=>new ParserAction($this->reduce, $table12),
					15=>new ParserAction($this->reduce, $table12),
					16=>new ParserAction($this->reduce, $table12),
					17=>new ParserAction($this->reduce, $table12),
					18=>new ParserAction($this->shift, $table27),
					19=>new ParserAction($this->shift, $table28),
					20=>new ParserAction($this->shift, $table29),
					21=>new ParserAction($this->shift, $table30),
					31=>new ParserAction($this->reduce, $table12),
					32=>new ParserAction($this->reduce, $table12)
				);

			$tableDefinition70 = array(
				
					5=>new ParserAction($this->reduce, $table11),
					11=>new ParserAction($this->reduce, $table11),
					12=>new ParserAction($this->shift, $table23),
					14=>new ParserAction($this->reduce, $table11),
					15=>new ParserAction($this->reduce, $table11),
					16=>new ParserAction($this->reduce, $table11),
					17=>new ParserAction($this->reduce, $table11),
					18=>new ParserAction($this->shift, $table27),
					19=>new ParserAction($this->shift, $table28),
					20=>new ParserAction($this->shift, $table29),
					21=>new ParserAction($this->shift, $table30),
					31=>new ParserAction($this->reduce, $table11),
					32=>new ParserAction($this->reduce, $table11)
				);

			$tableDefinition71 = array(
				
					5=>new ParserAction($this->reduce, $table24),
					11=>new ParserAction($this->reduce, $table24),
					12=>new ParserAction($this->reduce, $table24),
					14=>new ParserAction($this->reduce, $table24),
					15=>new ParserAction($this->reduce, $table24),
					16=>new ParserAction($this->reduce, $table24),
					17=>new ParserAction($this->reduce, $table24),
					18=>new ParserAction($this->reduce, $table24),
					19=>new ParserAction($this->reduce, $table24),
					20=>new ParserAction($this->reduce, $table24),
					21=>new ParserAction($this->reduce, $table24),
					31=>new ParserAction($this->reduce, $table24),
					32=>new ParserAction($this->reduce, $table24)
				);

			$tableDefinition72 = array(
				
					2=>new ParserAction($this->none, $table14),
					4=>new ParserAction($this->none, $table76),
					6=>new ParserAction($this->none, $table3),
					7=>new ParserAction($this->shift, $table4),
					8=>new ParserAction($this->shift, $table5),
					9=>new ParserAction($this->none, $table6),
					10=>new ParserAction($this->shift, $table7),
					12=>new ParserAction($this->shift, $table10),
					13=>new ParserAction($this->shift, $table8),
					18=>new ParserAction($this->shift, $table9),
					22=>new ParserAction($this->shift, $table11),
					23=>new ParserAction($this->shift, $table12),
					25=>new ParserAction($this->none, $table13),
					26=>new ParserAction($this->shift, $table17),
					28=>new ParserAction($this->shift, $table18),
					29=>new ParserAction($this->shift, $table19),
					33=>new ParserAction($this->shift, $table15),
					35=>new ParserAction($this->shift, $table16),
					37=>new ParserAction($this->shift, $table20)
				);

			$tableDefinition73 = array(
				
					2=>new ParserAction($this->none, $table14),
					4=>new ParserAction($this->none, $table77),
					6=>new ParserAction($this->none, $table3),
					7=>new ParserAction($this->shift, $table4),
					8=>new ParserAction($this->shift, $table5),
					9=>new ParserAction($this->none, $table6),
					10=>new ParserAction($this->shift, $table7),
					12=>new ParserAction($this->shift, $table10),
					13=>new ParserAction($this->shift, $table8),
					18=>new ParserAction($this->shift, $table9),
					22=>new ParserAction($this->shift, $table11),
					23=>new ParserAction($this->shift, $table12),
					25=>new ParserAction($this->none, $table13),
					26=>new ParserAction($this->shift, $table17),
					28=>new ParserAction($this->shift, $table18),
					29=>new ParserAction($this->shift, $table19),
					33=>new ParserAction($this->shift, $table15),
					35=>new ParserAction($this->shift, $table16),
					37=>new ParserAction($this->shift, $table20)
				);

			$tableDefinition74 = array(
				
					5=>new ParserAction($this->reduce, $table43),
					11=>new ParserAction($this->reduce, $table43),
					12=>new ParserAction($this->reduce, $table43),
					14=>new ParserAction($this->reduce, $table43),
					15=>new ParserAction($this->reduce, $table43),
					16=>new ParserAction($this->reduce, $table43),
					17=>new ParserAction($this->reduce, $table43),
					18=>new ParserAction($this->reduce, $table43),
					19=>new ParserAction($this->reduce, $table43),
					20=>new ParserAction($this->reduce, $table43),
					21=>new ParserAction($this->reduce, $table43),
					31=>new ParserAction($this->reduce, $table43),
					32=>new ParserAction($this->reduce, $table43),
					33=>new ParserAction($this->reduce, $table43),
					37=>new ParserAction($this->reduce, $table43)
				);

			$tableDefinition75 = array(
				
					28=>new ParserAction($this->shift, $table78)
				);

			$tableDefinition76 = array(
				
					11=>new ParserAction($this->shift, $table22),
					12=>new ParserAction($this->shift, $table23),
					14=>new ParserAction($this->reduce, $table35),
					15=>new ParserAction($this->shift, $table24),
					16=>new ParserAction($this->shift, $table25),
					17=>new ParserAction($this->shift, $table26),
					18=>new ParserAction($this->shift, $table27),
					19=>new ParserAction($this->shift, $table28),
					20=>new ParserAction($this->shift, $table29),
					21=>new ParserAction($this->shift, $table30),
					31=>new ParserAction($this->reduce, $table35),
					32=>new ParserAction($this->reduce, $table35)
				);

			$tableDefinition77 = array(
				
					11=>new ParserAction($this->shift, $table22),
					12=>new ParserAction($this->shift, $table23),
					14=>new ParserAction($this->reduce, $table36),
					15=>new ParserAction($this->shift, $table24),
					16=>new ParserAction($this->shift, $table25),
					17=>new ParserAction($this->shift, $table26),
					18=>new ParserAction($this->shift, $table27),
					19=>new ParserAction($this->shift, $table28),
					20=>new ParserAction($this->shift, $table29),
					21=>new ParserAction($this->shift, $table30),
					31=>new ParserAction($this->reduce, $table36),
					32=>new ParserAction($this->reduce, $table36)
				);

			$tableDefinition78 = array(
				
					5=>new ParserAction($this->reduce, $table33),
					11=>new ParserAction($this->reduce, $table33),
					12=>new ParserAction($this->reduce, $table33),
					14=>new ParserAction($this->reduce, $table33),
					15=>new ParserAction($this->reduce, $table33),
					16=>new ParserAction($this->reduce, $table33),
					17=>new ParserAction($this->reduce, $table33),
					18=>new ParserAction($this->reduce, $table33),
					19=>new ParserAction($this->reduce, $table33),
					20=>new ParserAction($this->reduce, $table33),
					21=>new ParserAction($this->reduce, $table33),
					31=>new ParserAction($this->reduce, $table33),
					32=>new ParserAction($this->reduce, $table33)
				);

			$table0->setActions($tableDefinition0);
			$table1->setActions($tableDefinition1);
			$table2->setActions($tableDefinition2);
			$table3->setActions($tableDefinition3);
			$table4->setActions($tableDefinition4);
			$table5->setActions($tableDefinition5);
			$table6->setActions($tableDefinition6);
			$table7->setActions($tableDefinition7);
			$table8->setActions($tableDefinition8);
			$table9->setActions($tableDefinition9);
			$table10->setActions($tableDefinition10);
			$table11->setActions($tableDefinition11);
			$table12->setActions($tableDefinition12);
			$table13->setActions($tableDefinition13);
			$table14->setActions($tableDefinition14);
			$table15->setActions($tableDefinition15);
			$table16->setActions($tableDefinition16);
			$table17->setActions($tableDefinition17);
			$table18->setActions($tableDefinition18);
			$table19->setActions($tableDefinition19);
			$table20->setActions($tableDefinition20);
			$table21->setActions($tableDefinition21);
			$table22->setActions($tableDefinition22);
			$table23->setActions($tableDefinition23);
			$table24->setActions($tableDefinition24);
			$table25->setActions($tableDefinition25);
			$table26->setActions($tableDefinition26);
			$table27->setActions($tableDefinition27);
			$table28->setActions($tableDefinition28);
			$table29->setActions($tableDefinition29);
			$table30->setActions($tableDefinition30);
			$table31->setActions($tableDefinition31);
			$table32->setActions($tableDefinition32);
			$table33->setActions($tableDefinition33);
			$table34->setActions($tableDefinition34);
			$table35->setActions($tableDefinition35);
			$table36->setActions($tableDefinition36);
			$table37->setActions($tableDefinition37);
			$table38->setActions($tableDefinition38);
			$table39->setActions($tableDefinition39);
			$table40->setActions($tableDefinition40);
			$table41->setActions($tableDefinition41);
			$table42->setActions($tableDefinition42);
			$table43->setActions($tableDefinition43);
			$table44->setActions($tableDefinition44);
			$table45->setActions($tableDefinition45);
			$table46->setActions($tableDefinition46);
			$table47->setActions($tableDefinition47);
			$table48->setActions($tableDefinition48);
			$table49->setActions($tableDefinition49);
			$table50->setActions($tableDefinition50);
			$table51->setActions($tableDefinition51);
			$table52->setActions($tableDefinition52);
			$table53->setActions($tableDefinition53);
			$table54->setActions($tableDefinition54);
			$table55->setActions($tableDefinition55);
			$table56->setActions($tableDefinition56);
			$table57->setActions($tableDefinition57);
			$table58->setActions($tableDefinition58);
			$table59->setActions($tableDefinition59);
			$table60->setActions($tableDefinition60);
			$table61->setActions($tableDefinition61);
			$table62->setActions($tableDefinition62);
			$table63->setActions($tableDefinition63);
			$table64->setActions($tableDefinition64);
			$table65->setActions($tableDefinition65);
			$table66->setActions($tableDefinition66);
			$table67->setActions($tableDefinition67);
			$table68->setActions($tableDefinition68);
			$table69->setActions($tableDefinition69);
			$table70->setActions($tableDefinition70);
			$table71->setActions($tableDefinition71);
			$table72->setActions($tableDefinition72);
			$table73->setActions($tableDefinition73);
			$table74->setActions($tableDefinition74);
			$table75->setActions($tableDefinition75);
			$table76->setActions($tableDefinition76);
			$table77->setActions($tableDefinition77);
			$table78->setActions($tableDefinition78);

			$this->table = array(
				
					0=>$table0,
					1=>$table1,
					2=>$table2,
					3=>$table3,
					4=>$table4,
					5=>$table5,
					6=>$table6,
					7=>$table7,
					8=>$table8,
					9=>$table9,
					10=>$table10,
					11=>$table11,
					12=>$table12,
					13=>$table13,
					14=>$table14,
					15=>$table15,
					16=>$table16,
					17=>$table17,
					18=>$table18,
					19=>$table19,
					20=>$table20,
					21=>$table21,
					22=>$table22,
					23=>$table23,
					24=>$table24,
					25=>$table25,
					26=>$table26,
					27=>$table27,
					28=>$table28,
					29=>$table29,
					30=>$table30,
					31=>$table31,
					32=>$table32,
					33=>$table33,
					34=>$table34,
					35=>$table35,
					36=>$table36,
					37=>$table37,
					38=>$table38,
					39=>$table39,
					40=>$table40,
					41=>$table41,
					42=>$table42,
					43=>$table43,
					44=>$table44,
					45=>$table45,
					46=>$table46,
					47=>$table47,
					48=>$table48,
					49=>$table49,
					50=>$table50,
					51=>$table51,
					52=>$table52,
					53=>$table53,
					54=>$table54,
					55=>$table55,
					56=>$table56,
					57=>$table57,
					58=>$table58,
					59=>$table59,
					60=>$table60,
					61=>$table61,
					62=>$table62,
					63=>$table63,
					64=>$table64,
					65=>$table65,
					66=>$table66,
					67=>$table67,
					68=>$table68,
					69=>$table69,
					70=>$table70,
					71=>$table71,
					72=>$table72,
					73=>$table73,
					74=>$table74,
					75=>$table75,
					76=>$table76,
					77=>$table77,
					78=>$table78
				);

			$this->defaultActions = array(
				
					21=>new ParserAction($this->reduce, $table1)
				);

			$this->productions = array(
				
					0=>new ParserProduction($symbol0),
					1=>new ParserProduction($symbol3,2),
					2=>new ParserProduction($symbol4,1),
					3=>new ParserProduction($symbol4,1),
					4=>new ParserProduction($symbol4,1),
					5=>new ParserProduction($symbol4,1),
					6=>new ParserProduction($symbol4,1),
					7=>new ParserProduction($symbol4,3),
					8=>new ParserProduction($symbol4,3),
					9=>new ParserProduction($symbol4,3),
					10=>new ParserProduction($symbol4,4),
					11=>new ParserProduction($symbol4,4),
					12=>new ParserProduction($symbol4,4),
					13=>new ParserProduction($symbol4,3),
					14=>new ParserProduction($symbol4,3),
					15=>new ParserProduction($symbol4,3),
					16=>new ParserProduction($symbol4,3),
					17=>new ParserProduction($symbol4,3),
					18=>new ParserProduction($symbol4,3),
					19=>new ParserProduction($symbol4,3),
					20=>new ParserProduction($symbol4,2),
					21=>new ParserProduction($symbol4,2),
					22=>new ParserProduction($symbol4,1),
					23=>new ParserProduction($symbol4,3),
					24=>new ParserProduction($symbol4,4),
					25=>new ParserProduction($symbol4,1),
					26=>new ParserProduction($symbol4,1),
					27=>new ParserProduction($symbol4,2),
					28=>new ParserProduction($symbol25,1),
					29=>new ParserProduction($symbol25,3),
					30=>new ParserProduction($symbol25,1),
					31=>new ParserProduction($symbol25,3),
					32=>new ParserProduction($symbol25,3),
					33=>new ParserProduction($symbol25,5),
					34=>new ParserProduction($symbol24,1),
					35=>new ParserProduction($symbol24,3),
					36=>new ParserProduction($symbol24,3),
					37=>new ParserProduction($symbol6,1),
					38=>new ParserProduction($symbol6,3),
					39=>new ParserProduction($symbol9,1),
					40=>new ParserProduction($symbol9,3),
					41=>new ParserProduction($symbol9,2),
					42=>new ParserProduction($symbol2,3),
					43=>new ParserProduction($symbol2,4)
				);




        //Setup Lexer
        
			$this->rules = array(
				
					0=>"/^(?:\s+)/",
					1=>"/^(?:\"(\\[\"]|[^\"])*\")/",
					2=>"/^(?:'(\\[']|[^'])*')/",
					3=>"/^(?:[A-Za-z]{1,}[A-Za-z_0-9]+(?=[(]))/",
					4=>"/^(?:([0]?[1-9]|1[0-2])[:][0-5][0-9]([:][0-5][0-9])?[ ]?(AM|am|aM|Am|PM|pm|pM|Pm))/",
					5=>"/^(?:([0]?[0-9]|1[0-9]|2[0-3])[:][0-5][0-9]([:][0-5][0-9])?)/",
					6=>"/^(?:SHEET[0-9]+)/",
					7=>"/^(?:\$[A-Za-z]+\$[0-9]+)/",
					8=>"/^(?:[A-Za-z]+[0-9]+)/",
					9=>"/^(?:[A-Za-z]+(?=[(]))/",
					10=>"/^(?:[A-Za-z]{1,}[A-Za-z_0-9]+)/",
					11=>"/^(?:[A-Za-z_]+)/",
					12=>"/^(?:[0-9]+)/",
					13=>"/^(?:\$)/",
					14=>"/^(?: )/",
					15=>"/^(?:[.])/",
					16=>"/^(?::)/",
					17=>"/^(?:;)/",
					18=>"/^(?:,)/",
					19=>"/^(?:\*)/",
					20=>"/^(?:\/)/",
					21=>"/^(?:-)/",
					22=>"/^(?:\+)/",
					23=>"/^(?:\^)/",
					24=>"/^(?:\()/",
					25=>"/^(?:\))/",
					26=>"/^(?:>)/",
					27=>"/^(?:<)/",
					28=>"/^(?:NOT\b)/",
					29=>"/^(?:PI\b)/",
					30=>"/^(?:E\b)/",
					31=>"/^(?:\")/",
					32=>"/^(?:')/",
					33=>"/^(?:!)/",
					34=>"/^(?:=)/",
					35=>"/^(?:%)/",
					36=>"/^(?:[#])/",
					37=>"/^(?:$)/"
				);

			$this->conditions = array(
				
					"INITIAL"=>new LexerConditions(array( 0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37), true)
				);


    }

    function parserPerformAction(&$thisS, &$yy, $yystate, &$s, $o)
    {
        
/* this == yyval */


switch ($yystate) {
case 1:
        return $s[$o-1];
    
break;
case 2:
        
            $thisS = $this->variable($s[$o]);
        
    
break;
case 3:
	        
break;
case 4:
        
    
break;
case 5:
	    
            $thisS = $s[$o] * 1;
        
    
break;
case 6:
        
	        $thisS = substr($s[$o], 1, -1);
        
    
break;
case 7:
	    
            $thisS = $s[$o-2] == $s[$o];
        
    
break;
case 8:
	    
			if (is_numeric($s[$o-2]) && is_numeric($s[$o])) {
			   $thisS = $s[$o-2] + $s[$o];
			} else {
			   $thisS = $s[$o-2] . $s[$o];
			}
        
    
break;
case 9:
	    	
break;
case 10:
        
            $thisS = ($s[$o-3] * 1) <= ($s[$o] * 1);
        
    
break;
case 11:
        
            $thisS = ($s[$o-3] * 1) >= ($s[$o] * 1);
        
    
break;
case 12:
        $thisS = ($s[$o-3] * 1) != ($s[$o] * 1);

            
break;
case 13:
        $thisS = $s[$o-2] != $s[$o];
    
break;
case 14:
	    
		    $thisS = ($s[$o-2] * 1) > ($s[$o] * 1);
        
    
break;
case 15:
        
            $thisS = ($s[$o-2] * 1) < ($s[$o] * 1);
        
    
break;
case 16:
        
            $thisS = ($s[$o-2] * 1) - ($s[$o] * 1);
        
    
break;
case 17:
	    
            $thisS = ($s[$o-2] * 1) * ($s[$o] * 1);
        
    
break;
case 18:
	    
            $thisS = ($s[$o-2] * 1) / ($s[$o] * 1);
        
    
break;
case 19:
        
            $thisS = pow(($s[$o-2] * 1), ($s[$o] * 1));
        
    
break;
case 20:
		
            $thisS = $s[$o-1] * 1;
        
		
break;
case 21:
	    
            $thisS = $s[$o-1] * 1;
        
		
break;
case 22:/*$thisS = Math.E;*/;
break;
case 23:
	    
		    $thisS = $this->callFunction($s[$o-2]);
        
    
break;
case 24:
	    
            $thisS = $this->callFunction($s[$o-3], $s[$o-1]);
        
    
break;
case 28:
	    
            $thisS = $this->fixedCellValue($s[$o]);
        
    
break;
case 29:
	    
	        $thisS = $this->fixedCellRangeValue($s[$o-2], $s[$o]);
        
    
break;
case 30:
	    
            $thisS = $this->cellValue($s[$o]);
        
    
break;
case 31:
	    
            $thisS = $this->cellRangeValue($s[$o-2], $s[$o]);
        
    
break;
case 32:
	    
            $thisS = $this->remoteCellValue($s[$o-2], $s[$o]);
        
    
break;
case 33:
	    
            $thisS = $this->remoteCellRangeValue($s[$o-4], $s[$o-2], $s[$o]);
        
    
break;
case 34:
	    
            $thisS = array($s[$o]);
        
    
break;
case 35:
	    
            $s[$o-2][] = $s[$o];
            $thisS = $s[$o-2];
        
    
break;
case 36:
 	    
			$s[$o-2][] = $s[$o];
			$thisS = $s[$o-2];
        
    
break;
case 37:
        $thisS = [$s[$o]];
    
break;
case 38:
        
            $thisS = (is_array($s[$o-2]) ? $s[$o-2] : array());
            $thisS[] = $s[$o];
        
    
break;
case 39:
        $thisS = $s[$o] * 1;
    
break;
case 40:
        
            $thisS = $s[$o-2] . '.' . $s[$o];
        
    
break;
case 41:
        $thisS = $s[$o-1] * 0.01;
    
break;
case 42:
        $thisS = $s[$o-2] + $s[$o-1] + $s[$o];
    
break;
case 43:
        $thisS = $s[$o-2] + $s[$o-1] + $s[$o];
    
break;
}

    }

    function parserLex()
    {
        $token = $this->lexerLex(); // $end = 1

        if (isset($token)) {
            return $token;
        }

        return $this->symbols["end"];
    }

    function parseError($str = "", ParserError $hash = null)
    {
        throw new Exception($str);
    }

    function lexerError($str = "", LexerError $hash = null)
    {
        throw new Exception($str);
    }

    function parse($input)
    {
        if (empty($this->table)) {
            throw new Exception("Empty Table");
        }
        $this->eof = new ParserSymbol("Eof", 1);
        $firstAction = new ParserAction(0, $this->table[0]);
        $firstCachedAction = new ParserCachedAction($firstAction);
        $stack = array($firstCachedAction);
        $stackCount = 1;
        $vstack = array(null);
        $vstackCount = 1;
        $yy = null;
        $_yy = null;
        $recovering = 0;
        $symbol = null;
        $action = null;
        $errStr = "";
        $preErrorSymbol = null;
        $state = null;

        $this->setInput($input);

        while (true) {
            // retrieve state number from top of stack
            $state = $stack[$stackCount - 1]->action->state;
            // use default actions if available
            if ($state != null && isset($this->defaultActions[$state->index])) {
                $action = $this->defaultActions[$state->index];
            } else {
                if (empty($symbol) == true) {
                    $symbol = $this->parserLex();
                }
                // read action for current state and first input
                if (isset($state) && isset($state->actions[$symbol->index])) {
                    //$action = $this->table[$state][$symbol];
                    $action = $state->actions[$symbol->index];
                } else {
                    $action = null;
                }
            }

            if ($action == null) {
                if ($recovering == 0) {
                    // Report error
                    $expected = array();
                    foreach($this->table[$state->index]->actions as $p => $item) {
                        if (!empty($this->terminals[$p]) && $p > 2) {
                            $expected[] = $this->terminals[$p]->name;
                        }
                    }

                    $errStr = "Parse error on line " . ($this->yy->lineNo + 1) . ":\n" . $this->showPosition() . "\nExpecting " . implode(", ", $expected) . ", got '" . (isset($this->terminals[$symbol->index]) ? $this->terminals[$symbol->index]->name : 'NOTHING') . "'";

                    $this->parseError($errStr, new ParserError($this->match, $state, $symbol, $this->yy->lineNo, $this->yy->loc, $expected));
                }
            }

            if ($state === null || $action === null) {
                break;
            }

            switch ($action->action) {
                case 1:
                    // shift
                    //$this->shiftCount++;
                    $stack[] = new ParserCachedAction($action, $symbol);
                    $stackCount++;

                    $vstack[] = clone($this->yy);
                    $vstackCount++;

                    $symbol = "";
                    if ($preErrorSymbol == null) { // normal execution/no error
                        $yy = clone($this->yy);
                        if ($recovering > 0) $recovering--;
                    } else { // error just occurred, resume old look ahead f/ before error
                        $symbol = $preErrorSymbol;
                        $preErrorSymbol = null;
                    }
                    break;

                case 2:
                    // reduce
                    $len = $this->productions[$action->state->index]->len;
                    // perform semantic action
                    $_yy = $vstack[$vstackCount - $len];// default to $S = $1
                    // default location, uses first token for firsts, last for lasts

                    if (isset($this->ranges)) {
                        //TODO: add ranges
                    }

                    $r = $this->parserPerformAction($_yy->text, $yy, $action->state->index, $vstack, $vstackCount - 1);

                    if (isset($r)) {
                        return $r;
                    }

                    // pop off stack
                    while ($len > 0) {
                        $len--;

                        array_pop($stack);
                        $stackCount--;

                        array_pop($vstack);
                        $vstackCount--;
                    }

                    if (is_null($_yy))
                    {
                        $vstack[] = new ParserValue();
                    }
                    else
                    {
                        $vstack[] = $_yy;
                    }
                    $vstackCount++;

                    $nextSymbol = $this->productions[$action->state->index]->symbol;
                    // goto new state = table[STATE][NONTERMINAL]
                    $nextState = $stack[$stackCount - 1]->action->state;
                    $nextAction = $nextState->actions[$nextSymbol->index];

                    $stack[] = new ParserCachedAction($nextAction, $nextSymbol);
                    $stackCount++;

                    break;

                case 3:
                    // accept
                    return true;
            }

        }

        return true;
    }


    /* Jison generated lexer */
    public $eof;
    public $yy = null;
    public $match = "";
    public $matched = "";
    public $conditionStack = array();
    public $conditionStackCount = 0;
    public $rules = array();
    public $conditions = array();
    public $done = false;
    public $less;
    public $more;
    public $input;
    public $offset;
    public $ranges;
    public $flex = false;

    function setInput($input)
    {
        $this->input = $input;
        $this->more = $this->less = $this->done = false;
        $this->yy = new ParserValue();
        $this->conditionStack = array('INITIAL');
        $this->conditionStackCount = 1;

        if (isset($this->ranges)) {
            $loc = $this->yy->loc = new ParserLocation();
            $loc->Range(new ParserRange(0, 0));
        } else {
            $this->yy->loc = new ParserLocation();
        }
        $this->offset = 0;
    }

    function input()
    {
        $ch = $this->input[0];
        $this->yy->text .= $ch;
        $this->yy->leng++;
        $this->offset++;
        $this->match .= $ch;
        $this->matched .= $ch;
        $lines = preg_match("/(?:\r\n?|\n).*/", $ch);
        if (count($lines) > 0) {
            $this->yy->lineNo++;
            $this->yy->lastLine++;
        } else {
            $this->yy->loc->lastColumn++;
        }
        if (isset($this->ranges)) {
            $this->yy->loc->range->y++;
        }

        $this->input = array_slice($this->input, 1);
        return $ch;
    }

    function unput($ch)
    {
        $len = strlen($ch);
        $lines = explode("/(?:\r\n?|\n)/", $ch);
        $linesCount = count($lines);

        $this->input = $ch . $this->input;
        $this->yy->text = substr($this->yy->text, 0, $len - 1);
        //$this->yylen -= $len;
        $this->offset -= $len;
        $oldLines = explode("/(?:\r\n?|\n)/", $this->match);
        $oldLinesCount = count($oldLines);
        $this->match = substr($this->match, 0, strlen($this->match) - 1);
        $this->matched = substr($this->matched, 0, strlen($this->matched) - 1);

        if (($linesCount - 1) > 0) $this->yy->lineNo -= $linesCount - 1;
        $r = $this->yy->loc->range;
        $oldLinesLength = (isset($oldLines[$oldLinesCount - $linesCount]) ? strlen($oldLines[$oldLinesCount - $linesCount]) : 0);

        $this->yy->loc = new ParserLocation(
            $this->yy->loc->firstLine,
            $this->yy->lineNo,
            $this->yy->loc->firstColumn,
            $this->yy->loc->firstLine,
            (empty($lines) ?
                ($linesCount == $oldLinesCount ? $this->yy->loc->firstColumn : 0) + $oldLinesLength :
                $this->yy->loc->firstColumn - $len)
        );

        if (isset($this->ranges)) {
            $this->yy->loc->range = array($r[0], $r[0] + $this->yy->leng - $len);
        }
    }

    function more()
    {
        $this->more = true;
    }

    function pastInput()
    {
        $past = substr($this->matched, 0, strlen($this->matched) - strlen($this->match));
        return (strlen($past) > 20 ? '...' : '') . preg_replace("/\n/", "", substr($past, -20));
    }

    function upcomingInput()
    {
        $next = $this->match;
        if (strlen($next) < 20) {
            $next .= substr($this->input, 0, 20 - strlen($next));
        }
        return preg_replace("/\n/", "", substr($next, 0, 20) . (strlen($next) > 20 ? '...' : ''));
    }

    function showPosition()
    {
        $pre = $this->pastInput();

        $c = '';
        for($i = 0, $preLength = strlen($pre); $i < $preLength; $i++) {
            $c .= '-';
        }

        return $pre . $this->upcomingInput() . "\n" . $c . "^";
    }

    function next()
    {
        if ($this->done == true) {
            return $this->eof;
        }

        if (empty($this->input)) {
            $this->done = true;
        }

        if ($this->more == false) {
            $this->yy->text = '';
            $this->match = '';
        }

        $rules = $this->currentRules();
        for ($i = 0, $j = count($rules); $i < $j; $i++) {
            preg_match($this->rules[$rules[$i]], $this->input, $tempMatch);
            if ($tempMatch && (empty($match) || count($tempMatch[0]) > count($match[0]))) {
                $match = $tempMatch;
                $index = $i;
                if (isset($this->flex) && $this->flex == false) {
                    break;
                }
            }
        }
        if ( $match ) {
            $matchCount = strlen($match[0]);
            $lineCount = preg_match("/(?:\r\n?|\n).*/", $match[0], $lines);
            $line = ($lines ? $lines[$lineCount - 1] : false);
            $this->yy->lineNo += $lineCount;

            $this->yy->loc = new ParserLocation(
                $this->yy->loc->lastLine,
                $this->yy->lineNo + 1,
                $this->yy->loc->lastColumn,
                ($line ?
                    count($line) - preg_match("/\r?\n?/", $line, $na) :
                    $this->yy->loc->lastColumn + $matchCount
                )
            );


            $this->yy->text .= $match[0];
            $this->match .= $match[0];
            $this->matches = $match;
            $this->matched .= $match[0];

            $this->yy->leng = strlen($this->yy->text);
            if (isset($this->ranges)) {
                $this->yy->loc->range = new ParserRange($this->offset, $this->offset += $this->yy->leng);
            }
            $this->more = false;
            $this->input = substr($this->input, $matchCount, strlen($this->input));
            $ruleIndex = $rules[$index];
            $nextCondition = $this->conditionStack[$this->conditionStackCount - 1];

            $token = $this->lexerPerformAction($ruleIndex, $nextCondition);

            if ($this->done == true && empty($this->input) == false) {
                $this->done = false;
            }

            if (empty($token) == false) {
                return $this->symbols[
                $token
                ];
            } else {
                return null;
            }
        }

        if (empty($this->input)) {
            return $this->eof;
        } else {
            $this->lexerError("Lexical error on line " . ($this->yy->lineNo + 1) . ". Unrecognized text.\n" . $this->showPosition(), new LexerError("", -1, $this->yy->lineNo));
            return null;
        }
    }

    function lexerLex()
    {
        $r = $this->next();

        while (is_null($r) && !$this->done) {
            $r = $this->next();
        }

        return $r;
    }

    function begin($condition)
    {
        $this->conditionStackCount++;
        $this->conditionStack[] = $condition;
    }

    function popState()
    {
        $this->conditionStackCount--;
        return array_pop($this->conditionStack);
    }

    function currentRules()
    {
        $peek = $this->conditionStack[$this->conditionStackCount - 1];
        return $this->conditions[$peek]->rules;
    }

    function LexerPerformAction($avoidingNameCollisions, $YY_START = null)
    {
        

;
switch($avoidingNameCollisions) {
case 0:/* skip whitespace */
break;
case 1:return 10;
break;
case 2:return 10;
break;
case 3:return 23;
break;
case 4:return 7;
break;
case 5:return 8;
break;
case 6:
	if (yy->obj.type == 'cell') return 29; if ($this->type == 'cell') return 29;
	 return 33;

break;
case 7:
	if (yy->obj.type == 'cell') return 26; if ($this->type == 'cell') return 26;
     return 33;

break;
case 8:
	if (yy->obj.type == 'cell') return 28; if ($this->type == 'cell') return 28;
     return 33;

break;
case 9:return 23;
break;
case 10:return 33;
break;
case 11:return 33;
break;
case 12:return 35;
break;
case 13:/* skip whitespace */
break;
case 14:return ' ';
break;
case 15:return 34;
break;
case 16:return 27;
break;
case 17:return 31;
break;
case 18:return 32;
break;
case 19:return 19;
break;
case 20:return 20;
break;
case 21:return 18;
break;
case 22:return 12;
break;
case 23:return 21;
break;
case 24:return 13;
break;
case 25:return 14;
break;
case 26:return 16;
break;
case 27:return 15;
break;
case 28:return 17;
break;
case 29:return 'PI';
break;
case 30:return 22;
break;
case 31:return '"';
break;
case 32:return "'";
break;
case 33:return "!";
break;
case 34:return 11;
break;
case 35:return 36;
break;
case 36:return 37;
break;
case 37:return 5;
break;
}

    }
}

class ParserLocation
{
    public $firstLine = 1;
    public $lastLine = 0;
    public $firstColumn = 1;
    public $lastColumn = 0;
    public $range;

    public function __construct($firstLine = 1, $lastLine = 0, $firstColumn = 1, $lastColumn = 0)
    {
        $this->firstLine = $firstLine;
        $this->lastLine = $lastLine;
        $this->firstColumn = $firstColumn;
        $this->lastColumn = $lastColumn;
    }

    public function Range($range)
    {
        $this->range = $range;
    }

    public function __clone()
    {
        return new ParserLocation($this->firstLine, $this->lastLine, $this->firstColumn, $this->lastColumn);
    }
}

class ParserValue
{
    public $leng = 0;
    public $loc;
    public $lineNo = 0;
    public $text;

    function __clone() {
        $clone = new ParserValue();
        $clone->leng = $this->leng;
        if (isset($this->loc)) {
            $clone->loc = clone $this->loc;
        }
        $clone->lineNo = $this->lineNo;
        $clone->text = $this->text;
        return $clone;
    }
}

class LexerConditions
{
    public $rules;
    public $inclusive;

    function __construct($rules, $inclusive)
    {
        $this->rules = $rules;
        $this->inclusive = $inclusive;
    }
}

class ParserProduction
{
    public $len = 0;
    public $symbol;

    public function __construct($symbol, $len = 0)
    {
        $this->symbol = $symbol;
        $this->len = $len;
    }
}

class ParserCachedAction
{
    public $action;
    public $symbol;

    function __construct($action, $symbol = null)
    {
        $this->action = $action;
        $this->symbol = $symbol;
    }
}

class ParserAction
{
    public $action;
    public $state;
    public $symbol;

    function __construct($action, &$state = null, &$symbol = null)
    {
        $this->action = $action;
        $this->state = $state;
        $this->symbol = $symbol;
    }
}

class ParserSymbol
{
    public $name;
    public $index = -1;
    public $symbols = array();
    public $symbolsByName = array();

    function __construct($name, $index)
    {
        $this->name = $name;
        $this->index = $index;
    }

    public function addAction($a)
    {
        $this->symbols[$a->index] = $this->symbolsByName[$a->name] = $a;
    }
}

class ParserError
{
    public $text;
    public $state;
    public $symbol;
    public $lineNo;
    public $loc;
    public $expected;

    function __construct($text, $state, $symbol, $lineNo, $loc, $expected)
    {
        $this->text = $text;
        $this->state = $state;
        $this->symbol = $symbol;
        $this->lineNo = $lineNo;
        $this->loc = $loc;
        $this->expected = $expected;
    }
}

class LexerError
{
    public $text;
    public $token;
    public $lineNo;

    public function __construct($text, $token, $lineNo)
    {
        $this->text = $text;
        $this->token = $token;
        $this->lineNo = $lineNo;
    }
}

class ParserState
{
    public $index;
    public $actions = array();

    function __construct($index)
    {
        $this->index = $index;
    }

    public function setActions(&$actions)
    {
        $this->actions = $actions;
    }
}

class ParserRange
{
    public $x;
    public $y;

    function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
}