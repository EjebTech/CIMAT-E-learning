@extends('template-teacher')
@section('content-teacher')
    <main class="evaluations_page">
        <header class="top_dashboard_teacher evaluations_top_dashboard">
            <div class="left">
                <div class="search">
                    <i class="fa-solid fa-magnifying-glass" aria-hidden="true"></i>
                    <input type="search" aria-label="Recherche globale" placeholder="Recherche un élève, un cours, un devoir...">
                </div>
            </div>
            <div class="admin_topbar_right">
                <div class="admin_date_pill">
                    <i class="fa-regular fa-calendar-days"></i>
                    <span>{{ now()->translatedFormat('d M Y') }}</span>
                </div>

                <div class="admin_notif_wrap">
                    <a href="#" class="admin_notif_btn" aria-label="Notifications">
                        <i class="fa-regular fa-bell"></i>
                        <span class="admin_notif_count">5</span>
                    </a>
                </div>

                <a class="admin_profile_pill" href="{{ route('Admin.list-admin') }}" title="Gérer le profil admin">
                    <span class="admin_profile_avatar">EB</span>
                    <div class="admin_profile_meta">
                        <strong>Edmond Barou</strong>
                        <small>Direction CIMAT</small>
                    </div>
                </a>
            </div>
        </header>
        <div class="global-group-banner">
            <label for="teacher-group">
                <i class="fa-solid fa-layer-group"></i>
                Cliquez pour sélectionner les groupes que vous gérez :
            </label>
            <select id="teacher-group" name="teacher-group" aria-label="Choisir le groupe actif">
                <option value="developpement-web">PNC-1ère année</option>
                <option value="bureautique">Fret Aérien</option>
            </select>
        </div>

        <section class="evaluations_heading">
            <div>
                
                <h1>Devoirs &amp; évaluations</h1>
                <p>Créez des exercices PNC, suivez les rendus et donnez vos retours aux apprenants.</p>
            </div>
            <div class="evaluation_create_actions">
                <button class="secondary_button" type="button" data-modal-open="exerciseModal"><i class="fa-regular fa-square-check" aria-hidden="true"></i> Créer un exercice</button>
                <button class="primary_button" type="button" data-modal-open="homeworkModal"><i class="fa-solid fa-file-pen" aria-hidden="true"></i> Créer un devoir</button>
            </div>
        </section>

        <section class="evaluation_summary" aria-label="Résumé des évaluations">
            <article><span class="evaluation_summary_icon summary-orange"><i class="fa-solid fa-pen-to-square" aria-hidden="true"></i></span><div><strong>3</strong><span>Rendus à corriger</span></div></article>
            <article><span class="evaluation_summary_icon summary-blue"><i class="fa-solid fa-file-lines" aria-hidden="true"></i></span><div><strong>8</strong><span>Devoirs actifs</span></div></article>
            <article><span class="evaluation_summary_icon summary-green"><i class="fa-solid fa-users" aria-hidden="true"></i></span><div><strong>32</strong><span>Apprenants PNC</span></div></article>
        </section>

        <!-- SECTION 1 : TRAVAUX RENDUS -->
        <section class="submissions_panel" aria-labelledby="submissions-title">
            <header class="evaluation_section_header">
                <div>
                    <h2 id="submissions-title">Travaux rendus</h2>
                    <p>Ouvrez un rendu pour attribuer une note et laisser un commentaire.</p>
                </div>
                <div class="evaluation_section_tools">
                    <div class="evaluation_search">
                        <label for="evaluation-search">Rechercher un élève, un devoir ou un exercice</label>
                        <div><i class="fa-solid fa-magnifying-glass" aria-hidden="true"></i><input id="evaluation-search" type="search" placeholder="Nom ou titre..."></div>
                    </div>
                </div>
            </header>

            <div class="course_filters" aria-label="Filtrer les travaux rendus" style="margin-bottom: 15px;">
                <button class="course_filter active" type="button" data-eval-filter="all" aria-pressed="true">Tous</button>
                <button class="course_filter" type="button" data-eval-filter="exercice" aria-pressed="false">Exercices</button>
                <button class="course_filter" type="button" data-eval-filter="devoir" aria-pressed="false">Devoirs</button>
                <span style="border-left: 1px solid var(--color-border); margin-inline: 4px;"></span>
                <button class="course_filter" type="button" data-eval-filter="pending" aria-pressed="false">À corriger</button>
                <button class="course_filter" type="button" data-eval-filter="corrected" aria-pressed="false">Corrigés</button>
            </div>

            <div class="submission_list">
                <article class="submission_row" data-submission-row data-type="exercice" data-status="pending" data-search="lucas moreau procédures de sécurité cabine">
                    <span class="submission_avatar avatar-blue" aria-hidden="true">LM</span>
                    <div class="submission_student"><h3>Lucas Moreau</h3><span>PNC-042 · Groupe PNC</span></div>
                    <div class="submission_assignment"><span class="evaluation_type" style="margin-bottom: 3px; display:inline-block;">Exercice</span><strong>Procédures de sécurité cabine</strong><span>Rendu le 18 mars 2026</span></div>
                    <span class="submission_status status-pending">À corriger</span>
                    <button class="submission_view_button" type="button" data-submission-view="PNC-042-security"><i class="fa-regular fa-eye" aria-hidden="true"></i></button>
                    <details class="grading_disclosure">
                        <summary><i class="fa-solid fa-pen-to-square" aria-hidden="true"></i> Corriger &amp; commenter</summary>
                        <form class="grading_form">
                            <label>Note sur 20<input type="number" name="grade" min="0" max="20" step="0.5" placeholder="Ex. 16"></label>
                            <label>Commentaire<textarea name="comment" rows="3" placeholder="Votre retour à l’apprenant..."></textarea></label>
                            <button class="grading_submit" type="submit">Enregistrer la correction</button>
                        </form>
                    </details>
                </article>

                <article class="submission_row" data-submission-row data-type="devoir" data-status="corrected" data-search="camille dupuis service à bord et relation passager">
                    <span class="submission_avatar avatar-green" aria-hidden="true">CD</span>
                    <div class="submission_student"><h3>Camille Dupuis</h3><span>PNC-011 · Groupe PNC</span></div>
                    <div class="submission_assignment"><span class="evaluation_type" style="margin-bottom: 3px; display:inline-block;">Devoir</span><strong>Service à bord et relation passager</strong><span>Rendu le 17 mars 2026</span></div>
                    <span class="submission_status status-corrected">Corrigé · 16/20</span>
                    <button class="submission_view_button" type="button" data-submission-view="PNC-011-service"><i class="fa-regular fa-eye" aria-hidden="true"></i></button>
                    <details class="grading_disclosure">
                        <summary><i class="fa-solid fa-pen-to-square" aria-hidden="true"></i> Voir la correction</summary>
                        <form class="grading_form">
                            <label>Note sur 20<input type="number" name="grade" min="0" max="20" step="0.5" value="16"></label>
                            <label>Commentaire<textarea name="comment" rows="3">Bonne qualité d’accueil et posture professionnelle.</textarea></label>
                            <button class="grading_submit" type="submit">Modifier la correction</button>
                        </form>
                    </details>
                </article>

                <article class="submission_row" data-submission-row data-type="exercice" data-status="pending" data-search="sarah benali quiz : premiers secours en cabine">
                    <span class="submission_avatar avatar-blue" aria-hidden="true">SB</span>
                    <div class="submission_student"><h3>Sarah Benali</h3><span>PNC-015 · Groupe PNC</span></div>
                    <div class="submission_assignment"><span class="evaluation_type" style="margin-bottom: 3px; display:inline-block;">Exercice</span><strong>Quiz : premiers secours en cabine</strong><span>Rendu le 16 mars 2026</span></div>
                    <span class="submission_status status-pending">À corriger</span>
                    <button class="submission_view_button" type="button" data-submission-view="PNC-015-first-aid"><i class="fa-regular fa-eye" aria-hidden="true"></i></button>
                    <details class="grading_disclosure">
                        <summary><i class="fa-solid fa-pen-to-square" aria-hidden="true"></i> Corriger &amp; commenter</summary>
                        <form class="grading_form">
                            <label>Note sur 20<input type="number" name="grade" min="0" max="20" step="0.5" placeholder="Ex. 16"></label>
                            <label>Commentaire<textarea name="comment" rows="3" placeholder="Votre retour à l’apprenant..."></textarea></label>
                            <button class="grading_submit" type="submit">Enregistrer la correction</button>
                        </form>
                    </details>
                </article>

                <article class="submission_row" data-submission-row data-type="devoir" data-status="corrected" data-search="thomas garnier accueil et embarquement des passagers">
                    <span class="submission_avatar avatar-blue" aria-hidden="true">TG</span>
                    <div class="submission_student"><h3>Thomas Garnier</h3><span>PNC-019 · Groupe PNC</span></div>
                    <div class="submission_assignment"><span class="evaluation_type" style="margin-bottom: 3px; display:inline-block;">Devoir</span><strong>Accueil et embarquement des passagers</strong><span>Rendu le 15 mars 2026</span></div>
                    <span class="submission_status status-corrected">Corrigé · 18/20</span>
                    <button class="submission_view_button" type="button" data-submission-view="PNC-019-boarding"><i class="fa-regular fa-eye" aria-hidden="true"></i></button>
                    <details class="grading_disclosure">
                        <summary><i class="fa-solid fa-pen-to-square" aria-hidden="true"></i> Voir la correction</summary>
                        <form class="grading_form">
                            <label>Note sur 20<input type="number" name="grade" min="0" max="20" step="0.5" value="18"></label>
                            <label>Commentaire<textarea name="comment" rows="3">Très bon déroulement de l’embarquement et communication claire.</textarea></label>
                            <button class="grading_submit" type="submit">Modifier la correction</button>
                        </form>
                    </details>
                </article>

                <article class="submission_row" data-submission-row data-type="devoir" data-status="pending" data-search="emma laurent gestion des situations difficiles">
                    <span class="submission_avatar avatar-blue" aria-hidden="true">EL</span>
                    <div class="submission_student"><h3>Emma Laurent</h3><span>PNC-024 · Groupe PNC</span></div>
                    <div class="submission_assignment"><span class="evaluation_type" style="margin-bottom: 3px; display:inline-block;">Devoir</span><strong>Gestion des situations difficiles</strong><span>Rendu le 14 mars 2026</span></div>
                    <span class="submission_status status-pending">À corriger</span>
                    <button class="submission_view_button" type="button" data-submission-view="PNC-024-difficult-situation"><i class="fa-regular fa-eye" aria-hidden="true"></i></button>
                    <details class="grading_disclosure">
                        <summary><i class="fa-solid fa-pen-to-square" aria-hidden="true"></i> Corriger &amp; commenter</summary>
                        <form class="grading_form">
                            <label>Note sur 20<input type="number" name="grade" min="0" max="20" step="0.5" placeholder="Ex. 16"></label>
                            <label>Commentaire<textarea name="comment" rows="3" placeholder="Votre retour à l’apprenant..."></textarea></label>
                            <button class="grading_submit" type="submit">Enregistrer la correction</button>
                        </form>
                    </details>
                </article>
            </div>
        </section>

        <!-- SECTION 2 : EXERCICES ET DEVOIRS (AVEC FILTRES ET RECHERCHE) -->
        <section class="published_evaluations" aria-labelledby="published-evaluations-title">
            <header class="evaluation_section_header">
                <div>
                    <h2 id="published-evaluations-title">Exercices et devoirs</h2>
                    <p>Contenus proposés au groupe PNC.</p>
                </div>
                <!-- Barre de recherche pour la section du bas -->
                <div class="evaluation_section_tools">
                    <div class="evaluation_search">
                        <label for="published-search">Rechercher un exercice ou un devoir</label>
                        <div><i class="fa-solid fa-magnifying-glass" aria-hidden="true"></i><input id="published-search" type="search" placeholder="Titre de l'exercice/devoir..."></div>
                    </div>
                </div>
            </header>

            <div class="course_filters" aria-label="Filtrer les exercices et devoirs" style="margin-bottom: 15px;">
                <button class="course_filter active" type="button" data-pub-filter="all" aria-pressed="true">Tous</button>
                <button class="course_filter" type="button" data-pub-filter="exercice" aria-pressed="false">Exercices</button>
                <button class="course_filter" type="button" data-pub-filter="devoir" aria-pressed="false">Devoirs</button>
            </div>

            <div class="published_evaluation_list">
                <article class="published_evaluation" data-pub-row data-type="exercice" data-search="consignes de sécurité et équipements cabine">
                    <span class="published_icon icon-exercise"><i class="fa-regular fa-square-check" aria-hidden="true"></i></span>
                    <div><span class="evaluation_type">Exercice</span><h3>Consignes de sécurité et équipements cabine</h3><p>Quiz · Groupe PNC · 20 questions</p></div>
                    <span class="published_count">32 rendus</span>
                    <div class="published_evaluation_actions">
                        <button type="button" aria-label="Modifier"><i class="fa-solid fa-pen" aria-hidden="true"></i><span>Modifier</span></button>
                        <button type="button" class="published_delete_button" aria-label="Supprimer"><i class="fa-regular fa-trash-can" aria-hidden="true"></i><span>Supprimer</span></button>
                    </div>
                </article>

                <article class="published_evaluation" data-pub-row data-type="devoir" data-search="étude de cas : incident en cabine">
                    <span class="published_icon icon-homework"><i class="fa-solid fa-file-pen" aria-hidden="true"></i></span>
                    <div><span class="evaluation_type">Devoir</span><h3>Étude de cas : incident en cabine</h3><p>À rendre le 25 mars 2026 · Groupe PNC</p></div>
                    <span class="published_count">24 rendus</span>
                    <div class="published_evaluation_actions">
                        <button type="button" aria-label="Modifier"><i class="fa-solid fa-pen" aria-hidden="true"></i><span>Modifier</span></button>
                        <button type="button" class="published_delete_button" aria-label="Supprimer"><i class="fa-regular fa-trash-can" aria-hidden="true"></i><span>Supprimer</span></button>
                    </div>
                </article>

                <article class="published_evaluation" data-pub-row data-type="exercice" data-search="mise en situation : annonce de sécurité">
                    <span class="published_icon icon-exercise"><i class="fa-regular fa-square-check" aria-hidden="true"></i></span>
                    <div><span class="evaluation_type">Exercice</span><h3>Mise en situation : annonce de sécurité</h3><p>Oral · Groupe PNC · 10 minutes</p></div>
                    <span class="published_count">18 rendus</span>
                    <div class="published_evaluation_actions">
                        <button type="button" aria-label="Modifier"><i class="fa-solid fa-pen" aria-hidden="true"></i><span>Modifier</span></button>
                        <button type="button" class="published_delete_button" aria-label="Supprimer"><i class="fa-regular fa-trash-can" aria-hidden="true"></i><span>Supprimer</span></button>
                    </div>
                </article>
            </div>
        </section>

        <footer class="teacher_footer">
            <p>&copy; {{ date('Y') }} <a href="{{ route('Teacher.dashboard') }}">Groupe Komptech Cimat</a>. Tous droits réservés.</p>
            <div class="footer_socials">
                <a href="#" aria-label="Facebook" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-facebook-f" aria-hidden="true"></i></a>
                <a href="#" aria-label="LinkedIn" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-linkedin-in" aria-hidden="true"></i></a>
                <a href="#" aria-label="Instagram" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-instagram" aria-hidden="true"></i></a>
            </div>
        </footer>
    </main>

    <!-- Modales -->
    <div class="course_modal" id="exerciseModal" role="dialog" aria-modal="true" aria-labelledby="exerciseModalTitle" hidden>
        <section class="course_modal_panel">
            <header class="course_modal_header"><h2 id="exerciseModalTitle"><i class="fa-regular fa-square-check" aria-hidden="true"></i> Créer un exercice</h2><button class="course_modal_close" type="button" data-modal-close="exerciseModal" aria-label="Fermer">&times;</button></header>
            <form class="course_form">
                <label>Titre de l’exercice<input type="text" name="title" required></label>
                <label>Consignes<textarea name="description" rows="4" required></textarea></label>
                <label>Groupe<select name="group"><option>PNC · Première année</option><option>Tous les groupes PNC</option></select></label>
                <label>Date limite<input type="date" name="due_date"></label>
                <label>Document de référence<input type="file" name="attachment" accept="application/pdf,.pdf"></label>
                <footer class="course_form_footer"><button class="course_form_cancel" type="button" data-modal-close="exerciseModal">Annuler</button><button class="course_form_submit" type="submit">Créer l’exercice</button></footer>
            </form>
        </section>
    </div>

    <div class="course_modal" id="homeworkModal" role="dialog" aria-modal="true" aria-labelledby="homeworkModalTitle" hidden>
        <section class="course_modal_panel">
            <header class="course_modal_header"><h2 id="homeworkModalTitle"><i class="fa-solid fa-file-pen" aria-hidden="true"></i> Créer un devoir</h2><button class="course_modal_close" type="button" data-modal-close="homeworkModal" aria-label="Fermer">&times;</button></header>
            <form class="course_form" enctype="multipart/form-data">
                <label>Titre du devoir<input type="text" name="title" required></label>
                <label>Consignes<textarea name="description" rows="4" required></textarea></label>
                <label>Groupe<select name="group"><option>PNC · Première année</option><option>Tous les groupes PNC</option></select></label>
                <label>Date limite<input type="date" name="due_date" required></label>
                <label>Document de référence<input type="file" name="attachment" accept="application/pdf,.pdf"></label>
                <footer class="course_form_footer"><button class="course_form_cancel" type="button" data-modal-close="homeworkModal">Annuler</button><button class="course_form_submit" type="submit">Créer le devoir</button></footer>
            </form>
        </section>
    </div>

    <!-- Script JavaScript unifié : Modales + Filtres/Recherche Haut + Filtres/Recherche Bas -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // --- 1. GESTION DES MODALES ---
            const openButtons = document.querySelectorAll('[data-modal-open]');
            const closeButtons = document.querySelectorAll('[data-modal-close]');
            const modals = document.querySelectorAll('.course_modal');

            openButtons.forEach(button => {
                button.addEventListener('click', () => {
                    const modalId = button.getAttribute('data-modal-open');
                    const targetModal = document.getElementById(modalId);
                    if (targetModal) targetModal.removeAttribute('hidden');
                });
            });

            closeButtons.forEach(button => {
                button.addEventListener('click', () => {
                    const modalId = button.getAttribute('data-modal-close');
                    const targetModal = document.getElementById(modalId);
                    if (targetModal) {
                        targetModal.setAttribute('hidden', 'true');
                        const form = targetModal.querySelector('form');
                        if (form) form.reset();
                    }
                });
            });

            modals.forEach(modal => {
                modal.addEventListener('click', (e) => {
                    if (e.target === modal) {
                        modal.setAttribute('hidden', 'true');
                        const form = modal.querySelector('form');
                        if (form) form.reset();
                    }
                });
            });

            window.addEventListener('keydown', (e) => {
                if (e.key === 'Escape') {
                    modals.forEach(modal => {
                        modal.setAttribute('hidden', 'true');
                        const form = modal.querySelector('form');
                        if (form) form.reset();
                    });
                }
            });


            // --- 2. FILTRAGE ET RECHERCHE DE LA LISTE DU HAUT (Travaux rendus) ---
            const filterButtonsTop = document.querySelectorAll('[data-eval-filter]');
            const submissionRows = document.querySelectorAll('[data-submission-row]');
            const searchInputTop = document.getElementById('evaluation-search');
            let currentFilterTop = 'all';

            filterButtonsTop.forEach(button => {
                button.addEventListener('click', () => {
                    filterButtonsTop.forEach(btn => {
                        btn.classList.remove('active');
                        btn.setAttribute('aria-pressed', 'false');
                    });
                    button.classList.add('active');
                    button.setAttribute('aria-pressed', 'true');

                    currentFilterTop = button.getAttribute('data-eval-filter');
                    applyTopFilters();
                });
            });

            if (searchInputTop) {
                searchInputTop.addEventListener('input', () => {
                    applyTopFilters();
                });
            }

            function applyTopFilters() {
                const searchValue = searchInputTop ? searchInputTop.value.toLowerCase().trim() : '';

                submissionRows.forEach(row => {
                    const rowType = row.getAttribute('data-type');
                    const rowStatus = row.getAttribute('data-status');
                    const rowSearchText = row.getAttribute('data-search');

                    let matchesFilter = false;
                    if (currentFilterTop === 'all') matchesFilter = true;
                    else if (currentFilterTop === 'exercice' && rowType === 'exercice') matchesFilter = true;
                    else if (currentFilterTop === 'devoir' && rowType === 'devoir') matchesFilter = true;
                    else if (currentFilterTop === 'pending' && rowStatus === 'pending') matchesFilter = true;
                    else if (currentFilterTop === 'corrected' && rowStatus === 'corrected') matchesFilter = true;

                    const matchesSearch = rowSearchText.includes(searchValue) || searchValue === '';

                    if (matchesFilter && matchesSearch) {
                        row.style.display = 'grid';
                    } else {
                        row.style.display = 'none';
                    }
                });
            }


            // --- 3. FILTRAGE ET RECHERCHE DE LA LISTE DU BAS (Exercices et devoirs publiés) ---
            const filterButtonsBottom = document.querySelectorAll('[data-pub-filter]');
            const pubRows = document.querySelectorAll('[data-pub-row]');
            const searchInputBottom = document.getElementById('published-search');
            let currentFilterBottom = 'all';

            filterButtonsBottom.forEach(button => {
                button.addEventListener('click', () => {
                    filterButtonsBottom.forEach(btn => {
                        btn.classList.remove('active');
                        btn.setAttribute('aria-pressed', 'false');
                    });
                    button.classList.add('active');
                    button.setAttribute('aria-pressed', 'true');

                    currentFilterBottom = button.getAttribute('data-pub-filter');
                    applyBottomFilters();
                });
            });

            if (searchInputBottom) {
                searchInputBottom.addEventListener('input', () => {
                    applyBottomFilters();
                });
            }

            function applyBottomFilters() {
                const searchValue = searchInputBottom ? searchInputBottom.value.toLowerCase().trim() : '';

                pubRows.forEach(row => {
                    const rowType = row.getAttribute('data-type');
                    const rowSearchText = row.getAttribute('data-search');

                    let matchesFilter = false;
                    if (currentFilterBottom === 'all') matchesFilter = true;
                    else if (currentFilterBottom === 'exercice' && rowType === 'exercice') matchesFilter = true;
                    else if (currentFilterBottom === 'devoir' && rowType === 'devoir') matchesFilter = true;

                    const matchesSearch = rowSearchText.includes(searchValue) || searchValue === '';

                    if (matchesFilter && matchesSearch) {
                        row.style.display = 'grid';
                    } else {
                        row.style.display = 'none';
                    }
                });
            }
        });
    </script>
@endsection
