<h1>Login</h1>

<form action="" method="POST">
    <label for="email">Email :</label><br>
    <input type="email" name="email" id="email"><br>

    <label for="password">Mot de passe :</label><br>
    <input type="password" name="password" id="password"><br><br>

    <button type="submit">Se connecter</button>
</form>

<?php if (!empty($errors)): ?>
    <?php foreach ($errors as $error): ?>
        <span style="color: red;">
            <?= $error ?>
        </span>
    <?php endforeach; ?>
<?php endif; ?>