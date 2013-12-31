<?php
	require_once('class.svgCanvas.php');
	require_once('class.svgTextBox.php');
	require_once('class.svgCircle.php');

	$xml =null;

	$canvas = new svgCanvas(300, 300);
	$canvas->setX(50);
	$canvas->setY(50);

	$textBox = new svgTextBox("Kiosked", 100, 50);
	$textBox->setX(50);
	$textBox->setY(50);
	$textBox->box->setColorFill(255,255,255);
	$textBox->text->setFont(null,"italic","bold",20);
	$xml = $textBox->getXML();

	for($i =1; $i <= 20; $i++){
		$posX = rand(1, 200);
		$posY = rand(1, 200);
		$radius = rand(1,5)*2;
		$circle = new svgCircle($radius);
		$circle->setX($posX+70);
		$circle->setY($posY+10);
		$circle->setColorFill(255,255,255);
		$xml .= $circle->getXML();
	}

	$canvas->setXML($xml);
	echo $canvas->getXML();

?>