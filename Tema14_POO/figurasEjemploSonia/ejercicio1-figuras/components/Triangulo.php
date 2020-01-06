<?php
require_once "Figura.php";
class Triangulo extends Figura
{

  public function __construct($color, $dimensiones)
  {
    parent::__construct($color, $dimensiones);

  }

  private function getStyles()
  {
    return "width: 0;" .
      "height:0;" .
      "border-right:" . parent::getDimensiones()[0] / 2 . "px solid transparent;" .
      "border-top:" . parent::getDimensiones()[1] / 2 . "px solid transparent;" .
      "border-left:" . parent::getDimensiones()[0] / 2 . "px solid " . parent::getColor() . ";" .
      "border-bottom:" . parent::getDimensiones()[1] / 2 . "px solid " . parent::getColor() . ";";

  }

  public function __toString()
  {
    return parent::__toString() .
      "<div style='" . $this->getStyles() . "'></div>" .
      $this->getData() .
      "</div>";
  }

  public function getData()
  {
    return "<p class='info'>Soy un triángulo cuya base mide " . parent::getDimensiones()[0] . " y altura " . parent::getDimensiones()[1] . " píxeles</p>" .
      "<p class='info'>Y mi perímetro es de: " . $this->perimetro() . "</p>";
  }
  function perimetro()
  {
    return parent::getDimensiones()[0] * 3;
  }
}