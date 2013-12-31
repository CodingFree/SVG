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
			printf("Height: %s, Width: %s", $this->height, $this->width);
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