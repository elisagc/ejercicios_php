<?php
require_once "Figura.php";
class Rectangulo extends Figura
{
  private $base64Img;

  public function __construct($color, $dimensiones)
  {
    parent::__construct($color, $dimensiones);

  }

  public function getBase64()
  {
    $side = parent::getDimensiones();
    $hexColor = parent::getHexColor();
    $image = imagecreate($side[0], $side[1]);
    $bg = imagecolorallocate($image, 178, 215, 247);
    $color = imagecolorallocate($image, $hexColor["r"], $hexColor["g"], $hexColor["b"]);
    imagefilledrectangle($image, 0, 0, $side[0], $side[1], $color);

    ob_start();
    imagejpeg($image);
    $data = ob_get_contents();
    ob_end_clean();
    return "data:image/jpg;base64, " . base64_encode($data);
  }

  public function __toString()
  {
    return parent::__toString() .
      "<img src='" . $this->getBase64() . "' />" .
      $this->getData() .
      "</div>";
  }

  public function getData()
  {
    return "<p class='info'>Soy un rectángulo cuya base mide " . parent::getDimensiones()[0] . " y altura " . parent::getDimensiones()[1] . " píxeles</p>" .
      "<p class='info'>Y mi perímetro es de: " . $this->perimetro() . "</p>";
  }
  function perimetro()
  {
    return parent::getDimensiones()[0] * 2 + parent::getDimensiones()[1] * 2;
  }
}