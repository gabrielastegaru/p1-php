<?php

class Produs
{
    public string $numeProdus;
    public int $pret;
    public function __construct(string $numeProdus, int $pret){
        $this->numeProdus = $numeProdus;
        $this->pret = $pret;
    }
    public function __toString(): string {
        return "Produs: $this->numeProdus" . "<br>" . "Pret: $this->pret";
    }
}