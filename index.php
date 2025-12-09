<?php
  require 'functions.php';

  $greeting = 'Hola mundo';

  $tasks = [
    [
      'title' => 'Estudiar PHP',
      'completed' => true
    ],
    [
      'title' => 'Estudiar JS',
      'completed' => false
    ],
    [
      'title' => 'Estudiar Node',
      'completed' => false
    ]
  ];

  $completedTasks = array_filter($tasks, function ($task) {
    return $task['completed'];
  });

  $pendingTasks = array_filter($tasks, function ($task) {
    return !$task['completed'];
  });

  dd($pendingTasks);

  require 'index.view.php';