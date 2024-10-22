<?php

require_once 'Curs.php';
require_once 'JavaCurs.php';

echo Curs::$curs; //apelarea functiei static
echo '<br>';
Curs::$curs = 'Java'; //am schimbat valoarea
$curs1 = new Curs();
Curs::$curs = 'Python';
echo $curs1->getName(); //apelarea functiei cu instantiere
echo '<br>';
echo Curs::getCurs(); //am apelat metoda static
$curs2 = new JavaCurs();
echo '<br>';
echo $curs2->getCursName();