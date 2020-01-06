<?php
require_once "Figura.php";
class Cuadrado extends Figura
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
    $color = imagecolorallocate($image, $hexColor["r"], $hexColor["g"], $hexColor["b"]);
    imagefilledrectangle($image, 0, 0, $side, $side, $color);

    ob_start();
    imagejpeg($image);
    $data = ob_get_contents();
    ob_end_clean();
    return "data:image/jpg;base64, " . base64_encode($data);
  }

  public function __toString()
  {
    return parent::__toString() .
      "<img src='" . $this->getBase64() . "' /><br>" .
      $this->getData() .
      "</div>";
  }

  public function getData()
  {
    return "<p class='info'>Soy un cuadrado cuyos lados miden " . parent::getDimensiones() . " píxeles</p>" .
      "<p class='info'>Y mi perímetro es de: " . $this->perimetro() . "</p>";
  }
  function perimetro()
  {
    return parent::getDimensiones() * 4;
  }
}