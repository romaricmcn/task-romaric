<?php include 'header.php'; ?>

<section>
    <h2>Se connecter</h2>
    <form action="accountController.php" method="POST">
        <label for="email">Email :</label>
        <input type="email" name="email" required>

        <label for="password">Mot de passe :</label>
        <input type="password" name="password" required>

        <button type="submit" name="connect">Se connecter</button>
    </form>

    <h1>Inscription</h1>
    <form action="" method="post">
        <input type="text" name="lastname" placeholder="Le Nom de Famille">
        <input type="text" name="firstname" placeholder="Le Prénom">
        <input type="text" name="email" placeholder="L'Email'">
        <input type="password" name="password" placeholder="Le Mot de Passe">
        <input type="submit" name="submitSignUp">
    </form>
    <p><?php echo $message ?></p>
</section>
<section>
    <h1>Liste d'Utilisateurs</h1>
    <ul>
        <?php echo $listUsers ?>
    </ul>
</section>