<?php

/*
$file = fopen("persons.csv", "r");

//$persons = [];
$columns = fgetcsv($file);
while ($data = fgetcsv($file)) {
//    $persons[] = $data;
    $persons = [];
    foreach ($data as $key => $value) {
        $person[$columns[$key]] = $value;
        $persons[] = $person;
    }
}
echo '<pre>';
//print_r($columns);
print_r($persons);


$persons = [];
$columns = fgetcsv($file);
while ($data = fgetcsv($file)) {
    $persons = $data;
    foreach ($persons as $key => $value) {
        $person[$columns[$key]] = $value;
        unset($persons[$key]);
    }
    $persons[] = $person;

}
echo '<pre>';
print_r($persons);*/

$file = fopen('persons.csv', 'r');

$persons = [];
$columns = fgetcsv($file);
while ($data = fgetcsv($file)) {
    $person = $data;
    foreach ($person as $key => $value) {
        $person[$columns[$key]] = $value;
        unset($person[$key]);
    }
    $persons[] = $person;

}

echo '<pre>';
print_r($persons);


//de facut functia sa returneze un array