<style>
    /* ── Avatar dropdown – CSS only ── */

    /* The avatar button is a <label> for a hidden checkbox.
       When the checkbox is :checked, the dropdown is shown.
       This gives us a pure CSS toggle without JS. */

    .avatar-toggle {
        display: none;
        /* hidden checkbox */
    }

    .avatar-label {
        width: 38px;
        height: 38px;
        border-radius: 50%;
        background: linear-gradient(135deg, var(--gold), #C4893A);
        border: 2px solid var(--border);
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        font-family: 'Cormorant Garamond', serif;
        font-size: 1rem;
        font-weight: 600;
        color: var(--bg-deep);
        transition: var(--transition);
        user-select: none;
        flex-shrink: 0;
    }

    .avatar-label:hover {
        border-color: var(--gold);
        box-shadow: 0 0 0 3px rgba(232, 184, 109, 0.2);
    }

    .avatar-dropdown-menu {
        display: none;
        position: absolute;
        right: 0;
        top: calc(100% + 10px);
        min-width: 200px;
        background: #1E1A14;
        border: 1px solid var(--border);
        border-radius: var(--radius-sm);
        box-shadow: 0 16px 40px rgba(0, 0, 0, 0.55);
        z-index: 9999;
        overflow: hidden;
        animation: fadeUp 0.2s ease both;
    }

    /* Show dropdown when checkbox is checked */
    .avatar-toggle:checked~.avatar-dropdown-menu {
        display: block;
    }

    /* Dim the page backdrop (optional visual cue) */
    .avatar-toggle:checked~.avatar-label {
        border-color: var(--gold);
        box-shadow: 0 0 0 3px rgba(232, 184, 109, 0.25);
    }

    .dropdown-user-block {
        padding: 0.9rem 1.2rem 0.7rem;
        border-bottom: 1px solid var(--border);
    }

    .dropdown-user-block .d-name {
        font-family: 'Cormorant Garamond', serif;
        font-size: 1.05rem;
        font-weight: 600;
        color: var(--gold-light);
        display: block;
        line-height: 1.2;
    }

    .dropdown-user-block .d-email {
        font-size: 0.76rem;
        color: var(--text-muted);
        display: block;
        margin-top: 2px;
    }

    .dd-item {
        display: flex;
        align-items: center;
        gap: 0.65rem;
        padding: 0.65rem 1.2rem;
        font-size: 0.87rem;
        color: var(--text-soft);
        text-decoration: none;
        transition: var(--transition);
        font-family: 'Jost', sans-serif;
        font-weight: 400;
    }

    .dd-item:hover {
        background: rgba(232, 184, 109, 0.08);
        color: var(--gold);
    }

    .dd-item .icon {
        font-size: 0.95rem;
        width: 18px;
        text-align: center;
    }

    .dd-divider {
        border: 0;
        border-top: 1px solid var(--border);
        margin: 0.25rem 0;
    }

    .dd-item.danger {
        color: #FF8A8A;
    }

    .dd-item.danger:hover {
        background: rgba(255, 80, 80, 0.07);
        color: #FF6B6B;
    }

    /* Avatar wrapper must be position:relative for absolute dropdown */
    .avatar-wrapper {
        position: relative;
    }

    /* ── Mood radio tile extra styles ── */
    .mood-tile-wrapper {
        flex: 1;
        min-width: 90px;
    }

    .mood-tile-wrapper label {
        display: block;
        cursor: pointer;
    }

    /* ── Stats row ── */
    .stat-card {
        background: var(--bg-card);
        border: 1px solid var(--border);
        border-radius: var(--radius-sm);
        padding: 1.2rem 1.4rem;
        text-align: center;
    }

    .stat-number {
        font-family: 'Cormorant Garamond', serif;
        font-size: 2.2rem;
        font-weight: 600;
        color: var(--gold-light);
        line-height: 1;
        display: block;
        margin-bottom: 0.3rem;
    }

    .stat-label {
        font-size: 0.76rem;
        font-weight: 500;
        letter-spacing: 0.07em;
        text-transform: uppercase;
        color: var(--text-muted);
    }

    /* ── Mood form card ── */
    .mood-form-card {
        background: var(--bg-card);
        border: 1px solid var(--border);
        border-radius: var(--radius);
        padding: 2.2rem 2rem;
        margin-bottom: 2rem;
        animation: fadeUp 0.5s ease both;
    }
</style>
<!-- ─────────── NAVBAR ─────────── -->
<nav class="mood-navbar navbar navbar-expand-lg">
    <div class="container">

        <!-- Brand -->
        <a class="navbar-brand" href="<?= PROJECT_URL . 'home' ?>">
            <span class="brand-dot"></span>
            MoodTracker
        </a>

        <!-- Mobile toggle (Bootstrap) -->
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navMain"
            aria-controls="navMain" aria-expanded="false" aria-label="Menu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Nav content -->
        <div class="collapse navbar-collapse" id="navMain">
            <ul class="navbar-nav mx-auto align-items-center gap-2">
                <li class="nav-item">
                    <a class="nav-link-mood active" href="">Mon journal</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link-mood" href="#">Statistiques</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link-mood" href="#">Historique</a>
                </li>
            </ul>

            <!-- Right side: avatar with CSS-only dropdown -->
            <div class="d-flex align-items-center gap-3 ms-lg-auto mt-3 mt-lg-0">

                <!-- Greeting (desktop) -->
                <span class="d-none d-lg-inline" style="font-size:0.85rem;color:var(--text-muted);">
                    Bonjour, <span style="color:var(--gold);"><?= $name ?></span>
                </span>

                <!-- CSS-only avatar dropdown -->
                <div class="avatar-wrapper">
                    <!-- Hidden checkbox toggle -->
                    <input type="checkbox" class="avatar-toggle" id="avatarToggle" />

                    <!-- Avatar label (clicking toggles the checkbox) -->
                    <label class="avatar-label" for="avatarToggle" aria-label="Menu profil">
                        M
                    </label>

                    <!-- Dropdown (visible when checkbox is :checked) -->
                    <div class="avatar-dropdown-menu">

                        <!-- User info -->
                        <div class="dropdown-user-block">
                            <span class="d-name"><?= $name ?></span>
                            <span class="d-email"><?= $email ?></span>
                        </div>

                        <!-- Menu items -->
                        <a href="" class="dd-item">
                            <span class="icon">👤</span>
                            Mon profil
                        </a>
                        <a href="#" class="dd-item">
                            <span class="icon">⚙️</span>
                            Paramètres
                        </a>
                        <a href="#" class="dd-item">
                            <span class="icon">📊</span>
                            Mes statistiques
                        </a>

                        <hr class="dd-divider" />

                        <a href="<?= PROJECT_URL . 'logout' ?>" class="dd-item danger">
                            <span class="icon">🚪</span>
                            Se déconnecter
                        </a>

                    </div>
                </div>
                <!-- end avatar-wrapper -->

            </div>
        </div>

    </div>
</nav>
<!-- ─────────── END NAVBAR ─────────── -->