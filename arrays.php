<?php

// Arrays
$names = [
  'Beto',
  'Daniela',
  'Juan',
  'Frida'
];

$ages = [
  31,
  27,
  29,
  29
];

/* var_dump($names);
var_dump($ages); */

// echo $ages[2];

$players = [
  'goalkeepers' => [
    'David de Gea',
    'Tom Heaton',
    'Matej Kovar'
  ],
  'defender' => 'Lisandro Martinez',
  'midfielder' => 'Bruno Fernandez',
  'striker' => 'Cristiano Ronaldo'
];

// echo $players['striker'];
// echo $players['goalkeepers'][0];

// var_dump($players);

$players = [
  [
    'name' => 'Cristiano Ronaldo',
    'age' => 37,
    'country' => 'Portugal',
    'position' => 'striker'
  ],
  [
    'name' => 'David de Gea',
    'age' => 31,
    'country' => 'España',
    'position' => 'goalkeeper'
  ]
];

echo $players[1]['country'];
var_dump($players);