<?php

class FormBuilder
{

  static function printFirgurePicker()
  {
    echo <<<EOD
    <form action="./controllers/figure-picker.controller.php" class="mainForm" method="post">
    <input type="checkbox" name="cuadrado" id="cuadrado" value="cuadrado"><label>Cuadrado</label><br>
    <input type="checkbox" name="circulo" id="circulo" value="circulo"><label>Círculo</label><br>
    <input type="checkbox" name="rectangulo" id="rectangulo" value="rectangulo"><label>Rectángulo</label><br>
    <input type="checkbox" name="triangulo" id="triangulo" value="triangulo"><label>Triángilo</label><br>
    <button class="confirmButton" name="confirmar" id="confirmar">Confirmar</button>
  </form>
EOD;
  }

  static function printSquareSubForm()
  {
    echo <<<EOD
    <div class="formCol2">
    <label>Lado</label><input type="number" name="lados" id="lados" value="100" min="0" max="500" required>
    </div>
    <div class="formCol2">
    <label>Color</label><input type="color" name="cuadradoColor" id="cuadradoColor">
    </div>
EOD;
  }
  static function printCircleSubForm()
  {
    echo <<<EOD
    <div class="formCol2">
    <label>Radio</label><input type="number" name="radio" id="radio" value="100" min="0" max="500" required>
    </div>
    <div class="formCol2">
    <label>Color</label><input type="color" name="circuloColor" id="circuloColor">
    </div>
EOD;
  }
  static function printRectangleSubForm()
  {
    echo <<<EOD
    <div class="formCol2">
    <label>Base</label><input type="number" name="base" id="base" value="100" min="0" max="500" required>
    </div>
    <div class="formCol2">
    <label>Altura</label><input type="number" name="altura" id="altura" value="200" min="0" max="500" required>
    </div>
    <div class="formCol2">
    <label>Color</label><input type="color" name="rectanguloColor" id="rectanguloColor">
    </div>
EOD;
  }

  static function printTriangleSubForm()
  {
    echo <<<EOD
    <div class="formCol2">
    <label>Base</label><input type="number" name="baseTriangulo" id="baseTriangulo" value="100" min="0" max="500" required>
    </div>
    <div class="formCol2">
    <label>Altura</label><input type="number" name="alturaTriangulo" id="alturaTriangulo" value="200" min="0" max="500" required>
    </div>
    <div class="formCol2">
    <label>Color</label><input type="color" name="trianguloColor" id="trianguloColor">
    </div>
EOD;
  }

  static function printGoBack()
  {
    echo <<<EOD
    <form action="../controllers/reset-data.controller.php" class="mainForm" method="post">
    <button class="confirmButton" name="confirmar" id="confirmar">Volver a elegir figuras</button>
  </form>
EOD;
  }
}