<!-- ═══════════════════════════════════
       NAVBAR — visiteur non connecté
       ═══════════════════════════════════ -->
<nav class="mood-navbar navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="<?= PROJECT_URL ?>home">
            <span class="brand-dot"></span>
            MoodTracker
        </a>

        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navMain"
            aria-controls="navMain" aria-expanded="false" aria-label="Menu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navMain">
            <!-- Liens centraux -->
            <ul class="navbar-nav mx-auto align-items-center gap-1">
                <li class="nav-item">
                    <a class="nav-link-mood" href="#">Fonctionnalités</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link-mood" href="#">À propos</a>
                </li>
            </ul>

            <!-- Droite : auth -->
            <ul class="navbar-nav align-items-center gap-2 ms-lg-auto mt-3 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link-mood" href="<?= PROJECT_URL ?>login">Connexion</a>
                </li>
                <li class="nav-item">
                    <a class="nav-cta" href="<?= PROJECT_URL ?>register">Commencer gratuitement</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- ═══════════════════════════════════
       FIN NAVBAR
       ═══════════════════════════════════ -->