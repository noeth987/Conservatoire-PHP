<?php

include 'Personne.php';
include 'ProfModel.php';
if (!isset($_SESSION['user'])) {
    header('Location: index.php?page=login');
    exit;
}

class ProfController {
    private $pdo;

    public function __construct() {
        $dsn = 'mysql:host=localhost;dbname=conservatoireefrei';
        $user = 'root';
        $password = '';

        try {
            $this->pdo = new PDO($dsn, $user, $password);
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
            exit;
        }
    }

// Afficher le formulaire d'ajout de professeur

     // Afficher le formulaire d'ajout de professeur
public function ajouterProfesseur() {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Récupérer les données du formulaire et les valider
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $ref = $_POST['ref'];
        $salaire = $_POST['salaire'];

        // Créer un nouvel objet Prof avec les données du formulaire
        $prof = new Professeur();
        $prof->setNom($nom);
        $prof->setPrenom($prenom);
        $prof->setRef($ref);
        $prof->setSalaire($salaire);

        // Ajouter le nouveau professeur à la table prof
        $sql = "INSERT INTO prof (nom, prenom, ref, salaire) VALUES (?, ?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$prof->getNom(), $prof->getPrenom(), $prof->getRef(), $prof->getSalaire()]);

        // Rediriger vers la page d'accueil
        header('Location: index.php?page=home');
        exit;
    } else {
        // Afficher le formulaire d'ajout de professeur
        require 'ajoutProf.php';
    }
}

 



   public function getProfesseurs() {
        // Configuration de la base de données
        $dsn = 'mysql:host=localhost;dbname=conservatoireefrei';
        $user = 'root';
        $password = '';

        try {
            // Connexion à la base de données
            $pdo = new PDO($dsn, $user, $password);
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
            exit;
        }

        // Requête SQL pour récupérer tous les professeurs avec leurs informations
        $sql = "SELECT prof.idprof, personne.nom, personne.prenom, prof.ref, prof.salaire 
                FROM prof 
                JOIN personne ON prof.idprof = id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $professeurs = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Affichage de la vue
        require 'prof.php';

        // Retourne les professeurs
        return $professeurs;
    }
// Appel de la fonction pour récupérer les professeurs


// Affichage de la vue

}

