<?php 

namespace Source\Models;

use PDO;
use PDOException;

class Database extends PDO{
    
    private $conn;
    
    public function __construct()
    {
        try{
            $this->conn = new PDO("mysql:host=localhost;dbname=kind_ad","vini","Ralph@2411", array(
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
                PDO::ATTR_CASE => PDO::CASE_NATURAL
            ));

            return $this->conn;
        
        }catch(PDOException $e){
            print("Error: ".$e->getMessage());
            die();
        }
    }
}