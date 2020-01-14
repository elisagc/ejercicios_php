   <?php
class Conexion
{  
    private static $instance = NULL;	
    private $con = NULL;
 
    private function __construct() 
    {
        $config= file_get_contents("config/config.json");
        $config=json_decode($config,true);
        //var_dump($config);
        $this->con = new PDO($config['db_host'],$config['db_username'],$config['db_password']);
    }

    private function __clone() { }

    public static function getInstance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;
    }


    public function connectToDB() 
    {
        return $this->con;
    }

    public function query($query)
    {
        try{
            // es como: connectToDB -> prepare($query);
            $statement= $this->con->prepare($query);
            $statement->execute();
            echo "ÉXITO";
        
        }catch(PDOException $exception){
            print "ERROOOOR" . $exception;
        }
    }

    public function dbClose() {
        $this->con = null;
        echo "CONEXIÓN CERRADA";
     }

 
}

   ?>
   

