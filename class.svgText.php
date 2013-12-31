<?php
	require_once('class.svgObject.php');

	class svgText extends svgObject{

		private $colorFill = "0,0,0";
		private $text = "Void";

		public function __construct($text){
			$this->text = $text;
		}

		public function getXML(){
			$xml =   '<text x="%d" y="%d" fill="rgb(%s)">%s</text>';
			return sprintf($xml, $this->x, $this->y, $this->colorFill, $this->text);
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

	}

	/**This is just a test.**
	echo '<svg width="400" height="480">';
	$rectangle = new svgText("Kiosked");
	$rectangle->setColorFill(0,0,100);
	$rectangle->setX(40);
	$rectangle->setY(40);
	echo $rectangle->getXML();
	echo '</svg>';**/
	

?>