@extends('template-admin')
@section('title', 'Gestion des Formateurs')

@section('content')
    <div class="admin_page_header">
        <div class="admin_page_header_info">
            <h1>Corps Enseignant &amp; Formateurs</h1>
            <p>Gérez les instructeurs aéronautiques, leurs spécialités d'enseignement et leurs cours assignés.</p>
        </div>
        <div class="admin_page_actions">
            <button class="btn_admin_primary" type="button" data-modal-open="createTeacherModal">
                <i class="fa-solid fa-person-chalkboard" aria-hidden="true"></i> Ajouter un formateur
            </button>
        </div>
    </div>

    <!-- Statistiques rapides -->
    <section class="admin_stats_grid">
        <div class="admin_stat_card">
            <div class="admin_stat_icon stat_orange"><i class="fa-solid fa-chalkboard-user"></i></div>
            <div class="admin_stat_content">
                <span class="admin_stat_val">18</span>
                <span class="admin_stat_lbl">Total formateurs</span>
            </div>
        </div>
        <div class="admin_stat_card">
            <div class="admin_stat_icon stat_blue"><i class="fa-solid fa-book-bookmark"></i></div>
            <div class="admin_stat_content">
                <span class="admin_stat_val">36</span>
                <span class="admin_stat_lbl">Cours dispensés</span>
            </div>
        </div>
        <div class="admin_stat_card">
            <div class="admin_stat_icon stat_green"><i class="fa-solid fa-circle-check"></i></div>
            <div class="admin_stat_content">
                <span class="admin_stat_val">16</span>
                <span class="admin_stat_lbl">Disponibles ce semestre</span>
            </div>
        </div>
    </section>

    <!-- Filtres & Recherche -->
    <div class="admin_filter_bar">
        <div class="admin_filter_group">
            <button class="admin_filter_pill active" type="button" data-admin-filter="all" data-filter-target=".teacher_row">Tous les formateurs (18)</button>
            <button class="admin_filter_pill" type="button" data-admin-filter="securite" data-filter-target=".teacher_row">Sécurité &amp; Sauvetage</button>
            <button class="admin_filter_pill" type="button" data-admin-filter="service" data-filter-target=".teacher_row">Relation Client</button>
            <button class="admin_filter_pill" type="button" data-admin-filter="reglementation" data-filter-target=".teacher_row">Réglementation</button>
        </div>

        <div class="admin_filter_search">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="search" placeholder="Rechercher un enseignant..." data-admin-search=".teacher_row">
        </div>
    </div>

    <!-- Tableau des formateurs -->
    <div class="admin_card">
        <div class="admin_card_header">
            <h2><i class="fa-solid fa-person-chalkboard"></i> Liste des formateurs et instructeurs</h2>
        </div>
        <div class="admin_table_wrapper">
            <table class="admin_table">
                <thead>
                    <tr>
                        <th>Instructeur</th>
                        <th>Téléphone</th>
                        <th>Spécialité principale</th>
                        <th>Modules / Cours</th>
                        <th>Statut</th>
                        <th style="text-align: right;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="teacher_row" data-category="securite">
                        <td>
                            <div class="table_user_cell">
                                <span class="table_avatar" style="background: #e0f2fe; color: #0284c7;">AN</span>
                                <div>
                                    <strong>M. Alain N'Dri</strong>
                                    <small>alain.ndri@cimat-teacher.ci</small>
                                </div>
                            </div>
                        </td>
                        <td>+225 07 10 20 30 40</td>
                        <td><span class="badge_status badge_danger">Sécurité Sauvetage Cabine</span></td>
                        <td><strong>6 modules</strong> assignés</td>
                        <td><span class="badge_status badge_success"><i class="fa-solid fa-circle" style="font-size: 0.5rem;"></i> Actif</span></td>
                        <td>
                            <div class="table_actions">
                                <button class="action_icon_btn" title="Consulter"><i class="fa-regular fa-eye"></i></button>
                                <button class="action_icon_btn" title="Modifier"><i class="fa-regular fa-pen-to-square"></i></button>
                                <button class="action_icon_btn btn_delete" title="Désactiver"><i class="fa-regular fa-trash-can"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr class="teacher_row" data-category="service">
                        <td>
                            <div class="table_user_cell">
                                <span class="table_avatar" style="background: #ffedd5; color: #ea580c;">CD</span>
                                <div>
                                    <strong>Mme. Claire Diop</strong>
                                    <small>claire.diop@cimat-teacher.ci</small>
                                </div>
                            </div>
                        </td>
                        <td>+225 05 99 88 77 66</td>
                        <td><span class="badge_status badge_info">Service en Cabine &amp; Protocole</span></td>
                        <td><strong>4 modules</strong> assignés</td>
                        <td><span class="badge_status badge_success"><i class="fa-solid fa-circle" style="font-size: 0.5rem;"></i> Actif</span></td>
                        <td>
                            <div class="table_actions">
                                <button class="action_icon_btn" title="Consulter"><i class="fa-regular fa-eye"></i></button>
                                <button class="action_icon_btn" title="Modifier"><i class="fa-regular fa-pen-to-square"></i></button>
                                <button class="action_icon_btn btn_delete" title="Désactiver"><i class="fa-regular fa-trash-can"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr class="teacher_row" data-category="reglementation">
                        <td>
                            <div class="table_user_cell">
                                <span class="table_avatar" style="background: #f3e8ff; color: #9333ea;">RK</span>
                                <div>
                                    <strong>M. Robert Kouassi</strong>
                                    <small>robert.kouassi@cimat-teacher.ci</small>
                                </div>
                            </div>
                        </td>
                        <td>+225 01 23 45 67 89</td>
                        <td><span class="badge_status badge_accent">Réglementation IATA &amp; DGR</span></td>
                        <td><strong>5 modules</strong> assignés</td>
                        <td><span class="badge_status badge_success"><i class="fa-solid fa-circle" style="font-size: 0.5rem;"></i> Actif</span></td>
                        <td>
                            <div class="table_actions">
                                <button class="action_icon_btn" title="Consulter"><i class="fa-regular fa-eye"></i></button>
                                <button class="action_icon_btn" title="Modifier"><i class="fa-regular fa-pen-to-square"></i></button>
                                <button class="action_icon_btn btn_delete" title="Désactiver"><i class="fa-regular fa-trash-can"></i></button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modale : Ajouter un formateur -->
    <div class="admin_modal" id="createTeacherModal" hidden>
        <div class="admin_modal_dialog modal_lg">
            <header class="admin_modal_header">
                <div class="modal_header_title">
                    <i class="fa-solid fa-person-chalkboard"></i>
                    <div>
                        <h2>Ajouter un nouveau formateur</h2>
                        <p>Créez les identifiants d'un enseignant et configurez sa spécialité.</p>
                    </div>
                </div>
                <button type="button" class="admin_modal_close" data-modal-close="createTeacherModal" aria-label="Fermer">&times;</button>
            </header>
            <form method="POST" action="#" enctype="multipart/form-data">
                @csrf
                <div class="admin_modal_body">
                    <div class="admin_form_grid">
                        <div class="admin_form_group">
                            <label for="tch_first_name">Prénom de l'enseignant</label>
                            <input type="text" id="tch_first_name" name="first_name" placeholder="Ex: Robert" required>
                        </div>
                        <div class="admin_form_group">
                            <label for="tch_last_name">Nom de famille</label>
                            <input type="text" id="tch_last_name" name="last_name" placeholder="Ex: Kouassi" required>
                        </div>
                        <div class="admin_form_group">
                            <label for="tch_email">E-mail professionnel</label>
                            <input type="email" id="tch_email" name="email" placeholder="r.kouassi@cimat-teacher.ci" required>
                        </div>
                        <div class="admin_form_group">
                            <label for="tch_phone">Numéro de téléphone</label>
                            <input type="tel" id="tch_phone" name="phone" placeholder="+225 XX XX XX XX XX">
                        </div>
                        <div class="admin_form_group">
                            <label for="tch_specialty">Domaine d'expertise / Spécialité</label>
                            <input type="text" id="tch_specialty" name="specialty" placeholder="Ex: Sécurité cabine, Anglais ICAO, DGR..." required>
                        </div>
                        <div class="admin_form_group">
                            <label for="tch_contract">Type d'engagement</label>
                            <select id="tch_contract" name="contract_type">
                                <option value="fulltime">Formateur permanent (Temps plein)</option>
                                <option value="parttime">Instructeur vacataire / Expert externe</option>
                            </select>
                        </div>
                        <div class="admin_form_group col_full">
                            <label>Photo de profil de l'instructeur</label>
                            <div class="admin_file_dropzone">
                                <i class="fa-solid fa-camera"></i>
                                <p>Cliquez ou déposez le portrait photo ici</p>
                                <small>Format JPG, PNG (max 5 Mo)</small>
                                <input type="file" name="avatar" accept="image/*" style="display: none;">
                            </div>
                        </div>
                    </div>
                </div>
                <footer class="admin_modal_footer">
                    <button type="button" class="admin_modal_cancel" data-modal-close="createTeacherModal">Annuler</button>
                    <button type="submit" class="btn_admin_primary"><i class="fa-solid fa-check"></i> Créer le compte formateur</button>
                </footer>
            </form>
        </div>
    </div>
@endsection
