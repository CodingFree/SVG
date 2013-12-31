<?php
	require_once('class.svgObject.php');
	require_once('class.svgRectangle.php');
	require_once('class.svgText.php');

	class svgTextBox extends svgObject{

		public $text = "Void";
		public $box;

		public function __construct($text, $width, $height){
			parent::__construct($width, $height);

			//Properties by default, but they could be override later.
			$this->box = new svgRectangle($width, $height);
			$this->text = new svgText($text);
			$this->text->setX($width/2);
			$this->text->setY($height/2);
			$this->text->setTextAnchor('middle');
			$this->text->setFont(null,null,null,$width/10);
		}
		
		public function getXML(){
			$xml =   $this->box->getXML();
			$xml .= $this->text->getXML();
			return $xml;
		}

	}

	echo '<svg width="400" height="480">';
	$textbox = new svgTextBox("Kiosked", 100, 50);
	$textbox->box->setColorFill(255,255,255);
	$textbox->text->setFont(null,"italic","bold",20);
	echo $textbox->getXML();
	echo '</svg>';
	

?>