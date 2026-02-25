<?php

?>

<div class="profile-wrapper">
  <div class="container">
    <!-- En-tête -->
    <div class="profile-header">
      <div class="breadcrumb-trail">
        <a href="index.html">Accueil</a>
        <span class="sep">›</span>
        <span class="current">Mon profil</span>
      </div>
      <h1 class="profile-title">Mon <span>profil</span></h1>
    </div>

    <div class="row g-4 align-items-start">
      <!-- ═══════════════
             SIDEBAR
             ═══════════════ -->
      <div class="col-lg-3">
        <div class="avatar-card">
          <div class="profile-avatar-circle">
            MD
            <span class="online-dot"></span>
          </div>

          <p class="avatar-name"><?= htmlspecialchars($name) ?></p>
          <p class="avatar-email"><?= htmlspecialchars($email) ?></p>

          <div class="sidebar-stats">
            <div class="sstat">
              <span class="sstat-num">24</span>
              <span class="sstat-lbl">Jours tracés</span>
            </div>
            <div class="sstat">
              <span class="sstat-num">7</span>
              <span class="sstat-lbl">Série en cours</span>
            </div>
            <div class="sstat">
              <span class="sstat-num">18</span>
              <span class="sstat-lbl">Notes</span>
            </div>
          </div>

          <div class="fav-mood-block">
            <span class="fav-label">Humeur favorite</span>
            <div class="fav-mood-pill">😄 <span>Joyeux</span></div>
          </div>

          <div class="danger-zone">
            <span class="danger-title">⚠ Zone dangereuse</span>
            <button type="button" class="btn-danger-ghost">
              🗑 Supprimer mon compte
            </button>
          </div>
        </div>
      </div>

      <!-- ═══════════════
             FORMULAIRES
             ═══════════════ -->
      <div class="col-lg-9">
        <!-- ── 1. Informations générales ── -->
        <div class="profile-section">
          <div class="section-head">
            <span class="section-head-icon">👤</span>
            <div class="section-head-text">
              <p class="section-head-title">Informations générales</p>
              <p class="section-head-sub">Votre identité sur MoodTracker</p>
            </div>
          </div>
          <div class="section-body">
            <form action="#" method="POST" novalidate>
              <!-- Photo -->
              <div class="mb-4">
                <label class="form-label">Photo de profil</label>
                <div class="avatar-upload-zone">
                  <div class="avatar-preview-large">MD</div>
                  <div class="avatar-upload-actions">
                    <p>
                      JPG, PNG ou GIF — 2 Mo max.<br />Laissez vide pour
                      garder vos initiales.
                    </p>
                    <label class="btn-upload" for="avatarFile">
                      📷 Choisir une photo
                    </label>
                    <input
                      type="file"
                      id="avatarFile"
                      name="avatar"
                      accept="image/*"
                      style="display: none" />
                  </div>
                </div>
              </div>

              <hr style="border-color: var(--border); margin: 1.5rem 0" />

              <!-- Prénom / Nom -->
              <div class="row g-3 mb-3">
                <div class="col-sm-6">
                  <label for="firstname" class="form-label">Nom & Prénom</label>
                  <input
                    type="text"
                    id="firstname"
                    name="firstname"
                    class="form-control mood-input"
                    value="<?= htmlspecialchars($name) ?>"
                    autocomplete="given-name" />
                </div>
              </div>

              <!-- Pseudo -->
              <div class="mb-3 col-sm-6">
                <label for="username" class="form-label">Nom d'affichage</label>
                <input
                  type="text"
                  id="username"
                  name="username"
                  class="form-control mood-input"
                  value="<?= $formatUsernameProfile ?>"
                  autocomplete="username" />
                <div
                  style="
                        font-size: 0.77rem;
                        color: var(--text-muted);
                        margin-top: 0.4rem;
                      ">
                  Affiché dans vos rapports et exports.
                </div>
              </div>

              <!-- Bio -->
              <div class="mb-4">
                <label for="bio" class="form-label">
                  Bio
                  <span
                    style="
                          font-weight: 300;
                          text-transform: none;
                          letter-spacing: 0;
                        ">(facultatif)</span>
                </label>
                <textarea
                  id="bio"
                  name="bio"
                  rows="3"
                  class="form-control mood-textarea"
                  placeholder="Quelques mots sur vous…"></textarea>
              </div>

              <div class="d-flex gap-2 align-items-center flex-wrap">
                <button type="submit" class="btn-save-section">
                  Enregistrer les modifications
                </button>
                <a href="index.html" class="btn-cancel">Annuler</a>
              </div>
            </form>
          </div>
        </div>

        <!-- ── 2. Coordonnées & compte ── -->
        <div class="profile-section">
          <div class="section-head">
            <span class="section-head-icon">📧</span>
            <div class="section-head-text">
              <p class="section-head-title">Coordonnées &amp; compte</p>
              <p class="section-head-sub">
                Votre adresse e-mail de connexion
              </p>
            </div>
          </div>
          <div class="section-body">
            <form action="#" method="POST" novalidate>
              <div class="mb-3">
                <label for="email" class="form-label">
                  Adresse e-mail
                  <span class="lock-badge">🔒 Vérifiée</span>
                </label>
                <input
                  type="email"
                  id="email"
                  name="email"
                  class="form-control mood-input"
                  value="<?= htmlspecialchars($email) ?>"
                  autocomplete="email" />
                <div
                  style="
                        font-size: 0.77rem;
                        color: var(--text-muted);
                        margin-top: 0.4rem;
                      "></div>
              </div>

              <div class="mb-4">
                <label for="joined" class="form-label">
                  Membre depuis
                  <span class="lock-badge">🔒 Non modifiable</span>
                </label>
                <input
                  type="text"
                  id="joined"
                  class="form-control mood-input"
                  value="<?= htmlspecialchars($dateCreation) ?>"
                  readonly />
              </div>

              <div class="d-flex gap-2">
                <button type="submit" class="btn-save-section">
                  Mettre à jour l'e-mail
                </button>
              </div>
            </form>
          </div>
        </div>

        <!-- ── 3. Sécurité & mot de passe ── -->
        <div class="profile-section">
          <div class="section-head">
            <span class="section-head-icon">🔐</span>
            <div class="section-head-text">
              <p class="section-head-title">Sécurité &amp; mot de passe</p>
              <p class="section-head-sub">
                Modifiez votre mot de passe de connexion
              </p>
            </div>
          </div>
          <div class="section-body">
            <form action="#" method="POST" novalidate>
              <div class="mb-3">
                <label for="current-password" class="form-label">Mot de passe actuel</label>
                <input
                  type="password"
                  id="current-password"
                  name="current_password"
                  class="form-control mood-input"
                  placeholder="••••••••"
                  autocomplete="current-password" />
              </div>

              <div class="mb-2">
                <label for="new-password" class="form-label">Nouveau mot de passe</label>
                <input
                  type="password"
                  id="new-password"
                  name="new_password"
                  class="form-control mood-input"
                  placeholder="Minimum 8 caractères"
                  autocomplete="new-password" />
                <div class="strength-bar">
                  <div class="strength-seg"></div>
                  <div class="strength-seg"></div>
                  <div class="strength-seg"></div>
                  <div class="strength-seg"></div>
                </div>
                <div
                  style="
                        font-size: 0.77rem;
                        color: var(--text-muted);
                        margin-top: 0.35rem;
                      ">
                  Utilisez au moins 8 caractères, une majuscule et un
                  chiffre.
                </div>
              </div>

              <div class="mb-4">
                <label for="confirm-password" class="form-label">Confirmer le nouveau mot de passe</label>
                <input
                  type="password"
                  id="confirm-password"
                  name="confirm_password"
                  class="form-control mood-input"
                  placeholder="••••••••"
                  autocomplete="new-password" />
              </div>

              <div class="d-flex gap-2">
                <button type="submit" class="btn-save-section">
                  Changer le mot de passe
                </button>
              </div>
            </form>
          </div>
        </div>

        <!-- ── 4. Préférences ── -->
        <div class="profile-section">
          <div class="section-head">
            <span class="section-head-icon">🎨</span>
            <div class="section-head-text">
              <p class="section-head-title">Préférences MoodTracker</p>
              <p class="section-head-sub">Personnalisez votre expérience</p>
            </div>
          </div>
          <div class="section-body">
            <form action="#" method="POST" novalidate>
              <!-- Thème -->
              <div class="mb-4">
                <label class="form-label d-block mb-3">Thème de l'interface</label>
                <div class="theme-options">
                  <div>
                    <input
                      type="radio"
                      name="theme"
                      id="theme-dark"
                      value="dark"
                      class="theme-radio-input"
                      checked />
                    <label class="theme-card-label" for="theme-dark">
                      <div class="theme-swatch theme-swatch-dark"></div>
                      <span class="theme-name">Nuit</span>
                    </label>
                  </div>
                  <div>
                    <input
                      type="radio"
                      name="theme"
                      id="theme-warm"
                      value="warm"
                      class="theme-radio-input" />
                    <label class="theme-card-label" for="theme-warm">
                      <div class="theme-swatch theme-swatch-warm"></div>
                      <span class="theme-name">Ambre</span>
                    </label>
                  </div>
                  <div>
                    <input
                      type="radio"
                      name="theme"
                      id="theme-slate"
                      value="slate"
                      class="theme-radio-input" />
                    <label class="theme-card-label" for="theme-slate">
                      <div class="theme-swatch theme-swatch-slate"></div>
                      <span class="theme-name">Ardoise</span>
                    </label>
                  </div>
                </div>
              </div>

              <hr style="border-color: var(--border); margin: 1.2rem 0" />

              <div class="d-flex gap-2 align-items-center flex-wrap">
                <button type="submit" class="btn-save-section">
                  Enregistrer les préférences
                </button>
                <a href="index.html" class="btn-cancel">Annuler</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>