<?php
// MODEL du MVC ///////////////////////////////////////////////////////
class Agence
{
    private $nom;
    private $adresse;
    private $codePostal;
    private $ville;
    private $restauration;

    public function __construct($nom, $adresse, $codePostal, $ville, $restauration)
    {
        $this->nom = $nom;
        $this->adresse = $adresse;
        $this->codePostal = $codePostal;
        $this->ville = $ville;
        $this->restauration = $restauration;
    }
}