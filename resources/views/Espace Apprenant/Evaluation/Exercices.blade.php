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
                <input type="search" placeholder="Rechercher un travail...">
            </div>
            <div class="notif">
                <a href="#" class="notification-icon">
                    <i class="fa-solid fa-bell"></i>
                    <span class="badge">3</span>
                </a>
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
                <h1>Suivi des Devoirs & Exercices PNC</h1>
                <p>Retrouvez l'ensemble de vos travaux pratiques et devoirs théoriques par module, consultez vos échéances et soumettez vos fichiers en ligne.</p>
            </div>
            <div class="badge_pnc">
                <i class="fa-solid fa-plane-departure"></i> Académie PNC
            </div>
        </div>

        <!-- Barre de filtrage par module et recherche -->
        <div class="filter_toolbar">
            <div class="course_search_box">
                <i class="fa-solid fa-magnifying-glass" style="color: var(--color-text-muted);"></i>
                <input type="text" id="homeworkSearchInput" placeholder="Filtrer par module ou titre...">
            </div>
            <div class="filter_categories">
                <button class="filter_btn active" data-filter="all">Tous</button>
                <button class="filter_btn" data-filter="PNC">PNC</button>
                <button class="filter_btn" data-filter="Anglais">Anglais</button>
                <button class="filter_btn" data-filter="Informatique">Informatique</button>
            </div>
        </div>

        <!-- Liste des Devoirs et Exercices -->
        <div class="homework_list" id="homeworkList">

            <!-- ===== MODULE PNC ===== -->
            <div class="homework_item" data-category="PNC">
                <div class="hw_type_icon devoir">
                    <i class="fa-solid fa-file-pen"></i>
                </div>
                <div class="hw_info_section">
                    <div class="hw_badges">
                        <span class="type_badge devoir">Devoir Noté</span>
                        <span class="category_tag">PNC</span>
                        <span class="deadline_badge urgent"><i class="fa-regular fa-clock"></i> Aujourd'hui, 23:59</span>
                    </div>
                    <h4 class="hw_title">Rapport d'analyse de simulation d'évacuation d'urgence</h4>
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

            <div class="homework_item" data-category="PNC">
                <div class="hw_type_icon exercice">
                    <i class="fa-solid fa-dumbbell"></i>
                </div>
                <div class="hw_info_section">
                    <div class="hw_badges">
                        <span class="type_badge exercice">Exercice Pratique</span>
                        <span class="category_tag">PNC</span>
                        <span class="deadline_badge warning"><i class="fa-regular fa-clock"></i> Demain, 18:00</span>
                    </div>
                    <h4 class="hw_title">Cas clinique : Utilisation du défibrillateur (DAE)</h4>
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

            <div class="homework_item" data-category="PNC">
                <div class="hw_type_icon devoir">
                    <i class="fa-solid fa-file-pen"></i>
                </div>
                <div class="hw_info_section">
                    <div class="hw_badges">
                        <span class="type_badge devoir">Devoir Noté</span>
                        <span class="category_tag">PNC</span>
                        <span class="deadline_badge normal"><i class="fa-regular fa-clock"></i> Dans 15 jours</span>
                    </div>
                    <h4 class="hw_title">Étude de cas : Gestion d'un service protocolaire Première Classe</h4>
                    <p>Élaborer le planning de service repas pour un vol long-courrier avec passagers officiels.</p>
                </div>
                <div class="hw_actions">
                    <button class="btn_action btn_pdf" onclick="downloadHwSubject('Etude_Cas_VIP.pdf')">
                        <i class="fa-solid fa-file-arrow-down"></i> Sujet
                    </button>
                    <button class="btn_action btn_video" onclick="openSubmitModal('Étude de cas Service VIP (Devoir)')">
                        <i class="fa-solid fa-upload"></i> Soumettre
                    </button>
                </div>
            </div>

            <div class="homework_item" data-category="PNC">
                <div class="hw_type_icon exercice">
                    <i class="fa-solid fa-dumbbell"></i>
                </div>
                <div class="hw_info_section">
                    <div class="hw_badges">
                        <span class="type_badge exercice">Exercice Pratique</span>
                        <span class="category_tag">PNC</span>
                        <span class="deadline_badge normal"><i class="fa-regular fa-clock"></i> Dans 12 jours</span>
                    </div>
                    <h4 class="hw_title">QCM de préparation aux facteurs humains en équipage (CRM)</h4>
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


            <!-- ===== MODULE ANGLAIS ===== -->
            <div class="homework_item" data-category="Anglais">
                <div class="hw_type_icon devoir">
                    <i class="fa-solid fa-file-pen"></i>
                </div>
                <div class="hw_info_section">
                    <div class="hw_badges">
                        <span class="type_badge devoir">Devoir Noté</span>
                        <span class="category_tag">Anglais</span>
                        <span class="deadline_badge normal"><i class="fa-regular fa-clock"></i> Dans 5 jours</span>
                    </div>
                    <h4 class="hw_title">Enregistrement des annonces de sécurité (Welcome Speech)</h4>
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

            <div class="homework_item" data-category="Anglais">
                <div class="hw_type_icon exercice">
                    <i class="fa-solid fa-dumbbell"></i>
                </div>
                <div class="hw_info_section">
                    <div class="hw_badges">
                        <span class="type_badge exercice">Exercice Pratique</span>
                        <span class="category_tag">Anglais</span>
                        <span class="deadline_badge normal"><i class="fa-regular fa-clock"></i> Dans 10 jours</span>
                    </div>
                    <h4 class="hw_title">Traduction et mise en situation : Commandes d'évacuation</h4>
                    <p>Exercice de phonétique et de mise en pratique des ordres d'urgence en cabine (Heads down, remain seated).</p>
                </div>
                <div class="hw_actions">
                    <button class="btn_action btn_pdf" onclick="downloadHwSubject('Exercice_Urgence_Anglais.pdf')">
                        <i class="fa-solid fa-file-arrow-down"></i> Sujet
                    </button>
                    <button class="btn_action btn_video" onclick="openSubmitModal('Traduction Commandes d\'urgence (Exercice)')">
                        <i class="fa-solid fa-upload"></i> Soumettre
                    </button>
                </div>
            </div>


            <!-- ===== MODULE INFORMATIQUE ===== -->
            <div class="homework_item" data-category="Informatique">
                <div class="hw_type_icon devoir">
                    <i class="fa-solid fa-file-pen"></i>
                </div>
                <div class="hw_info_section">
                    <div class="hw_badges">
                        <span class="type_badge devoir">Devoir Noté</span>
                        <span class="category_tag">Informatique</span>
                        <span class="deadline_badge normal"><i class="fa-regular fa-clock"></i> Dans 4 jours</span>
                    </div>
                    <h4 class="hw_title">Tableau de suivi des heures de vol et rotations</h4>
                    <p>Créer un classeur Excel intégrant des fonctions conditionnelles (SI, SOMME) pour calculer les indemnités de déplacement.</p>
                </div>
                <div class="hw_actions">
                    <button class="btn_action btn_pdf" onclick="downloadHwSubject('Sujet_Excel_Rotations.pdf')">
                        <i class="fa-solid fa-file-arrow-down"></i> Sujet
                    </button>
                    <button class="btn_action btn_video" onclick="openSubmitModal('Tableau Excel Suivi des rotations (Devoir)')">
                        <i class="fa-solid fa-upload"></i> Soumettre
                    </button>
                </div>
            </div>

            <div class="homework_item" data-category="Informatique">
                <div class="hw_type_icon exercice">
                    <i class="fa-solid fa-dumbbell"></i>
                </div>
                <div class="hw_info_section">
                    <div class="hw_badges">
                        <span class="type_badge exercice">Exercice Pratique</span>
                        <span class="category_tag">Informatique</span>
                        <span class="deadline_badge normal"><i class="fa-regular fa-clock"></i> Dans 8 jours</span>
                    </div>
                    <h4 class="hw_title">Mise en page d'un rapport d'incident de vol sous Word</h4>
                    <p>Appliquer les styles, en-têtes officiels et tableaux récapitulatifs pour produire un document administratif conforme.</p>
                </div>
                <div class="hw_actions">
                    <button class="btn_action btn_pdf" onclick="downloadHwSubject('Exercice_Word_Rapport.pdf')">
                        <i class="fa-solid fa-file-arrow-down"></i> Sujet
                    </button>
                    <button class="btn_action btn_video" onclick="openSubmitModal('Mise en page rapport Word (Exercice)')">
                        <i class="fa-solid fa-upload"></i> Soumettre
                    </button>
                </div>
            </div>

        </div>
    </div>

    <!-- Modale de Soumission de Devoir / Exercice -->
    <div class="modal_video_overlay" id="homeworkModal" style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.6); z-index: 1000; display: none;">
        <div class="modal_content" style="background: var(--color-bg-surface); width: 500px; margin: 80px auto; border-radius: var(--radius-md); overflow: hidden;">
            <div class="modal_header" style="display: flex; justify-content: space-between; align-items: center; padding: 16px 20px; border-bottom: 1px solid var(--color-border);">
                <h3 style="font-size: 1.1rem; color: var(--color-text-main);"><i class="fa-solid fa-cloud-arrow-up" style="color: var(--color-accent);"></i> Soumettre votre travail</h3>
                <button class="close_modal_btn" onclick="closeSubmitModal()" style="background: none; border: none; font-size: 1.5rem; cursor: pointer; color: var(--color-text-muted);">&times;</button>
            </div>
            <div style="padding: 24px; display: flex; flex-direction: column; gap: 16px;">
                <p id="modalHwTitle" style="font-weight: 600; color: var(--color-text-main); font-size: 1.05rem;"></p>

                <div style="border: 2px dashed var(--color-border); padding: 30px; text-align: center; border-radius: var(--radius-md); background: var(--color-bg-main);">
                    <i class="fa-solid fa-plane-departure" style="font-size: 2.2rem; color: var(--color-primary); margin-bottom: 10px; display: block;"></i>
                    <p style="font-size: 0.95rem; color: var(--color-text-muted);">Glissez votre fichier ici ou <label for="hwFileBrowse" style="color: var(--color-accent); cursor: pointer; font-weight: 600; text-decoration: underline;">parcourez vos documents</label></p>
                    <input type="file" id="hwFileBrowse" style="display: none;">
                </div>

                <textarea placeholder="Commentaire optionnel pour l'instructeur..." style="width: 100%; padding: 12px; border: 1px solid var(--color-border); border-radius: var(--radius-sm); outline: none; resize: none; height: 90px; font-family: inherit; font-size: 0.95rem; color: var(--color-text-main); background: var(--color-bg-main);"></textarea>
            </div>
            <div class="modal_footer" style="display: flex; justify-content: flex-end; gap: 10px; padding: 16px 20px; border-top: 1px solid var(--color-border);">
                <button class="btn_action btn_pdf" onclick="closeSubmitModal()">Annuler</button>
                <button class="btn_action btn_video" onclick="submitHomeworkAction()">Confirmer l'envoi</button>
            </div>
        </div>
    </div>

    <!-- Script de Filtrage par Module et Recherche -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const filterBtns = document.querySelectorAll('.filter_btn');
            const homeworkItems = document.querySelectorAll('.homework_item');
            const searchInput = document.getElementById('homeworkSearchInput');

            // 1. Filtrage par module (PNC, Anglais, Informatique)
            filterBtns.forEach(btn => {
                btn.addEventListener('click', () => {
                    filterBtns.forEach(b => b.classList.remove('active'));
                    btn.classList.add('active');

                    const filter = btn.getAttribute('data-filter');

                    homeworkItems.forEach(item => {
                        const category = item.getAttribute('data-category');
                        if (filter === 'all' || filter === category) {
                            item.style.display = 'flex';
                        } else {
                            item.style.display = 'none';
                        }
                    });
                });
            });

            // 2. Recherche en temps réel
            if (searchInput) {
                searchInput.addEventListener('input', () => {
                    const searchValue = searchInput.value.toLowerCase().trim();

                    homeworkItems.forEach(item => {
                        const titleText = item.querySelector('.hw_title').textContent.toLowerCase();
                        const moduleText = item.querySelector('.category_tag').textContent.toLowerCase();

                        if (titleText.includes(searchValue) || moduleText.includes(searchValue) || searchValue === '') {
                            item.style.display = 'flex';
                        } else {
                            item.style.display = 'none';
                        }
                    });
                });
            }
        });

        // 3. Gestion de la modale
        const modal = document.getElementById('homeworkModal');
        const modalTitle = document.getElementById('modalHwTitle');

        function openSubmitModal(homeworkTitle) {
            modalTitle.textContent = homeworkTitle;
            modal.style.display = 'block';
        }

        function closeSubmitModal() {
            modal.style.display = 'none';
        }

        function submitHomeworkAction() {
            alert("Travail soumis avec succès ! Votre instructeur va le recevoir.");
            closeSubmitModal();
        }

        // Fermeture en cliquant sur l'arrière-plan flouté
        window.addEventListener('click', (e) => {
            if (e.target === modal) {
                closeSubmitModal();
            }
        });
    </script>

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
