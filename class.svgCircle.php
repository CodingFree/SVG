<?php
	require_once('class.svgEllipse.php');

	class svgCircle extends svgEllipse{
		public function __construct($radius){
			parent::__construct($radius, $radius);
		}

	}

?>