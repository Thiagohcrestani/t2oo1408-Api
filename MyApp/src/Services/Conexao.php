<?php

namespace MyApp\Services;

use PDO;

class Conexao {

    private static $conn;
    private $PDO;
    
    private function __construct() {
        
    }
    public static function getConexao() {
        if (isset($conn)) {
            return $conn;
        } else {
            $conn = new \PDO("mysql:host=127.0.0.1; port=3306; dbname=singleton", "root", "root", array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            return $conn;
        }
    }

}