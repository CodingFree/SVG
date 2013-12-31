<?php
	require_once('class.svgRectangle.php');

	class svgSquare extends svgRectangle{
		public function __construct($width){
			parent::__construct($width, $width);
		}

	}

?>