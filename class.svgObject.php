<?php

	class svgObject{
		private $width;
		private $height;
		private $xml;
	
		function __construct($width, $height){
			$this->width = $width;
			$this->height = $height;
		}

		public function info(){
			printf("Height: %s, Width: %s", $this->height, $this->width);
		}


	}
?>