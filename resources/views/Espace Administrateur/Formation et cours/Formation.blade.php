@extends('template-admin')
@section('title', 'Formations')

@section('content')
    <div class="admin_page_header">
        <div class="admin_page_header_info">
            <h1>Formations &amp; Filières Aéronautiques</h1>
            <p>Gérez les parcours de formation certifiants dispensés au sein du CIMAT.</p>
        </div>
        <div class="admin_page_actions">
            <button class="btn_admin_primary" type="button" data-modal-open="createProgramModal">
                <i class="fa-solid fa-plus" aria-hidden="true"></i> Créer une formation
            </button>
        </div>
    </div>

    <!-- Grille des filières de formation -->
    <div class="admin_grid_cards">
        <article class="admin_content_card">
            <div>
                <div class="content_card_header">
                    <div class="content_card_icon" style="background: #e0f2fe; color: #0284c7;">
                        <i class="fa-solid fa-plane-departure"></i>
                    </div>

                </div>
                <div style="margin-top: 14px;">
                    <h3 style="font-size: 1.1rem; margin: 0 0 6px;">Personnel Navigant Commercial (PNC)</h3>
                    <p style="color: #64748b; font-size: 0.84rem; margin: 0;">
                        Préparation intensive au Certificat de Membre d'Équipage de Cabine (CCA), sécurité sauvetage et service première classe.
                    </p>
                </div>
            </div>
            <div>
                <div class="content_card_meta">
                    <span><i class="fa-solid fa-users"></i> 84 apprenants</span>
                    <span><i class="fa-solid fa-book"></i> 18 modules</span>
                    <span><i class="fa-regular fa-clock"></i> 9 mois</span>
                </div>
                <div class="content_card_footer" style="margin-top: 14px;">
                    <span style="font-size: 0.78rem; color: #64748b;">Promo 2026–2027</span>
                    <div class="table_actions">
                        <button class="action_icon_btn" title="Modifier"><i class="fa-regular fa-pen-to-square"></i></button>
                        <button class="action_icon_btn" title="Voir les cours"><i class="fa-regular fa-eye"></i></button>
                    </div>
                </div>
            </div>
        </article>

        <article class="admin_content_card">
            <div>
                <div class="content_card_header">
                    <div class="content_card_icon" style="background: #ffedd5; color: #ea580c;">
                        <i class="fa-solid fa-id-card-clip"></i>
                    </div>

                </div>
                <div style="margin-top: 14px;">
                    <h3 style="font-size: 1.1rem; margin: 0 0 6px;">Agent d'Escale Aéroportuaire</h3>
                    <p style="color: #64748b; font-size: 0.84rem; margin: 0;">
                        Accueil, enregistrement des passagers, traitement des bagages, logiciels DCS (Altea / Amadeus) et gestion des litiges.
                    </p>
                </div>
            </div>
            <div>
                <div class="content_card_meta">
                    <span><i class="fa-solid fa-users"></i> 46 apprenants</span>
                    <span><i class="fa-solid fa-book"></i> 12 modules</span>
                    <span><i class="fa-regular fa-clock"></i> 6 mois</span>
                </div>
                <div class="content_card_footer" style="margin-top: 14px;">
                    <span style="font-size: 0.78rem; color: #64748b;">Promo 2026</span>
                    <div class="table_actions">
                        <button class="action_icon_btn" title="Modifier"><i class="fa-regular fa-pen-to-square"></i></button>
                        <button class="action_icon_btn" title="Voir les cours"><i class="fa-regular fa-eye"></i></button>
                    </div>
                </div>
            </div>
        </article>

        <article class="admin_content_card">
            <div>
                <div class="content_card_header">
                    <div class="content_card_icon" style="background: #f3e8ff; color: #9333ea;">
                        <i class="fa-solid fa-boxes-packing"></i>
                    </div>
                    
                </div>
                <div style="margin-top: 14px;">
                    <h3 style="font-size: 1.1rem; margin: 0 0 6px;">Fret &amp; Marchandises Dangereuses (DGR)</h3>
                    <p style="color: #64748b; font-size: 0.84rem; margin: 0;">
                        Réglementation IATA DGR catégories 1, 3 et 6, emballage, étiquetage et expédition sécurisée du fret aérien.
                    </p>
                </div>
            </div>
            <div>
                <div class="content_card_meta">
                    <span><i class="fa-solid fa-users"></i> 12 apprenants</span>
                    <span><i class="fa-solid fa-book"></i> 6 modules</span>
                    <span><i class="fa-regular fa-clock"></i> 3 mois</span>
                </div>
                <div class="content_card_footer" style="margin-top: 14px;">
                    <span style="font-size: 0.78rem; color: #64748b;">Session continue</span>
                    <div class="table_actions">
                        <button class="action_icon_btn" title="Modifier"><i class="fa-regular fa-pen-to-square"></i></button>
                        <button class="action_icon_btn" title="Voir les cours"><i class="fa-regular fa-eye"></i></button>
                    </div>
                </div>
            </div>
        </article>
    </div>

    <!-- Modale : Créer une formation -->
    <div class="admin_modal" id="createProgramModal" hidden>
        <div class="admin_modal_dialog">
            <header class="admin_modal_header">
                <div class="modal_header_title">
                    <i class="fa-solid fa-graduation-cap"></i>
                    <div>
                        <h2>Créer une nouvelle filière de formation</h2>
                        <p>Définissez un nouveau cursus pédagogique au sein du centre.</p>
                    </div>
                </div>
                <button type="button" class="admin_modal_close" data-modal-close="createProgramModal" aria-label="Fermer">&times;</button>
            </header>
            <form method="POST" action="#">
                @csrf
                <div class="admin_modal_body">
                    <div class="admin_form_grid">
                        <div class="admin_form_group col_full">
                            <label for="program_name">Intitulé de la formation</label>
                            <input type="text" id="program_name" name="name" placeholder="Ex: Agent d'Opérations Aériennes (Flight Dispatcher)" required>
                        </div>
                        <div class="admin_form_group">
                            <label for="program_duration">Durée globale</label>
                            <input type="text" id="program_duration" name="duration" placeholder="Ex: 6 mois (400 heures)" required>
                        </div>
                        <div class="admin_form_group">
                            <label for="program_code">Code de la filière</label>
                            <input type="text" id="program_code" name="code" placeholder="Ex: AOA-2026">
                        </div>
                        <div class="admin_form_group col_full">
                            <label for="program_desc">Objectifs &amp; Présentation</label>
                            <textarea id="program_desc" name="description" placeholder="Compétences visées, certifications obtenues, prérequis d'admission..."></textarea>
                        </div>
                    </div>
                </div>
                <footer class="admin_modal_footer">
                    <button type="button" class="admin_modal_cancel" data-modal-close="createProgramModal">Annuler</button>
                    <button type="submit" class="btn_admin_primary"><i class="fa-solid fa-plus"></i> Enregistrer la filière</button>
                </footer>
            </form>
        </div>
    </div>
@endsection
