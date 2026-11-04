@extends('template-student')

@section('content')
<div class="contenu_dashboard">

    <!-- Top Dashboard Header -->
    <header class="top dashboard">
        <div class="title-section">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="24px" width="24px" fill="currentColor">
                <path d="M19,2H5C3.89,2,3,2.89,3,4V20C3,21.11,3.89,22,5,22H19C20.11,22,21,21.11,21,20V4C21,2.89,20.11,2,19,2M19,20H5V4H19V20M7,6H17V8H7V6M7,10H17V12H7V10M7,14H14V16H7V14Z"/>
            </svg>
            <h3>Devoirs et exercices</h3>
        </div>
        <div class="nav">
            <div class="search">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="text" id="hwSearchInput" placeholder="Rechercher un travail...">
            </div>
            <div class="notif">
                <i class="fa-regular fa-bell notification-icon"></i>
            </div>
            <div class="profile_student">
                <div class="image">
                    <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&q=80&w=250" alt="Avatar Étudiant">
                </div>
                <div class="name">
                    <p>Edmond Barou</p>
                    <p>PNC - 2e Année</p>
                </div>

            </div>
        </div>
    </header>

    <!-- Contenu de la page Devoirs et Exercices -->
    <div class="homework_container">

        <!-- Entête Thématique Aviation -->
        <div class="section_header">
            <div class="section_header_text">
                <h1>Suivi des Devoirs & Exercices</h1>
                <p>Retrouvez l'ensemble de vos travaux pratiques et devoirs théoriques, consultez vos échéances et soumettez vos fichiers en ligne.</p>
            </div>
            <div class="badge_pnc">
                <i class="fa-solid fa-plane-departure"></i> Spécialisation PNC
            </div>
        </div>

        <!-- Barre de filtrage par date et recherche -->
        <div class="filter_toolbar">
            <div class="course_search_box">
                <i class="fa-solid fa-filter" style="color: var(--color-text-muted);"></i>
                <input type="text" id="homeworkSearchBox" placeholder="Filtrer par module ou titre...">
            </div>
            <div class="filter_categories">
                <button class="filter_btn active" data-filter="all">Tous</button>
                <button class="filter_btn" data-filter="today">Aujourd'hui</button>
                <button class="filter_btn" data-filter="tomorrow">Demain</button>
                <button class="filter_btn" data-filter="week">Dans les 7 jours</button>
                <button class="filter_btn" data-filter="later">Plus tard</button>
            </div>
        </div>

        <!-- Liste des Devoirs et Exercices -->
        <div class="homework_list">
            <div class="homework_item" data-date="today" data-type="devoir">
                <div class="hw_type_icon devoir">
                    <i class="fa-solid fa-file-pen"></i>
                </div>
                <div class="hw_info_section">
                    <div class="hw_badges">
                        <span class="type_badge devoir">Devoir Noté</span>
                        <span class="category_tag">Sécurité & Évacuation A320</span>
                        <span class="deadline_badge urgent"><i class="fa-regular fa-clock"></i> Aujourd'hui, 23:59</span>
                    </div>
                    <h4>Rapport d'analyse de simulation d'évacuation d'urgence</h4>
                    <p>Rédiger un compte-rendu sur le timing d'ouverture des issues de secours et la gestion de la panique en cabine.</p>
                </div>
                <div class="hw_actions">
                    <button class="btn_action btn_pdf" onclick="downloadHwSubject('Sujet_Evacuation_A320.pdf')">
                        <i class="fa-solid fa-file-arrow-down"></i> Sujet
                    </button>
                    <button class="btn_action btn_video" onclick="openSubmitModal('Rapport d\'analyse d\'évacuation A320 (Devoir)')">
                        <i class="fa-solid fa-upload"></i> Soumettre
                    </button>
                </div>
            </div>

            <div class="homework_item" data-date="tomorrow" data-type="exercice">
                <div class="hw_type_icon exercice">
                    <i class="fa-solid fa-dumbbell"></i>
                </div>
                <div class="hw_info_section">
                    <div class="hw_badges">
                        <span class="type_badge exercice">Exercice Pratique</span>
                        <span class="category_tag">Secourisme Aéronautique</span>
                        <span class="deadline_badge warning"><i class="fa-regular fa-clock"></i> Demain, 18:00</span>
                    </div>
                    <h4>Cas clinique : Utilisation du défibrillateur (DAE)</h4>
                    <p>Répondre au questionnaire interactif sur la mise en œuvre des électrodes et les rythmes shockables en altitude.</p>
                </div>
                <div class="hw_actions">
                    <button class="btn_action btn_pdf" onclick="downloadHwSubject('Fiche_Exercice_DAE.pdf')">
                        <i class="fa-solid fa-file-arrow-down"></i> Sujet
                    </button>
                    <button class="btn_action btn_video" onclick="openSubmitModal('Cas clinique : DAE (Exercice)')">
                        <i class="fa-solid fa-upload"></i> Soumettre
                    </button>
                </div>
            </div>

            <!-- Élément 3 : Devoir (Noté) - Échéance dans 5 jours -->
            <div class="homework_item" data-date="week" data-type="devoir">
                <div class="hw_type_icon devoir">
                    <i class="fa-solid fa-file-pen"></i>
                </div>
                <div class="hw_info_section">
                    <div class="hw_badges">
                        <span class="type_badge devoir">Devoir Noté</span>
                        <span class="category_tag">Anglais Aéronautique</span>
                        <span class="deadline_badge normal"><i class="fa-regular fa-clock"></i> Dans 5 jours</span>
                    </div>
                    <h4>Enregistrement des annonces de sécurité (Welcome Speech)</h4>
                    <p>Soumettre le fichier audio en anglais standard ICAO avec la phraséologie réglementaire de démonstration des gilets.</p>
                </div>
                <div class="hw_actions">
                    <button class="btn_action btn_pdf" onclick="downloadHwSubject('consignes_audio_english.pdf')">
                        <i class="fa-solid fa-file-arrow-down"></i> Sujet
                    </button>
                    <button class="btn_action btn_video" onclick="openSubmitModal('Annonces de sécurité en Anglais (Devoir)')">
                        <i class="fa-solid fa-upload"></i> Soumettre
                    </button>
                </div>
            </div>

            <!-- Élément 4 : Exercice (Pratique) - Échéance Plus tard -->
            <div class="homework_item" data-date="later" data-type="exercice">
                <div class="hw_type_icon exercice">
                    <i class="fa-solid fa-dumbbell"></i>
                </div>
                <div class="hw_info_section">
                    <div class="hw_badges">
                        <span class="type_badge exercice">Exercice Pratique</span>
                        <span class="category_tag">Réglementation & CRM</span>
                        <span class="deadline_badge normal"><i class="fa-regular fa-clock"></i> Dans 12 jours</span>
                    </div>
                    <h4>QCM de préparation aux facteurs humains en équipage</h4>
                    <p>Série d'exercices d'entraînement sur la communication inter-équipage PNT/PNC en situation de stress.</p>
                </div>
                <div class="hw_actions">
                    <button class="btn_action btn_pdf" onclick="downloadHwSubject('QCM_Facteurs_Humains.pdf')">
                        <i class="fa-solid fa-file-arrow-down"></i> Sujet
                    </button>
                    <button class="btn_action btn_video" onclick="openSubmitModal('QCM Facteurs Humains (Exercice)')">
                        <i class="fa-solid fa-upload"></i> Soumettre
                    </button>
                </div>
            </div>

        </div>
    </div>

    <!-- Modale de Soumission de Devoir / Exercice -->
    <div class="modal_video_overlay" id="homeworkModal">
        <div class="modal_content">
            <div class="modal_header">
                <h3><i class="fa-solid fa-cloud-arrow-up" style="color: var(--color-accent);"></i> Soumettre votre travail</h3>
                <button class="close_modal_btn" onclick="closeSubmitModal()">&times;</button>
            </div>
            <div style="padding: 24px; display: flex; flex-direction: column; gap: 16px; background: var(--color-bg-surface);">
                <p id="modalHwTitle" style="font-weight: 600; color: var(--color-text-main); font-size: 1.05rem;"></p>

                <div style="border: 2px dashed var(--color-border); padding: 30px; text-align: center; border-radius: var(--radius-md); background: var(--color-bg-main);">
                    <i class="fa-solid fa-plane-departure" style="font-size: 2.2rem; color: var(--color-primary); margin-bottom: 10px; display: block;"></i>
                    <p style="font-size: 0.95rem; color: var(--color-text-muted);"> <label for="hwFileBrowse" style="color: var(--color-accent); cursor: pointer; font-weight: 600; text-decoration: underline;">Cliquez-ici pour parcourir vos documents</label></p>
                    <input type="file" id="hwFileBrowse" style="display: none;">
                </div>

                <textarea placeholder="Commentaire optionnel pour l'instructeur..." style="width: 100%; padding: 12px; border: 1px solid var(--color-border); border-radius: var(--radius-sm); outline: none; resize: none; height: 90px; font-family: inherit; font-size: 0.95rem; color: var(--color-text-main);"></textarea>
            </div>
            <div class="modal_footer">
                <button class="btn_action btn_pdf" onclick="closeSubmitModal()">Annuler</button>
                <button class="btn_action btn_video" onclick="submitHomeworkAction()">Confirmer l'envoi</button>
            </div>
        </div>
    </div>

    <!-- Footer Solidaire -->
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
