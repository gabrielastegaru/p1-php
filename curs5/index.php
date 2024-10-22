<?php

echo "Hello \"World!\"\\ \$ \n \t test";
// caracter escape: "\" - daca vrem sa afisam orice in browser punem \ inainte de orice vrem sa afisam

echo '$'; //\n este folosit doar in linie de comanda (adica in terminal) si \t(tab) tot in terminal
echo '<br>';
echo 'Salut de la \'mare\'';
echo '<br>';
$string = 'Hello from the future!';
echo strlen($string);
echo '<br>';
echo str_word_count($string);
echo '<br>';
echo strrev($string);
echo '<br>';
echo strpos($string, 'f');
echo '<br>';
var_dump(strpos($string, 'from'));
echo '<br>';
echo str_replace('future', 'past', $string);
echo '<br>';
echo substr($string, 0, 5);
echo '<br>';
echo substr($string, 5,4);
echo '<br>';
echo substr($string, -7, 6);
echo '<br>';
echo strtoupper($string);
echo '<br>';
echo strtolower($string);
echo '<br>';
echo ucfirst($string);
echo '<br>';
echo ucwords($string);
echo '<br>';

$name = ' Marian   &nbsp;';
echo $name . trim($name) . $name;

$strings = explode(' ', $string);
echo '<pre>';
print_r($strings);
$array = str_split($string);
print_r($array);
$array2 =  str_split($string, 5);
print_r($array2);
echo implode(',', $strings);
echo '<br>';
echo str_repeat('+', 10);
echo '<br>';
echo md5('mypassword');
