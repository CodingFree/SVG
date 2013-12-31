<?php
	require_once('class.svgObject.php');

	class svgText extends svgObject{

		private $colorFill = "0,0,0";
		private $textAnchor = "center";
		private $text = "Void";

		private $fontFamily="serif";
		private $fontStyle="normal";
		private $fontWeight="normal"; 
		private $fontSize=10;


		public function __construct($text){
			$this->text = $text;
		}

		public function getXML(){
			$xml =   '<text x="%d" y="%d" fill="rgb(%s)" text-anchor="%s"';
			$xml = sprintf($xml, $this->x, $this->y, $this->colorFill, $this->textAnchor);
			$xml .= 'font-family="%s" font-style="%s" font-weight="%s" font-size="%d"';
			$xml = sprintf($xml, $this->fontFamily, $this->fontStyle, $this->fontWeight, $this->fontSize);
			$xml .= '>%s</text>';
			$xml = sprintf($xml, $this->text);
			return $xml;
		}

		private function rgbString($red, $green, $blue){
			return sprintf("%d,%d,%d", $red, $green, $blue);
		}

		public function setColorFill($red, $green, $blue){
			$this->colorFill = $this->rgbString($red, $green, $blue);
		}

		public function setText($text){
			$this->text = $text;
		}

		public function setTextAnchor($anchor){
			$this->textAnchor = $anchor;
		}

		public function setFont($fontFamily=null, $fontStyle=null, $fontWeight=null, $fontSize=null){
			if($fontFamily != null){
				$this->fontFamily = $fontFamily;
			}

			if($fontStyle != null){
				$this->fontStyle = $fontStyle;
			}
			if($fontWeight != null){
				$this->fontWeight = $fontWeight;
			}
			if($fontSize != null){
				$this->fontSize = $fontSize;
			}
			
		}

	}

	/**This is just a test.
	echo '<svg width="400" height="480">';
	$rectangle = new svgText("Kiosked");
	$rectangle->setColorFill(0,0,100);
	$rectangle->setX(40);
	$rectangle->setY(40);
	echo $rectangle->getXML();
	echo '</svg>';**/
	

?>