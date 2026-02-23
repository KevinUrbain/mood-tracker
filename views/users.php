<h1>Bienvenue sur tous les users</h1>

<?php foreach ($users as $user): ?>
    <?= $user->getName() . '<br>' ?>
<?php endforeach; ?>