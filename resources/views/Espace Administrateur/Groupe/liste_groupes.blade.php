@extends('template-admin')
@section('title', 'Groupes')

@section('content')
    <div class="admin_page_header">
        <div class="admin_page_header_info">
            <h1>Groupes &amp; Promotions d'Étudiants</h1>
            <p>Structurez les cohortes par filière académique, année de formation et formateur référent.</p>
        </div>
        <div class="admin_page_actions">
            <a href="{{ route('Admin.assign-student') }}" class="btn_admin_secondary">
                <i class="fa-solid fa-user-plus"></i> Affecter des apprenants
            </a>
            <button class="btn_admin_primary" type="button" data-modal-open="createGroupModal">
                <i class="fa-solid fa-people-group" aria-hidden="true"></i> Créer un nouveau groupe
            </button>
        </div>
    </div>

    <!-- Grille des Groupes -->
    <div class="admin_grid_cards">
        <article class="admin_content_card">
            <div>
                <div class="content_card_header">
                    <div class="content_card_icon" style="background: #e0f2fe; color: #0284c7;">
                        <i class="fa-solid fa-people-group"></i>
                    </div>
                    <span class="badge_status badge_success">En cours</span>
                </div>
                <div style="margin-top: 14px;">
                    <h3 style="font-size: 1.1rem; margin: 0 0 6px;">PNC - Promotion 2026-A</h3>
                    <p style="color: #64748b; font-size: 0.84rem; margin: 0;">
                        Personnel Navigant Commercial · Session de rentrée d'octobre.
                    </p>
                </div>
            </div>
            <div>
                <div class="content_card_meta">
                    <span><i class="fa-solid fa-user-graduate"></i> 42 apprenants</span>
                    <span><i class="fa-solid fa-person-chalkboard"></i> M. Alain N'Dri</span>
                </div>
                <div class="content_card_footer" style="margin-top: 14px;">
                    <span style="font-size: 0.78rem; color: #64748b;">Année 2026–2027</span>
                    <div class="table_actions">
                        <button class="action_icon_btn" title="Modifier le groupe"><i class="fa-regular fa-pen-to-square"></i></button>
                        <a href="{{ route('Admin.assign-student') }}" class="action_icon_btn" title="Voir les membres"><i class="fa-regular fa-eye"></i></a>
                    </div>
                </div>
            </div>
        </article>

        <article class="admin_content_card">
            <div>
                <div class="content_card_header">
                    <div class="content_card_icon" style="background: #ffedd5; color: #ea580c;">
                        <i class="fa-solid fa-people-group"></i>
                    </div>
                    <span class="badge_status badge_success">En cours</span>
                </div>
                <div style="margin-top: 14px;">
                    <h3 style="font-size: 1.1rem; margin: 0 0 6px;">PNC - Promotion 2026-B</h3>
                    <p style="color: #64748b; font-size: 0.84rem; margin: 0;">
                        Personnel Navigant Commercial · Session de rentrée de novembre.
                    </p>
                </div>
            </div>
            <div>
                <div class="content_card_meta">
                    <span><i class="fa-solid fa-user-graduate"></i> 42 apprenants</span>
                    <span><i class="fa-solid fa-person-chalkboard"></i> Mme. Claire Diop</span>
                </div>
                <div class="content_card_footer" style="margin-top: 14px;">
                    <span style="font-size: 0.78rem; color: #64748b;">Année 2026–2027</span>
                    <div class="table_actions">
                        <button class="action_icon_btn" title="Modifier le groupe"><i class="fa-regular fa-pen-to-square"></i></button>
                        <a href="{{ route('Admin.assign-student') }}" class="action_icon_btn" title="Voir les membres"><i class="fa-regular fa-eye"></i></a>
                    </div>
                </div>
            </div>
        </article>

        <article class="admin_content_card">
            <div>
                <div class="content_card_header">
                    <div class="content_card_icon" style="background: #f3e8ff; color: #9333ea;">
                        <i class="fa-solid fa-people-group"></i>
                    </div>
                    <span class="badge_status badge_info">Session ouverte</span>
                </div>
                <div style="margin-top: 14px;">
                    <h3 style="font-size: 1.1rem; margin: 0 0 6px;">Agent d'Escale - Promo 2026</h3>
                    <p style="color: #64748b; font-size: 0.84rem; margin: 0;">
                        Filière sol aéroportuaire, logiciel DCS Altea et relations passagers.
                    </p>
                </div>
            </div>
            <div>
                <div class="content_card_meta">
                    <span><i class="fa-solid fa-user-graduate"></i> 36 apprenants</span>
                    <span><i class="fa-solid fa-person-chalkboard"></i> M. Robert Kouassi</span>
                </div>
                <div class="content_card_footer" style="margin-top: 14px;">
                    <span style="font-size: 0.78rem; color: #64748b;">Année 2026</span>
                    <div class="table_actions">
                        <button class="action_icon_btn" title="Modifier le groupe"><i class="fa-regular fa-pen-to-square"></i></button>
                        <a href="{{ route('Admin.assign-student') }}" class="action_icon_btn" title="Voir les membres"><i class="fa-regular fa-eye"></i></a>
                    </div>
                </div>
            </div>
        </article>
    </div>

    <!-- Modale : Créer un groupe -->
    <div class="admin_modal" id="createGroupModal" hidden>
        <div class="admin_modal_dialog">
            <header class="admin_modal_header">
                <div class="modal_header_title">
                    <i class="fa-solid fa-people-group"></i>
                    <div>
                        <h2>Créer un nouveau groupe d'étudiants</h2>
                        <p>Configurez une cohorte ou une classe pour la rentrée.</p>
                    </div>
                </div>
                <button type="button" class="admin_modal_close" data-modal-close="createGroupModal" aria-label="Fermer">&times;</button>
            </header>
            <form method="POST" action="#">
                @csrf
                <div class="admin_modal_body">
                    <div class="admin_form_grid">
                        <div class="admin_form_group col_full">
                            <label for="grp_name">Nom du groupe / Promotion</label>
                            <input type="text" id="grp_name" name="name" placeholder="Ex: PNC - Promotion 2026-C" required>
                        </div>
                        <div class="admin_form_group">
                            <label for="grp_filiere">Filière associée</label>
                            <select id="grp_filiere" name="program" required>
                                <option value="pnc">Personnel Navigant Commercial</option>
                                <option value="escale">Agent d'Escale Aéroportuaire</option>
                                <option value="fret">Fret &amp; DGR</option>
                            </select>
                        </div>
                        <div class="admin_form_group">
                            <label for="grp_teacher">Formateur référent</label>
                            <select id="grp_teacher" name="teacher">
                                <option value="1">M. Alain N'Dri</option>
                                <option value="2">Mme. Claire Diop</option>
                                <option value="3">M. Robert Kouassi</option>
                            </select>
                        </div>
                        <div class="admin_form_group">
                            <label for="grp_year">Année académique</label>
                            <input type="text" id="grp_year" name="academic_year" value="{{ date('Y') }}–{{ date('Y') + 1 }}">
                        </div>
                        <div class="admin_form_group">
                            <label for="grp_max_capacity">Capacité maximale</label>
                            <input type="number" id="grp_max_capacity" name="capacity" value="45" min="5" max="100">
                        </div>
                    </div>
                </div>
                <footer class="admin_modal_footer">
                    <button type="button" class="admin_modal_cancel" data-modal-close="createGroupModal">Annuler</button>
                    <button type="submit" class="btn_admin_primary"><i class="fa-solid fa-check"></i> Créer le groupe</button>
                </footer>
            </form>
        </div>
    </div>
@endsection
