<?php

class Cuser 
{
    private $nom;
    private $prenom;
    private $pseudo;
    private $motDePasse;
    private $DateNaissance;
    private $Bac;
    private $region;
    private $pays;
    private $Commentaire;

    function __construct(array $donnees)
    {
        $this ->nom = $donnees['nom'];
        $this ->prenom = $donnees['prenom'];
        $this ->pseudo = $donnees['pseudo'];
        $this ->DateNaissance = $donnees['DateNaissance'];
        $this ->Bac = $donnees['Bac'];
        $this ->region = $donnees['region'];
        $this ->pays =  $donnees['pays'];
        $this ->Commentaire = $donnees['Commentaire'];
        $this->motDePasse = $donnees['motDePasse'];
    }

    // Getteur de toutes les données membres

    function get_nom()
    {
        return $this->nom;
    }

    function get_prenom()
    {
        return $this->prenom;
    }

    function get_pseudo()
    {
        return $this->pseudo;
    }

    function get_motDePasse()
    {
        return $this->motDePasse;
    }

    function get_dateNaissance()
    {
        return $this->DateNaissance;
    }

    function get_bac()
    {
        return $this->Bac;
    }

    function get_region()
    {
        return $this->region;
    }

    function get_pays()
    {
        return $this->pays;
    }

    function get_Commentaire()
    {
        return $this->Commentaire;
    }
}