<?php

//1. creati o functie ce alege aleatoriu o valoare dintr-un vector primit
// ca argument (folositi functia array_rand() - verificati documentatia).

$x = [1, 2, 3, 4, 5, 6, 7, 8, 9];
function valoareAleatorie($x) {
   return array_rand($x, 1);
}
echo $x[valoareAleatorie($x)];
echo '<br>';


//2. construiti o clasa "Carte" cu proprietatile: titlu, autor, an, pagini.
//creati o functie ce afiseaza proprietatile obiectului in formatul
// "Nume Autor, 'Titlu carte', nr. pagini: 123, an aparitie: 2005."

require_once 'Carte.php';

$carte = new Carte();
$carte->setCarte('Titlu carte', 'Nume Autor', 2005, 123);
var_dump($carte);
echo '<br>';
echo $carte->carte;