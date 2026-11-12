@extends('template-admin')
@section('title', 'Visioconférences')

@section('content')
    <div class="admin_page_header">
        <div class="admin_page_header_info">
            <h1> Visioconférences</h1>
            <p>Supervisez, lancez et planifiez les cours interactifs en direct avec les formateurs et les étudiants.</p>
        </div>
        <div class="admin_page_actions">
            <button class="btn_admin_primary" type="button" data-modal-open="createVisioModal">
                <i class="fa-solid fa-video" aria-hidden="true"></i> Programmer une visioconférence
            </button>
        </div>
    </div>

    <!-- Statistiques rapides -->
    <section class="admin_stats_grid">
        <div class="admin_stat_card">
            <div class="admin_stat_icon" style="background: #fee2e2; color: #dc2626;"><i class="fa-solid fa-tower-broadcast"></i></div>
            <div class="admin_stat_content">
                <span class="admin_stat_val">1</span>
                <span class="admin_stat_lbl">Session en direct</span>
            </div>
        </div>
        <div class="admin_stat_card">
            <div class="admin_stat_icon stat_blue"><i class="fa-solid fa-calendar-days"></i></div>
            <div class="admin_stat_content">
                <span class="admin_stat_val">5</span>
                <span class="admin_stat_lbl">Sessions programmées</span>
            </div>
        </div>
        <div class="admin_stat_card">
            <div class="admin_stat_icon stat_purple"><i class="fa-solid fa-users-viewfinder"></i></div>
            <div class="admin_stat_content">
                <span class="admin_stat_val">38</span>
                <span class="admin_stat_lbl">Total heures ce mois</span>
            </div>
        </div>
    </section>

    <!-- Filtres & Recherche -->
    <div class="admin_filter_bar">
        <div class="admin_filter_group">
            <button class="admin_filter_pill active" type="button" data-filter="all">Toutes les sessions</button>
            <button class="admin_filter_pill" type="button" data-filter="live">En direct</button>
            <button class="admin_filter_pill" type="button" data-filter="upcoming">À venir</button>
            <button class="admin_filter_pill" type="button" data-filter="past">Historique</button>
        </div>

        <div class="admin_filter_search">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="search" id="visioSearchInput" placeholder="Rechercher une session ou un formateur...">
        </div>
    </div>

    <!-- Grille des réunions -->
    <div class="admin_grid_cards" id="visioGrid">
        <!-- Session en direct (Rouge avec pulse) -->
        <article class="admin_content_card visio_item_row visio_live_card_red" data-category="live">
            <div>
                <div class="content_card_header">
                    <div class="content_card_icon" style="background: #fee2e2; color: #dc2626;">
                        <i class="fa-solid fa-tower-broadcast"></i>
                    </div>
                    <span class="visio_live_badge_red"><span class="pulse_dot_red"></span> EN DIRECT MAINTENANT</span>
                </div>
                <div style="margin-top: 14px;">
                    <h3 style="font-size: 1.05rem; margin: 0 0 4px; color: #991b1b;">Sécurité sauvetage &amp; évacuation cabine</h3>
                    <p style="color: #64748b; font-size: 0.82rem; margin: 0;">Animateur : <strong>M. Alain N'Dri</strong></p>
                </div>
            </div>
            <div>
                <div class="content_card_meta" style="border-color: #fecaca;">
                    <span><i class="fa-solid fa-people-group"></i> PNC 2026-A</span>
                    <span><i class="fa-solid fa-user-check" style="color: #dc2626;"></i> 28 connectés</span>
                    <span><i class="fa-regular fa-clock"></i> En cours</span>
                </div>
                <div class="content_card_footer" style="margin-top: 14px;">
                    <a href="#" class="btn_admin_live_red" style="width: 100%; justify-content: center;">
                        <i class="fa-solid fa-video"></i> Rejoindre la classe en direct
                    </a>
                </div>
            </div>
        </article>

        <!-- Session programmée 1 -->
        <article class="admin_content_card visio_item_row" data-category="upcoming">
            <div>
                <div class="content_card_header">
                    <div class="content_card_icon" style="background: #e0f2fe; color: #0284c7;">
                        <i class="fa-solid fa-video"></i>
                    </div>
                    <span class="badge_status badge_info">Programmé</span>
                </div>
                <div style="margin-top: 14px;">
                    <h3 style="font-size: 1.05rem; margin: 0 0 4px;">Service en cabine &amp; Relation passagers</h3>
                    <p style="color: #64748b; font-size: 0.82rem; margin: 0;">Animateur : <strong>Mme. Claire Diop</strong></p>
                </div>
            </div>
            <div>
                <div class="content_card_meta">
                    <span><i class="fa-solid fa-people-group"></i> PNC 2026-A &amp; B</span>
                    <span><i class="fa-regular fa-calendar"></i> Aujourd'hui</span>
                    <span><i class="fa-regular fa-clock"></i> 15h00 - 16h30</span>
                </div>
                <div class="content_card_footer" style="margin-top: 14px;">
                    <button type="button" class="btn_admin_secondary" style="flex: 1; justify-content: center;">
                        <i class="fa-solid fa-link"></i> Lien réunion
                    </button>
                    <button type="button" class="action_icon_btn btn_delete" title="Annuler la réunion"><i class="fa-regular fa-trash-can"></i></button>
                </div>
            </div>
        </article>

        <!-- Session programmée 2 -->
        <article class="admin_content_card visio_item_row" data-category="upcoming">
            <div>
                <div class="content_card_header">
                    <div class="content_card_icon" style="background: #ffedd5; color: #ea580c;">
                        <i class="fa-solid fa-video"></i>
                    </div>
                    <span class="badge_status badge_info">Programmé</span>
                </div>
                <div style="margin-top: 14px;">
                    <h3 style="font-size: 1.05rem; margin: 0 0 4px;">Réglementation IATA &amp; Droits des Passagers</h3>
                    <p style="color: #64748b; font-size: 0.82rem; margin: 0;">Animateur : <strong>M. Robert Kouassi</strong></p>
                </div>
            </div>
            <div>
                <div class="content_card_meta">
                    <span><i class="fa-solid fa-people-group"></i> Agent d'Escale</span>
                    <span><i class="fa-regular fa-calendar"></i> Demain</span>
                    <span><i class="fa-regular fa-clock"></i> 10h30 - 12h00</span>
                </div>
                <div class="content_card_footer" style="margin-top: 14px;">
                    <button type="button" class="btn_admin_secondary" style="flex: 1; justify-content: center;">
                        <i class="fa-solid fa-link"></i> Lien réunion
                    </button>
                    <button type="button" class="action_icon_btn btn_delete" title="Annuler la réunion"><i class="fa-regular fa-trash-can"></i></button>
                </div>
            </div>
        </article>

        <!-- Session passée -->
        <article class="admin_content_card visio_item_row" data-category="past" style="opacity: 0.85;">
            <div>
                <div class="content_card_header">
                    <div class="content_card_icon" style="background: #f1f5f9; color: #475569;">
                        <i class="fa-solid fa-clock-rotate-left"></i>
                    </div>
                    <span class="badge_status" style="background: #f1f5f9; color: #64748b;">Terminée</span>
                </div>
                <div style="margin-top: 14px;">
                    <h3 style="font-size: 1.05rem; margin: 0 0 4px;">Atelier gestes d'urgence et réanimation DAE</h3>
                    <p style="color: #64748b; font-size: 0.82rem; margin: 0;">Animateur : <strong>Dr. Kouassi</strong></p>
                </div>
            </div>
            <div>
                <div class="content_card_meta">
                    <span><i class="fa-solid fa-people-group"></i> PNC 2026-A</span>
                    <span><i class="fa-regular fa-calendar"></i> 05 Nov 2026</span>
                    <span><i class="fa-regular fa-clock"></i> 1h45 de direct</span>
                </div>
                <div class="content_card_footer" style="margin-top: 14px;">
                    <button type="button" class="btn_admin_secondary" style="width: 100%; justify-content: center;">
                        <i class="fa-solid fa-play"></i> Voir le replay enregistré
                    </button>
                </div>
            </div>
        </article>
    </div>

    <!-- Modale : Programmer une Visioconférence -->
    <div class="admin_modal" id="createVisioModal" hidden>
        <div class="admin_modal_dialog modal_lg">
            <header class="admin_modal_header">
                <div class="modal_header_title">
                    <i class="fa-solid fa-video"></i>
                    <div>
                        <h2>Programmer une nouvelle classe virtuelle</h2>
                        <p>Définissez l'horaire, le formateur et la classe invitée pour cette session en direct.</p>
                    </div>
                </div>
                <button type="button" class="admin_modal_close" data-modal-close="createVisioModal" aria-label="Fermer">&times;</button>
            </header>
            <form method="POST" action="#">
                @csrf
                <div class="admin_modal_body">
                    <div class="admin_form_grid">
                        <div class="admin_form_group col_full">
                            <label for="visio_name">Titre de la session</label>
                            <input type="text" id="visio_name" name="title" placeholder="Ex: Débriefing QCM de sécurité et entraînement oral" required>
                        </div>
                        <div class="admin_form_group">
                            <label for="visio_target_group">Groupe invité</label>
                            <select id="visio_target_group" name="group" required>
                                <option value="all">Tous les groupes d'apprenants</option>
                                <option value="pnc-2026-a">PNC - Promotion 2026-A</option>
                                <option value="pnc-2026-b">PNC - Promotion 2026-B</option>
                                <option value="escale-2026">Agent d'Escale Aéroportuaire</option>
                            </select>
                        </div>
                        <div class="admin_form_group">
                            <label for="visio_host">Formateur animateur</label>
                            <select id="visio_host" name="teacher" required>
                                <option value="admin">Administration CIMAT</option>
                                <option value="alain">M. Alain N'Dri</option>
                                <option value="claire">Mme. Claire Diop</option>
                                <option value="robert">M. Robert Kouassi</option>
                            </select>
                        </div>
                        <div class="admin_form_group">
                            <label for="visio_scheduled_date">Date de la réunion</label>
                            <input type="date" id="visio_scheduled_date" name="date" required value="{{ date('Y-m-d') }}">
                        </div>
                        <div class="admin_form_group">
                            <label for="visio_scheduled_time">Heure de début</label>
                            <input type="time" id="visio_scheduled_time" name="time" required value="10:00">
                        </div>
                        <div class="admin_form_group col_full">
                            <label for="visio_room_url">Lien de la visioconférence (Jitsi Meet, Zoom, Teams)</label>
                            <input type="url" id="visio_room_url" name="meeting_url" placeholder="https://meet.jit.si/cimat-classe-virtuelle-..." required>
                        </div>
                        <div class="admin_form_group col_full">
                            <label for="visio_agenda">Ordre du jour / Sujets abordés</label>
                            <textarea id="visio_agenda" name="agenda" placeholder="Détaillez le programme de la visioconférence et le matériel requis pour les apprenants..."></textarea>
                        </div>
                    </div>
                </div>
                <footer class="admin_modal_footer">
                    <button type="button" class="admin_modal_cancel" data-modal-close="createVisioModal">Annuler</button>
                    <button type="submit" class="btn_admin_primary"><i class="fa-solid fa-calendar-check"></i> Planifier la réunion</button>
                </footer>
            </form>
        </div>
    </div>

    <!-- Script de filtrage et recherche des visioconférences -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const filterPills = document.querySelectorAll('.admin_filter_pill');
            const visioCards = document.querySelectorAll('.visio_item_row');
            const searchInput = document.getElementById('visioSearchInput');

            let currentFilter = 'all';

            function filterVisios() {
                const searchTerm = searchInput.value.toLowerCase().trim();

                visioCards.forEach(card => {
                    const category = card.getAttribute('data-category');
                    const textContent = card.textContent.toLowerCase();

                    const matchesCategory = (currentFilter === 'all' || category === currentFilter);
                    const matchesSearch = textContent.includes(searchTerm);

                    if (matchesCategory && matchesSearch) {
                        card.style.display = '';
                    } else {
                        card.style.display = 'none';
                    }
                });
            }

            filterPills.forEach(pill => {
                pill.addEventListener('click', function () {
                    filterPills.forEach(p => p.classList.remove('active'));
                    this.classList.add('active');
                    currentFilter = this.getAttribute('data-filter');
                    filterVisios();
                });
            });

            if (searchInput) {
                searchInput.addEventListener('input', filterVisios);
            }
        });
    </script>
@endsection
