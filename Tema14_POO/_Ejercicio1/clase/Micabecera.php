<?php namespace clase;

class Micabecera{
    private $cabecera;
    private $footer;

    function __construct(){
        $header=<<<HRD
        <!DOCTYPE html>
        <html lang="en">
        <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        </head>
        <body>
HRD;

        $foot=<<<HRD
        </body>
        </html>
HRD;
        $this->cabecera=$header;
        $this->footer=$foot;
    }

    function getCabecera(){
        return $this->cabecera;
    }

    function getFooter(){
        return $this->footer;
    }

    function __toString(){
       // var_dump($this->cabecera);
       // var_dump($this->footer);
    }

    function parrafo($texto){
echo <<<HRD
    <p>$texto</p>
HRD;
       
    }
}

?>
