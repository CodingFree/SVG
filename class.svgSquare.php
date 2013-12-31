<?php
	require_once('class.svgRectangle.php');

	class svgSquare extends svgRectangle{
		public function __construct($width){
			parent::__construct($width, $width);
		}

		public function info(){
			printf("Square. Size: %s, X: %d, Y: %d\n", $this->height, $this->x, $this->y);
		}

	}

?>