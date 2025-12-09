<?php

/* $names = [
  'David de Gea',
  'Lisandro Martinez',
  'Bruno Fernandez',
  'Cristiano Ronaldo',
  'Marcus Rashford'
]; */

/* $itemsNumber = count($names);

// For
for ($i=0; $i < $itemsNumber; $i++) { 
  echo $names[$i] . "<br>";
} */

// For Each
/* foreach ($names as $name) {
  echo $name . "<br>";
} */

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

foreach ($players as $player) {
  echo "Nombre: " . $player['name'] . "<br>" . 
      "Edad: ". $player['age'] . "<br>" .
      "Posición: " . $player['position'] . "<br><hr>";
}