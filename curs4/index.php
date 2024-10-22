<?php
//array indexat
$cars = ['BMW', 'Volvo', 'Audi'];
$cars2[]= 'Audi';
$cars2[]= 'Opel';

echo $cars[1];

//array asociativ
$names = [
    'nume1' => 'Marian',
    'nume2' => 'Lorena',
    'nume3' => 'Irina',
    'nume4' => 'Andrei',
    'nume5' => 'Ionut',
];
echo '<br>';
echo $names['nume4'];
echo '<br>';

$names2['nume1'] = 'Marian';
$names2['nume2'] = 'Ionut';

//array multidimensional

$garage = [
    ['brand' => 'BMW', 'gas_type' => 'diesel', $cars], //index ul pt primele 2 sunt cheile brand si gas_type, daca sunt deja definite => $cars primeste indexul 0.
    ['brand' => 'Audi', 'gas_type' => 'GPL'],
];

echo '<br>';
echo $garage[1]['brand'];
echo '<br>';
echo $garage[0][0][0]; //second index is for $cars element
echo '<br>';

//putem sa le iteram cu foreach

foreach($garage as $key => $car) {
    echo '<br>' . $key . '. ' . $car['brand'];
}

//sau

foreach($garage as $car) {
    echo '<br>' . $car['brand'];
}

echo '<br>';

//sortarea vectorilor (6 functii)

echo '<hr>';
$animals = ['dog', 'cat', 'elephant', 'bird', 'mouse'];
asort($animals); //sorteaza crescator dupa valoare
print_r($animals);
echo '<br>';
rsort($animals); //sorteaza descrescator dupa valoare
print_r($animals);
echo '<br>';
echo '<hr>';

$colors = [
    'color1' => 'red',
    'color2' => 'green',
    'color3' => 'blue',
    'color4' => 'yellow',
    'color5' => 'black',
];

asort($colors);
print_r($colors);
echo '<br>';
ksort($colors); //sorteaza crescator dupa chei
print_r($colors);
echo '<br>';
echo '<hr>';

$cities = [
    'city2' => 'Bucuresti',
    'city5' => 'Cluj',
    'city1' => 'Timisoara',
    'city7' => 'Iasi',
];
arsort($cities);
print_r($cities);
echo '<br>';
krsort($cities);
print_r($cities);
echo '<br>';
echo '<hr>';

//sa testam daca in $cities exista valoarea Timisoara

if (in_array('Timisoara', $cities)) {
    echo 'Timisoara is found in the array.';
    
}else {
    echo 'Timisoara is not found in the array.';
}

echo '<br>';
echo '<hr>';

//functii predefinite pentru vectori

$citiesMultiple = array_chunk($cities,2, true);
echo '<pre>';
print_r($citiesMultiple);
echo '<br>';

echo '<hr>';
$column = array_column($garage, 'brand');
print_r($column);
echo '<br>';
echo '<hr>';

$array_keys = ['first', 'second'];
$array_values = ['Marian', 'Marius'];
$array_combined = array_combine($array_keys, $array_values);
print_r($array_combined);


