<h2>Connexion</h2>

<?php if (!empty($_GET['error'])): ?>
    <p style="color:red;">Identifiants incorrects !</p>
<?php endif; ?>

<form method="post" action="/login">
    <label>Nom utilisateur</label>
    <input type="text" name="nomUser" required>

    <label>Mot de passe</label>
    <input type="password" name="mdp" required>

    <button type="submit">Se connecter</button>
</form>
