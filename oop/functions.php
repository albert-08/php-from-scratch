<?php

function dd($value) {
  var_dump($value);
  die();
}

function dbConnect()
{
  try {
    return new PDO('mysql:host=127.0.0.1;dbname=todos', 'root', '');
  } catch (PDOException $error) {
    die($error->getMessage());
  }
}

function getAllTasks($pdo) {
  $query = $pdo->prepare('SELECT * FROM tasks');

  $query->execute();

  return $query->fetchAll(PDO::FETCH_OBJ);
}