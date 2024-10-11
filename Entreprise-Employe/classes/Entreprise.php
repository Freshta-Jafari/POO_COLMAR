<?php

class Entreprise {

    private string $raisonSociale;
    private DateTime $dateCtreation;
    private string $adresse;
    private string $cp;
    private string $ville;
    private array $contrats;

    public function __construct(string $raisonSociale, string $dateCtreation, string $adresse, string $cp, 
    string $ville){

        $this -> raisonSociale = $raisonSociale;
        $this -> dateCtreation = new DateTime($dateCtreation);
        $this -> adresse = $adresse;
        $this -> cp = $cp;
        $this -> ville = $ville;
        $this -> contrats = [];
     } 

   
    public function getRaisonSociale(): string
    {
        return $this->raisonSociale;
    }

    public function setRaisonSociale(string $raisonSociale): self
    {
        $this->raisonSociale = $raisonSociale;

        return $this;
    }

    public function getDateCtreation(): DateTime
    {
        return $this->dateCtreation;
    }

    public function setDateCteations(DateTime $dateCtreation): self
    {
        $this->dateCtreation = $dateCtreation;

        return $this;
    }

    public function getAdresse(): string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getCp(): string
    {
        return $this->cp;
    }

    public function setCp(string $cp): self
    {
        $this->cp = $cp;

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

    public function getAdresseComplete(){
        return $this->adresse ." ". $this -> cp ." ". $this -> ville;
    }

    public function getInfo(){
        return $this  . " a été crée le " . $this -> getDateCtreation()
        -> format("d-M-Y") . " et se situe à l'adresse suivante " . $this -> getAdresseComplete() ."<br>";
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
    public function afficherEmployes(){
        $rusalt = "<h2>Employes de $this </h2>";

        foreach($this -> contrats as $contrat){
            $rusalt .= $contrat->getEmploye() . "(" . $contrat->getDataEmbauche() . " en " 
            .$contrat->getTypeContrat(). ") <br>" ;
        }
        return $rusalt;
    }

    public function __toString(){
        return $this -> raisonSociale;
    }

   
}