<?php

// inclusion de la classe Prof
require_once 'Prof.php';

class ProfControlleurr
{
    public function addProf()
    {
        // traitement du formulaire d'inscription
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // création d'un objet Prof à partir des données du formulaire
            $prof = new Prof($_POST['nom'], $_POST['prenom'], $_POST['ref'], $_POST['salaire']);

            // enregistrement des données dans la base de données
            $prof->save();
        } else {
            // affichage du formulaire d'inscription
            include 'views/addprof.php';
        }
    }
}
