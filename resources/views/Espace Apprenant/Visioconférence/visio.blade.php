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
                <input type="text" id="visioSearchInput" placeholder="Rechercher une visio...">
            </div>
            <div class="notif">
                <i class="fa-regular fa-bell notification-icon"></i>
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
                <h1>Salons virtuels PNC</h1>
                <p>Rejoignez vos sessions en direct avec vos instructeurs, participez aux debriefings en temps réel.</p>
            </div>
            <div class="badge_pnc">
                <i class="fa-solid fa-video"></i> Spécialisation PNC
            </div>
        </div>

        <!-- Barre de filtrage et recherche -->
        <div class="filter_toolbar">
            <div class="course_search_box">
                <i class="fa-solid fa-filter" style="color: var(--color-text-muted);"></i>
                <input type="text" id="visioFilterInput" placeholder="Filtrer par intervenant ou module...">
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
        <div class="visio_grid">

            <!-- Carte 1 : Visioconférence EN DIRECT -->
            <div class="visio_card" data-status="live">
                <div class="visio_card_banner">
                    <img src="{{ asset('Elements/images/RENTRE 20_08_25 copie.jpg') }}" alt="Briefing Evacuation">
                    <span class="live_badge_pulse"><i class="fa-solid fa-circle"></i> EN DIRECT</span>
                    <span class="visio_category_tag">Sécurité Cabine</span>
                </div>
                <div class="visio_card_body">
                    <div class="visio_time_info">
                        <span><i class="fa-regular fa-calendar"></i> Aujourd'hui</span>
                        <span><i class="fa-regular fa-clock"></i> 14:00 - 15:30</span>
                    </div>
                    <h4 class="visio_title">Briefing Pré-vol & Gestion des Incendies en Cabine</h4>
                    <p class="visio_description">Revue interactive des extincteurs Halon et procédures de détection de fumée dans les lavabos A320.</p>
                    <div class="visio_instructor">
                        <i class="fa-solid fa-user-tie"></i>
                        <span>Instructeur : Cap. Marc Dubois</span>
                    </div>
                </div>
                <div class="visio_card_actions">
                    <button class="btn_action btn_video btn_join_live" onclick="joinLiveSession('Briefing Pré-vol')">
                        <i class="fa-solid fa-headset"></i> Rejoindre la classe
                    </button>
                </div>
            </div>

            <!-- Carte 2 : Visioconférence AUJOURD'HUI (À venir) -->
            <div class="visio_card" data-status="today">
                <div class="visio_card_banner">
                    <img src="{{ asset('Elements/images/RENTRE 20_08_25 copie.jpg') }}" alt="Secourisme">
                    <span class="visio_badge urgent"><i class="fa-regular fa-clock"></i> Aujourd'hui, 17:00</span>
                    <span class="visio_category_tag medical">Secourisme</span>
                </div>
                <div class="visio_card_body">
                    <div class="visio_time_info">
                        <span><i class="fa-regular fa-calendar"></i> Aujourd'hui</span>
                        <span><i class="fa-regular fa-clock"></i> 17:00 - 18:30</span>
                    </div>
                    <h4 class="visio_title">Atelier Urgences Médicales & Kit Trousse Pharmacie</h4>
                    <p class="visio_description">Présentation détaillée de la First Aid Kit (FAK) et gestion des hypotensions de passagers en croisière.</p>
                    <div class="visio_instructor">
                        <i class="fa-solid fa-user-doctor"></i>
                        <span>Intervenant : Dr. Sophie Laurent</span>
                    </div>
                </div>
                <div class="visio_card_actions">
                    <button class="btn_action btn_pdf" onclick="setReminder('Atelier Urgences Médicales')">
                        <i class="fa-regular fa-bell"></i> Rappel
                    </button>
                    <button class="btn_action btn_video" onclick="joinLiveSession('Atelier Urgences Médicales')">
                        <i class="fa-solid fa-video"></i> Accéder au salon
                    </button>
                </div>
            </div>

            <!-- Carte 3 : Visioconférence À VENIR (Cette semaine) -->
            <div class="visio_card" data-status="upcoming">
                <div class="visio_card_banner">
                    <img src="{{ asset('Elements/images/RENTRE 20_08_25 copie.jpg') }}" alt="Anglais PNC">
                    <span class="visio_badge normal"><i class="fa-regular fa-calendar-days"></i> Dans 3 jours</span>
                    <span class="visio_category_tag english">Anglais ICAO</span>
                </div>
                <div class="visio_card_body">
                    <div class="visio_time_info">
                        <span><i class="fa-regular fa-calendar"></i> Vendredi 14 Nov</span>
                        <span><i class="fa-regular fa-clock"></i> 10:00 - 11:30</span>
                    </div>
                    <h4 class="visio_title">Roleplay : Service Premium & Passagers Perturbateurs</h4>
                    <p class="visio_description">Mise en situation orale en anglais pour la désescalade de conflits avec passagers indisciplinés (Unruly Passengers).</p>
                    <div class="visio_instructor">
                        <i class="fa-solid fa-language"></i>
                        <span>Instructeur : Sarah Jenkins</span>
                    </div>
                </div>
                <div class="visio_card_actions">
                    <button class="btn_action btn_pdf" onclick="downloadMaterials('Support_Anglais_PNC.pdf')">
                        <i class="fa-solid fa-file-arrow-down"></i> Support
                    </button>
                    <button class="btn_action btn_video" onclick="setReminder('Roleplay Anglais PNC')">
                        <i class="fa-regular fa-calendar-check"></i> Réserver
                    </button>
                </div>
            </div>

            <!-- Carte 4 : REPLAY Disponible -->
            <div class="visio_card" data-status="replay">
                <div class="visio_card_banner">
                    <img src="{{ asset('Elements/images/RENTRE 20_08_25 copie.jpg') }}" alt="Replay Factor Humain">
                    <span class="visio_badge replay"><i class="fa-solid fa-rotate-left"></i> Replay Disponible</span>
                    <span class="visio_category_tag crm">CRM / Facteurs Humains</span>
                </div>
                <div class="visio_card_body">
                    <div class="visio_time_info">
                        <span><i class="fa-regular fa-calendar"></i> Hier</span>
                        <span><i class="fa-solid fa-film"></i> 1h 24min</span>
                    </div>
                    <h4 class="visio_title">Coordination PNT/PNC en Décompression Rapide</h4>
                    <p class="visio_description">Enregistrement complet du séminaire interactif sur les signaux d'alerte cockpit et procédures d'urgence d'altitude.</p>
                    <div class="visio_instructor">
                        <i class="fa-solid fa-plane-lock"></i>
                        <span>Instructeur : Commandant K. Bamba</span>
                    </div>
                </div>
                <div class="visio_card_actions">
                    <button class="btn_action btn_video" onclick="openVideoModal('Replay : Coordination PNT/PNC')">
                        <i class="fa-solid fa-play"></i> Visionner Replay
                    </button>
                </div>
            </div>

        </div>
    </div>

    <!-- Modale Virtuelle / Replay (Identique aux sections précédentes) -->
    <div class="modal_video_overlay" id="visioModal">
        <div class="modal_content">
            <div class="modal_header">
                <h3><i class="fa-solid fa-video" style="color: var(--color-accent);"></i> Salon Virtuel PNC</h3>
                <button class="close_modal_btn" onclick="closeVisioModal()">&times;</button>
            </div>
            <div class="video_wrapper">
                <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="Classe Virtuelle" allowfullscreen></iframe>
            </div>
            <div class="modal_footer">
                <span id="modalVisioTitle">Session en direct</span>
                <button class="btn_action btn_pdf" onclick="closeVisioModal()">Quitter le salon</button>
            </div>
        </div>
    </div>

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
