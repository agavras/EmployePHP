<?php

// CONTROLLER du MVC ///////////////////////////////////////////////////////
// Chargement de la representation d'un employé (CLASS Employe : model)
require_once("./class/employe.php");
// Chargement de la representation d'une agence (CLASS Agence : model)
require_once("./class/agence.php");
// Chargement de la representation d'un directeur (CLASS Directeur : model)
require_once("./class/directeur.php");

// Creation de 5 agences
$agence1 = new Agence("agence1", "142, rue de l'abreuvoir", 76116, "Catenay", "restaurant");
$agence2 = new Agence("agence2", "143, rue de l'abreuvoir", 76117, "Cinqtenay", "chèques");
$agence3 = new Agence("agence3", "144, rue de l'abreuvoir", 76118, "Sixtenay", "restaurant");
$agence4 = new Agence("agence4", "145, rue de l'abreuvoir", 76119, "Septenay", "chèques");
$agence5 = new Agence("agence5", "146, rue de l'abreuvoir", 76120, "Huitenay", "restaurant");

// Creation de 5 nouveaux employés
$employe1 = new Employe('FALEZ', 'Mathieu', '1978-10-02', 'Stagiaire', 0, 'Informatique', $agence1, "eligibleCV", 0, 0, 0);
$employe2 = new Employe('MORRISON', 'Jim', '1943-12-08', 'Danseur', 666, 'Mojo Risin', $agence2, "eligibleCV", 1, 2, 3);
$employe3 = new Employe('YOUNG', 'Neil', '1945-11-12', 'Chanteur', 777, 'Auteur-compositeur', $agence3, "eligibleCV", 1, 2, 3);
$employe4 = new Employe('HUDSON', 'Saul', '1965-07-23', 'Guitariste', 888, 'Road Crew', $agence4, "eligibleCV", 1, 2, 3);
$employe5 = new Employe('COLLINS', 'Phil', '1951-01-30', 'Batteur', 999, 'Interprète', $agence5, "eligibleCV", 1, 2, 3);

// Creation d'un directeur'
$directeur1 = new Directeur('FALEZ', 'Jean-Claude', '1940-09-04', 'Directeur', 9999, 'Direction', $agence1, "eligibleCV", 0, 0, 0);

// VUE du MVC ////////////////////////////////////////////////////////////
// Affichage de l'interface
var_dump($employe1);
var_dump($employe1->calculAnciennete());
var_dump($employe1->calculPrimeAnnuelle());
echo "<br/>";

var_dump($employe2);
var_dump($employe2->calculAnciennete());
var_dump($employe2->calculPrimeAnnuelle());
echo "<br/>";

var_dump($employe3);
var_dump($employe3->calculAnciennete());
var_dump($employe3->calculPrimeAnnuelle());
echo "<br/>";

var_dump($employe4);
var_dump($employe4->calculAnciennete());
var_dump($employe4->calculPrimeAnnuelle());
echo "<br/>";

var_dump($employe5);
var_dump($employe5->calculAnciennete());
var_dump($employe5->calculPrimeAnnuelle());
echo "<br/>";

var_dump($directeur1);
var_dump($directeur1->calculAnciennete());
var_dump($directeur1->calculPrimeAnnuelle());