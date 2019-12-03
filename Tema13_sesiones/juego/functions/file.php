<?php

function fileInfo($file, $name){ 
    echo "<p>" . "Nombre del fichero: ". $file['name'] . "</p>";
    echo "<p>" . "Tipo: " . $file['type'] . "</p>";
    echo "<p>" . "Tamaño: " . $file['size'] . "</p>";
    echo "<p>" . "Nombre temporal: " . $file['tmp_name'] . "</p>";
    echo "<p>" . "Error: " . $file['error'] . "</p>";
}

function joinString($name){ //quita espacios en blanco entre palabras
    $name=trim($name);
    $name=str_replace(' ','',$name);
    return $name;
}

function loadFile($file,$name){ //enviar el fichero subido ($_FILES['file']) y el nombre para ese fichero

    $fileName= $file['name'];
    $fileTmpName= $file['tmp_name'];
    $fileError= $file['error'];
    
    $extension = explode('.',$fileName);    //devuelve un array 
    $ext=end($extension);                   // coge el último valor del array anterior
    $extPermitidas = array('jpg','jpeg','png','pdf','gif');

    if (in_array($ext,$extPermitidas)) {    // si la extensión jpg existe en extensiones permitidas
        if ($fileError === 0){
                $newName=joinString($name); // podría ser el nombre de un usuario en un input text, se pasaría como variable y se haría eso por si lo envían mal
                $newFileName = $newName . "." . time();
                $fileDestination = './uploads/' . $newFileName . "." . $ext;
                move_uploaded_file($fileTmpName,$fileDestination);
                return $fileDestination;
               //SI HA HABIDO ALGÚN ERROR SE DEVUELVE NULL;
        } else {
            echo $fileError;
            echo "<p class='alert'>Hay un error de subida</p>";
        }
    } else {
        echo "<p class='alert'>No se puede incluir esa extensión</p>";
    }
}

function buscarImg($name){ // BUSCA UNA IMAGEN GUARDADA Y LA IMPRIME
    $contenidoDir= scandir("./uploads");
    $patron="/" . joinString($name . "/e");  // ejemplo: /ElisaGarcia/
    $exist=false;
    foreach ($contenidoDir as $file){
        if (preg_match($patron,$file)){    // el patrón se pone entre " "
            $imagen='<img src="./uploads/' . $file . '">';
            $exist=true;
            echo $imagen;
        }
    }
    if (!$exist){
        echo "La imagen buscada no existe";
    }
}

/* OTROS EJEMPLOS DE PREG_MATCH

$direccion = "Calle Cuéllar";
if(preg_match("/^Calle/", $direccion))
{
 echo "Es una calle";
} else {
    echo "No es una calle";
}

*/