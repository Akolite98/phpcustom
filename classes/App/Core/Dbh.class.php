<?php 

namespace App\Core;

use PDO;

class Dbh{

    private static $host = 'localhost';
    private static $username = "root";
    private static $password = "";
    private static $dbname = 'viceo_store';

    public static function connect(){
        $dsn = "mysql:host=".self::$host.";dbname=".self::$dbname;
        $pdo = new PDO($dsn, self::$username, self::$password);
        $pdo->SetAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        return $pdo;
    }


    public static function query($query, $params = null){
        $statement = self::connect()->prepare($query);
        $statement->execute($params);

        $initial_word_of_query = explode(' ', $query)[0];

        if($initial_word_of_query == 'SELECT'){
            $result = $statement->fetchAll();
            return $result;
        }
    }
}