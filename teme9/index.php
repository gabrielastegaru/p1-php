<?php

require_once 'Telefon.php';

// 1. creati o clasa Produs cu doua proprietati: numeProdus si pret.
// Folositi conceptul de incapsulare. creati o functie toString() ce
// afiseaza informatii pt obiectele Produs sub forma: "Produs: $numeProdus, pret: $pret."

//2. Creati o clasa Telefon ce mosteneste clasa Produs. Aceasta va avea suplimentar
// alte doua proprietati: descriere si disponibilitate (cu valorile: disponibil sau
// indisponibil). Folositi conceptul de incapsulare pentru clasa nou creata. Creati
// o functie toString care suprascrie functia mostenita din Produs si afiseaza urmatoarea
// informatie: "Produsul:$numeProdus,cu urmatoarea descriere: $descriere, avand pretul:
// $pret, este: disponibil/indisponibil."

//3. Creati 2 obiecte Produs si 2 obiecte Telefon. Afisati informatiile
// fiecarui produs folosind functiile toString().

$casti = new Produs('AirPods 2', 600);
$boxa = new Produs('JBL Go 4', 250);

$iphone = new Telefon('Iphone15', 5500, 'Design din aluminiu
Suprafață frontală Ceramic Shield
Sticlă impregnată cu culoare pe partea posterioară', 'disponibil');
$iphone2 = new Telefon('Iphone16', 7900, 'Design din titan
Suprafață frontală Ceramic Shield
de ultimă generație
Sticlă texturată, mată,
pe partea posterioară', 'indisponibil');

var_dump($casti, $boxa, $iphone, $iphone2);