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
            <button class="admin_filter_pill active" type="button" data-admin-filter="all" data-filter-target=".submission_row">Toutes les copies</button>
            <button class="admin_filter_pill" type="button" data-admin-filter="pending" data-filter-target=".submission_row">En attente de note</button>
            <button class="admin_filter_pill" type="button" data-admin-filter="graded" data-filter-target=".submission_row">Corrigées &amp; notées</button>
        </div>

        <div class="admin_filter_search">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="search" placeholder="Rechercher par apprenant ou devoir..." data-admin-search=".submission_row">
        </div>
    </div>

    <!-- Liste des copies soumises (même présentation que l'espace formateur) -->
    <div class="admin_card">
        <div class="admin_card_header">
            <h2><i class="fa-solid fa-clipboard-check"></i> Copies soumises par les étudiants</h2>
        </div>
        <div class="submission_list">
            <article class="submission_row" data-category="pending">
                <span class="submission_avatar avatar-blue" aria-hidden="true">EB</span>
                <div class="submission_student"><h3>Edmond Barou</h3><span>PNC 2026-A</span></div>
                <div class="submission_assignment">
                    <strong>Étude de cas : Dépressurisation cabine</strong>
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

            <article class="submission_row" data-category="graded">
                <span class="submission_avatar avatar-orange" aria-hidden="true">SK</span>
                <div class="submission_student"><h3>Sarah Koné</h3><span>PNC 2026-A</span></div>
                <div class="submission_assignment">
                    <strong>Étude de cas : Dépressurisation cabine</strong>
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

            <article class="submission_row" data-category="graded">
                <span class="submission_avatar avatar-green" aria-hidden="true">AY</span>
                <div class="submission_student"><h3>Amina Yapi</h3><span>PNC 2026-B</span></div>
                <div class="submission_assignment">
                    <strong>Gestion de passager perturbateur</strong>
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
                            <div class="admin_file_dropzone">
                                <i class="fa-solid fa-file-pdf"></i>
                                <p>Cliquez ou déposez le PDF du corrigé</p>
                                <small>Format PDF (max 50 Mo)</small>
                                <input type="file" name="corr_file" accept=".pdf" style="display: none;">
                            </div>
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
@endsection
