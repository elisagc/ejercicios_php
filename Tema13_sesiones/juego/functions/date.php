<?php

function fechaYhora(){

    date_default_timezone_set('Europe/Madrid'); // soluciona el problema de que salga dos horas menos

    $fecha=date('d-m-Y'); 
    $hora=date('H:i:s');
    $fechaSiguiente=date('d') + 1 . date('-m-Y');
    $fechaLunes=('d-m-Y'); 
    
    $format='next monday';
    $date =new DateTime($format);
    $lunes=$date->format('d-m-Y');

 echo <<<HRD
    <table>
        <tr>
            <th colspan="2"> FECHAS Y HORAS </th>
        <tr>
            <td>Fecha actual: </td>
            <td>$fecha</td>
        </tr>
        <tr>
            <td>Fecha de mañana: </td>
            <td>$fechaSiguiente</td>
        </tr>
        <tr>
            <td>Hora actual: </td>
            <td>$hora</td>
        </tr>
        <tr>
            <td>Próximo lunes: </td>
            <td>$lunes</td>
        </tr>
    </table>
HRD;

}


/* 

EJEMPLOS:

D -> día en letra 
M -> mes en letra
d -> día en número
m -> mes en número
Y -> año
H -> hora
i -> minutos
s -> segundos

$valid_time_formats = ['now', 'jan 1 2016', '12 hours ago', 'next monday', 'first day of next month', 'last day of this month', '12/25/2015'];

foreach($valid_time_formats as $format) {
    echo $format;
    echo "<br>";
  $date = new DateTime($format);
  print($date->format('d-m-Y H:i:s'))
;
  echo "<br>";
}

*/

?>