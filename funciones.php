<?php

function dd($value) {
    var_dump($value);
    return die();
}

function dbConnect() {
    try {
        $pdo = new PDO('mysql:host=127.0.0.1;dbname=todos', 'root', '');

        return $pdo;
    } catch (PDOException $error) {
        die($error->getMessage());
    }
}

function getAllTasks($pdo) {
    $query = $pdo->prepare('SELECT * FROM tasks');

    $query->execute();

    $tasks = $query->fetchAll(PDO::FETCH_CLASS, 'Task');

    return $tasks;
}