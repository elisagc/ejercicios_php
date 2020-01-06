<?php
require_once "Figura.php";
class Circulo extends Figura
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
    $image = imagecreate($side, $side);
    $bg = imagecolorallocate($image, 178, 215, 247);
    $color = imagecolorallocate($image, $hexColor["r"], $hexColor["g"], $hexColor["b"]);
    imagefilledellipse($image, $side / 2.1, $side / 2.1, $side - 5, $side - 5, $color);

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
    return "<p class='info'>Soy un circulo cuyo radio mide " . parent::getDimensiones() . " píxeles</p>" .
      "<p class='info'>Y mi perímetro es de: " . $this->perimetro() . "</p>";
  }
  function perimetro()
  {
    return parent::getDimensiones() * 3.1416 * 2;
  }
}