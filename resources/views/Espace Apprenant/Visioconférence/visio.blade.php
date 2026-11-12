@extends('template-student')

@section('content')
<div class="contenu_dashboard">

    <!-- Top Dashboard Header -->
    <header class="top dashboard">
        <div class="title-section">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="24px" width="24px" fill="currentColor">
                <path d="M17,10.5V7A1,1 0 0,0 16,6H4A1,1 0 0,0 3,7V17A1,1 0 0,0 4,18H16A1,1 0 0,0 17,17V13.5L21,17.5V6.5L17,10.5Z"/>
            </svg>
            <h3>Visioconférences et Cours en Direct</h3>
        </div>
        <div class="nav">
            <div class="search">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="search" id="visioSearchInput" placeholder="Rechercher une visio...">
            </div>
            <div class="notif">
                <a href="#" class="notification-icon">
                    <i class="fa-solid fa-bell"></i>
                    <span class="badge">3</span>
                </a>
            </div>
            <div class="profile_student">
                <div class="image">
                    <img src="{{ asset('Elements/images/OIP-2658464322.jpg') }}" alt="Photo de profil">
                </div>
                <div class="name">
                    <p>Edmond Barou</p>
                    <p>PNC - 2e Année</p>
                </div>
            </div>
        </div>
    </header>

    <!-- Contenu de la page Visioconférences -->
    <div class="visio_container">

        <!-- Entête Thématique Aviation -->
        <div class="section_header">
            <div class="section_header_text">
                <h1>Salons virtuels de formation</h1>
                <p>Rejoignez vos sessions en direct par module, participez aux debriefings et accédez aux replays.</p>
            </div>
            <div class="badge_pnc">
                <i class="fa-solid fa-video"></i> Académie Cimat
            </div>
        </div>

        <!-- Barre de filtrage et recherche -->
        <div class="filter_toolbar">
            <div class="course_search_box">
                <i class="fa-solid fa-filter" style="color: var(--color-text-muted);"></i>
                <input type="text" id="visioFilterInput" placeholder="Filtrer par module ou intervenant...">
            </div>
            <div class="filter_categories">
                <button class="filter_btn active" data-filter="all">Toutes</button>
                <button class="filter_btn" data-filter="live">En Direct</button>
                <button class="filter_btn" data-filter="today">Aujourd'hui</button>
                <button class="filter_btn" data-filter="upcoming">À venir</button>
                <button class="filter_btn" data-filter="replay">Replay</button>
            </div>
        </div>

        <!-- Grille des cartes de Visioconférences -->
        <div class="visio_grid" id="visioGrid">

            <!-- Carte 1 : EN DIRECT (Module PNC) -->
            <div class="visio_card" data-status="live" data-module="PNC">
                <div class="visio_card_banner">
                    <img src="{{ asset('Elements/images/RENTRE 20_08_25 copie.jpg') }}" alt="Briefing Evacuation">
                    <span class="live_badge_pulse"><i class="fa-solid fa-circle"></i> EN DIRECT</span>
                    <span class="visio_category_tag">PNC</span>
                </div>
                <div class="visio_card_body">
                    <div class="visio_time_info">
                        <span><i class="fa-regular fa-calendar"></i> Aujourd'hui</span>
                        <span><i class="fa-regular fa-clock"></i> 14:00 - 15:30</span>
                    </div>
                    <h4 class="visio_title">Procédures de sécurité cabine & Évacuation d'urgence</h4>
                    <p class="visio_description">Revue interactive des consignes de sécurité, issues et gestion de la cabine en situation critique.</p>
                    <div class="visio_instructor">
                        <i class="fa-solid fa-user-tie"></i>
                        <span>Instructeur : Cap. Marc Dubois</span>
                    </div>
                </div>
                <div class="visio_card_actions">
                    <button class="btn_action btn_video btn_join_live" onclick="openVideoModal('Procédures de sécurité cabine (PNC)')">
                        <i class="fa-solid fa-headset"></i> Rejoindre la classe
                    </button>
                </div>
            </div>

            <!-- Carte 2 : AUJOURD'HUI (Module Anglais) -->
            <div class="visio_card" data-status="today" data-module="Anglais">
                <div class="visio_card_banner">
                    <img src="{{ asset('Elements/images/RENTRE 20_08_25 copie.jpg') }}" alt="Anglais Aéronautique">
                    <span class="visio_badge urgent"><i class="fa-regular fa-clock"></i> Aujourd'hui, 17:00</span>
                    <span class="visio_category_tag">Anglais</span>
                </div>
                <div class="visio_card_body">
                    <div class="visio_time_info">
                        <span><i class="fa-regular fa-calendar"></i> Aujourd'hui</span>
                        <span><i class="fa-regular fa-clock"></i> 17:00 - 18:30</span>
                    </div>
                    <h4 class="visio_title">Anglais aéronautique : Phraséologie ICAO & Annonces PA</h4>
                    <p class="visio_description">Maîtrise des annonces de sécurité standard et des communications internationales à bord.</p>
                    <div class="visio_instructor">
                        <i class="fa-solid fa-language"></i>
                        <span>Intervenante : Sarah Jenkins</span>
                    </div>
                </div>
                <div class="visio_card_actions">
                    <button class="btn_action btn_pdf" onclick="alert('Rappel programmé avec succès !')">
                        <i class="fa-regular fa-bell"></i> Rappel
                    </button>
                    <button class="btn_action btn_video" onclick="openVideoModal('Anglais aéronautique & Annonces PA')">
                        <i class="fa-solid fa-video"></i> Accéder au salon
                    </button>
                </div>
            </div>

            <!-- Carte 3 : À VENIR (Module Informatique) -->
            <div class="visio_card" data-status="upcoming" data-module="Informatique">
                <div class="visio_card_banner">
                    <img src="{{ asset('Elements/images/RENTRE 20_08_25 copie.jpg') }}" alt="Informatique Bureautique">
                    <span class="visio_badge normal"><i class="fa-regular fa-calendar-days"></i> Dans 3 jours</span>
                    <span class="visio_category_tag">Informatique</span>
                </div>
                <div class="visio_card_body">
                    <div class="visio_time_info">
                        <span><i class="fa-regular fa-calendar"></i> Vendredi 14 Nov</span>
                        <span><i class="fa-regular fa-clock"></i> 10:00 - 11:30</span>
                    </div>
                    <h4 class="visio_title">Bureautique : Gestion des plannings et tableurs Excel</h4>
                    <p class="visio_description">Atelier pratique sur l'utilisation d'Excel pour le suivi des heures de vol et des rotations.</p>
                    <div class="visio_instructor">
                        <i class="fa-solid fa-laptop"></i>
                        <span>Instructeur : Edmond Barou</span>
                    </div>
                </div>
                <div class="visio_card_actions">
                    <button class="btn_action btn_pdf" onclick="alert('Téléchargement du support informatique en cours...')">
                        <i class="fa-solid fa-file-arrow-down"></i> Support
                    </button>
                    <button class="btn_action btn_video" onclick="alert('Réservation enregistrée !')">
                        <i class="fa-regular fa-calendar-check"></i> Réserver
                    </button>
                </div>
            </div>

            <!-- Carte 4 : REPLAY (Module PNC) -->
            <div class="visio_card" data-status="replay" data-module="PNC">
                <div class="visio_card_banner">
                    <img src="{{ asset('Elements/images/RENTRE 20_08_25 copie.jpg') }}" alt="Replay PNC">
                    <span class="visio_badge replay"><i class="fa-solid fa-rotate-left"></i> Replay Disponible</span>
                    <span class="visio_category_tag">PNC</span>
                </div>
                <div class="visio_card_body">
                    <div class="visio_time_info">
                        <span><i class="fa-regular fa-calendar"></i> Hier</span>
                        <span><i class="fa-solid fa-film"></i> 1h 24min</span>
                    </div>
                    <h4 class="visio_title">Service à bord et relation passager d'exception</h4>
                    <p class="visio_description">Replay complet du séminaire sur les étapes du service de classe Affaires et la gestion de la relation client.</p>
                    <div class="visio_instructor">
                        <i class="fa-solid fa-user-tie"></i>
                        <span>Instructeur : Commandant K. Bamba</span>
                    </div>
                </div>
                <div class="visio_card_actions">
                    <button class="btn_action btn_video" onclick="openVideoModal('Replay : Service à bord et relation passager')">
                        <i class="fa-solid fa-play"></i> Visionner Replay
                    </button>
                </div>
            </div>

        </div>
    </div>

    <!-- Modale Virtuelle / Replay -->
    <div class="modal_video_overlay" id="visioModal" style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.6); z-index: 1000; display: none;">
        <div class="modal_content" style="background: var(--color-bg-surface); width: 600px; margin: 60px auto; border-radius: var(--radius-md); overflow: hidden;">
            <div class="modal_header" style="display: flex; justify-content: space-between; align-items: center; padding: 16px 20px; border-bottom: 1px solid var(--color-border);">
                <h3 id="modalVisioTitle" style="font-size: 1.1rem; color: var(--color-text-main);"><i class="fa-solid fa-video" style="color: var(--color-accent);"></i> Salon Virtuel PNC</h3>
                <button class="close_modal_btn" onclick="closeVisioModal()" style="background: none; border: none; font-size: 1.5rem; cursor: pointer; color: var(--color-text-muted);">&times;</button>
            </div>
            <div class="video_wrapper" style="position: relative; padding-bottom: 56.25%; height: 0; background: #000;">
                <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="Classe Virtuelle" style="position: absolute; top:0; left:0; width:100%; height:100%; border:0;" allowfullscreen></iframe>
            </div>
            <div class="modal_footer" style="display: flex; justify-content: flex-end; padding: 16px 20px; border-top: 1px solid var(--color-border);">
                <button class="btn_action btn_pdf" onclick="closeVisioModal()">Quitter le salon</button>
            </div>
        </div>
    </div>

    <!-- Script JavaScript pour les filtres et la recherche -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const filterBtns = document.querySelectorAll('.filter_categories .filter_btn');
            const visioCards = document.querySelectorAll('.visio_grid .visio_card');
            const searchInputTop = document.getElementById('visioSearchInput');
            const filterInputBottom = document.getElementById('visioFilterInput');

            let currentFilter = 'all';

            // 1. Filtrage par statut/catégorie (Boutons)
            filterBtns.forEach(btn => {
                btn.addEventListener('click', () => {
                    filterBtns.forEach(b => b.classList.remove('active'));
                    btn.classList.add('active');

                    currentFilter = btn.getAttribute('data-filter');
                    applyFiltersAndSearch();
                });
            });

            // 2. Recherche textuelle (Barre du haut)
            if (searchInputTop) {
                searchInputTop.addEventListener('input', () => {
                    applyFiltersAndSearch();
                });
            }

            // 3. Recherche textuelle / filtrage (Barre du bas)
            if (filterInputBottom) {
                filterInputBottom.addEventListener('input', () => {
                    applyFiltersAndSearch();
                });
            }

            // Fonction globale combinant les filtres de boutons et de recherche textuelle
            function applyFiltersAndSearch() {
                const searchTopValue = searchInputTop ? searchInputTop.value.toLowerCase().trim() : '';
                const searchBottomValue = filterInputBottom ? filterInputBottom.value.toLowerCase().trim() : '';

                visioCards.forEach(card => {
                    const cardStatus = card.getAttribute('data-status');
                    const titleText = card.querySelector('.visio_title').textContent.toLowerCase();
                    const descText = card.querySelector('.visio_description').textContent.toLowerCase();
                    const instructorText = card.querySelector('.visio_instructor').textContent.toLowerCase();
                    const moduleText = card.querySelector('.visio_category_tag').textContent.toLowerCase();

                    // Vérification du filtre de statut (boutons)
                    let matchesFilter = (currentFilter === 'all' || cardStatus === currentFilter);

                    // Vérification de la recherche textuelle (titre, description, intervenant ou module)
                    const textToSearch = titleText + ' ' + descText + ' ' + instructorText + ' ' + moduleText;
                    const matchesTopSearch = (searchTopValue === '' || textToSearch.includes(searchTopValue));
                    const matchesBottomSearch = (searchBottomValue === '' || textToSearch.includes(searchBottomValue));

                    if (matchesFilter && matchesTopSearch && matchesBottomSearch) {
                        card.style.display = 'flex';
                    } else {
                        card.style.display = 'none';
                    }
                });
            }
        });

        // Gestion de la modale vidéo
        const visioModal = document.getElementById('visioModal');
        const modalTitle = document.getElementById('modalVisioTitle');

        function openVideoModal(title) {
            modalTitle.textContent = title;
            visioModal.style.display = 'block';
        }

        function closeVisioModal() {
            visioModal.style.display = 'none';
        }

        window.addEventListener('click', (e) => {
            if (e.target === visioModal) {
                closeVisioModal();
            }
        });
    </script>

    <!-- Footer Aligné -->
    <footer class="student_footer">
        <div class="footer_content">
            <p>&copy; 2026 <a href="#">Groupe Komptech Cimat</a>. Tous droits réservés.</p>
            <div class="footer_socials">
                <a href="#" aria-label="Facebook" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#" aria-label="LinkedIn" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
                <a href="#" aria-label="Instagram" target="_blank"><i class="fa-brands fa-instagram"></i></a>
            </div>
        </div>
    </footer>
</div>
@endsection
