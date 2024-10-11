<?php

class Employe {
    
    private string $nom;
    private string $prenom;
    private string $email;
    private array $contrats;

    public function __construct(string $nom, string $prenom, string $email){

        $this -> nom = $nom;
        $this -> prenom = $prenom;
        $this -> email = $email;
        $this -> contrats = [];
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

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getContrats(): array
    {
        return $this->contrats;
    }

    public function setContrats(array $contrats): self
    {
        $this->contrats = $contrats;

        return $this;
    }
    public function addContrat(Contrat $contrat){
        $this -> contrats[] = $contrat;
    }

    public function afficherEntrepris(){
        $rusalt = "<h2>Entreprise de $this </h2>";

        foreach($this -> contrats as $contrat){
            $rusalt .= $contrat->getEntreprise() . "(" . $contrat->getDataEmbauche()
             ."en".$contrat->getTypeContrat(). ")" ;
        }
        return $rusalt;
    }
    public function __toString(): string {

        return $this -> prenom ." ". $this->nom;
    }

}
