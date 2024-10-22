<?php

class Carte
{
    public string $carte;
    public string $titlu;
    public string $autor;
    public int $an;
    public int $pagini;
    public function __construct(string $titlu='', string $autor='', int $an=0, int $pagini=0) {
        $this->carte = 'carte';
        $this->titlu = $titlu;
        $this->autor = $autor;
        $this->an = $an;
        $this->pagini = $pagini;
    }
    public function setCarte(string $titlu, string $autor, int $an, int $pagini) {
        $this->titlu = $titlu;
        $this->autor = $autor;
        $this->an = $an;
        $this->pagini = $pagini;
    }

}