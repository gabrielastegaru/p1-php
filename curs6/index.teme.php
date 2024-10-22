<?php

echo '<h1>Tema Curs 6</h1>';
echo '<h2>Exercitiu 1</h2>';

function multiplicareEnunt($fileName, $fraza, $number)
{
    $file = fopen($fileName, 'a');
    for ($i = 1; $i <= $number; $i++) {
        fwrite($file, $fraza . $i . "\n");
    }
    fclose($file);
}

multiplicareEnunt('enunt.txt', 'Enuntul este acesta. Lorem Ipsum donor ', 5);

echo '<br><hr>';
echo '<h2>Exercitiu 2</h2>';

function citesteFisier($fileName1, $fileName2)
{
    if (!file_exists($fileName1)) {
        die('Eroare: Fișierul sursă nu există.');
    }
    $file1 = fopen($fileName1, 'r');
    $file2 = fopen($fileName2, 'a');
    while (!feof($file1)) {
        $line = fgets($file1);
        fwrite($file2, $line);
    }
    fclose($file1);
    fclose($file2);
}

citesteFisier('enunt.txt', 'citit.txt');

echo '<br><hr>';
echo '<h2>Exercitiu 3</h2>';


function gasesteFisiereDoc($caleDirector)
{
    // Verificăm dacă directorul există
    if (!is_dir($caleDirector)) {
        die('Eroare: Directorul nu există.');
    }

    // Deschidem fisierul fisiere_text.txt pentru scriere
    $fileOutput = fopen('fisiere_text.txt', 'w');
    if ($fileOutput === false) {
        die('Eroare: Nu am putut crea fisierul de ieșire.');
    }

    // Căutăm toate fișierele cu extensia .doc în directorul specificat
    $fisiere = glob($caleDirector . '/*.doc');

    // Verificăm dacă au fost găsite fișiere
    if (empty($fisiere)) {
        fwrite($fileOutput, "Nu au fost găsite fișiere .doc în directorul specificat.\n");
    } else {
        // Scriem numele fișierelor găsite în fisierul de ieșire
        foreach ($fisiere as $fisier) {
            // Extragem doar numele fișierului fără cale completă
            $numeFisier = basename($fisier);
            fwrite($fileOutput, $numeFisier . "\n");
        }
    }

    // Închidem fisierul de ieșire
    fclose($fileOutput);

    echo "Fișierele .doc au fost salvate în fisiere_text.txt.\n";
}

// Apelăm funcția cu o cale specifică
gasesteFisiereDoc('./director');
