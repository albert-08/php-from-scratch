<?php

// ARRAYS
$names = [
    'John',
    'Jane',
    'Doe',
    'Smith'
];

$ages = [
    25,
    30,
    35,
    40
];

// ARRAYS ASOCIATIVOS
// Jugadores manchester united
$players = [
    'goalkeepers' => [
        'David de Gea',
        'Dean Henderson',
        'Sergio Romero '
    ],
    'defenders' => [
        'Lisandro Martínez',
        'Raphaël Varane',
        'Diogo Dalot',
        'Tyrell Malacia'
    ],
    'midfielders' => [
        'Bruno Fernandez',
        'Casemiro',
        'Christian Eriksen',
        'Fred'
    ],
    'strikers' => [
        'Cristiano Ronaldo',
        'Marcus Rashford',
        'Anthony Martial'
    ]
];

echo $players['midfielders'][0];

$players2 = [
    [
        'name' => 'David de Gea',
        'position' => 'goalkeeper',
        'age' => 32,
        'country' => 'Spain'
    ],
    [
        'name' => 'Lisandro Martínez',
        'position' => 'defender',
        'age' => 30,
        'country' => 'Argentina'
    ],
    [
        'name' => 'Bruno Fernandez',
        'position' => 'midfielder',
        'age' => 28,
        'country' => 'Uruguay'              
    ],
    [
        'name' => 'Cristiano Ronaldo',
        'position' => 'striker',
        'age' => 39,
        'country' => 'Portugal'
    ]
];

var_dump($players2);
echo $players2[1]['country'];