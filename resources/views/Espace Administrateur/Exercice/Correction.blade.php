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

    <!-- Tableau des soumissions -->
    <div class="admin_card">
        <div class="admin_card_header">
            <h2><i class="fa-solid fa-clipboard-check"></i> Copies soumises par les étudiants</h2>
        </div>
        <div class="admin_table_wrapper">
            <table class="admin_table">
                <thead>
                    <tr>
                        <th>Apprenant</th>
                        <th>Intitulé du devoir</th>
                        <th>Date de soumission</th>
                        <th>Fichier remis</th>
                        <th>Note</th>
                        <th>Statut</th>
                        <th style="text-align: right;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="submission_row" data-category="pending">
                        <td>
                            <div class="table_user_cell">
                                <span class="table_avatar">EB</span>
                                <div>
                                    <strong>Edmond Barou</strong>
                                    <small>PNC 2026-A</small>
                                </div>
                            </div>
                        </td>
                        <td>Étude de cas : Dépressurisation cabine</td>
                        <td>10 Nov 2026 à 18h24</td>
                        <td><a href="#" style="color: var(--color-primary); font-weight: 600;"><i class="fa-regular fa-file-pdf"></i> Copie-EBarou.pdf</a></td>
                        <td><strong>-- / 20</strong></td>
                        <td><span class="badge_status badge_warning"><i class="fa-solid fa-clock"></i> À noter</span></td>
                        <td>
                            <div class="table_actions">
                                <button class="action_icon_btn" title="Attribuer une note et un feedback"><i class="fa-solid fa-marker"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr class="submission_row" data-category="graded">
                        <td>
                            <div class="table_user_cell">
                                <span class="table_avatar" style="background: #ffedd5; color: #ea580c;">SK</span>
                                <div>
                                    <strong>Sarah Koné</strong>
                                    <small>PNC 2026-A</small>
                                </div>
                            </div>
                        </td>
                        <td>Étude de cas : Dépressurisation cabine</td>
                        <td>09 Nov 2026 à 11h15</td>
                        <td><a href="#" style="color: var(--color-primary); font-weight: 600;"><i class="fa-regular fa-file-pdf"></i> Copie-SKone.pdf</a></td>
                        <td><strong style="color: var(--color-success);">17.5 / 20</strong></td>
                        <td><span class="badge_status badge_success"><i class="fa-solid fa-check"></i> Noté</span></td>
                        <td>
                            <div class="table_actions">
                                <button class="action_icon_btn" title="Consulter la note"><i class="fa-regular fa-eye"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr class="submission_row" data-category="graded">
                        <td>
                            <div class="table_user_cell">
                                <span class="table_avatar" style="background: #dcfce7; color: #15803d;">AY</span>
                                <div>
                                    <strong>Amina Yapi</strong>
                                    <small>PNC 2026-B</small>
                                </div>
                            </div>
                        </td>
                        <td>Gestion de passager perturbateur</td>
                        <td>01 Nov 2026 à 16h40</td>
                        <td><a href="#" style="color: var(--color-primary); font-weight: 600;"><i class="fa-regular fa-file-pdf"></i> Rapport-AYapi.pdf</a></td>
                        <td><strong style="color: var(--color-success);">16 / 20</strong></td>
                        <td><span class="badge_status badge_success"><i class="fa-solid fa-check"></i> Noté</span></td>
                        <td>
                            <div class="table_actions">
                                <button class="action_icon_btn" title="Consulter la note"><i class="fa-regular fa-eye"></i></button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
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
