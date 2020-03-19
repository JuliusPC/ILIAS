<?php
$BEAUT_PATH = realpath(".") . "/Services/COPage/syntax_highlight/php";
if (!isset($BEAUT_PATH)) {
    return;
}
require_once("$BEAUT_PATH/Beautifier/HFile.php");
  class HFile_css extends HFile
  {
      public function HFile_css()
      {
          $this->HFile();
          /*************************************/
          // Beautifier Highlighting Configuration File
          // CSS
          /*************************************/
          // Flags

          $this->nocase            	= "1";
          $this->notrim            	= "0";
          $this->perl              	= "0";

          // String characters and delimiters

          $this->stringchars       	= array();
          $this->delimiters        	= array(",", ".", ":", ";", "{", " ", "}", " ", "	");
          $this->escchar           	= "";

          // Comment settings

          $this->blockcommenton    	= array("<!--");
          $this->blockcommentoff   	= array("-->");

          // Keywords (keyword mapping to colour number)

          $this->keywords          	= array(
            "A" => "1",
            "ABOVE" => "1",
            "ACTIVE" => "1",
            "ADDRESS" => "1",
            "APPLET" => "1",
            "ARRAY" => "1",
            "AREA" => "1",
            "B" => "1",
            "BASE" => "1",
            "BASEFONT" => "1",
            "BGSOUND" => "1",
            "BIG" => "1",
            "BLINK" => "1",
            "BLOCKQUOTE" => "1",
            "BODY" => "1",
            "BR" => "1",
            "CAPTION" => "1",
            "CENTER" => "1",
            "CITE" => "1",
            "CODE" => "1",
            "DD" => "1",
            "DFN" => "1",
            "DIR" => "1",
            "DIV" => "1",
            "DL" => "1",
            "DT" => "1",
            "EM" => "1",
            "EMBED" => "1",
            "FIG" => "1",
            "FIRST-LETTER" => "1",
            "FIRST-LINE" => "1",
            "FONT" => "1",
            "FORM" => "1",
            "FRAME" => "1",
            "FRAMESET" => "1",
            "H" => "1",
            "H1" => "1",
            "H2" => "1",
            "H3" => "1",
            "H4" => "1",
            "H5" => "1",
            "H6" => "1",
            "HEAD" => "1",
            "HR" => "1",
            "HTML" => "1",
            "I" => "1",
            "IMG" => "1",
            "INPUT" => "1",
            "ISINDEX" => "1",
            "KBD" => "1",
            "LI" => "1",
            "LINK" => "1",
            "MAP" => "1",
            "MARQUEE" => "1",
            "MENU" => "1",
            "META" => "1",
            "NEXTID" => "1",
            "NOBR" => "1",
            "NOFRAMES" => "1",
            "NOTE" => "1",
            "NOSCRIPT" => "1",
            "OL" => "1",
            "OPTION" => "1",
            "P" => "1",
            "PRE" => "1",
            "RANGE" => "1",
            "ROOT" => "1",
            "SPAN" => "1",
            "SAMP" => "1",
            "SCRIPT" => "1",
            "SELECT" => "1",
            "SMALL" => "1",
            "SOUND" => "1",
            "SQRT" => "1",
            "STYLE" => "1",
            "STRIKE" => "1",
            "STRONG" => "1",
            "SUB" => "1",
            "SUP" => "1",
            "TABLE" => "1",
            "TD" => "1",
            "TEXT" => "1",
            "TEXTAREA" => "1",
            "TH" => "1",
            "TITLE" => "1",
            "TR" => "1",
            "TT" => "1",
            "U" => "1",
            "UL" => "1",
            "VAR" => "1",
            "VISITED" => "1",
            "WBR" => "1",
            "background" => "2",
            "background-attachment" => "2",
            "background-color" => "2",
            "background-image" => "2",
            "background-position" => "2",
            "background-repeat" => "2",
            "border" => "2",
            "border-bottom" => "2",
            "border-bottom-width" => "2",
            "border-color" => "2",
            "border-left" => "2",
            "border-left-width" => "2",
            "border-right" => "2",
            "border-right-width" => "2",
            "border-style" => "2",
            "border-top" => "2",
            "border-top-width" => "2",
            "border-width" => "2",
            "clear" => "2",
            "color" => "2",
            "display" => "2",
            "float" => "2",
            "font" => "2",
            "font-family" => "2",
            "font-size" => "2",
            "font-style" => "2",
            "font-variant" => "2",
            "font-weight" => "2",
            "height" => "2",
            "letter-spacing" => "2",
            "line-height" => "2",
            "list-style" => "2",
            "list-style-image" => "2",
            "list-style-position" => "2",
            "list-style-type" => "2",
            "margin" => "2",
            "margin-bottom" => "2",
            "margin-left" => "2",
            "margin-right" => "2",
            "margin-top" => "2",
            "padding" => "2",
            "padding-bottom" => "2",
            "padding-left" => "2",
            "padding-right" => "2",
            "padding-top" => "2",
            "text-align" => "2",
            "text-decoration" => "2",
            "text-indent" => "2",
            "text-transform" => "2",
            "vertical-align" => "2",
            "white-space" => "2",
            "width" => "2",
            "word-spacing" => "2",
            "aqua" => "3",
            "auto" => "3",
            "baseline" => "3",
            "black" => "3",
            "blink" => "3",
            "block" => "3",
            "blue" => "3",
            "bold" => "3",
            "bolder" => "3",
            "both" => "3",
            "bottom" => "3",
            "capitalize" => "3",
            "center" => "3",
            "circle" => "3",
            "cursive" => "3",
            "dashed" => "3",
            "decimal" => "3",
            "disc" => "3",
            "dotted" => "3",
            "double" => "3",
            "fantasy" => "3",
            "fixed" => "3",
            "fuchsia" => "3",
            "gray" => "3",
            "green" => "3",
            "groove" => "3",
            "inline" => "3",
            "inset" => "3",
            "inside" => "3",
            "italic" => "3",
            "justify" => "3",
            "large" => "3",
            "larger" => "3",
            "left" => "3",
            "lighter" => "3",
            "lime" => "3",
            "line-through" => "3",
            "list-item" => "3",
            "lower-alpha" => "3",
            "lower-roman" => "3",
            "lowercase" => "3",
            "maroon" => "3",
            "medium" => "3",
            "middle" => "3",
            "monospace" => "3",
            "navy" => "3",
            "no-repeat" => "3",
            "none" => "3",
            "normal" => "3",
            "nowrap" => "3",
            "oblique" => "3",
            "olive" => "3",
            "outset" => "3",
            "outside" => "3",
            "overline" => "3",
            "pre" => "3",
            "purple" => "3",
            "red" => "3",
            "repeat" => "3",
            "repeat-x" => "3",
            "repeat-y" => "3",
            "rgb" => "3",
            "ridge" => "3",
            "right" => "3",
            "sans-serif" => "3",
            "scroll" => "3",
            "serif" => "3",
            "silver" => "3",
            "small" => "3",
            "small-caps" => "3",
            "smaller" => "3",
            "solid" => "3",
            "square" => "3",
            "sub" => "3",
            "super" => "3",
            "teal" => "3",
            "text-bottom" => "3",
            "text-top" => "3",
            "thick" => "3",
            "thin" => "3",
            "top" => "3",
            "transparent" => "3",
            "underline" => "3",
            "upper-alpha" => "3",
            "upper-roman" => "3",
            "uppercase" => "3",
            "url" => "3",
            "white" => "3",
            "x-large" => "3",
            "x-small" => "3",
            "xx-large" => "3",
            "xx-small" => "3",
            "yellow" => "3");

          // Special extensions

          // Each category can specify a PHP function that returns an altered
          // version of the keyword.
        
        

          $this->linkscripts    	= array(
            "1" => "donothing",
            "2" => "donothing",
            "3" => "donothing");
      }


      public function donothing($keywordin)
      {
          return $keywordin;
      }
  }