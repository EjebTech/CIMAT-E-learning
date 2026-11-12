@extends('template-admin')
@section('title', 'Devoirs & Évaluations')

@section('content')
    <div class="admin_page_header">
        <div class="admin_page_header_info">
            <h1>Gestion des Devoirs &amp; Évaluations</h1>
            <p>Supervisez les travaux pratiques, devoirs de maison et examens blancs des apprenants.</p>
        </div>
        <div class="admin_page_actions">
            <a href="{{ route('Admin.list-correction') }}" class="btn_admin_secondary">
                <i class="fa-solid fa-list-check"></i> Voir les corrections
            </a>
            <button class="btn_admin_primary" type="button" data-modal-open="createExerciseModal">
                <i class="fa-solid fa-plus" aria-hidden="true"></i> Créer un devoir / évaluation
            </button>
        </div>
    </div>

    <!-- Statistiques -->
    <section class="admin_stats_grid">
        <div class="admin_stat_card">
            <div class="admin_stat_icon stat_blue"><i class="fa-solid fa-clipboard-question"></i></div>
            <div class="admin_stat_content">
                <span class="admin_stat_val">24</span>
                <span class="admin_stat_lbl">Total devoirs créés</span>
            </div>
        </div>
        <div class="admin_stat_card">
            <div class="admin_stat_icon stat_green"><i class="fa-solid fa-circle-check"></i></div>
            <div class="admin_stat_content">
                <span class="admin_stat_val">18</span>
                <span class="admin_stat_lbl">Sessions en cours</span>
            </div>
        </div>
        <div class="admin_stat_card">
            <div class="admin_stat_icon stat_orange"><i class="fa-solid fa-clock-rotate-left"></i></div>
            <div class="admin_stat_content">
                <span class="admin_stat_val">12</span>
                <span class="admin_stat_lbl">Copies en attente de note</span>
            </div>
        </div>
    </section>

    <!-- Filtres & Recherche -->
    <div class="admin_filter_bar">
        <div class="admin_filter_group">
            <button class="admin_filter_pill active" type="button" data-filter="all">Tous les devoirs</button>
            <button class="admin_filter_pill" type="button" data-filter="active">En cours</button>
            <button class="admin_filter_pill" type="button" data-filter="exam">Évaluations / Examens</button>
            <button class="admin_filter_pill" type="button" data-filter="finished">Clôturés</button>
        </div>

        <div class="admin_filter_search">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="search" id="exerciseSearchInput" placeholder="Rechercher une évaluation...">
        </div>
    </div>

    <!-- Tableau des exercices -->
    <div class="admin_card">
        <div class="admin_card_header">
            <h2><i class="fa-solid fa-pen-ruler"></i> Liste des devoirs &amp; examens</h2>
        </div>
        <div class="admin_table_wrapper">
            <table class="admin_table">
                <thead>
                    <tr>
                        <th>Intitulé du devoir</th>
                        <th>Module / Type</th>
                        <th>Groupe cible</th>
                        <th>Date limite de rendu</th>
                        <th>Copies rendues</th>
                        <th>Statut</th>
                        <th style="text-align: right;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="exercise_item_row" data-category="active">
                        <td>
                            <div class="table_user_cell">
                                <span class="table_avatar" style="background: #e0f2fe; color: #0284c7;"><i class="fa-solid fa-clipboard-list"></i></span>
                                <div>
                                    <strong>Étude de cas : Procédure de dépressurisation cabine</strong>
                                    <small>Consignes d'annonce passagers et utilisation oxygène</small>
                                </div>
                            </div>
                        </td>
                        <td><span class="badge_status" style="background: #eef2f6; color: #334155; font-weight: 600;">PNC</span></td>
                        <td>PNC - Promotion 2026-A</td>
                        <td><strong>18 Nov 2026 à 23h59</strong></td>
                        <td>28 / 32 apprenants</td>
                        <td><span class="badge_status badge_success"><i class="fa-solid fa-circle-dot"></i> Ouvert</span></td>
                        <td>
                            <div class="table_actions">
                                <button class="action_icon_btn" title="Consulter les copies"><i class="fa-regular fa-eye"></i></button>
                                <button class="action_icon_btn btn_delete" title="Supprimer"><i class="fa-regular fa-trash-can"></i></button>
                            </div>
                        </td>
                    </tr>

                    <tr class="exercise_item_row" data-category="exam">
                        <td>
                            <div class="table_user_cell">
                                <span class="table_avatar" style="background: #ffedd5; color: #ea580c;"><i class="fa-solid fa-award"></i></span>
                                <div>
                                    <strong>Évaluation Blanche CCA : Réglementation &amp; Sécurité</strong>
                                    <small>Examen chronométré blanc officiel DGAC/ANAC</small>
                                </div>
                            </div>
                        </td>
                        <td><span class="badge_status" style="background: #eef2f6; color: #334155; font-weight: 600;">Anglais</span></td>
                        <td>PNC - Tous les groupes</td>
                        <td><strong>22 Nov 2026 à 14h00</strong></td>
                        <td>-- / 84 apprenants</td>
                        <td><span class="badge_status badge_accent"><i class="fa-regular fa-calendar"></i> Planifié</span></td>
                        <td>
                            <div class="table_actions">
                                <button class="action_icon_btn" title="Modifier"><i class="fa-regular fa-pen-to-square"></i></button>
                                <button class="action_icon_btn btn_delete" title="Supprimer"><i class="fa-regular fa-trash-can"></i></button>
                            </div>
                        </td>
                    </tr>

                    <tr class="exercise_item_row" data-category="finished">
                        <td>
                            <div class="table_user_cell">
                                <span class="table_avatar" style="background: #f1f5f9; color: #475569;"><i class="fa-solid fa-check-double"></i></span>
                                <div>
                                    <strong>Devoir écrit : Gestion de passager perturbateur</strong>
                                    <small>Règles juridiques de contention et rapport au commandant</small>
                                </div>
                            </div>
                        </td>
                        <td><span class="badge_status" style="background: #eef2f6; color: #334155; font-weight: 600;">Informatique</span></td>
                        <td>PNC - Promotion 2026-B</td>
                        <td>02 Nov 2026</td>
                        <td>30 / 30 apprenants</td>
                        <td><span class="badge_status badge_info">Corrigé &amp; Noté</span></td>
                        <td>
                            <div class="table_actions">
                                <button class="action_icon_btn" title="Voir les notes"><i class="fa-regular fa-eye"></i></button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modale : Créer un Devoir / Évaluation -->
    <div class="admin_modal" id="createExerciseModal" hidden>
        <div class="admin_modal_dialog modal_lg">
            <header class="admin_modal_header">
                <div class="modal_header_title">
                    <i class="fa-solid fa-clipboard-question"></i>
                    <div>
                        <h2>Créer un devoir ou une évaluation</h2>
                        <p>Définissez un travail à rendre ou un test pour les apprenants.</p>
                    </div>
                </div>
                <button type="button" class="admin_modal_close" data-modal-close="createExerciseModal" aria-label="Fermer">&times;</button>
            </header>
            <form method="POST" action="#" enctype="multipart/form-data">
                @csrf
                <div class="admin_modal_body">
                    <div class="admin_form_grid">
                        <div class="admin_form_group col_full">
                            <label for="hw_title">Titre du devoir ou de l'épreuve</label>
                            <input type="text" id="hw_title" name="title" placeholder="Ex: Devoir de synthèse : Anglais aéronautique et annonces bord" required>
                        </div>
                        <div class="admin_form_group">
                            <label for="hw_module">Module</label>
                            <select id="hw_module" name="module" required>
                                <option value="anglais">Anglais</option>
                                <option value="informatique">Informatique</option>
                                <option value="PNC">PNC</option>

                            </select>
                        </div>
                        <div class="admin_form_group">
                            <label for="hw_group">Groupe concerné</label>
                            <select id="hw_group" name="group" required>
                                <option value="all">Tous les groupes</option>
                                <option value="pnc-2026-a">PNC - Promotion 2026-A</option>
                                <option value="pnc-2026-b">PNC - Promotion 2026-B</option>
                                <option value="escale-2026">Agent d'Escale 2026</option>
                            </select>
                        </div>
                        <div class="admin_form_group">
                            <label for="hw_type">Type de devoir</label>
                            <select id="hw_type" name="type" required>
                                <option value="homework">Devoir de maison (Dossier à rendre)</option>
                                <option value="exam">Évaluation blanche / Examen</option>
                                <option value="qcm">QCM en ligne</option>
                            </select>
                        </div>
                        <div class="admin_form_group">
                            <label for="hw_deadline">Date limite de soumission</label>
                            <input type="date" id="hw_deadline" name="deadline" required value="{{ date('Y-m-d', strtotime('+7 days')) }}">
                        </div>
                        <div class="admin_form_group">
                            <label for="hw_max_score">Barème / Note maximale</label>
                            <input type="number" id="hw_max_score" name="max_score" value="20" min="1" max="100">
                        </div>
                        <div class="admin_form_group col_full">
                            <label for="hw_teacher">Professeur responsable / Correcteur</label>
                            <select id="hw_teacher" name="teacher_id" required>
                                <option value="1">M. Alain N'Dri (Sécurité Sauvetage Cabine)</option>
                                <option value="2">Mme. Claire Diop (Relation Client &amp; Service)</option>
                                <option value="3">M. Robert Kouassi (Réglementation IATA &amp; DGR)</option>
                                <option value="4">Dr. Kouassi (Premiers Secours Aéronautiques)</option>
                                <option value="admin">Direction des Études (Administration)</option>
                            </select>
                        </div>
                        <div class="admin_form_group col_full">
                            <label for="hw_instructions">Instructions détaillées &amp; Consignes</label>
                            <textarea id="hw_instructions" name="instructions" placeholder="Décrivez les critères d'évaluation, le nombre de pages attendu, les barèmes..."></textarea>
                        </div>
                        <div class="admin_form_group col_full">
                            <label>Joindre un sujet ou document ressource (Optionnel)</label>
                            <input type="file" name="video_file" accept="video/*">
                        </div>
                    </div>
                </div>
                <footer class="admin_modal_footer">
                    <button type="button" class="admin_modal_cancel" data-modal-close="createExerciseModal">Annuler</button>
                    <button type="submit" class="btn_admin_primary"><i class="fa-solid fa-paper-plane"></i> Publier le devoir</button>
                </footer>
            </form>
        </div>
    </div>

    <!-- Script de filtrage et recherche dynamique -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const filterPills = document.querySelectorAll('.admin_filter_pill');
            const exerciseRows = document.querySelectorAll('.exercise_item_row');
            const searchInput = document.getElementById('exerciseSearchInput');

            let currentFilter = 'all';

            function filterExercises() {
                const searchTerm = searchInput.value.toLowerCase().trim();

                exerciseRows.forEach(row => {
                    const category = row.getAttribute('data-category');
                    const textContent = row.textContent.toLowerCase();

                    const matchesCategory = (currentFilter === 'all' || category === currentFilter);
                    const matchesSearch = textContent.includes(searchTerm);

                    if (matchesCategory && matchesSearch) {
                        row.style.display = '';
                    } else {
                        row.style.display = 'none';
                    }
                });
            }

            filterPills.forEach(pill => {
                pill.addEventListener('click', function () {
                    filterPills.forEach(p => p.classList.remove('active'));
                    this.classList.add('active');
                    currentFilter = this.getAttribute('data-filter');
                    filterExercises();
                });
            });

            if (searchInput) {
                searchInput.addEventListener('input', filterExercises);
            }
        });
    </script>
@endsection
