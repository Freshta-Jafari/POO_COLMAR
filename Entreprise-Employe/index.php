<h1>POO Entreprise</h1>

<?php

// require "Enterprise .php";
// require "Employe.php";

spl_autoload_register(function($class_name ){
    require 'classes/'.$class_name . '.php';
});

$elanFormation = new Entreprise("ELAN FORMATION", "1993/01/01", "14 rue du Rhone", "67100", "STRASBOURG");
$franceTravail = new Entreprise("France Travail", "1980", "15 reu de colmar", "67000", "Strasbourg");
$IBM = new Entreprise("IBM", "1990/01/01", "2 rue jacob mayer", "67200", "Strasbourg");

$stagiaire = new Employe("JAFARI", "Freshta", "freshta.jafari@stagiaire-elan.fr");
$stagiaire1 = new Employe("USMAN ", "Asma", "asma_usman2022@gmail.com");
$stagiaire3 = new Employe("DELOLA", "Marine", "marine484@hotmail.com");

$c1 = new Contrat($elanFormation, $stagiaire, "16-09-2024","CDI");
$c2 = new Contrat($elanFormation, $stagiaire1, "01-04-2023","CDD");
$c3 = new Contrat($IBM, $stagiaire3, "2023/12/22","Stage");

echo $elanFormation->afficherEmployes();
$franceTravail->afficherEmployes();

echo $stagiaire-> afficherEntrepris();
echo $stagiaire1->afficherEntrepris();
echo $stagiaire3->afficherEntrepris();