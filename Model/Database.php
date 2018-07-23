<?php


class Database{
    static protected $dbUser='root';
    static protected $dbPass='root';
    static protected $dbName='APManager';
    static protected $dbHost='localhost';
    
    static function createConnection(){
        return $conn= new mysqli(self::$dbHost, self::$dbUser, self::$dbPass, self::$dbName);
    }
}




