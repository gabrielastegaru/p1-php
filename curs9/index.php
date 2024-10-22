<?php

require_once 'Apple.php';

$apple = new Apple( 'apple1', 'red', 'round', 2024);
var_dump($apple);

echo '<br>';
echo $apple->fall(); //apelam metoda fall
echo '<br>';
echo $apple->location();
