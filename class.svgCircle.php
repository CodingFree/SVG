<?php
	require_once('class.svgEllipse.php');

	class svgCircle extends svgEllipse{
		public function __construct($radius){
			parent::__construct($radius, $radius);
		}

		public function info(){
			printf("Circle. Height: %s, Width: %s, X: %d, Y: %d\n", $this->height, $this->width, $this->x, $this->y);
		}
	}

?>