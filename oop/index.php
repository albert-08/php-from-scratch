<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'functions.php';
require 'Models/Task.php';

$greeting = 'Hola mundo';

$tasks = [
  new Task("Estudiar PHP", true),
  new Task("Estudiar JS", false),
  new Task("Estudiar Node JS", false)
];

$completedTasks = array_filter($tasks, function ($task) {
  return $task->completed;
});

$pendingTasks = array_filter($tasks, function ($task) {
  return !$task->completed;
});

dd($pendingTasks);

require 'index.view.php';