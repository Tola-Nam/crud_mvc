<?php
class database
{
    private static $localhost = 'localhost';
    private static $name = 'root';
    private static $pass = '';
    private static $dbname = 'schools';
    public static function connection(): mysqli
    {
        return $conn = new mysqli(
            self::$localhost,
            self::$name,
            self::$pass,
            self::$dbname
        );

        if($conn->connect_error){
            echo 'connection is failed';
        }
    }
}