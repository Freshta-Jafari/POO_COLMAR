<?php

class CompteBancaire {
    private string $libelle;
    private float $solde;
    private string $devise;
    private Titulaire $titulaire;

    public function __construct(string $libelle, float $solde, string $devise,	Titulaire $titulaire) {

        $this->libelle = $libelle;
        $this->solde = $solde;
        $this->devise = $devise;
        $this->titulaire = $titulaire;

    }

    public function getLibelle(): string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getSolde(): float
    {
        return $this->solde;
    }

    public function setSold(float $solde): self
    {
        $this->sold = $solde;

        return $this;
    }

    public function getDevise(): string
    {
        return $this->devise;
    }

    public function setDevise(string $devise): self
    {
        $this->devise = $devise;

        return $this;
    }

    public function getTitulaire(): Titulaire
    {
        return $this->titulaire;
    }

    public function setTitulaire(Titulaire $titulaire): self
    {
        $this->titulaire = $titulaire;

        return $this;
    }
    public function crediter($montant) {
        $this->solde += $montant;
    }

    public function debiter($montant) {
        if ($montant > $this->solde) {
            echo "Fonds insuffisants.\n";
        } else {
            $this->solde -= $montant;
        }
    }

    public function virement($compteDestinataire, $montant) {
        if ($montant > $this->solde) {
            echo "Fonds insuffisants.\n";
        } else {
            $this->debiter($montant);
            $compteDestinataire->crediter($montant);
        }
    }

    public function afficherInformations() {
        echo "Compte: {$this->libelle}, Solde: {$this->solde} {$this->devise}, Titulaire: {$this->titulaire->getPrenom()} {$this->titulaire->getNom()}\n";
    }

public function __toString(){
    return $this-> libelle;
}
}