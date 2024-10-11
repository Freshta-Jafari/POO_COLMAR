<?php


spl_autoload_register(function ($class_name) {
    require 'classes/' . $class_name . '.php';
});


$titulaire1 = new Titulaire("Dupont", "Jean", "1990-05-20", "Paris");


$compte1 = new CompteBancaire("Compte Courant", 1500, "EUR", $titulaire1);
$compte2 = new CompteBancaire("Livret A", 3000, "EUR", $titulaire1);


$titulaire1->afficherInformations();


$compte1->virement($compte2, 500);


$titulaire1->afficherInformations();

