<?php
$tasks = [
    [
        'title' => 'Estudiar PHP',
        'completed' => true
    ],
    [
        'title' => 'Aprender Laravel',
        'completed' => false
    ],
    [
        'title' => 'Crear un proyecto con Laravel',
        'completed' => false
    ]
];

$completedTasks = array_filter($tasks, function ($task) {
    return $task['completed'];
});

$pendingTasks = array_filter($tasks, function ($task) {
    return !$task['completed'];
});

echo "<h1>Mis tareas</h1>";

echo "<h2>Completas</h2>";
foreach ($completedTasks as $task) {
    echo $task['title'] . " ✅<br>";
}

echo "<h2>Pendientes</h2>";
foreach ($pendingTasks as $task) {
    echo $task['title'] .  " ❌<br>";
}