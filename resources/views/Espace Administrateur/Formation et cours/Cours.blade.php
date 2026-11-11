@extends('template-admin')
@section('title', 'Cours & Ressources')

@section('content')
    <div class="admin_page_header">
        <div class="admin_page_header_info">
            <h1>Cours &amp; Ressources Pédagogiques</h1>
            <p>Gérez l'ensemble des modules, manuels PDF et leçons vidéo dispensés aux étudiants.</p>
        </div>
        <div class="admin_page_actions">
            <button class="btn_admin_secondary" type="button" data-modal-open="createPdfCourseModal">
                <i class="fa-regular fa-file-pdf" aria-hidden="true"></i> Ajouter un cours PDF
            </button>
            <button class="btn_admin_primary" type="button" data-modal-open="createVideoCourseModal">
                <i class="fa-solid fa-video" aria-hidden="true"></i> Ajouter une vidéo de cours
            </button>
        </div>
    </div>

    <!-- Statistiques rapides des cours -->
    <section class="admin_stats_grid">
        <div class="admin_stat_card">
            <div class="admin_stat_icon stat_blue"><i class="fa-solid fa-book"></i></div>
            <div class="admin_stat_content">
                <span class="admin_stat_val">36</span>
                <span class="admin_stat_lbl">Total supports actifs</span>
            </div>
        </div>
        <div class="admin_stat_card">
            <div class="admin_stat_icon stat_orange"><i class="fa-regular fa-file-pdf"></i></div>
            <div class="admin_stat_content">
                <span class="admin_stat_val">22</span>
                <span class="admin_stat_lbl">Documents &amp; Manuels PDF</span>
            </div>
        </div>
        <div class="admin_stat_card">
            <div class="admin_stat_icon stat_green"><i class="fa-solid fa-play"></i></div>
            <div class="admin_stat_content">
                <span class="admin_stat_val">14</span>
                <span class="admin_stat_lbl">Leçons vidéo interactives</span>
            </div>
        </div>
    </section>

    <!-- Barre de filtre et de recherche -->
    <div class="admin_filter_bar">
        <div class="admin_filter_group">
            <button class="admin_filter_pill active" type="button" data-admin-filter="all" data-filter-target=".course_item_row">Tous (36)</button>
            <button class="admin_filter_pill" type="button" data-admin-filter="pdf" data-filter-target=".course_item_row">PDF</button>
            <button class="admin_filter_pill" type="button" data-admin-filter="video" data-filter-target=".course_item_row">Vidéos</button>
            <button class="admin_filter_pill" type="button" data-admin-filter="combo" data-filter-target=".course_item_row">PDF + Vidéo</button>
        </div>

        <div class="admin_filter_search">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="search" placeholder="Rechercher un cours par titre..." data-admin-search=".course_item_row">
        </div>
    </div>

    <!-- Liste des cours (Tableau moderne) -->
    <div class="admin_card">
        <div class="admin_card_header">
            <h2><i class="fa-solid fa-layer-group"></i> Liste des supports pédagogiques</h2>
        </div>
        <div class="admin_table_wrapper">
            <table class="admin_table">
                <thead>
                    <tr>
                        <th>Titre du cours &amp; Module</th>
                        <th>Formation</th>
                        <th>Format</th>
                        <th>Auteur / Formateur</th>
                        <th>Date d'ajout</th>
                        <th style="text-align: right;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="course_item_row" data-category="pdf">
                        <td>
                            <div class="table_user_cell">
                                <span class="table_avatar" style="background: #fee2e2; color: #dc2626;"><i class="fa-regular fa-file-pdf"></i></span>
                                <div>
                                    <strong>Procédures de sécurité cabine et évacuation</strong>
                                    <small>Consignes d'urgence, issues de secours et équipements</small>
                                </div>
                            </div>
                        </td>
                        <td>PNC - 2026</td>
                        <td><span class="badge_status badge_danger">PDF (4.2 Mo)</span></td>
                        <td>Alain N'Dri</td>
                        <td>10 Nov 2026</td>
                        <td>
                            <div class="table_actions">
                                <button class="action_icon_btn" title="Consulter"><i class="fa-regular fa-eye"></i></button>
                                <button class="action_icon_btn btn_delete" title="Supprimer"><i class="fa-regular fa-trash-can"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr class="course_item_row" data-category="combo">
                        <td>
                            <div class="table_user_cell">
                                <span class="table_avatar" style="background: #e0f2fe; color: #0284c7;"><i class="fa-solid fa-photo-film"></i></span>
                                <div>
                                    <strong>Service à bord et relation passager haut de gamme</strong>
                                    <small>Protocoles de service, accueil et gestion des conflits</small>
                                </div>
                            </div>
                        </td>
                        <td>PNC - 2026</td>
                        <td><span class="badge_status badge_info">PDF + Vidéo</span></td>
                        <td>Claire Diop</td>
                        <td>08 Nov 2026</td>
                        <td>
                            <div class="table_actions">
                                <button class="action_icon_btn" title="Consulter"><i class="fa-regular fa-eye"></i></button>
                                <button class="action_icon_btn btn_delete" title="Supprimer"><i class="fa-regular fa-trash-can"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr class="course_item_row" data-category="video">
                        <td>
                            <div class="table_user_cell">
                                <span class="table_avatar" style="background: #dcfce7; color: #16a34a;"><i class="fa-solid fa-play"></i></span>
                                <div>
                                    <strong>Premiers secours &amp; gestes d'urgence aéronautique</strong>
                                    <small>Massage cardiaque, utilisation du DAE et trousse médicale</small>
                                </div>
                            </div>
                        </td>
                        <td>PNC &amp; Escale</td>
                        <td><span class="badge_status badge_success">Vidéo (24 min)</span></td>
                        <td>Dr. Kouassi</td>
                        <td>04 Nov 2026</td>
                        <td>
                            <div class="table_actions">
                                <button class="action_icon_btn" title="Consulter"><i class="fa-regular fa-eye"></i></button>
                                <button class="action_icon_btn btn_delete" title="Supprimer"><i class="fa-regular fa-trash-can"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr class="course_item_row" data-category="pdf">
                        <td>
                            <div class="table_user_cell">
                                <span class="table_avatar" style="background: #fee2e2; color: #dc2626;"><i class="fa-regular fa-file-pdf"></i></span>
                                <div>
                                    <strong>Réglementation internationale du transport aérien (IATA)</strong>
                                    <small>Conventions de Chicago et de Montréal, libertés de l'air</small>
                                </div>
                            </div>
                        </td>
                        <td>Agent d'Escale</td>
                        <td><span class="badge_status badge_danger">PDF (7.8 Mo)</span></td>
                        <td>Administration</td>
                        <td>01 Nov 2026</td>
                        <td>
                            <div class="table_actions">
                                <button class="action_icon_btn" title="Consulter"><i class="fa-regular fa-eye"></i></button>
                                <button class="action_icon_btn btn_delete" title="Supprimer"><i class="fa-regular fa-trash-can"></i></button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- MODALE 1 : Ajouter un cours PDF -->
    <div class="admin_modal" id="createPdfCourseModal" hidden>
        <div class="admin_modal_dialog modal_lg">
            <header class="admin_modal_header">
                <div class="modal_header_title">
                    <i class="fa-regular fa-file-pdf"></i>
                    <div>
                        <h2>Ajouter un cours PDF</h2>
                        <p>Téléversez un manuel ou support de cours au format PDF pour les apprenants.</p>
                    </div>
                </div>
                <button type="button" class="admin_modal_close" data-modal-close="createPdfCourseModal" aria-label="Fermer">&times;</button>
            </header>
            <form method="POST" action="#" enctype="multipart/form-data">
                @csrf
                <div class="admin_modal_body">
                    <div class="admin_form_grid">
                        <div class="admin_form_group col_full">
                            <label for="pdf_course_title">Titre du cours</label>
                            <input type="text" id="pdf_course_title" name="title" placeholder="Ex: Manuel de sécurité sauvetage cabine" required>
                        </div>
                        <div class="admin_form_group">
                            <label for="pdf_course_program">Filière / Programme</label>
                            <select id="pdf_course_program" name="program" required>
                                <option value="pnc">Personnel Navigant Commercial (PNC)</option>
                                <option value="escale">Agent d'Escale Aéroportuaire</option>
                                <option value="dgr">Matières Dangereuses (DGR IATA)</option>
                            </select>
                        </div>
                        <div class="admin_form_group">
                            <label for="pdf_course_author">Professeur / Formateur responsable</label>
                            <select id="pdf_course_author" name="author" required>
                                <option value="Alain N'Dri">M. Alain N'Dri (Sécurité Sauvetage Cabine)</option>
                                <option value="Claire Diop">Mme. Claire Diop (Relation Client &amp; Protocole)</option>
                                <option value="Robert Kouassi">M. Robert Kouassi (Réglementation IATA &amp; DGR)</option>
                                <option value="Dr. Kouassi">Dr. Kouassi (Premiers Secours Aéronautiques)</option>
                                <option value="Administration">Direction / Administration CIMAT</option>
                            </select>
                        </div>
                        <div class="admin_form_group col_full">
                            <label for="pdf_course_desc">Description / Plan du cours</label>
                            <textarea id="pdf_course_desc" name="description" placeholder="Courte synthèse des chapitres abordés dans ce document..."></textarea>
                        </div>
                        <div class="admin_form_group col_full">
                            <label>Sélectionner le document PDF</label>
                            <div class="admin_file_dropzone">
                                <i class="fa-solid fa-file-pdf"></i>
                                <p>Cliquez ou déposez votre fichier PDF ici</p>
                                <small>Format .PDF uniquement (Taille maximale : 100 Mo)</small>
                                <input type="file" name="pdf_file" accept=".pdf" style="display: none;">
                            </div>
                        </div>
                    </div>
                </div>
                <footer class="admin_modal_footer">
                    <button type="button" class="admin_modal_cancel" data-modal-close="createPdfCourseModal">Annuler</button>
                    <button type="submit" class="btn_admin_primary"><i class="fa-solid fa-upload"></i> Publier le cours PDF</button>
                </footer>
            </form>
        </div>
    </div>

    <!-- MODALE 2 : Ajouter une vidéo de cours -->
    <div class="admin_modal" id="createVideoCourseModal" hidden>
        <div class="admin_modal_dialog modal_lg">
            <header class="admin_modal_header">
                <div class="modal_header_title">
                    <i class="fa-solid fa-video"></i>
                    <div>
                        <h2>Ajouter une vidéo de cours</h2>
                        <p>Intégrez une capsule vidéo ou un enregistrement pédagogique.</p>
                    </div>
                </div>
                <button type="button" class="admin_modal_close" data-modal-close="createVideoCourseModal" aria-label="Fermer">&times;</button>
            </header>
            <form method="POST" action="#" enctype="multipart/form-data">
                @csrf
                <div class="admin_modal_body">
                    <div class="admin_form_grid">
                        <div class="admin_form_group col_full">
                            <label for="video_course_title">Titre de la vidéo</label>
                            <input type="text" id="video_course_title" name="title" placeholder="Ex: Démonstration pratique des masques à oxygène" required>
                        </div>
                        <div class="admin_form_group">
                            <label for="video_course_program">Filière concernée</label>
                            <select id="video_course_program" name="program" required>
                                <option value="pnc">Personnel Navigant Commercial (PNC)</option>
                                <option value="escale">Agent d'Escale Aéroportuaire</option>
                            </select>
                        </div>
                        <div class="admin_form_group">
                            <label for="video_course_duration">Durée approximative</label>
                            <input type="text" id="video_course_duration" name="duration" placeholder="Ex: 18 min">
                        </div>
                        <div class="admin_form_group col_full">
                            <label for="video_course_teacher">Professeur / Formateur responsable</label>
                            <select id="video_course_teacher" name="teacher_id" required>
                                <option value="1">M. Alain N'Dri (Sécurité Sauvetage Cabine)</option>
                                <option value="2">Mme. Claire Diop (Relation Client &amp; Protocole)</option>
                                <option value="3">M. Robert Kouassi (Réglementation IATA &amp; DGR)</option>
                                <option value="4">Dr. Kouassi (Premiers Secours Aéronautiques)</option>
                                <option value="admin">Direction / Administration CIMAT</option>
                            </select>
                        </div>
                        <div class="admin_form_group col_full">
                            <label for="video_course_url">Lien vidéo direct (YouTube, Vimeo, ou hébergement privé)</label>
                            <input type="url" id="video_course_url" name="video_url" placeholder="https://www.youtube.com/watch?v=...">
                        </div>
                        <div class="admin_form_group col_full">
                            <label>Ou téléversez un fichier vidéo local</label>
                            <div class="admin_file_dropzone">
                                <i class="fa-solid fa-film"></i>
                                <p>Cliquez ou déposez votre vidéo MP4 / WebM ici</p>
                                <small>Formats : MP4, WEBM, MOV (max 250 Mo)</small>
                                <input type="file" name="video_file" accept="video/*" style="display: none;">
                            </div>
                        </div>
                    </div>
                </div>
                <footer class="admin_modal_footer">
                    <button type="button" class="admin_modal_cancel" data-modal-close="createVideoCourseModal">Annuler</button>
                    <button type="submit" class="btn_admin_primary"><i class="fa-solid fa-play"></i> Enregistrer la vidéo</button>
                </footer>
            </form>
        </div>
    </div>
@endsection
