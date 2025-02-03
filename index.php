<?php 
session_start();
include 'controller/accountController.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
</head>
<body>
    <h1>Bienvenue sur l'application Task_CDA</h1>
    <nav>
        <ul>
            <li><a href="vue/account.php">Gestion des comptes</a></li>
            <li><a href="vue/other_page.php">Autres fonctionnalités</a></li>
        </ul>
    </nav>
</body>
</html>

