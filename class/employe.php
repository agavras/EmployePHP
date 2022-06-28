<?php
// MODEL du MVC ///////////////////////////////////////////////////////
class Employe
{

    private $nom;
    private $prenom;
    private $anneeEmbauche;
    private $fonction;
    private $salaire; // en K euros brut annuel
    private $service;
    private $agence;
    private $chequeVacance;
    //20 euros pour les enfants de 0 à 10 ans
    private $chequeNoel20e;
    //30 euros pour les enfants de 11 à 15 ans.
    private $chequeNoel30e;
    //50 euros pour les enfants de 16 à 18 ans.
    private $chequeNoel50e;

    private static $nombre;

    public function __construct($nom, $prenom, $anneeEmbauche, $fonction, $salaire, $service, $agence, $chequeVacance, $chequeNoel20e, $chequeNoel30e, $chequeNoel50e)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->anneeEmbauche = $anneeEmbauche;
        $this->fonction = $fonction;
        $this->salaire = $salaire;
        $this->service = $service;
        $this->agence = $agence;
        $this->chequeVacance = $chequeVacance;
        $this->chequeNoel20e = $chequeNoel20e;
        $this->chequeNoel30e = $chequeNoel30e;
        $this->chequeNoel50e = $chequeNoel50e;
        Employe::$nombre++;
    }

    public function calculAnciennete()
    {
        $dateEmbauche = new DateTime($this->anneeEmbauche);
        $dateActuelle = new DateTime();
        $Aciennetee = ($dateActuelle->diff($dateEmbauche))->format('%y');
        return $Aciennetee;
    }

    public function getSalaire()
    {
        return $this->salaire;
    }

    public function calculPrimeAnnuelle()
    {
        $dateDePrime = "30-11";
        $dateActuelle = "30-11"; //(new DateTime())->format('d-m');
        $prime = ($this->salaire * (5 / 100)) + ($this->salaire * (2 / 100 * $this->calculAnciennete()));
        // $prime = round($prime, 2);
        if ($dateActuelle == $dateDePrime) {
            return $getPrime = " l’ordre de transfert de la prime de : $prime € pour $this->prenom a été envoyé à la banque.";
        }
        return $prime;
    }

    public static function getNombreEmploye()
    {
        return Employe::$nombre;
    }
}