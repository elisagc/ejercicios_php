   <?php
class Conexion
{    // Contenedor Instancia de la clase
    private static $instance = NULL;	
    private $con = NULL;
    // Constructor privado, previene la creación de objetos vía new
    private function __construct() {
        $config= file_get_contents("config/config.json");
        $config=json_decode($config,true);
        var_dump($config);
        $this->con = new PDO($config['db_host'],$config['db_username'],$config['db_password']);
    }

    // Clone no permitido
    private function __clone() { }

    // Método singleton 
    public static function getInstance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;
    }


    public function connectToDB() {
        return $this->con;
    }

    public function query(){
    
    }

 
}

   ?>
   

   ejercicio:

   index: logueo y registrer 

   la contraseña se necesita la codificaicon md5

   el controlador va redirigiendo

   modelo: operaciones sobre la bbdd
   controlador ControlerBooks


SERIALIZE UNSERIALIZE