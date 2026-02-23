<!DOCTYPE html>
<html lang="fr">

<head>
    <?php require_once ROOT . '/views/templates/head.php'; ?>
</head>

<body>
    <?php
    // Si une nav spécifique est demandée, on l'affiche, sinon on met la nav par défaut
    $navFile = $nav ?? 'navbar';
    require_once ROOT . "/views/templates/{$navFile}.php";
    ?>
    <!-- CONTENU PRINCIPAL -->
    <?= $content ?>
    <!-- CONTENU PRINCIPAL -->
    <?php require_once ROOT . '/views/templates/footer.php'; ?>
</body>

</html>