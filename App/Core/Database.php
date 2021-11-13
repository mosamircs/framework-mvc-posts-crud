<?php
namespace App\Core;

use App\Config\Config;
use PDO;
use PDOException;

include "App/Config/Config.php";
class Database extends Config
{
    private static $instance;
    private $pdo,
            $query;
    /**
     * constructor pricvate for singelton
     * make connection  using pdo to mysql 
     */
    private function  __construct()
    {
        try{
            $this->pdo = new PDO("mysql:host=".self::HOST.";dbname=".self::DATABASE_NAME,self::USERNAME,self::PASSWORD);
            echo "Connected Success";
        }catch(PDOException $exception){
            die($exception->getMessage());
        }
    }

    /**
     * create instance if not exist using  singelton patern
     * @return PDO $pdo connection
     */
    public static function getInstanceDatabase()
    {
     if (!isset(self::$instance)){
        self::$instance = new Database();   
    }
     return self::$instance;
    }

    /**
     * @param sql command 
     * @param params array 
     */
    public function query($sql,array $params=[])
    {
        $this->query=$this->pdo->prepare($sql);
        if($this->query){
            $counter = 1;
            foreach($params as $param)
            {
                $this->query->bindValue($counter,$param);
            }
        }
    }
}