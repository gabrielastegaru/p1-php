<?php

//1. realizati o functie ce primeste ca parametru un string. Functia va elimina toate vocalele din string si va returna string-ul rezultat.

$stringCuVocale = "abcdefghijklmnopqrstuvwxyz";
function eliminaVocale($stringCuVocale)
{
    $vocale = ['a', 'e', 'i', 'o', 'u'];
    foreach ($vocale as $vocala) {
        $stringCuVocale = str_replace($vocala, '', $stringCuVocale);
    }
//    $strFaraVocale = str_replace($vocale, '$stringCuVocale', $stringCuVocale);
    return $stringCuVocale;
}
echo eliminaVocale($stringCuVocale);
echo "<br>";
/*
//2. realizati o functie ce primeste ca parametru un string. aceasta va returna un vector ce reprezinta statistica caracterelor continute de string-ul primit ca parametru. ex: pentru "acasă" vectorul rezultat va fi ["a" => 2, "c" => 1, "s" => 1, "ă" => 1]

function statistica ($strCaractere) {

}
*/
echo "<br>";
//3. realizati o functie ce primeste doi parametri (un string si un numar). functia va cauta in string-ul primit ca parametru cuvintele cu dimensiunea egala cu numarul primit ca parametru si le va afisa.

$string = "realizati o functie ce primeste doi parametri (un string si un numar)";
$x = 9;
function dimensiuneCuvinte($string, $x) {
    $cuvinte = explode(" ", $string);
    foreach ($cuvinte as $cuvant) {
        if (strlen($cuvant) == $x) {
            echo $cuvant . "\n";
        }
    }
}
dimensiuneCuvinte($string, $x);

