SVG Generator
===

It's just a SVG generator written in PHP. Example:
![alt tag](http://i.imgur.com/7IlBv3P.png)

Documentation
===

__class.svgObject.php extended by every SVG object__

public function info()
public function setX(coordX)
public function setY(coordY)

__class.svgCanvas.php__

public function __construct(width, height)
public function setXML(xml)
public function getXML()

__class.svgEllipse.php__

public function __construct(radiusX, radiusY)
public function getXML()
public function setColorFill(red,green,blue)
public function setWidthStroke(size)
public function setColorStroke(red,green,blue)

__class.svgCircle.php extends __class.svgEllipse.php__

public function __construct(radius)

__class.svgRectangle.php__

public function __construct(width, height)
public function getXML()
public function setColorFill(reed,green,blue)
public function setWidthStroke(size)
public function setColorStroke(reed, green, blue)

__class.svgSquare.php extends __class.svgRectangle.php__

public function __construct(width)
public function getXML()

__class.svgText.php__

public function __construct(text)
public function getXML()
public function setColorFill(reed, green, blue)
public function setText(text)
public function setTextAnchor(position)
public function setFont(fontFamily, fontStyle, fontWeight, fontSize)

__class.svgTextBox.php uses __class.svgRectangle.php and __class.svgText.php__

public function __construct(width)
public function getXML()