<?php

include("Micabecera.php");

//Creamos el objeto
$html=new Micabecera();

//Mostrar la cabecera con echo porque es un Heredoc
echo $html->getCabecera();

//Contenido
$html->parrafo("Holaaaaaaaaaaaaa");

//Mostrar el footer con echo porque es un Heredoc
echo $html->getFooter();

$html->__toString();

?>