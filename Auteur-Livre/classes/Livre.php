<?php

class Livre {
    private string $titre;
    private DateTime $dateParution;
    private int $nombrePages;
    private float $prix;
    private Auteur $auteur;

    public function __construct(string $titre, string $dateParution, int $nombrePages, float $prix, Auteur $auteur) {
        $this->titre = $titre;
        $this->dateParution = new DateTime($dateParution);
        $this->nombrePages = $nombrePages;
        $this->prix = $prix;
        $this->auteur = $auteur;
        
    }
    public function getTitre(): string {
        return $this->titre;
    }
    public function setTitre(string $titre): self {
        $this->titre = $titre;
        return $this;
    }
    public function getDateParution(): DateTime {
        return $this -> dateParution;
    }
    public function setDateParution(DateTime $dateParution): self {
        $this->dateParution = $dateParution;
        return $this;
    }
    public function getNombrePages(): int {
        return $this->nombrePages;
    }
    public function setNombrePages(int $nombrePages): self {
        $this->nombrePages = $nombrePages;
        return $this;
    }
   
    public function getPrix(): float {
        return $this->prix;
    }
    public function setPrix(float $prix): self {
        $this->prix = $prix;
        return $this;
    }


    public function getAuteur(): Auteur
    {
        return $this->auteur;
    }

    public function setAuteur(Auteur $auteur): self
    {
        $this->auteur = $auteur;

        return $this;
    }

    public function __toString(){
        return $this -> titre;
    }
}