<?php

abstract class Figura
{

  private $color;
  private $dimensiones;

  public function __construct($color, $dimensiones)
  {
    $this->color = $color;
    $this->dimensiones = $dimensiones;
  }

  public function __toString()
  {
    return "<div class='wrapper'>" .
      "<h1 class='mainHeader'>" . strtoupper(get_class()) . "</h1>";

  }

  public function getHexColor()
  {
    return array(
      "r" => hexdec($this->color[1] . $this->color[2]),
      "g" => hexdec($this->color[3] . $this->color[4]),
      "b" => hexdec($this->color[5] . $this->color[6])
    );
  }

  public function printData()
  {
    echo "<p class='info'>Y mi perímetro es de: " . $this->perimetro() . "</p>";
  }
  public function getColor()
  {
    return $this->color;
  }
  public function getDimensiones()
  {
    return $this->dimensiones;
  }
  abstract function perimetro();
}