<h1>Bibliographie</h1>

<?php

spl_autoload_register( function ($class_name) {
    require 'classes/' . $class_name . '.php';
});

$stephenKing = new Auteur("King", "Stephen");


$livre = new Livre("Ca","1986",1138, 20, $stephenKing);
$livre1 = new Livre("Simetierre","1983",374,15, $stephenKing);
$livre2 = new Livre("Le Fléau","1978",823,14, $stephenKing);
$livre3 = new Livre("Shining","1977",447,16, $stephenKing);

$stephenKing->ajouterLivre($livre);
$stephenKing->ajouterLivre($livre1);
$stephenKing->ajouterLivre($livre2);
$stephenKing->ajouterLivre($livre3);

echo $stephenKing -> afficherBibliographie();


