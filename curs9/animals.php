<?php

require_once 'Dog.php';
require_once 'Cat.php';

$dog = new Dog('Thor', 5, 4, 20);
$dog->setLegs(6);
$dog->setHeight(30);
var_dump($dog->getHeight());
echo '<br>';
echo $dog;

$cat = new Cat('Tom', 4, 4, 5);

$cat->legs = 2;
echo '<br>';
var_dump($cat);

