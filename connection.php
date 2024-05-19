<?php

class Database {//database is the class name

    public static $connection;

    public static function getConnection(){

        if(!isset(Database::$connection)){//checks if there is no connection     

            Database::$connection = new mysqli("localhost","root","hasindu2003","electo-master-eshop","3306");
        }

    }

    public static function iud($query){
        Database::getConnection();
        Database::$connection->query($query);
    }

    public static function search($query){
        Database::getConnection();
        $resultset=Database::$connection->query($query);

        return $resultset;

    }




}






?>