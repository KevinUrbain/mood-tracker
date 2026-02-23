<!-- ─────────── DASHBOARD ─────────── -->
<div class="dashboard-wrapper">
    <div class="container">

        <!-- Greeting -->
        <div class="dash-greeting">
            <div class="date-pill">
                📅 <?php echo $currentDate ?>
            </div>
            <h2 class="greeting-title">
                Comment vous sentez-vous,<br />
                <strong><?= $name ?></strong> ?
            </h2>
        </div>

        <!-- Stats row -->
        <div class="row g-3 mb-4">
            <div class="col-6 col-md-3">
                <div class="stat-card">
                    <span class="stat-number">24</span>
                    <span class="stat-label">Jours tracés</span>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="stat-card">
                    <span class="stat-number">😄</span>
                    <span class="stat-label">Humeur favorite</span>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="stat-card">
                    <span class="stat-number">7</span>
                    <span class="stat-label">Jours consécutifs</span>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="stat-card">
                    <span class="stat-number">18</span>
                    <span class="stat-label">Notes rédigées</span>
                </div>
            </div>
        </div>

        <div class="row g-4">

            <!-- ── Left: Mood form ── -->
            <div class="col-lg-7">

                <div class="mood-form-card">
                    <form action="#" method="POST" novalidate>

                        <!-- Mood picker -->
                        <p class="section-label">Votre humeur du jour</p>

                        <div class="mood-grid">

                            <!-- Euphorique -->
                            <div class="mood-tile-wrapper">
                                <label>
                                    <div class="mood-tile" data-mood="euphorique">
                                        <input type="radio" name="mood" value="euphorique" />
                                        <span class="mood-tile-emoji">🤩</span>
                                        <span class="mood-tile-label">Euphorique</span>
                                    </div>
                                </label>
                            </div>

                            <!-- Joyeux -->
                            <div class="mood-tile-wrapper">
                                <label>
                                    <div class="mood-tile" data-mood="joyeux">
                                        <input type="radio" name="mood" value="joyeux" />
                                        <span class="mood-tile-emoji">😄</span>
                                        <span class="mood-tile-label">Joyeux</span>
                                    </div>
                                </label>
                            </div>

                            <!-- Calme -->
                            <div class="mood-tile-wrapper">
                                <label>
                                    <div class="mood-tile" data-mood="calme">
                                        <input type="radio" name="mood" value="calme" />
                                        <span class="mood-tile-emoji">😌</span>
                                        <span class="mood-tile-label">Calme</span>
                                    </div>
                                </label>
                            </div>

                            <!-- Neutre -->
                            <div class="mood-tile-wrapper">
                                <label>
                                    <div class="mood-tile" data-mood="neutre">
                                        <input type="radio" name="mood" value="neutre" />
                                        <span class="mood-tile-emoji">😐</span>
                                        <span class="mood-tile-label">Neutre</span>
                                    </div>
                                </label>
                            </div>

                            <!-- Triste -->
                            <div class="mood-tile-wrapper">
                                <label>
                                    <div class="mood-tile" data-mood="triste">
                                        <input type="radio" name="mood" value="triste" />
                                        <span class="mood-tile-emoji">😢</span>
                                        <span class="mood-tile-label">Triste</span>
                                    </div>
                                </label>
                            </div>

                        </div>
                        <!-- end mood-grid -->

                        <!-- Note -->
                        <p class="section-label mt-4">Note du jour
                            <span
                                style="font-size:0.75rem;letter-spacing:0;text-transform:none;font-weight:300;color:var(--text-muted);margin-left:0.3rem;">
                                (facultatif)
                            </span>
                        </p>

                        <textarea class="form-control mood-textarea" name="note" id="moodNote" rows="4"
                            placeholder="Décrivez votre journée, vos pensées, vos ressentis…&#10;&#10;Pas de jugement — juste vous."></textarea>

                        <!-- Submit -->
                        <div class="d-flex justify-content-end mt-3">
                            <button type="submit" class="btn-mood-save">
                                Enregistrer ✦
                            </button>
                        </div>

                    </form>
                </div>

            </div>
            <!-- end col-lg-7 -->


            <!-- ── Right: History ── -->
            <div class="col-lg-5">

                <div class="history-section">
                    <p class="section-label">Historique récent</p>

                    <!-- Entry: Joyeux -->
                    <div class="log-card" style="animation-delay: 0.05s;">
                        <span class="log-emoji">😄</span>
                        <div class="log-body">
                            <p class="log-mood">Joyeux</p>
                            <p class="log-note">Excellente réunion ce matin, l'équipe était très motivée !</p>
                            <span class="log-date">Vendredi 21 Février 2026</span>
                        </div>
                        <div class="log-badge badge-joyeux"></div>
                    </div>

                    <!-- Entry: Calme -->
                    <div class="log-card" style="animation-delay: 0.10s;">
                        <span class="log-emoji">😌</span>
                        <div class="log-body">
                            <p class="log-mood">Calme</p>
                            <p class="log-note">Journée tranquille à la maison, lecture et repos.</p>
                            <span class="log-date">Jeudi 20 Février 2026</span>
                        </div>
                        <div class="log-badge badge-calme"></div>
                    </div>

                    <!-- Entry: Euphorique -->
                    <div class="log-card" style="animation-delay: 0.15s;">
                        <span class="log-emoji">🤩</span>
                        <div class="log-body">
                            <p class="log-mood">Euphorique</p>
                            <p class="log-note">Promotion obtenue ! Je suis aux anges.</p>
                            <span class="log-date">Mercredi 19 Février 2026</span>
                        </div>
                        <div class="log-badge badge-euphorique"></div>
                    </div>

                    <!-- Entry: Neutre -->
                    <div class="log-card" style="animation-delay: 0.20s;">
                        <span class="log-emoji">😐</span>
                        <div class="log-body">
                            <p class="log-mood">Neutre</p>
                            <p class="log-note" style="color:var(--text-muted);font-style:italic;">Aucune note</p>
                            <span class="log-date">Mardi 18 Février 2026</span>
                        </div>
                        <div class="log-badge badge-neutre"></div>
                    </div>

                    <!-- Entry: Triste -->
                    <div class="log-card" style="animation-delay: 0.25s;">
                        <span class="log-emoji">😢</span>
                        <div class="log-body">
                            <p class="log-mood">Triste</p>
                            <p class="log-note">Pas une bonne journée. Besoin de repos.</p>
                            <span class="log-date">Lundi 17 Février 2026</span>
                        </div>
                        <div class="log-badge badge-triste"></div>
                    </div>

                    <!-- See all -->
                    <div class="text-center mt-3">
                        <a href="#" style="font-size:0.82rem;color:var(--text-muted);text-decoration:none;
                       letter-spacing:0.07em;text-transform:uppercase;font-weight:500;
                       transition:color 0.2s;">
                            Voir tout l'historique →
                        </a>
                    </div>

                </div>
            </div>
            <!-- end col-lg-5 -->

        </div>
        <!-- end row -->

    </div>
</div>
<!-- ─────────── END DASHBOARD ─────────── -->