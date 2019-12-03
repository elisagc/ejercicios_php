<?php
// Crear una imagen en blanco y añadir algún texto

// SIN TERMINAR PERO FUNCIONANDO:

function buffer(){
    $im =imagecreatefromjpeg("./img/fondo.jpeg");
    $negro = imagecolorallocate($im,0, 0, 0);
    $texto = "PERRO";
    $fuente = realpath("font.ttf");
    imagettftext($im, 12,rand(-40,70),40, 50, $negro, $fuente, $texto);

    
    ob_start(); // abre el buffer
    imagejpeg($im);
    $contentBuffer=ob_get_contents(); //guardamos el contenido del buffer
   
    ob_end_clean();
    imagedestroy($im); // destruye la imagen

    return $contentBuffer;
}

function base64img(){

    $contentBuffer=buffer();
    $base64content=base64_encode($contentBuffer);   // pasa la imagen a base64
    echo <<<HRD
    <img src="data:image/jpg;base64,$base64content"> 
HRD;

// O también:
// $img= 'data:image/jpeg;base64,' . $base64content;
// en index  echo '<img src="' . $img . '"/><br>';
}



// SOLUCIÓN 2
function create(){

    $im = imagecreate(320, 220);
    $color_fondo = imagecolorallocate($im, 0, 0, 0);
    $str = AUTH;
    $chars = str_split($str);
    $posX = 0;
    foreach ($chars as $char) {
        $fontSize = rand(15, 35);
        $deg = rand(0, 360);
        $posX += 45;
        $posY = rand(35, 180);
        $colorTexto = imagecolorallocate($im, rand(20, 255), rand(20, 255), rand(20, 255));
        $negro = imagecolorallocate($im, 0, 0, 0);
        imagettftext($im, $fontSize, $deg, $posX, $posY, $colorTexto, realpath("font.ttf"), $char);
    }
    ob_start();
    imagepng($im);
    $content = ob_get_contents();
    ob_clean();
    $img = 'data:image/jpeg;base64,' . base64_encode($content);
    return [$img,$str];
}

function generateRandomString($length)
{
    $include_chars = "23458ABCDEFGHJKNQRSTUVXYZ";
    $charLength = strlen($include_chars);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $include_chars[rand(0, $charLength - 1)];
    }
    return $randomString;
}
define("AUTH", generateRandomString(6));

/*   
  $arr=create();
  echo '<img src="' . $arr[0] . '"/><br>';
  echo $arr[1];
  echo<<<EOD
  <form method="POST" action="./authentication.php">
      <input type="text" name="input">
      <input type="submit" name="submit" value="Enviar">
      <input type="hidden" name="auth" value="$arr[1]">
  </form>
EOD;
*/

// FIN SOLUCIÓN 2

?>