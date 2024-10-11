<?php

class Auteur {

    private string $nom;
    private string $prenom;
    private array $bibliotheque;

    public function __construct(string $nom, string $prenom){
        $this -> nom = $nom;
        $this -> prenom = $prenom;
        $this ->bibliotheque =[];
    }
    public function getNom(): string {
        return $this -> nom;
    }
    public function setNom(string $nom): self {
        $this->nom = $nom;
        return $this;
    }

    public function getPrenom(): string {
        return $this -> prenom;
    }
    public function setPrenom(string $prenom): self {
        $this->prenom = $prenom;
        return $this;
    }

    public function getBibliotheque(): array
    {
        return $this->bibliotheque;
    }

    public function setBibliotheque(array $bibliotheque): self
    {
        $this->bibliotique = $bibliotheque;

        return $this;
    }

    public function ajouterLivre(Livre $livre){
        $this -> bibliotheque[] = $livre;
    }


    public function afficherBibliographie(){
        $resultat = "<h2>Livres de $this </h2>";

        foreach ($this -> bibliotheque as $livre){
            $resultat .= $livre -> getTitre(). " ( " . $livre -> getDateParution()->format('Y'). " ) " .
            $livre -> getNombrePages()." pages / ". $livre -> getPrix() ."€ <br>";
        }
        return $resultat;
    }
    public function __toString(){
        return $this -> prenom . " " . $this -> nom;
    }
  
}