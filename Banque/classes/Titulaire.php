<?php

class Titulaire {
    private string $nom;
    private string $prenom;
    private DateTime $dateNaissance;
    private string $ville;
    private array $comptes;

    public function __construct(string $nom, string $prenom, string $dateNaissance, string $ville){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = new DateTime($dateNaissance);
        $this->ville = $ville;
        $this->comptes = [];
     }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

 
    public function getPrenom(): string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

 
    public function getDateNaissance(): DateTime
    {
        return $this->dateNaissance;
    }

    public function setDateNaissance(DateTime $dateNaissance): self
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    public function getVille(): string
    {
        return $this->ville;
    }

    public function setVille(string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getComptes(): array
    {
        return $this->comptes;
    }

    public function setComptes(array $comptes): self
    {
        $this->comptes = $comptes;

        return $this;
    }
    public function age() {
        $today = new DateTime();
        return $today->diff($this->dateNaissance)->y;
    }

    public function ajouterCompte($compte) {
        $this->comptes[] = $compte;
    }

    public function afficherInformations() {
        echo "{$this->prenom} {$this->nom}, {$this->age()} ans, {$this->ville} <br> Comptes :";
        
        if (!empty($this->comptes)) {
            echo "<ul>";
            foreach ($this->comptes as $compte) {
                $compte->afficherInformations();
            }
            echo "</ul>";
        } else {
            echo "Aucun compte disponible.<br>";
        }
    }
    

    public function __toString(){
        return $this -> prenom . " " . $this -> nom;
    }
}