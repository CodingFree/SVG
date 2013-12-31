<?php
	require_once('class.svgObject.php');

	class svgCanvas extends svgObject{
		private $xml = '<svg width="%d" height="%d">';

		public function __construct($width, $height){
			$this->xml = sprintf($this->xml, $width, $height);
			$this->xml .= '%s</svg>';
		}

		public function setXML($xml){
			$this->xml = sprintf($this->xml, $xml);
		}

		public function getXML(){
			return sprintf($this->xml);
		}
	}
?>