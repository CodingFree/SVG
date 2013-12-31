SVG Generator
===

It's just a SVG generator written in PHP. Example:
![alt tag](http://i.imgur.com/7IlBv3P.png)

Documentation
===

*class.svgObject.php extended by every SVG object

public function info()
public function setX(coordX)
public function setY(coordY)

*class.svgCanvas.php

public function __construct(width, height)
public function setXML(xml)
public function getXML()

*class.svgEllipse.php

public function __construct(radiusX, radiusY)
public function getXML()
public function setColorFill(red,green,blue)
public function setWidthStroke(size)
public function setColorStroke(red,green,blue)

*class.svgCircle.php extends *class.svgEllipse.php

public function __construct(radius)

*class.svgRectangle.php

public function __construct(width, height)
public function getXML()
public function setColorFill(reed,green,blue)
public function setWidthStroke(size)
public function setColorStroke(reed, green, blue)

*class.svgSquare.php extends *class.svgRectangle.php

public function __construct(width)
public function getXML()

*class.svgText.php

public function __construct(text)
public function getXML()
public function setColorFill(reed, green, blue)
public function setText(text)
public function setTextAnchor(position)
public function setFont(fontFamily, fontStyle, fontWeight, fontSize)

*class.svgTextBox.php uses *class.svgRectangle.php and *class.svgText.php

public function __construct(width)
public function getXML()