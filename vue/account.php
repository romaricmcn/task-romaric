<?php include 'header.php'; ?>

<section>
    <h2>Créer un compte utilisateur</h2>
    <form action="accountController.php" method="POST">
        <label for="lastname">Nom :</label>
        <input type="text" name="lastname" required>

        <label for="firstname">Prénom :</label>
        <input type="text" name="firstname" required>

        <label for="email">Email :</label>
        <input type="email" name="email" required>

        <label for="password">Mot de passe :</label>
        <input type="password" name="password" required>

        <button type="submit" name="create_account">Créer le compte</button>
    </form>
    
    <p><?php if (isset($_SESSION['message'])) { echo $_SESSION['message']; unset($_SESSION['message']); } ?></p>
</section>

<section>
    <h2>Liste des comptes utilisateurs</h2>
    <table border="1">
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
        </tr>
        <?php include 'accountController.php'; echo displayUsers(); ?>
    </table>
</section>

<?php include 'footer.php'; ?>