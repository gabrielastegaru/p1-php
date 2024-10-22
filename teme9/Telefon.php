<?php

require_once 'Produs.php';

class Telefon extends Produs
{
    public string $descriere;
    public string $disponibilite;
    public function __construct(string $numeProdus, int $pret, string $descriere, string $disponibilite)
    {
        parent::__construct($numeProdus, $pret);
        $this->descriere = $descriere;
        $this->disponibilite = $disponibilite;
    }

    /*
    public function setDescriere(string $descriere): void
    {
       // parent::setDescriere($descriere);
    }
    public function setDisponibilite(string $disponibilite): void
    {
       // parent::setDisponibilitate($disponibilite);
    }*/

    public function __toString(): string
    {
        $status = ($this->disponibilitate  == 'disponibil') ? "disponibil" : "indisponibil";
        return "Produsul: " . $this->nume . ", cu următoarea descriere: " . $this->descriere .
            ", având prețul: " . $this->pret . ", este: " . $status . ".";
    }
}