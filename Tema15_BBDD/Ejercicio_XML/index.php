<?php

$archivo = "info.xml";

if (!$xml = simplexml_load_file($archivo)) {
      echo "No se ha podido cargar el archivo";
} else {
      foreach ($xml as $usuario) {
            echo 'Nombre: ' . $usuario->nombre . '<br>';
            echo 'Apellido: ' . $usuario->apellido . '<br>';
            echo 'Dirección: ' . $usuario->direccion . '<br>';
            echo 'Ciudad: ' . $usuario->ciudad . '<br>';
            echo 'País: ' . $usuario->pais . '<br>';
            echo 'Teléfono: ' . $usuario->contacto->telefono . '<br>';
            echo 'Url: ' . $usuario->contacto->url . '<br>';
            echo 'Email: ' . $usuario->contacto->email . '<br>';
      }
}
