<?php
	require_once('class.svgObject.php');

	class svgRectangle extends svgObject{

		private $colorFill = "0,0,0";
		private $colorStroke = "0,0,0";
		private $widthStroke = 1;


		public function __construct($width, $height){
			parent::__construct($width, $height);
		}

		public function getXML(){
			$xml =   '<rect x="%d" y="%d" width="%d" height="%d" style="fill:rgb(%s);stroke-width:%d;stroke:rgb(%s)" />';
			return sprintf($xml, $this->x, $this->y, $this->width, $this->height, $this->colorFill, $this->widthStroke, $this->colorStroke);
		}

		private function rgbString($red, $green, $blue){
			return sprintf("%d,%d,%d", $red, $green, $blue);
		}

		public function setColorFill($red, $green, $blue){
			$this->colorFill = $this->rgbString($red, $green, $blue);
		}

		public function setWidthStroke($width){
			$this->widthStroke = $width;
		}

		public function setColorStroke($red, $green, $blue){
			$this->colorStroke = $this->rgbString($red, $green, $blue);
		}

	}

	/**This is just a test.
	echo '<svg width="400" height="480">';
	$rectangle = new svgRectangle(100, 100);
	$rectangle->setColorStroke(0,0,255);
	$rectangle->setColorFill(0,0,100);
	$rectangle->setWidthStroke(10);
	$rectangle->setX(50);
	$rectangle->setY(50);
	echo $rectangle->getXML();
	echo '</svg>';**/
	

?>