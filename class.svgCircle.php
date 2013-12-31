<?php
	require_once('class.svgEllipse.php');

	class svgCircle extends svgEllipse{
		public function __construct($radius){
			parent::__construct($radius, $radius);
		}

	}

	/**Yet another test
	echo '<svg width="400" height="480">';
	$circle = new svgCircle(100);
	$circle->setX(100);
	$circle->setY(100);
	echo $circle->getXML();
	echo '</svg>';*/
?>