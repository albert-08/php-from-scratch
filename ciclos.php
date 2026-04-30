<?php

//Names array, players manchester united
/* $names = array("David De Gea", "Harry Maguire", "Bruno Fernandes", "Marcus Rashford", "Paul Pogba", "Edinson Cavani", "Mason Greenwood", "Luke Shaw", "Anthony Martial", "Fred", "Donny van de Beek", "Cristiano Ronaldo", "Jadon Sancho", "Raphaël Varane", "Alex Telles", "Dean Henderson", "Nemanja Matic", "Victor Lindelöf", "Aaron Wan-Bissaka", "Eric Bailly", "Diogo Dalot", "Alexis Sánchez", "Juan Mata", "Phil Jones", "Axel Tuanzebe", "Amad Diallo", "Facundo Pellistri"); */

// $itemsNumber = count($names);
// var_dump($itemsNumber);
// die();

// FOR loop to print each name in the array
// for ($i=0; $i < $itemsNumber; $i++) { 
//     echo $names[$i] . "<br>";
// }

// Array from an associative array with manchester united players, in wich any player has name, age, country and position
$players = array(
    array(
        "name" => "David De Gea", 
        "age" => 30, 
        "country" => "Spain", 
        "position" => "Goalkeeper"
    ),
    array(
        "name" => "Harry Maguire", 
        "age" => 28, 
        "country" => "England", 
        "position" => "Defender"
    ),
    array(
        "name" => "Bruno Fernandes", 
        "age" => 27, 
        "country" => "Portugal", 
        "position" => "Midfielder"
    ),
    array(
        "name" => "Marcus Rashford", 
        "age" => 24, 
        "country" => "England", 
        "position" => "Forward"
    ),
    array(
        "name" => "Paul Pogba", 
        "age" => 29, 
        "country" => "France", 
        "position" => "Midfielder"
    )
);

// FOREACH loop to print each name in the array
foreach ($players as $player) {
    echo "Nombre: " . $player["name"] . "<br>" . 
        "Edad: " . $player["age"] . "<br>" . 
        "País: " . $player["country"] . "<br>" . 
        "Posición: " . $player["position"] . "<br><hr>";
}