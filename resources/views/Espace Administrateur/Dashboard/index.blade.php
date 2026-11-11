@extends('template-admin')
@section('title', 'Vue d’ensemble')

@section('content')
    <div class="admin_page_header">
        <div class="admin_page_header_info">
            <h1>Tableau de bord d'administration</h1>
            <p>Supervisez l'ensemble des activités pédagogiques, des cours et des utilisateurs du CIMAT.</p>
        </div>
        <div class="admin_page_actions">
            <button class="btn_admin_secondary" type="button" data-modal-open="quickCourseModal">
                <i class="fa-solid fa-plus" aria-hidden="true"></i> Nouveau cours
            </button>
            <button class="btn_admin_secondary" type="button" data-modal-open="quickVisioModal">
                <i class="fa-solid fa-video" aria-hidden="true"></i> Programmer visio
            </button>
            <button class="btn_admin_primary" type="button" data-modal-open="quickUserModal">
                <i class="fa-solid fa-user-plus" aria-hidden="true"></i> Inscrire un utilisateur
            </button>
        </div>
    </div>

    <!-- Indicateurs clés (KPI) -->
    <section class="admin_stats_grid" aria-label="Statistiques globales">
        <div class="admin_stat_card">
            <div class="admin_stat_icon stat_blue">
                <i class="fa-solid fa-user-graduate"></i>
            </div>
            <div class="admin_stat_content">
                <span class="admin_stat_val">142</span>
                <span class="admin_stat_lbl">Apprenants inscrits</span>
            </div>
        </div>

        <div class="admin_stat_card">
            <div class="admin_stat_icon stat_orange">
                <i class="fa-solid fa-person-chalkboard"></i>
            </div>
            <div class="admin_stat_content">
                <span class="admin_stat_val">18</span>
                <span class="admin_stat_lbl">Formateurs actifs</span>
            </div>
        </div>

        <div class="admin_stat_card">
            <div class="admin_stat_icon stat_green">
                <i class="fa-solid fa-book-open"></i>
            </div>
            <div class="admin_stat_content">
                <span class="admin_stat_val">36</span>
                <span class="admin_stat_lbl">Cours &amp; supports</span>
            </div>
        </div>

        <div class="admin_stat_card">
            <div class="admin_stat_icon stat_purple">
                <i class="fa-solid fa-video"></i>
            </div>
            <div class="admin_stat_content">
                <span class="admin_stat_val">6</span>
                <span class="admin_stat_lbl">Visios programmées</span>
            </div>
        </div>

        <div class="admin_stat_card">
            <div class="admin_stat_icon stat_indigo">
                <i class="fa-solid fa-clipboard-check"></i>
            </div>
            <div class="admin_stat_content">
                <span class="admin_stat_val">24</span>
                <span class="admin_stat_lbl">Devoirs &amp; évaluations</span>
            </div>
        </div>
    </section>

    <!-- Sessions et activités récentes -->
    <div style="display: grid; grid-template-columns: 2fr 1fr; gap: 24px;">
        <!-- Tableau des derniers inscrits -->
        <div class="admin_card">
            <div class="admin_card_header">
                <h2><i class="fa-solid fa-users"></i> Derniers apprenants inscrits</h2>
                <a href="{{ route('Admin.list-student') }}" class="btn_admin_secondary" style="padding: 6px 12px; font-size: 0.8rem;">
                    Voir tout <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
            <div class="admin_table_wrapper">
                <table class="admin_table">
                    <thead>
                        <tr>
                            <th>Apprenant</th>
                            <th>Filière &amp; Groupe</th>
                            <th>Statut</th>
                            <th>Date</th>
                            <th style="text-align: right;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="table_user_cell">
                                    <span class="table_avatar">EB</span>
                                    <div>
                                        <strong>Edmond Barou</strong>
                                        <small>edmond.barou@example.com</small>
                                    </div>
                                </div>
                            </td>
                            <td>PNC - Promotion 2026-A</td>
                            <td><span class="badge_status badge_success"><i class="fa-solid fa-circle" style="font-size: 0.5rem;"></i> Actif</span></td>
                            <td>10 Nov 2026</td>
                            <td>
                                <div class="table_actions">
                                    <button class="action_icon_btn" title="Consulter le profil"><i class="fa-regular fa-eye"></i></button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="table_user_cell">
                                    <span class="table_avatar" style="background: #ffedd5; color: #ea580c;">SK</span>
                                    <div>
                                        <strong>Sarah Koné</strong>
                                        <small>sarah.kone@example.com</small>
                                    </div>
                                </div>
                            </td>
                            <td>PNC - Promotion 2026-A</td>
                            <td><span class="badge_status badge_success"><i class="fa-solid fa-circle" style="font-size: 0.5rem;"></i> Actif</span></td>
                            <td>08 Nov 2026</td>
                            <td>
                                <div class="table_actions">
                                    <button class="action_icon_btn" title="Consulter le profil"><i class="fa-regular fa-eye"></i></button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="table_user_cell">
                                    <span class="table_avatar" style="background: #e0e7ff; color: #4338ca;">MT</span>
                                    <div>
                                        <strong>Marc Touré</strong>
                                        <small>marc.toure@example.com</small>
                                    </div>
                                </div>
                            </td>
                            <td>Agent d'Escale - 2026</td>
                            <td><span class="badge_status badge_warning"><i class="fa-solid fa-clock" style="font-size: 0.5rem;"></i> En attente</span></td>
                            <td>05 Nov 2026</td>
                            <td>
                                <div class="table_actions">
                                    <button class="action_icon_btn" title="Consulter le profil"><i class="fa-regular fa-eye"></i></button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="table_user_cell">
                                    <span class="table_avatar" style="background: #dcfce7; color: #15803d;">AY</span>
                                    <div>
                                        <strong>Amina Yapi</strong>
                                        <small>amina.yapi@example.com</small>
                                    </div>
                                </div>
                            </td>
                            <td>PNC - Promotion 2026-B</td>
                            <td><span class="badge_status badge_success"><i class="fa-solid fa-circle" style="font-size: 0.5rem;"></i> Actif</span></td>
                            <td>03 Nov 2026</td>
                            <td>
                                <div class="table_actions">
                                    <button class="action_icon_btn" title="Consulter le profil"><i class="fa-regular fa-eye"></i></button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Prochaines visioconférences -->
        <div class="admin_card">
            <div class="admin_card_header">
                <h2><i class="fa-solid fa-video"></i> Visioconférences</h2>
                <a href="{{ route('Admin.videoconference') }}" class="btn_admin_secondary" style="padding: 6px 12px; font-size: 0.8rem;">
                    Gérer
                </a>
            </div>
            <div style="padding: 16px; display: flex; flex-direction: column; gap: 14px;">
                <div style="padding: 14px; border-radius: 10px; background: #fff5f5; border: 1.5px solid #fca5a5; box-shadow: 0 4px 12px rgba(239, 68, 68, 0.12);">
                    <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 6px;">
                        <span class="visio_live_badge_red"><span class="pulse_dot_red"></span> En direct</span>
                        <small style="color: #dc2626; font-weight: 700;">Maintenant</small>
                    </div>
                    <strong style="display: block; font-size: 0.92rem; color: #991b1b;">Sécurité sauvetage &amp; évacuation</strong>
                    <p style="margin: 4px 0 10px; font-size: 0.78rem; color: #4b5563;">Formateur : M. Alain N'Dri (28 apprenants connectés)</p>
                    <a href="{{ route('Admin.videoconference') }}" class="btn_admin_live_red" style="padding: 7px 12px; font-size: 0.78rem; width: 100%; justify-content: center;">
                        <i class="fa-solid fa-arrow-right-to-bracket"></i> Rejoindre la session
                    </a>
                </div>

                <div style="padding: 14px; border-radius: 10px; background: #f8fafc; border: 1px solid #e2e8f0;">
                    <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 6px;">
                        <span class="badge_status badge_info">Programmé</span>
                        <small style="color: #64748b;">Aujourd'hui à 15h00</small>
                    </div>
                    <strong style="display: block; font-size: 0.92rem; color: #1e293b;">Service en cabine &amp; Relation client</strong>
                    <p style="margin: 4px 0 0; font-size: 0.78rem; color: #64748b;">Formateur : Mme. Claire Diop · PNC Promotion 2026-A</p>
                </div>

                <div style="padding: 14px; border-radius: 10px; background: #f8fafc; border: 1px solid #e2e8f0;">
                    <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 6px;">
                        <span class="badge_status badge_info">Programmé</span>
                        <small style="color: #64748b;">Demain à 10h30</small>
                    </div>
                    <strong style="display: block; font-size: 0.92rem; color: #1e293b;">Réglementation IATA &amp; DGR</strong>
                    <p style="margin: 4px 0 0; font-size: 0.78rem; color: #64748b;">Formateur : M. Robert Kouassi · Tous les groupes</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Modale Rapide : Ajout de Cours -->
    <div class="admin_modal" id="quickCourseModal" hidden>
        <div class="admin_modal_dialog modal_lg">
            <header class="admin_modal_header">
                <div class="modal_header_title">
                    <i class="fa-solid fa-book-open"></i>
                    <div>
                        <h2>Ajouter un cours ou un support pédagogique</h2>
                        <p>Publiez un support PDF ou une vidéo de formation pour les étudiants.</p>
                    </div>
                </div>
                <button type="button" class="admin_modal_close" data-modal-close="quickCourseModal" aria-label="Fermer">&times;</button>
            </header>
            <form method="POST" action="#" enctype="multipart/form-data">
                @csrf
                <div class="admin_modal_body">
                    <div class="admin_form_grid">
                        <div class="admin_form_group col_full">
                            <label for="course_title">Titre du cours</label>
                            <input type="text" id="course_title" name="title" placeholder="Ex: Procédures de sécurité cabine et évacuation" required>
                        </div>
                        <div class="admin_form_group">
                            <label for="course_program">Formation concernée</label>
                            <select id="course_program" name="program" required>
                                <option value="pnc">Personnel Navigant Commercial (PNC)</option>
                                <option value="escale">Agent d'Escale Aéroportuaire</option>
                                <option value="fret">Agent de Fret Aérien (DGR)</option>
                            </select>
                        </div>
                        <div class="admin_form_group">
                            <label for="course_type">Format du support</label>
                            <select id="course_type" name="type" required>
                                <option value="pdf">Document PDF</option>
                                <option value="video">Vidéo de cours</option>
                                <option value="pdf_video">Combiné (Document PDF + Vidéo)</option>
                            </select>
                        </div>
                        <div class="admin_form_group col_full">
                            <label for="course_teacher">Professeur / Formateur responsable</label>
                            <select id="course_teacher" name="teacher_id" required>
                                <option value="1">M. Alain N'Dri (Sécurité Sauvetage Cabine)</option>
                                <option value="2">Mme. Claire Diop (Relation Client &amp; Service)</option>
                                <option value="3">M. Robert Kouassi (Réglementation IATA &amp; DGR)</option>
                                <option value="4">Dr. Kouassi (Premiers Secours &amp; DAE)</option>
                                <option value="admin">Direction des Études (Administration)</option>
                            </select>
                        </div>
                        <div class="admin_form_group col_full">
                            <label for="course_desc">Description du contenu</label>
                            <textarea id="course_desc" name="description" placeholder="Objectifs pédagogiques, consignes et plan du cours..."></textarea>
                        </div>
                        <div class="admin_form_group col_full">
                            <label>Téléverser le fichier principal</label>
                            <div class="admin_file_dropzone">
                                <i class="fa-solid fa-cloud-arrow-up"></i>
                                <p>Cliquez ou glissez-déposez le document PDF ou la vidéo ici</p>
                                <small>Formats acceptés : PDF, MP4, MOV, PPTX (max 200 Mo)</small>
                                <input type="file" name="file" style="display: none;" id="dropzone_file">
                            </div>
                        </div>
                    </div>
                </div>
                <footer class="admin_modal_footer">
                    <button type="button" class="admin_modal_cancel" data-modal-close="quickCourseModal">Annuler</button>
                    <button type="submit" class="btn_admin_primary"><i class="fa-solid fa-floppy-disk"></i> Enregistrer le cours</button>
                </footer>
            </form>
        </div>
    </div>

    <!-- Modale Rapide : Programmer une Visioconférence -->
    <div class="admin_modal" id="quickVisioModal" hidden>
        <div class="admin_modal_dialog">
            <header class="admin_modal_header">
                <div class="modal_header_title">
                    <i class="fa-solid fa-video"></i>
                    <div>
                        <h2>Programmer une visioconférence</h2>
                        <p>Configurez une session en direct avec une classe ou un formateur.</p>
                    </div>
                </div>
                <button type="button" class="admin_modal_close" data-modal-close="quickVisioModal" aria-label="Fermer">&times;</button>
            </header>
            <form method="POST" action="#">
                @csrf
                <div class="admin_modal_body">
                    <div class="admin_form_grid">
                        <div class="admin_form_group col_full">
                            <label for="visio_title">Thème de la séance</label>
                            <input type="text" id="visio_title" name="title" placeholder="Ex: Débriefing évaluation PNC et QCM" required>
                        </div>
                        <div class="admin_form_group">
                            <label for="visio_group">Groupe cible</label>
                            <select id="visio_group" name="group" required>
                                <option value="all">Tous les groupes</option>
                                <option value="pnc-2026-a">PNC - Promotion 2026-A</option>
                                <option value="pnc-2026-b">PNC - Promotion 2026-B</option>
                                <option value="escale-2026">Agent d'Escale 2026</option>
                            </select>
                        </div>
                        <div class="admin_form_group">
                            <label for="visio_teacher">Formateur animateur</label>
                            <select id="visio_teacher" name="teacher" required>
                                <option value="admin">Administration CIMAT</option>
                                <option value="alain">M. Alain N'Dri</option>
                                <option value="claire">Mme. Claire Diop</option>
                                <option value="robert">M. Robert Kouassi</option>
                            </select>
                        </div>
                        <div class="admin_form_group">
                            <label for="visio_date">Date</label>
                            <input type="date" id="visio_date" name="date" required value="{{ date('Y-m-d') }}">
                        </div>
                        <div class="admin_form_group">
                            <label for="visio_time">Heure de début</label>
                            <input type="time" id="visio_time" name="time" required value="10:00">
                        </div>
                        <div class="admin_form_group col_full">
                            <label for="visio_link">Lien de la réunion (Jitsi, Zoom, Google Meet)</label>
                            <input type="url" id="visio_link" name="link" placeholder="https://meet.jit.si/cimat-session-..." required>
                        </div>
                    </div>
                </div>
                <footer class="admin_modal_footer">
                    <button type="button" class="admin_modal_cancel" data-modal-close="quickVisioModal">Annuler</button>
                    <button type="submit" class="btn_admin_primary"><i class="fa-solid fa-calendar-check"></i> Programmer la visio</button>
                </footer>
            </form>
        </div>
    </div>

    <!-- Modale Rapide : Inscription Utilisateur -->
    <div class="admin_modal" id="quickUserModal" hidden>
        <div class="admin_modal_dialog">
            <header class="admin_modal_header">
                <div class="modal_header_title">
                    <i class="fa-solid fa-user-plus"></i>
                    <div>
                        <h2>Inscrire un nouvel utilisateur</h2>
                        <p>Créez un compte pour un apprenant, un formateur ou un administrateur.</p>
                    </div>
                </div>
                <button type="button" class="admin_modal_close" data-modal-close="quickUserModal" aria-label="Fermer">&times;</button>
            </header>
            <form method="POST" action="#">
                @csrf
                <div class="admin_modal_body">
                    <div class="admin_form_grid">
                        <div class="admin_form_group col_full">
                            <label for="user_role">Rôle sur la plateforme</label>
                            <select id="user_role" name="role" required>
                                <option value="student">Apprenant (Élève)</option>
                                <option value="teacher">Formateur (Professeur)</option>
                                <option value="admin">Administrateur</option>
                            </select>
                        </div>
                        <div class="admin_form_group">
                            <label for="user_first_name">Prénom</label>
                            <input type="text" id="user_first_name" name="first_name" placeholder="Ex: Jean" required>
                        </div>
                        <div class="admin_form_group">
                            <label for="user_last_name">Nom</label>
                            <input type="text" id="user_last_name" name="last_name" placeholder="Ex: Kouamé" required>
                        </div>
                        <div class="admin_form_group col_full">
                            <label for="user_email">Adresse e-mail</label>
                            <input type="email" id="user_email" name="email" placeholder="utilisateur@cimat-ci.net" required>
                        </div>
                        <div class="admin_form_group">
                            <label for="user_phone">Téléphone</label>
                            <input type="tel" id="user_phone" name="phone" placeholder="+225 XX XX XX XX XX">
                        </div>
                        <div class="admin_form_group">
                            <label for="user_group">Groupe / Spécialité</label>
                            <input type="text" id="user_group" name="group_or_specialty" placeholder="Ex: PNC 2026-A ou Sécurité Aérienne">
                        </div>
                    </div>
                </div>
                <footer class="admin_modal_footer">
                    <button type="button" class="admin_modal_cancel" data-modal-close="quickUserModal">Annuler</button>
                    <button type="submit" class="btn_admin_primary"><i class="fa-solid fa-check"></i> Créer le compte</button>
                </footer>
            </form>
        </div>
    </div>
@endsection
