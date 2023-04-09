

<?php 
include 'header.php';

?><!DOCTYPE html>
<html>
<head>
    <title>Home</title>
</head>
<body>
    <h1>Welcome <?php echo $_SESSION['user']['nom']; ?></h1>

    <p>la.</p>


    <ul>
        <li><a href="index.php?page=prof">Professeur</a></li>
        <li><a href="index.php?page=eleve">Elève</a></li>
    </ul>
  <li><a href="index.php?page=ajouterEleve">Ajouter une personne</a></li>
    <a href="index.php?page=logout">deco</a>
</body>
</html>
