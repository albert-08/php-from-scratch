<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require '../funciones.php';
require 'Models/Task.php';
require 'Enums/ColorsEnum.php';

$greeting = 'Hola mundo';

$tasks = [
    new Task(completed: true, title: 'Estudiar PHP'),
    new Task('Estudiar JavaScript'),
    new Task('Estudiar Laravel'),
];

$tasks[0]->setColor(ColorsEnum::BLUE->value);
$tasks[1]->setColor(ColorsEnum::GREEN->value);
$tasks[2]->setColor(ColorsEnum::RED->value);

$completedTasks = array_filter($tasks, function ($task) {
    return $task->completed;
});

$pendingTasks = array_filter($tasks, function ($task) {
    return !$task->completed;
});

require 'index.view.php';