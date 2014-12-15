<?php



class Connection
{


    private static $connection = null;
    private static $_instance = null;

    //подключение к БД

    private function __construct(){
        self::$connection = mysqli_connect('172.33.10.50','root','root','webdb') or die('Error connect DB: ' . mysql_error());
        self::$connection->query("SET lc_time_names = 'ru_RU'");
        self::$connection->query("SET NAMES 'utf8'");
    }


    //соединение с БД

    public static function getInstance()
    {
        if (is_null(self::$_instance)) {
            self::$_instance = new Connection();
        }
        return self::$_instance;
    }

    //возврат соединения

    public function getConnection(){
        return self::$connection;
    }

    //разрыв связи с БД

    public function killConnection(){
        mysqli_close(self::$connection);
        self::$connection = null;
    }

}
