<?php

	abstract class svgObject{
		protected $width;
		protected $height;
		protected $x;
		protected $y;
	
		function __construct($width, $height){
			$this->width = $width;
			$this->height = $height;
		}

		public function info(){
			printf("Generic object. Height: %s, Width: %s, X: %d, Y: %d\n", $this->height, $this->width, $this->x, $this->y);
		}

		abstract function getXML();

		public function setX($x = 0){
			$this->x = $x;
		}

		public function setY($y = 0){
			$this->y = $y;
		}

	}
?>