@extends('template-admin')
@section('title', 'Corrections & Notations')

@section('content')
    <div class="admin_page_header">
        <div class="admin_page_header_info">
            <h1>Corrections &amp; Suivi des Notations</h1>
            <p>Consultez les devoirs soumis par les apprenants, attribuez des notes et publiez les corrigés types.</p>
        </div>
        <div class="admin_page_actions">
            <a href="{{ route('Admin.list-exercise') }}" class="btn_admin_secondary">
                <i class="fa-solid fa-arrow-left"></i> Liste des devoirs
            </a>
            <button class="btn_admin_primary" type="button" data-modal-open="createCorrectionModal">
                <i class="fa-solid fa-file-circle-check" aria-hidden="true"></i> Publier un corrigé type
            </button>
        </div>
    </div>

    <!-- Barre de filtrage -->
    <div class="admin_filter_bar">
        <div class="admin_filter_group">
            <button class="admin_filter_pill active" type="button" data-filter="all">Toutes les copies</button>
            <button class="admin_filter_pill" type="button" data-filter="pending">En attente de note</button>
            <button class="admin_filter_pill" type="button" data-filter="graded">Corrigées &amp; notées</button>
        </div>

        <div class="admin_filter_search">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="search" id="correctionSearchInput" placeholder="Rechercher par apprenant ou devoir...">
        </div>
    </div>

    <!-- Liste des copies soumises -->
    <div class="admin_card">
        <div class="admin_card_header">
            <h2><i class="fa-solid fa-clipboard-check"></i> Copies soumises par les étudiants</h2>
        </div>
        <div class="submission_list" id="submissionList">

            <!-- Copie 1 : En attente (Anglais) -->
            <article class="submission_row" data-category="pending">
                <span class="submission_avatar avatar-blue" aria-hidden="true">EB</span>
                <div class="submission_student">
                    <h3>Edmond Barou</h3>
                    <span>PNC 2026-A</span>
                </div>
                <div class="submission_assignment">
                    <strong>Étude de cas : Dépressurisation cabine</strong>
                    <span class="badge_status" style="display: inline-block; width: 25%; margin: 2px 0; background: #eef2f6; color: #334155; font-size: 0.72rem; font-weight: 600; text-align: center;">Anglais</span>
                    <span>Rendu le 10 Nov 2026 à 18h24</span>
                    <a class="submission_file" href="#"><i class="fa-regular fa-file-pdf" aria-hidden="true"></i> Copie-EBarou.pdf</a>
                </div>
                <span class="submission_status status-pending">À noter</span>
                <button class="submission_view_button" type="button" aria-label="Consulter la copie de Edmond Barou"><i class="fa-regular fa-eye" aria-hidden="true"></i></button>
                <details class="grading_disclosure">
                    <summary><i class="fa-solid fa-marker" aria-hidden="true"></i> Noter &amp; commenter</summary>
                    <form class="grading_form" method="POST" action="#">
                        @csrf
                        <label>Note sur 20<input type="number" name="grade" min="0" max="20" step="0.5" placeholder="Ex. 16"></label>
                        <label>Commentaire<textarea name="comment" rows="3" placeholder="Votre retour à l’apprenant..."></textarea></label>
                        <button class="grading_submit" type="submit">Enregistrer la note</button>
                    </form>
                </details>
            </article>

            <!-- Copie 2 : Notée (PNC) -->
            <article class="submission_row" data-category="graded">
                <span class="submission_avatar avatar-orange" aria-hidden="true">SK</span>
                <div class="submission_student">
                    <h3>Sarah Koné</h3>
                    <span>PNC 2026-A</span>
                </div>
                <div class="submission_assignment">
                    <strong>Procédures d'évacuation d'urgence</strong>
                    <span class="badge_status" style="display: inline-block; width: 25%; margin: 2px 0; background: #eef2f6; color: #334155; font-size: 0.72rem; font-weight: 600; text-align: center;">PNC</span>
                    <span>Rendu le 09 Nov 2026 à 11h15</span>
                    <a class="submission_file" href="#"><i class="fa-regular fa-file-pdf" aria-hidden="true"></i> Copie-SKone.pdf</a>
                </div>
                <span class="submission_status status-corrected">Noté · 17.5/20</span>
                <button class="submission_view_button" type="button" aria-label="Consulter la copie de Sarah Koné"><i class="fa-regular fa-eye" aria-hidden="true"></i></button>
                <details class="grading_disclosure">
                    <summary><i class="fa-solid fa-marker" aria-hidden="true"></i> Voir la note</summary>
                    <form class="grading_form" method="POST" action="#">
                        @csrf
                        <label>Note sur 20<input type="number" name="grade" min="0" max="20" step="0.5" value="17.5"></label>
                        <label>Commentaire<textarea name="comment" rows="3" placeholder="Votre retour à l’apprenant..."></textarea></label>
                        <button class="grading_submit" type="submit">Modifier la note</button>
                    </form>
                </details>
            </article>

            <!-- Copie 3 : Notée (Informatique) -->
            <article class="submission_row" data-category="graded">
                <span class="submission_avatar avatar-green" aria-hidden="true">AY</span>
                <div class="submission_student">
                    <h3>Amina Yapi</h3>
                    <span>PNC 2026-B</span>
                </div>
                <div class="submission_assignment">
                    <strong>Gestion de passager perturbateur</strong>
                    <span class="badge_status" style="display: inline-block; width: 25%; margin: 2px 0; background: #eef2f6; color: #334155; font-size: 0.72rem; font-weight: 600; text-align: center;">Informatique</span>
                    <span>Rendu le 01 Nov 2026 à 16h40</span>
                    <a class="submission_file" href="#"><i class="fa-regular fa-file-pdf" aria-hidden="true"></i> Rapport-AYapi.pdf</a>
                </div>
                <span class="submission_status status-corrected">Noté · 16/20</span>
                <button class="submission_view_button" type="button" aria-label="Consulter la copie de Amina Yapi"><i class="fa-regular fa-eye" aria-hidden="true"></i></button>
                <details class="grading_disclosure">
                    <summary><i class="fa-solid fa-marker" aria-hidden="true"></i> Voir la note</summary>
                    <form class="grading_form" method="POST" action="#">
                        @csrf
                        <label>Note sur 20<input type="number" name="grade" min="0" max="20" step="0.5" value="16"></label>
                        <label>Commentaire<textarea name="comment" rows="3" placeholder="Votre retour à l’apprenant..."></textarea></label>
                        <button class="grading_submit" type="submit">Modifier la note</button>
                    </form>
                </details>
            </article>

            <!-- Copie 4 : En attente (Réglementation) -->
            <article class="submission_row" data-category="pending">
                <span class="submission_avatar avatar-sky" aria-hidden="true">KD</span>
                <div class="submission_student">
                    <h3>Koffi Didier</h3>
                    <span>Agent d'Escale</span>
                </div>
                <div class="submission_assignment">
                    <strong>Conventions internationales &amp; Libertés de l'air</strong>
                    <span class="badge_status" style="display: inline-block; width: 25%; margin: 2px 0; background: #eef2f6; color: #334155; font-size: 0.72rem; font-weight: 600; text-align: center;">Anglais</span>
                    <span>Rendu il y a 2 heures</span>
                    <a class="submission_file" href="#"><i class="fa-regular fa-file-pdf" aria-hidden="true"></i> Devoir-KDidier.pdf</a>
                </div>
                <span class="submission_status status-pending">À noter</span>
                <button class="submission_view_button" type="button" aria-label="Consulter la copie de Koffi Didier"><i class="fa-regular fa-eye" aria-hidden="true"></i></button>
                <details class="grading_disclosure">
                    <summary><i class="fa-solid fa-marker" aria-hidden="true"></i> Noter &amp; commenter</summary>
                    <form class="grading_form" method="POST" action="#">
                        @csrf
                        <label>Note sur 20<input type="number" name="grade" min="0" max="20" step="0.5" placeholder="Ex. 14"></label>
                        <label>Commentaire<textarea name="comment" rows="3" placeholder="Votre retour à l’apprenant..."></textarea></label>
                        <button class="grading_submit" type="submit">Enregistrer la note</button>
                    </form>
                </details>
            </article>

            <!-- Copie 5 : En attente (Anglais) -->
            <article class="submission_row" data-category="pending">
                <span class="submission_avatar avatar-purple" aria-hidden="true" style="background: #ede9fe; color: #7c3aed;">MC</span>
                <div class="submission_student">
                    <h3>Marie Cissé</h3>
                    <span>PNC 2026-A</span>
                </div>
                <div class="submission_assignment">
                    <strong>Annonces PA et phraséologie ICAO</strong>
                    <span class="badge_status" style="display: inline-block; width: 25%; margin: 2px 0; background: #eef2f6; color: #334155; font-size: 0.72rem; font-weight: 600; text-align: center;">Anglais</span>
                    <span>Rendu hier à 21h00</span>
                    <a class="submission_file" href="#"><i class="fa-regular fa-file-pdf" aria-hidden="true"></i> Audio-MCisse.pdf</a>
                </div>
                <span class="submission_status status-pending">À noter</span>
                <button class="submission_view_button" type="button" aria-label="Consulter la copie de Marie Cissé"><i class="fa-regular fa-eye" aria-hidden="true"></i></button>
                <details class="grading_disclosure">
                    <summary><i class="fa-solid fa-marker" aria-hidden="true"></i> Noter &amp; commenter</summary>
                    <form class="grading_form" method="POST" action="#">
                        @csrf
                        <label>Note sur 20<input type="number" name="grade" min="0" max="20" step="0.5" placeholder="Ex. 15"></label>
                        <label>Commentaire<textarea name="comment" rows="3" placeholder="Votre retour à l’apprenant..."></textarea></label>
                        <button class="grading_submit" type="submit">Enregistrer la note</button>
                    </form>
                </details>
            </article>

        </div>
    </div>

    <!-- Modale : Publier un corrigé type -->
    <div class="admin_modal" id="createCorrectionModal" hidden>
        <div class="admin_modal_dialog">
            <header class="admin_modal_header">
                <div class="modal_header_title">
                    <i class="fa-solid fa-file-circle-check"></i>
                    <div>
                        <h2>Publier un corrigé type</h2>
                        <p>Mettez à disposition la solution détaillée pour les apprenants.</p>
                    </div>
                </div>
                <button type="button" class="admin_modal_close" data-modal-close="createCorrectionModal" aria-label="Fermer">&times;</button>
            </header>
            <form method="POST" action="#" enctype="multipart/form-data">
                @csrf
                <div class="admin_modal_body">
                    <div class="admin_form_grid">
                        <div class="admin_form_group col_full">
                            <label for="corr_exercise">Devoir rattaché</label>
                            <select id="corr_exercise" name="exercise_id" required>
                                <option value="1">Étude de cas : Dépressurisation cabine (PNC 2026-A)</option>
                                <option value="2">Évaluation Blanche CCA : Réglementation &amp; Sécurité</option>
                                <option value="3">Gestion de passager perturbateur (PNC 2026-B)</option>
                            </select>
                        </div>
                        <div class="admin_form_group col_full">
                            <label for="corr_title">Titre du corrigé</label>
                            <input type="text" id="corr_title" name="title" placeholder="Ex: Corrigé officiel et barème détaillé" required>
                        </div>
                        <div class="admin_form_group col_full">
                            <label for="corr_teacher">Professeur correcteur référent</label>
                            <select id="corr_teacher" name="teacher_id" required>
                                <option value="1">M. Alain N'Dri (Sécurité Sauvetage Cabine)</option>
                                <option value="2">Mme. Claire Diop (Relation Client &amp; Service)</option>
                                <option value="3">M. Robert Kouassi (Réglementation IATA &amp; DGR)</option>
                                <option value="4">Dr. Kouassi (Premiers Secours Aéronautiques)</option>
                                <option value="admin">Direction des Études (Administration)</option>
                            </select>
                        </div>
                        <div class="admin_form_group col_full">
                            <label for="corr_notes">Commentaires &amp; Remarques générales</label>
                            <textarea id="corr_notes" name="notes" placeholder="Points clés où la majorité des apprenants ont rencontré des difficultés..."></textarea>
                        </div>
                        <div class="admin_form_group col_full">
                            <label>Fichier du corrigé type (PDF)</label>
                            <input type="file" name="video_file" accept="video/*" >
                        </div>
                    </div>
                </div>
                <footer class="admin_modal_footer">
                    <button type="button" class="admin_modal_cancel" data-modal-close="createCorrectionModal">Annuler</button>
                    <button type="submit" class="btn_admin_primary"><i class="fa-solid fa-check-double"></i> Diffuser le corrigé</button>
                </footer>
            </form>
        </div>
    </div>

    <!-- Script de filtrage et recherche des corrections -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const filterPills = document.querySelectorAll('.admin_filter_pill');
            const submissionRows = document.querySelectorAll('.submission_row');
            const searchInput = document.getElementById('correctionSearchInput');

            let currentFilter = 'all';

            function filterSubmissions() {
                const searchTerm = searchInput.value.toLowerCase().trim();

                submissionRows.forEach(row => {
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
                    filterSubmissions();
                });
            });

            if (searchInput) {
                searchInput.addEventListener('input', filterSubmissions);
            }
        });
    </script>
@endsection
