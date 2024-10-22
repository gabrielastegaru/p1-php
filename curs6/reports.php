<?php

require_once 'export_to_csv.php';

$persons = [
    [
        'first_name' => 'Marian',
        'last_name' => 'Jones',
        'phone' => '0783527831',
        'email' => 'marijones@gmail.com',
    ],
    [
        'first_name' => 'Robert',
        'last_name' => 'Ivan',
        'phone' => '0783527841',
        'email' => 'robertivan@gmail.com',
    ],
    [
        'first_name' => 'Mihai',
        'last_name' => 'Andrei',
        'phone' => '0783727831',
        'email' => 'mihaiandrei@gmail.com',
    ],
];
exportToCSV($persons, 'persons.csv', 'w+');
