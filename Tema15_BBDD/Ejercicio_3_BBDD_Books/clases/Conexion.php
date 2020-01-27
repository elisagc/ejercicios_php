<?php
class Conexion
{
    private static $instance = NULL;
    private $con = NULL;

    private function __construct()
    {
        $config = file_get_contents("../config/config.json");
        $config = json_decode($config, true);
        //var_dump($config);
        $this->con = new PDO($config['db_host'], $config['db_username'], $config['db_password'], array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    }

    private function __clone()
    {
    }

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
        try {
            $statement = $this->con->prepare(trim($query));
            $res = $statement->execute();
            return $res;
        } catch (PDOException $exception) {
            return $exception;
        }
    }

    public function selectQuery($query)
    {
        try {
            $statement = $this->con->prepare($query);
            $statement->execute();
            $rows = $statement->fetchAll(PDO::FETCH_ASSOC);

            return $rows;
            /*
Ejemplo:$query= “Select * from book where autor=:author’;
$statement = $db->prepare($query);
$statement->bindValue(‘author’,’Cervantes’);
$statement->execute();
$rows=$statement->fetchAll();
var_dump(rows);

        */
        } catch (PDOException $exception) {
            return "ERROR AL REALIZAR LA QUERY" . $exception;
        }
    }

    public function dbClose()
    {
        $this->con = null;
        echo "CONEXIÓN CERRADA";
    }
}
