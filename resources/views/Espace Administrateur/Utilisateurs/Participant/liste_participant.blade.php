@extends('template-admin')
@section('title', 'Gestion des Apprenants')

@section('content')
    <div class="admin_page_header">
        <div class="admin_page_header_info">
            <h1>Gestion des Apprenants (Élèves)</h1>
            <p>Inscrivez de nouveaux étudiants, suivez leurs promotions et gérez leurs dossiers académiques.</p>
        </div>
        <div class="admin_page_actions">
            <button class="btn_admin_primary" type="button" data-modal-open="createStudentModal">
                <i class="fa-solid fa-user-plus" aria-hidden="true"></i> Inscrire un apprenant
            </button>
        </div>
    </div>

    <!-- Statistiques rapides -->
    <section class="admin_stats_grid">
        <div class="admin_stat_card">
            <div class="admin_stat_icon stat_blue"><i class="fa-solid fa-user-graduate"></i></div>
            <div class="admin_stat_content">
                <span class="admin_stat_val">142</span>
                <span class="admin_stat_lbl">Total apprenants</span>
            </div>
        </div>
        <div class="admin_stat_card">
            <div class="admin_stat_icon stat_green"><i class="fa-solid fa-user-check"></i></div>
            <div class="admin_stat_content">
                <span class="admin_stat_val">138</span>
                <span class="admin_stat_lbl">Comptes actifs</span>
            </div>
        </div>
        <div class="admin_stat_card">
            <div class="admin_stat_icon stat_orange"><i class="fa-solid fa-user-clock"></i></div>
            <div class="admin_stat_content">
                <span class="admin_stat_val">4</span>
                <span class="admin_stat_lbl">Inscriptions en attente</span>
            </div>
        </div>
    </section>

    <!-- Filtres & Recherche -->
    <div class="admin_filter_bar">
        <div class="admin_filter_group">
            <button class="admin_filter_pill active" type="button" data-admin-filter="all" data-filter-target=".student_row">Tous (142)</button>
            <button class="admin_filter_pill" type="button" data-admin-filter="pnc" data-filter-target=".student_row">PNC</button>
            <button class="admin_filter_pill" type="button" data-admin-filter="escale" data-filter-target=".student_row">Agent d'Escale</button>
            <button class="admin_filter_pill" type="button" data-admin-filter="pending" data-filter-target=".student_row">En attente</button>
        </div>

        <div class="admin_filter_search">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="search" placeholder="Rechercher par nom ou e-mail..." data-admin-search=".student_row">
        </div>
    </div>

    <!-- Tableau des Apprenants -->
    <div class="admin_card">
        <div class="admin_card_header">
            <h2><i class="fa-solid fa-users"></i> Répertoire des étudiants</h2>
        </div>
        <div class="admin_table_wrapper">
            <table class="admin_table">
                <thead>
                    <tr>
                        <th>Étudiant</th>
                        <th>Téléphone</th>
                        <th>Formation &amp; Groupe</th>
                        <th>Date d'inscription</th>
                        <th>Statut</th>
                        <th style="text-align: right;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="student_row" data-category="pnc">
                        <td>
                            <div class="table_user_cell">
                                <span class="table_avatar">EB</span>
                                <div>
                                    <strong>Edmond Barou</strong>
                                    <small>edmond.barou@example.com</small>
                                </div>
                            </div>
                        </td>
                        <td>+225 07 89 00 00 01</td>
                        <td><span class="badge_status badge_info">PNC · Promo 2026-A</span></td>
                        <td>10 Nov 2026</td>
                        <td><span class="badge_status badge_success"><i class="fa-solid fa-circle" style="font-size: 0.5rem;"></i> Actif</span></td>
                        <td>
                            <div class="table_actions">
                                <button class="action_icon_btn" title="Consulter"><i class="fa-regular fa-eye"></i></button>
                                <button class="action_icon_btn" title="Modifier"><i class="fa-regular fa-pen-to-square"></i></button>
                                <button class="action_icon_btn btn_delete" title="Supprimer"><i class="fa-regular fa-trash-can"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr class="student_row" data-category="pnc">
                        <td>
                            <div class="table_user_cell">
                                <span class="table_avatar" style="background: #ffedd5; color: #ea580c;">SK</span>
                                <div>
                                    <strong>Sarah Koné</strong>
                                    <small>sarah.kone@example.com</small>
                                </div>
                            </div>
                        </td>
                        <td>+225 05 12 34 56 78</td>
                        <td><span class="badge_status badge_info">PNC · Promo 2026-A</span></td>
                        <td>08 Nov 2026</td>
                        <td><span class="badge_status badge_success"><i class="fa-solid fa-circle" style="font-size: 0.5rem;"></i> Actif</span></td>
                        <td>
                            <div class="table_actions">
                                <button class="action_icon_btn" title="Consulter"><i class="fa-regular fa-eye"></i></button>
                                <button class="action_icon_btn" title="Modifier"><i class="fa-regular fa-pen-to-square"></i></button>
                                <button class="action_icon_btn btn_delete" title="Supprimer"><i class="fa-regular fa-trash-can"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr class="student_row" data-category="escale">
                        <td>
                            <div class="table_user_cell">
                                <span class="table_avatar" style="background: #e0e7ff; color: #4338ca;">MT</span>
                                <div>
                                    <strong>Marc Touré</strong>
                                    <small>marc.toure@example.com</small>
                                </div>
                            </div>
                        </td>
                        <td>+225 01 44 55 66 77</td>
                        <td><span class="badge_status badge_accent">Escale · Promo 2026</span></td>
                        <td>05 Nov 2026</td>
                        <td><span class="badge_status badge_warning"><i class="fa-solid fa-clock" style="font-size: 0.5rem;"></i> En attente</span></td>
                        <td>
                            <div class="table_actions">
                                <button class="action_icon_btn" title="Consulter"><i class="fa-regular fa-eye"></i></button>
                                <button class="action_icon_btn" title="Modifier"><i class="fa-regular fa-pen-to-square"></i></button>
                                <button class="action_icon_btn btn_delete" title="Supprimer"><i class="fa-regular fa-trash-can"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr class="student_row" data-category="pnc">
                        <td>
                            <div class="table_user_cell">
                                <span class="table_avatar" style="background: #dcfce7; color: #15803d;">AY</span>
                                <div>
                                    <strong>Amina Yapi</strong>
                                    <small>amina.yapi@example.com</small>
                                </div>
                            </div>
                        </td>
                        <td>+225 07 77 88 99 00</td>
                        <td><span class="badge_status badge_info">PNC · Promo 2026-B</span></td>
                        <td>03 Nov 2026</td>
                        <td><span class="badge_status badge_success"><i class="fa-solid fa-circle" style="font-size: 0.5rem;"></i> Actif</span></td>
                        <td>
                            <div class="table_actions">
                                <button class="action_icon_btn" title="Consulter"><i class="fa-regular fa-eye"></i></button>
                                <button class="action_icon_btn" title="Modifier"><i class="fa-regular fa-pen-to-square"></i></button>
                                <button class="action_icon_btn btn_delete" title="Supprimer"><i class="fa-regular fa-trash-can"></i></button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modale : Inscrire un Apprenant -->
    <div class="admin_modal" id="createStudentModal" hidden>
        <div class="admin_modal_dialog modal_lg">
            <header class="admin_modal_header">
                <div class="modal_header_title">
                    <i class="fa-solid fa-user-graduate"></i>
                    <div>
                        <h2>Inscrire un nouvel apprenant</h2>
                        <p>Créez le profil d'un étudiant et attribuez-lui sa promotion.</p>
                    </div>
                </div>
                <button type="button" class="admin_modal_close" data-modal-close="createStudentModal" aria-label="Fermer">&times;</button>
            </header>
            <form method="POST" action="#" enctype="multipart/form-data">
                @csrf
                <div class="admin_modal_body">
                    <div class="admin_form_grid">
                        <div class="admin_form_group">
                            <label for="std_first_name">Prénom de l'apprenant</label>
                            <input type="text" id="std_first_name" name="first_name" placeholder="Ex: Jean-Luc" required>
                        </div>
                        <div class="admin_form_group">
                            <label for="std_last_name">Nom de famille</label>
                            <input type="text" id="std_last_name" name="last_name" placeholder="Ex: Kouamé" required>
                        </div>
                        <div class="admin_form_group">
                            <label for="std_email">Adresse e-mail</label>
                            <input type="email" id="std_email" name="email" placeholder="apprenant@example.com" required>
                        </div>
                        <div class="admin_form_group">
                            <label for="std_phone">Numéro de téléphone</label>
                            <input type="tel" id="std_phone" name="phone" placeholder="+225 XX XX XX XX XX">
                        </div>
                        <div class="admin_form_group">
                            <label for="std_program">Formation d'inscription</label>
                            <select id="std_program" name="program" required>
                                <option value="pnc">Personnel Navigant Commercial (PNC)</option>
                                <option value="escale">Agent d'Escale Aéroportuaire</option>
                                <option value="fret">Fret Aérien (DGR)</option>
                            </select>
                        </div>
                        <div class="admin_form_group">
                            <label for="std_group">Groupe / Promotion</label>
                            <select id="std_group" name="group_id">
                                <option value="pnc-2026-a">PNC - Promotion 2026-A</option>
                                <option value="pnc-2026-b">PNC - Promotion 2026-B</option>
                                <option value="escale-2026">Agent d'Escale - 2026</option>
                            </select>
                        </div>
                        <div class="admin_form_group col_full">
                            <label>Photo de profil (Optionnel)</label>
                            <input type="file" name="avatar" accept="image/*" >
                        </div>
                    </div>
                </div>
                <footer class="admin_modal_footer">
                    <button type="button" class="admin_modal_cancel" data-modal-close="createStudentModal">Annuler</button>
                    <button type="submit" class="btn_admin_primary"><i class="fa-solid fa-user-plus"></i> Enregistrer l'apprenant</button>
                </footer>
            </form>
        </div>
    </div>
@endsection
