<?php


class Database {
    private static $host = "localhost";
    private static $port = "3307";
    private static $db = "agencia"; 
    private static $user = "root";
    private static $pass = "";

    public static function getConnection() {
        try {
            $conn = new PDO(
                "mysql:host=" . self::$host . ";port=" . self::$port . ";dbname=" . self::$db, 
                self::$user, 
                self::$pass,
                array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
            );
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e) {
            die("Erro na conexão: " . $e->getMessage());
        }
    }
}