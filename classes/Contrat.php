<?php

class Contrat {

    private Entreprise $entreprise;
    private Employe $employe;
    private DataTime $dataEmbauche;
    private string $typecontrat;

    public function __construct(Entreprise $entreprise, Employe $employe, string $dataEmbauche, string $typecontrat) {
        $this->entreprise = $entreprise;    
        $this->employe = $employe;
        $this->dataEmbauche =  new DateTime($dataEmbauche);
        $this->entreprise->addContrat($this);
        $this->employe->addContrat($this);
        $this->typecontrat = $typecontrat;

       
       
    }

    public function getEntreprise(): Entreprise
    {
        return $this->entreprise;
    }

    public function setEntreprise(Entreprise $entreprise): self
    {
        $this->entreprise = $entreprise;

        return $this;
    }

    public function getEmploye(): Employe
    {
        return $this->employe;
    }

    public function setEmploye(Employe $employe): self
    {
        $this->employe = $employe;

        return $this;
    }
    public function getTypecontrat()
    {
            return $this->typecontrat;
    }

    public function setTypecontrat($typecontrat): self
    {
            $this->typecontrat = $typecontrat;

            return $this;
    }

    public function getDataEmbauche()
    {
        return $this->dataEmbauche->format("d-m-Y");
    }

    public function setDataEmbauche($dataEmbauche)
    {
        $this->dataEmbauche = $dataEmbauche;

        return $this;
    }
}