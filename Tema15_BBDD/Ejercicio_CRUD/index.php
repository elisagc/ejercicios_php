<?php
spl_autoload_register(function ($className) {
      include __DIR__ . './clases/' . $className . '.php'; // PARA CUANDO NO USAS NAMESPACE
});


$con = Conexion::getInstance();
