@extends('template-admin')
@section('title', 'Gestion des Administrateurs')

@section('content')
    <div class="admin_page_header">
        <div class="admin_page_header_info">
            <h1>Équipe d'Administration &amp; Gestion</h1>
            <p>Gérez les droits d'accès, les niveaux de privilèges et les comptes administrateurs de la plateforme.</p>
        </div>
        <div class="admin_page_actions">
            <button class="btn_admin_primary" type="button" data-modal-open="createAdminModal">
                <i class="fa-solid fa-user-shield" aria-hidden="true"></i> Ajouter un administrateur
            </button>
        </div>
    </div>

    <!-- Statistiques des administrateurs -->
    <section class="admin_stats_grid">
        <div class="admin_stat_card">
            <div class="admin_stat_icon stat_purple"><i class="fa-solid fa-user-shield"></i></div>
            <div class="admin_stat_content">
                <span class="admin_stat_val">3</span>
                <span class="admin_stat_lbl">Total comptes admin</span>
            </div>
        </div>
        <div class="admin_stat_card">
            <div class="admin_stat_icon stat_blue"><i class="fa-solid fa-crown"></i></div>
            <div class="admin_stat_content">
                <span class="admin_stat_val">1</span>
                <span class="admin_stat_lbl">Super Administrateur</span>
            </div>
        </div>

    </section>

    <!-- Tableau des administrateurs -->
    <div class="admin_card">
        <div class="admin_card_header">
            <h2><i class="fa-solid fa-shield-halved"></i> Comptes avec accès d'administration</h2>
        </div>
        <div class="admin_table_wrapper">
            <table class="admin_table">
                <thead>
                    <tr>
                        <th>Administrateur</th>
                        <th>E-mail</th>
                        <th>Rôle &amp; Privilèges</th>
                        <th>Dernière connexion</th>
                        <th>Statut</th>
                        <th style="text-align: right;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="table_user_cell">
                                <span class="table_avatar" style="background: linear-gradient(135deg, #0f4c81, #062642); color: #fff;">AD</span>
                                <div>
                                    <strong>Direction CIMAT (Vous)</strong>
                                    <small>Compte Principal</small>
                                </div>
                            </div>
                        </td>
                        <td>admin@cimat-ci.net</td>
                        <td><span class="badge_status badge_accent"><i class="fa-solid fa-crown"></i> Super Administrateur</span></td>
                        <td>Aujourd'hui à 11h40</td>
                        <td><span class="badge_status badge_success"><i class="fa-solid fa-circle" style="font-size: 0.5rem;"></i> Actif</span></td>
                        <td>
                            <div class="table_actions">
                                <button class="action_icon_btn" title="Modifier mot de passe"><i class="fa-solid fa-lock"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="table_user_cell">
                                <span class="table_avatar" style="background: #e0f2fe; color: #0284c7;">FK</span>
                                <div>
                                    <strong>Fatou Konan</strong>
                                    <small>Responsable Pédagogique</small>
                                </div>
                            </div>
                        </td>
                        <td>f.konan@cimat-ci.net</td>
                        <td><span class="badge_status badge_info">Administrateur</span></td>
                        <td>Hier à 17h12</td>
                        <td><span class="badge_status badge_success"><i class="fa-solid fa-circle" style="font-size: 0.5rem;"></i> Actif</span></td>
                        <td>
                            <div class="table_actions">
                                <button class="action_icon_btn" title="Modifier"><i class="fa-regular fa-pen-to-square"></i></button>
                                <button class="action_icon_btn btn_delete" title="Désactiver"><i class="fa-regular fa-trash-can"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="table_user_cell">
                                <span class="table_avatar" style="background: #f3e8ff; color: #9333ea;">YS</span>
                                <div>
                                    <strong>Yves Soro</strong>
                                    <small>Bureau de la Scolarité</small>
                                </div>
                            </div>
                        </td>
                        <td>y.soro@cimat-ci.net</td>
                        <td><span class="badge_status badge_info">Administrateur</span></td>
                        <td>08 Nov 2026</td>
                        <td><span class="badge_status badge_success"><i class="fa-solid fa-circle" style="font-size: 0.5rem;"></i> Actif</span></td>
                        <td>
                            <div class="table_actions">
                                <button class="action_icon_btn" title="Modifier"><i class="fa-regular fa-pen-to-square"></i></button>
                                <button class="action_icon_btn btn_delete" title="Désactiver"><i class="fa-regular fa-trash-can"></i></button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modale : Ajouter un administrateur -->
    <div class="admin_modal" id="createAdminModal" hidden>
        <div class="admin_modal_dialog">
            <header class="admin_modal_header">
                <div class="modal_header_title">
                    <i class="fa-solid fa-user-shield"></i>
                    <div>
                        <h2>Ajouter un nouvel administrateur</h2>
                        <p>Déléguez des accès de gestion administrative ou pédagogique.</p>
                    </div>
                </div>
                <button type="button" class="admin_modal_close" data-modal-close="createAdminModal" aria-label="Fermer">&times;</button>
            </header>
            <form method="POST" action="#">
                @csrf
                <div class="admin_modal_body">
                    <div class="admin_form_grid">
                        <div class="admin_form_group">
                            <label for="adm_first_name">Prénom</label>
                            <input type="text" id="adm_first_name" name="first_name" placeholder="Ex: Fatou" required>
                        </div>
                        <div class="admin_form_group">
                            <label for="adm_last_name">Nom</label>
                            <input type="text" id="adm_last_name" name="last_name" placeholder="Ex: Konan" required>
                        </div>
                        <div class="admin_form_group col_full">
                            <label for="adm_email">Adresse e-mail institutionnelle</label>
                            <input type="email" id="adm_email" name="email" placeholder="utilisateur@cimat-ci.net" required>
                        </div>
                        <div class="admin_form_group">
                            <label for="adm_role">Niveau d'accès / Rôle</label>
                            <select id="adm_role" name="role" required>
                                <option value="pedagogy">Coordinateur Pédagogique</option>
                                <option value="scolarite">Gestionnaire Scolarité</option>
                                <option value="superadmin">Super Administrateur</option>
                            </select>
                        </div>
                        <div class="admin_form_group">
                            <label for="adm_phone">Téléphone</label>
                            <input type="tel" id="adm_phone" name="phone" placeholder="+225 XX XX XX XX XX">
                        </div>
                        <div class="admin_form_group col_full">
                            <label for="adm_password">Mot de passe provisoire</label>
                            <input type="password" id="adm_password" name="password" placeholder="••••••••••••" required>
                        </div>
                    </div>
                </div>
                <footer class="admin_modal_footer">
                    <button type="button" class="admin_modal_cancel" data-modal-close="createAdminModal">Annuler</button>
                    <button type="submit" class="btn_admin_primary"><i class="fa-solid fa-shield-halved"></i> Créer l'accès administrateur</button>
                </footer>
            </form>
        </div>
    </div>
@endsection
