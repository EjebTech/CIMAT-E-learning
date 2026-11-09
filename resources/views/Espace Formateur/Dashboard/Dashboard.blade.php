@extends('template-teacher')
@section('content-teacher')
    <div class="dashboard_teacher">
        <header class="top_dashboard_teacher">
            <div class="left">
                <div class="search">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <input type="search" placeholder="Recherche un elève, un cours, un devoir...">
                </div>
            </div>
            <div class="right">
                <div class="date_header">
                    <p>Jeudi, 12 Novembre 2026 - 9h27</p>
                </div>
                <div class="notif">
                    <a href="#" class="notification-icon">
                        <i class="fa-regular fa-bell"></i>
                        <span class="badge">3</span>
                    </a>
                </div>
                <div class="profile_teacher">
                    <a href="" class="profile_icon">
                        <i class="fa-regular fa-user"></i>
                    </a>
                </div>
            </div>
        </header>

        <div class="banner_welcome">
            <div class="banner_left">
                <div class="session_ac">
                    <span>SESSION ACADEMIQUE  2026-2027</span>
                </div>
                <h1>Bonjour, Prof. Edmond Barou</h1>
                <p>Votre journée comprend 2 séances et 14 devoirs en attente d'évaluation.</p>
            </div>
            <div class="banner_right">
                <div class="icon_visio">
                    <i class="fa-solid fa-video"></i>
                    <span class="badge"></span>
                </div>
                <div class="description">
                    <p class="time">Dans 25 minutes (10H15)</p>
                    <p class="class_name">PNC 1ère année </p>
                    <p class="location">Salle PNC . 9 élèves attendus</p>
                </div>
            </div>
        </div>
        <div class="statistics">
            <div class="stat1">
                <div class="top_stat">
                    <h3>Effectifs du groupe</h3>
                    <i class="fa-solid fa-users"></i>
                </div>
                <div class="main_stat">
                    <div class="chiffre">17</div>
                    <div class="description">élèves inscrits</div>
                </div>
                <div class="bottom_stat"></div>
            </div>
            <div class="stat2">
                <div class="top_stat">
                    <h3>Devoirs en attente</h3>
                    <i class="fa-solid fa-file-circle-exclamation"></i>
                </div>
                <div class="main_stat">
                    <div class="chiffre">14</div>
                    <div class="description">Action requise</div>
                </div>
                <div class="bottom_stat">
                    <p><span>8 copies reçues</span> il y a moins de 24h</p>
                </div>
            </div>
            <div class="stat3">
                <div class="top_stat">
                    <h3>Prochaine séance</h3>
                    <i class="fa-solid fa-clock"></i>
                </div>
                <div class="main_stat">
                    <div class="chiffre">10H15</div>
                    <div class="description">Service à Bord & Protocoles VIP</div>
                </div>
                <div class="bottom_stat"></div>
            </div>
            {{-- <div class="stat4">
                <div class="top_stat">
                    <h3>Effectifs du groupe</h3>
                    <i class="fa-solid fa-users"></i>
                </div>
                <div class="main_stat">
                    <div class="chiffre">17</div>
                    <div class="description">élèves inscrits</div>
                </div>
                <div class="bottom_stat"></div>
            </div> --}}
        </div>
        <div class="list_groups">
            <div class="top">
                <h2>Groupes sous responsabilité</h2>
                <p>Performances collectives et gestion des devoirs</p>
            </div>
            <div class="groups">
                <div class="group">
                    <div class="group_name">
                        <h3>FRET AÉRIEN</h3>
                    </div>
                    <div class="stat_group">
                        <div class="number">
                            <p>Élèves</p>
                            <p>20</p>
                        </div>
                        <div class="average">
                            <p>Moyenne</p>
                            <p>14.8/20</p>
                        </div>
                        <div class="devoir">
                            <p>En attente</p>
                            <p>4 devoirs</p>
                        </div>
                    </div>
                    <div>
                        <button>Voir la classe</button>
                    </div>
                </div>
                <div class="group">
                    <div class="group_name">
                        <h3>PNC</h3>
                    </div>
                    <div class="stat_group">
                        <div class="number">
                            <p>Élèves</p>
                            <p>20</p>
                        </div>
                        <div class="average">
                            <p>Moyenne</p>
                            <p>14.8/20</p>
                        </div>
                        <div class="devoir">
                            <p>En attente</p>
                            <p>4 devoirs</p>
                        </div>
                    </div>
                    <div>
                        <button>Voir la classe</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="dashboard_panels">
            <section class="dashboard_panel corrections_panel" aria-labelledby="corrections-title">
                <div class="dashboard_panel-header">
                    <div>
                        <h2 id="corrections-title">Copies &amp; Projets Récents <span class="panel_badge panel_badge-alert">14 à évaluer</span></h2>
                        <p>Dernières soumissions étudiantes nécessitant vos retours pédagogiques</p>
                    </div>
                    <div class="panel_controls">
                        <label class="visually_hidden" for="corrections-group">Filtrer par groupe</label>
                        <select id="corrections-group" aria-label="Filtrer les copies par groupe">
                            <option>Tous les groupes</option>
                            <option>Fret Aérien</option>
                            <option>PNC-1ère année</option>
                        </select>

                    </div>
                </div>

                <div class="review_list">
                    <article class="review_row">
                        <span class="student_avatar avatar-blue" aria-hidden="true">CL</span>
                        <div class="review_student">
                            <div class="student_identity"><strong>Camille Laurent</strong></div>
                            <a href="{{ route('Teacher.resources') }}"><i class="fa-regular fa-file-lines" aria-hidden="true"></i> Exercice pratique : accueil et embarquement des passagers</a>
                        </div>
                        <div class="review_action">
                            <span class="panel_badge panel_badge-alert">À corriger</span>
                            <small>Remis il y a 2h</small>
                        </div>
                        <a class="primary_button" href="{{ route('Teacher.evaluations') }}"><i class="fa-solid fa-pen-to-square" aria-hidden="true"></i> Noter &amp; Commenter</a>
                    </article>
                    <article class="review_row">
                        <span class="student_avatar avatar-green" aria-hidden="true">MD</span>
                        <div class="review_student">
                            <div class="student_identity"><strong>Maxime Dubois</strong></div>
                            <a href="{{ route('Teacher.resources') }}"><i class="fa-regular fa-file-lines" aria-hidden="true"></i> Étude de cas : gestion d'un passager indiscipliné</a>
                        </div>
                        <div class="review_action">
                            <span class="panel_badge panel_badge-alert">À corriger</span>
                            <small>Remis il y a 4h</small>
                        </div>
                        <a class="primary_button" href="{{ route('Teacher.evaluations') }}"><i class="fa-solid fa-pen-to-square" aria-hidden="true"></i> Noter &amp; Commenter</a>
                    </article>
                    <article class="review_row">
                        <span class="student_avatar avatar-sky" aria-hidden="true">SB</span>
                        <div class="review_student">
                            <div class="student_identity"><strong>Sarah Benali</strong></div>
                            <a href="{{ route('Teacher.resources') }}"><i class="fa-regular fa-file-lines" aria-hidden="true"></i> Quiz : consignes de sécurité et équipements de cabine</a>
                        </div>
                        <div class="review_action">
                            <span class="panel_badge panel_badge-alert">À corriger</span>
                            <small>Hier, 19:42</small>
                        </div>
                        <a class="primary_button" href="{{ route('Teacher.evaluations') }}"><i class="fa-solid fa-pen-to-square" aria-hidden="true"></i> Noter &amp; Commenter</a>
                    </article>
                    <article class="review_row">
                        <span class="student_avatar avatar-gray" aria-hidden="true">TG</span>
                        <div class="review_student">
                            <div class="student_identity"><strong>Thomas Garnier</strong></div>
                            <a href="{{ route('Teacher.resources') }}"><i class="fa-regular fa-circle-check" aria-hidden="true"></i> Mise en situation : annonce cabine et service à bord</a>
                        </div>
                        <div class="review_action">
                            <span class="panel_badge panel_badge-success">17.5 / 20</span>
                            <small>Noté ce matin</small>
                        </div>
                        <a class="secondary_button" href="{{ route('Teacher.evaluations') }}"><i class="fa-regular fa-eye" aria-hidden="true"></i> Réviser</a>
                    </article>
                </div>
                <a class="panel_footer-link" href="{{ route('Teacher.evaluations') }}">Ouvrir l'atelier de correction global (11 restants) <i class="fa-solid fa-chevron-right" aria-hidden="true"></i></a>
            </section>

            <section class="dashboard_panel schedule_panel" aria-labelledby="schedule-title">
                <div class="dashboard_panel-header compact_header">
                    <h2 id="schedule-title"><i class="fa-regular fa-calendar-days" aria-hidden="true"></i> Planning de la journée</h2>
                    <span class="panel_badge">24 Mars</span>
                </div>
                <ol class="schedule_list">
                    <li class="schedule_item active">
                        <div class="schedule_time"><span>10:15 – 11:45</span><span class="panel_badge panel_badge-alert">Imminent</span></div>
                        <h3>Procédures de sécurité et évacuation</h3>
                        <p>Groupe PNC</p>
                        <div class="schedule_meta"><a href="{{ route('Teacher.videoconference') }}">Rejoindre <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a></div>
                    </li>
                    <li class="schedule_item">
                        <div class="schedule_time"><span>14:00 – 16:00</span><span>Présentiel</span></div>
                        <h3>Service à bord et relation passager</h3>
                        <p>Groupe PNC</p>
                        <div class="schedule_meta"><a href="{{ route('Teacher.groups') }}">Fiche séance</a></div>
                    </li>
                    <li class="schedule_item">
                        <div class="schedule_time"><span>16:30 – 17:30</span><span class="panel_badge">Conseil</span></div>
                        <h3>Premiers secours en milieu aéronautique</h3>
                        <p>Groupe PNC</p>
                    </li>
                </ol>
                <a class="calendar_button" href="{{ route('Teacher.groups') }}"><i class="fa-solid fa-table-cells-large" aria-hidden="true"></i> Consulter le calendrier complet</a>
            </section>

            <section class="dashboard_panel resources_panel" aria-labelledby="resources-title">
                <div class="dashboard_panel-header">
                    <div>
                        <h2 id="resources-title">Ressources &amp; Supports de Cours</h2>
                        <p>Derniers supports diffusés aux étudiants et replays enregistrés</p>
                    </div>
                    <a class="secondary_button" href="{{ route('Teacher.resources') }}"><i class="fa-regular fa-file-lines" aria-hidden="true"></i> Ajouter support</a>
                </div>
                <div class="resource_list">
                    <article class="resource_item">
                        <span class="resource_icon resource_icon-pdf"><i class="fa-regular fa-file-pdf" aria-hidden="true"></i></span>
                        <div class="resource_content">
                            <div class="resource_meta"><span class="panel_badge">PDF · 4.2 Mo</span><span><i class="fa-solid fa-download" aria-hidden="true"></i> 28 télécharg.</span></div>
                                <h3>Guide des procédures de sécurité cabine</h3>
                                <p>Distribué au groupe PNC · Procédures d'urgence</p>
                            <div class="resource_actions"><a href="{{ route('Teacher.resources') }}"><i class="fa-regular fa-eye" aria-hidden="true"></i> Consulter</a></div>
                        </div>
                    </article>
                    <article class="resource_item">
                        <span class="resource_icon resource_icon-video"><i class="fa-regular fa-circle-play" aria-hidden="true"></i></span>
                        <div class="resource_content">
                            <div class="resource_meta"><span class="panel_badge">Replay · 45 min</span><span><i class="fa-regular fa-eye" aria-hidden="true"></i> 19 vues</span></div>
                            <h3>Replay : annonce de sécurité et démonstration</h3>
                            <p>Formation PNC · Séquence de consignes passagers</p>
                            <div class="resource_actions"><a href="{{ route('Teacher.videoconference') }}"><i class="fa-solid fa-play" aria-hidden="true"></i> Visionner</a></div>
                        </div>
                    </article>
                </div>
            </section>

        </div>
        <footer class="teacher_footer">
            <p>&copy; {{ date('Y') }} <a href="{{ route('Teacher.dashboard') }}">Groupe Komptech Cimat</a>. Tous droits réservés.</p>
            <div class="footer_socials">
                <a href="#" aria-label="Facebook" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-facebook-f" aria-hidden="true"></i></a>
                <a href="#" aria-label="LinkedIn" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-linkedin-in" aria-hidden="true"></i></a>
                <a href="#" aria-label="Instagram" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-instagram" aria-hidden="true"></i></a>
            </div>
        </footer>

    </div>
@endsection
