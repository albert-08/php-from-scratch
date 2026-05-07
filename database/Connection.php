<?php

class Connection
{
    public static function start()
    {
        try {
            $pdo = new PDO('mysql:host=127.0.0.1;dbname=todos', 'root', '');

            return $pdo;
        } catch (PDOException $error) {
            die($error->getMessage());
        }
    }
}