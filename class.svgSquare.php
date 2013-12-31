<?php
	require_once('class.svgRectangle.php');

	class svgSquare extends svgRectangle{
		public function __construct($width){
			parent::__construct($width, $width);
		}

	}

	/**Yet another test
	$square = new svgSquare(200);
	echo '<svg width="400" height="480">';
	echo $square->getXML();
	echo '</svg>';**/
?>