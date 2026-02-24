<!-- Page -->
<div class="page-wrapper" style="align-items: flex-start; padding-top: 3.5rem">
    <div class="auth-card" style="max-width: 480px">
        <div class="auth-header">
            <span class="auth-icon">✨</span>
            <h1 class="auth-title">Créer un compte</h1>
            <p class="auth-subtitle">Commencez à traquer votre bien-être</p>
        </div>

        <form action="#" method="POST" novalidate>
            <!-- Prénom + Nom -->
            <div class="row g-3 mb-3">
                <div class="col-12">
                    <label for="name" class="form-label">Nom & Prénom</label>
                    <input type="text" id="name" name="name" class="form-control mood-input" placeholder="Marie Dupont"
                        autocomplete="given-name" required />
                </div>
            </div>

            <!-- Email -->
            <div class="mb-3">
                <label for="email" class="form-label">Adresse e-mail</label>
                <input type="email" id="email" name="email" class="form-control mood-input"
                    placeholder="vous@exemple.com" autocomplete="email" required />
            </div>

            <div class="mb-3">
                <label for="birthday_date" class="form-label">Date de naissance</label>
                <input type="date" id="birthday_date" name="birthday_date" class="form-control mood-input" required />
            </div>

            <!-- Password -->
            <div class="mb-3">
                <label for="password" class="form-label">Mot de passe</label>
                <input type="password" id="password" name="password" class="form-control mood-input"
                    placeholder="Minimum 8 caractères" autocomplete="new-password" required minlength="8" />
                <div class="mt-2 d-flex gap-1">
                    <div style="
                  flex: 1;
                  height: 3px;
                  border-radius: 2px;
                  background: rgba(0, 184, 110, 0.8);
                "></div>
                    <div style="
                  flex: 1;
                  height: 3px;
                  border-radius: 2px;
                  background: rgba(232, 184, 109, 0.15);
                "></div>
                    <div style="
                  flex: 1;
                  height: 3px;
                  border-radius: 2px;
                  background: rgba(232, 184, 109, 0.15);
                "></div>
                    <div style="
                  flex: 1;
                  height: 3px;
                  border-radius: 2px;
                  background: rgba(232, 184, 109, 0.15);
                "></div>
                </div>
                <small style="
                font-size: 0.76rem;
                color: var(--text-muted);
                margin-top: 0.3rem;
                display: block;
              ">
                    Force du mot de passe
                </small>
            </div>
            <!-- Submit -->
            <button type="submit" class="btn-mood-primary">
                Créer mon compte
            </button>
        </form>


        <?php foreach ($errors as $error): ?>
            <span style="color: red;"><?= $error . '<br>' ?></span>
        <?php endforeach; ?>

        <hr class="divider" />

        <p class="auth-footer">
            Déjà un compte ?
            <a href="<?= PROJECT_URL . 'login' ?>">Se connecter</a>
        </p>
    </div>
</div>