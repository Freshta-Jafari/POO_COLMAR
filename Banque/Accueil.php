<?php


spl_autoload_register(function ($class_name) {
    require 'classes/' . $class_name . '.php';
});


$titulaire = new Titulaire("Dupont", "Jean", "1990-05-20", "Paris");


$compte1 = new CompteBancaire("Compte Courant", 1500, "EUR", $titulaire);
$compte2 = new CompteBancaire("Livret A", 3000, "EUR", $titulaire);

$titulaire->ajouterCompte($compte1);
$titulaire->ajouterCompte($compte2);

$titulaire->afficherInformations();

