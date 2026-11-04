@extends('template-student')

@section('content')
    <div class="contenu_dashboard">
        <!-- Top Dashboard Header -->
        <header class="top dashboard">
            <div class="title-section">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="24px" width="24px" fill="#e3e3e3">
                    <path d="M13,9V3h8V9H13ZM3,13V3h8V13H3Zm10,8V11h8V21H13ZM3,21V15h8v6H3ZM5,11H9V5H5v6Zm10,8h4V13H15v6ZM15,7h4V5H15V7ZM5,19H9V17H5v2Zm4-8Zm6-4Zm0,6ZM9,17Z"/>
                </svg>
                <h3>Dashboard</h3>
            </div>
            <div class="nav">
                <div class="search">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <input type="search" placeholder="Recherche rapide...">
                </div>
                <div class="notif">
                    <a href="#" class="notification-icon">
                        <span>
                            <i class="fa-solid fa-bell"></i>
                            <span class="badge">3</span>
                        </span>
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

        <!-- Grille principale du contenu -->
        <section class="main_content_dashboard_student">
            <!-- ITEM 1 : Salutations -->
            <div class="greetings">
                <div class="greetings_text">
                    <h2>Bienvenue, 👋</h2>
                    <p>Edmond Barou !</p>
                    <span>Restez informé de votre parcours scolaire</span>
                </div>
                <div class="greetings_image">
                    <img src="{{ asset('Elements/images/Air hostess-rafiki.png') }}" alt="PNC Illustration">
                </div>
            </div>

            <!-- ITEM 2 : Statistiques -->
            <div class="item2">
                <div class="stat">
                    <div class="icon"><i class="fa-solid fa-clock"></i></div>
                    <div class="info_stat">
                        <p>Temps d'Étude</p>
                        <p class="stat_num">3j 13h</p>
                        <p class="stat_period">Cette semaine</p>
                    </div>
                </div>
                <div class="stat">
                    <div class="icon"><i class="fa-solid fa-square-check"></i></div>
                    <div class="info_stat">
                        <p>Devoirs Complétés</p>
                        <p class="stat_num">7</p>
                        <p class="stat_period">Ce trimestre</p>
                    </div>
                </div>
                <div class="stat">
                    <div class="icon"><i class="fa-solid fa-user-check"></i></div>
                    <div class="info_stat">
                        <p>Présence</p>
                        <p class="stat_num">92%</p>
                        <p class="stat_period">Ce trimestre</p>
                    </div>
                </div>
                <div class="stat">
                    <div class="icon"><i class="fa-solid fa-award"></i></div>
                    <div class="info_stat">
                        <p>Moyenne Générale</p>
                        <p class="stat_num">16.5 / 20</p>
                        <p class="stat_period">Trimestre en cours</p>
                    </div>
                </div>
            </div>

            <!-- ITEM 3 : Formations et cours (Liste) -->
            <div class="item3">
                <div class="item_header">
                    <h3><i class="fa-solid fa-book-open"></i> Formations et cours récents</h3>
                    <a href="" class="see_more">Voir plus <i class="fa-solid fa-arrow-right"></i></a>
                </div>
                <div class="courses_list">
                    <!-- Support Vidéo avec déclencheur de modale -->
                    <div class="course_item">
                        <div class="course_icon video"><i class="fa-solid fa-circle-play"></i></div>
                        <div class="course_info">
                            <h4>Procédures de Sécurité & Évacuation cabine</h4>
                            <p>Gestes d'urgence, ouverture des portes et gestion du stress en vol.</p>
                            <span class="meta"><i class="fa-regular fa-clock"></i> 45 min • Module Sécurité</span>
                        </div>
                        <button class="btn_view_course" onclick="openVideoModal('Procédures de Sécurité & Évacuation cabine', 'https://www.youtube.com/embed/dQw4w9WgXcQ')">
                            Visionner
                        </button>
                    </div>

                    <!-- Support Document PDF avec téléchargement -->
                    <div class="course_item">
                        <div class="course_icon pdf"><i class="fa-solid fa-file-pdf"></i></div>
                        <div class="course_info">
                            <h4>Protocoles de Service en Cabine Premium</h4>
                            <p>Guide complet des normes de service trolley et prise en charge des passagers VIP.</p>
                            <span class="meta"><i class="fa-regular fa-file"></i> PDF • 3.4 Mo</span>
                        </div>
                        <button class="btn_download_course" onclick="downloadPdf('Protocoles_Service_Premium.pdf')">
                            Télécharger
                        </button>
                    </div>
                </div>
            </div>

            <!-- ITEM 4 : Prochaines Visios -->
            <div class="item4">
                <div class="item_header">
                    <h3><i class="fa-solid fa-tower-broadcast"></i> Prochaines Visios</h3>
                    <a href="#" class="see_more">Voir plus <i class="fa-solid fa-arrow-right"></i></a>
                </div>
                <div class="visio_list">
                    <div class="visio_item">
                        <div class="visio_date">
                            <span class="day">14</span>
                            <span class="month">SEP</span>
                        </div>
                        <div class="visio_info">
                            <h4>Briefing Secourisme Aérien</h4>
                            <p><i class="fa-regular fa-clock"></i> 10:00 - 11:30</p>
                        </div>
                        <span class="visio_badge urgent">Aujourd'hui</span>
                    </div>

                    <div class="visio_item">
                        <div class="visio_date">
                            <span class="day">16</span>
                            <span class="month">SEP</span>
                        </div>
                        <div class="visio_info">
                            <h4>Gestion des Passagers VIP</h4>
                            <p><i class="fa-regular fa-clock"></i> 14:00 - 15:30</p>
                        </div>
                        <span class="visio_badge">Bientôt</span>
                    </div>

                    <div class="visio_item">
                        <div class="visio_date">
                            <span class="day">18</span>
                            <span class="month">SEP</span>
                        </div>
                        <div class="visio_info">
                            <h4>Réglementation DGR & Fret</h4>
                            <p><i class="fa-regular fa-clock"></i> 09:00 - 11:00</p>
                        </div>
                        <span class="visio_badge">Planifiée</span>
                    </div>
                </div>
            </div>

            <!-- ITEM 5 : Calendrier Dynamique -->
            <div class="item5">
                <div class="item_header">
                    <h3><i class="fa-solid fa-calendar-days"></i> Calendrier Pédagogique</h3>
                    <a href="#" class="see_more">Voir plus <i class="fa-solid fa-arrow-right"></i></a>
                </div>
                <div class="mini_calendar">
                    <div class="calendar_header">
                        <button id="prevMonth"><i class="fa-solid fa-chevron-left"></i></button>
                        <h4 id="calendarMonth">Septembre 2026</h4>
                        <button id="nextMonth"><i class="fa-solid fa-chevron-right"></i></button>
                    </div>
                    <div class="calendar_weekdays">
                        <span>Lun</span><span>Mar</span><span>Mer</span><span>Jeu</span><span>Ven</span><span>Sam</span><span>Dim</span>
                    </div>
                    <div class="calendar_days" id="calendarDays">
                        <!-- Généré en JS -->
                    </div>
                </div>
            </div>

            <!-- ITEM 6 : Annonces et Événements -->
            <div class="item6">
                <div class="item_header">
                    <h3><i class="fa-solid fa-bullhorn"></i> Annonces & Événements</h3>
                    <a href="#" class="see_more">Voir plus <i class="fa-solid fa-arrow-right"></i></a>
                </div>
                <div class="announcement_list">
                    <div class="announcement_card highlight">
                        <i class="fa-solid fa-triangle-exclamation icon_announcement"></i>
                        <div class="announcement_txt">
                            <p><strong>Rappel Visite Médicale :</strong> Session obligatoire pour les PNC le 20 Septembre.</p>
                            <span>Publié il y a 2 heures</span>
                        </div>
                    </div>
                    <div class="announcement_card">
                        <i class="fa-solid fa-calendar-star icon_event"></i>
                        <div class="announcement_txt">
                            <p><strong>Journée Portes Ouvertes :</strong> Simulation de vol ouverte aux étudiants.</p>
                            <span>Prévu ce vendredi</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ITEM 7 : Devoirs et exercices à soumettre -->
            <div class="item7">
                <div class="item_header">
                    <h3><i class="fa-solid fa-file-pen"></i> Devoirs à rendre</h3>
                    <a href="#" class="see_more">Voir plus <i class="fa-solid fa-arrow-right"></i></a>
                </div>
                <div class="assignment_list">
                    <div class="assignment_item">
                        <div class="assignment_meta">
                            <h4>Rapport de Sécurité Cabine</h4>
                            <span class="deadline urgent"><i class="fa-regular fa-clock"></i> Dans 2 jours</span>
                        </div>
                        <p class="subject">Matière : Sécurité & Urgence</p>
                        <a href="#" class="btn_submit_hw"><i class="fa-solid fa-upload"></i> Soumettre</a>
                    </div>
                    <div class="assignment_item">
                        <div class="assignment_meta">
                            <h4>Étude de Cas Protocole VIP</h4>
                            <span class="deadline"><i class="fa-regular fa-clock"></i> Dans 5 jours</span>
                        </div>
                        <p class="subject">Matière : Service à bord</p>
                        <a href="#" class="btn_submit_hw"><i class="fa-solid fa-upload"></i> Soumettre</a>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Modale Vidéo -->
    <div class="modal_video_overlay" id="videoModal">
        <div class="modal_content">
            <div class="modal_header">
                <h3 id="modalCourseTitle"><i class="fa-solid fa-circle-play"></i> Titre du Cours</h3>
                <button class="close_modal_btn" onclick="closeVideoModal()"><i class="fa-solid fa-xmark"></i></button>
            </div>
            <div class="video_wrapper">
                <iframe id="modalVideoFrame" src="" allowfullscreen></iframe>
            </div>
        </div>
    </div>
@endsection
