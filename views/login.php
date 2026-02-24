<!-- Login -->
<div class="page-wrapper">
    <div class="auth-card">
        <div class="auth-header">
            <span class="auth-icon">🌙</span>
            <h1 class="auth-title">Bon retour</h1>
            <p class="auth-subtitle">Connectez-vous pour suivre votre humeur</p>
        </div>

        <form action="#" method="POST" novalidate>
            <!-- Email -->
            <div class="mb-3">
                <label for="email" class="form-label">Adresse e-mail</label>
                <input type="email" id="email" name="email" class="form-control mood-input"
                    placeholder="vous@exemple.com" autocomplete="email" required />
            </div>

            <!-- Password -->
            <div class="mb-4">
                <div class="d-flex justify-content-between align-items-center">
                    <label for="password" class="form-label mb-0">Mot de passe</label>
                    <a href="#" class="auth-footer" style="margin: 0; font-size: 0.8rem; color: var(--gold-dim)">
                        Oublié ?
                    </a>
                </div>
                <input type="password" id="password" name="password" class="form-control mood-input mt-2"
                    placeholder="••••••••" autocomplete="current-password" required />
            </div>

            <!-- Submit -->
            <button type="submit" class="btn-mood-primary">Se connecter</button>
        </form>

        <hr class="divider" />

        <p class="auth-footer">
            Pas encore de compte ?
            <a href="<?= PROJECT_URL ?>register">Créer un compte</a>
        </p>
    </div>
</div>