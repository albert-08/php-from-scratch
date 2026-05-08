<?php

class Connection
{
    public static function start($config)
    {
        try {
            $pdo = new PDO(
                "{$config['type']}:host={$config['host']};dbname={$config['database']}",
                $config['user'],
                $config['password']
            );

            return $pdo;
        } catch (PDOException $error) {
            die($error->getMessage());
        }
    }
}