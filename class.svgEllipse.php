<?php
	require_once('class.svgObject.php');

	class svgEllipse extends svgObject{

		private $colorFill = "0,0,0";
		private $colorStroke = "0,0,0";
		private $widthStroke = 1;

		private $radiusX=10;
		private $radiusY=10;

		public function __construct($radiusX, $radiusY){
			parent::__construct($radiusX, $radiusY);
		}

		public function getXML(){
			$xml =   '<ellipse cx="%d" cy="%d" rx="%d" ry="%d" style="fill:rgb(%s);stroke:rgb(%s);stroke-width:%d" />';
			return sprintf($xml, $this->x, $this->y, $this->width, $this->height, $this->colorFill, $this->colorStroke, $this->widthStroke);
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
	/*echo '<svg width="400" height="480">';
	$rectangle = new svgEllipse(40, 100);
	$rectangle->setColorStroke(0,0,255);
	$rectangle->setColorFill(0,0,100);
	$rectangle->setWidthStroke(10);
	$rectangle->setX(200);
	$rectangle->setY(120);
	echo $rectangle->getXML();
	echo '</svg>';**/
	

?>