<?php
// accountController.php - Contrôleur pour gérer les comptes utilisateurs
session_start();
include '../model/database.php';

function createUser($lastname, $firstname, $email, $password) {
    global $conn;
    
    // Vérifier si l'email existe déjà
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute([$email]);
    if ($stmt->rowCount() > 0) {
        $_SESSION['message'] = "Email déjà utilisé !";
        return;
    }
    
    // Hachage du mot de passe
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
    
    // Insérer le nouvel utilisateur
    $stmt = $conn->prepare("INSERT INTO users (lastname, firstname, email, password) VALUES (?, ?, ?, ?)");
    if ($stmt->execute([$lastname, $firstname, $email, $hashedPassword])) {
        $_SESSION['message'] = "Compte créé avec succès !";
    } else {
        $_SESSION['message'] = "Erreur lors de la création du compte.";
    }
}

function displayUsers() {
    global $conn;
    $stmt = $conn->query("SELECT lastname, firstname, email FROM users");
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $output = "";
    foreach ($rows as $row) {
        $output .= "<tr><td>{$row['lastname']}</td><td>{$row['firstname']}</td><td>{$row['email']}</td></tr>";
    }
    return $output;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['create_account'])) {
    createUser($_POST['lastname'], $_POST['firstname'], $_POST['email'], $_POST['password']);
    header("Location: ../vue/account.php");
    exit();
}
?>
