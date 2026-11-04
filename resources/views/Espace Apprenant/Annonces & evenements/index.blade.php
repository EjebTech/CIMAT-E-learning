@extends('template-student')

@section('content')
<div class="contenu_dashboard student_announcements_page">
    <header class="top dashboard">
        <div class="title-section">
            <i class="fa-solid fa-bullhorn"></i>
            <h3>Annonces & événements</h3>
        </div>
        <div class="nav">
            <div class="search">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="search" placeholder="Rechercher une annonce...">
            </div>
            <div class="notif">
                <a href="#" class="notification-icon">
                    <i class="fa-solid fa-bell"></i>
                    <span class="badge">3</span>
                </a>
            </div>
            <div class="profile_student">
                <div class="image"><img src="/Elements/images/OIP-2658464322.jpg" alt="Photo de profil"></div>
                <div class="name"><p>Edmond Barou</p><p>PNC - 2e Année</p></div>
            </div>
        </div>
    </header>

    <main class="announcements_content">
        <section class="section_header announcements_banner">
            <div class="section_header_text">
                <h1>Annonces & Événements PNC</h1>
                <p>Retrouvez les dernières informations académiques, les activités à venir et les événements importants de votre académie.</p>
            </div>
            <div class="badge_pnc"><i class="fa-solid fa-plane-departure"></i> Académie PNC</div>
        </section>

        <section class="announcement_toolbar">
            <div>
                <p class="results_eyebrow">Centre d'informations</p>
                <h1>À ne pas manquer</h1>
            </div>
            <div class="announcement_filters" aria-label="Filtres des annonces">
                <button class="announcement_filter active" type="button">Toutes</button>
                <button class="announcement_filter" type="button">Urgent</button>
                <button class="announcement_filter" type="button">Académique</button>
                <button class="announcement_filter" type="button">Événements</button>
            </div>
        </section>

        <section class="announcements_layout">
            <div class="announcements_feed">
                <article class="announcement_featured">
                    <div class="announcement_featured_image">
                        <img src="/Elements/images/Air%20hostess-rafiki.png" alt="Information académique">
                    </div>
                    <div class="announcement_featured_body">
                        <div class="announcement_labels">
                            <span class="announcement_label urgent"><i class="fa-solid fa-circle-exclamation"></i> Urgent</span>
                            <span>Publié aujourd'hui</span>
                        </div>
                        <h2>Session de rattrapage de sécurité cabine</h2>
                        <p>Une session de rattrapage est organisée vendredi prochain pour les apprenants ayant un accompagnement à effectuer sur les procédures d'évacuation.</p>
                        <div class="announcement_meta">
                            <span><i class="fa-solid fa-calendar-day"></i> Vendredi 13 novembre</span>
                            <span><i class="fa-solid fa-clock"></i> 14h00 - 16h00</span>
                            <span><i class="fa-solid fa-location-dot"></i> Salle simulateur 2</span>
                        </div>
                        <a href="#" class="announcement_action">Voir les détails <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </article>

                <article class="announcement_card_item">
                    <div class="announcement_date"><strong>08</strong><span>NOV</span></div>
                    <div class="announcement_card_content">
                        <div class="announcement_labels"><span class="announcement_label academic">Académique</span><span>Il y a 2 heures</span></div>
                        <h2>Calendrier des évaluations du deuxième trimestre</h2>
                        <p>Les dates des devoirs, exercices pratiques et examens de fin de trimestre sont maintenant disponibles.</p>
                    </div>
                    <a href="#" class="announcement_open" aria-label="Ouvrir l'annonce"><i class="fa-solid fa-arrow-right"></i></a>
                </article>

                <article class="announcement_card_item">
                    <div class="announcement_date"><strong>12</strong><span>NOV</span></div>
                    <div class="announcement_card_content">
                        <div class="announcement_labels"><span class="announcement_label event">Événement</span><span>Hier</span></div>
                        <h2>Journée portes ouvertes de l'académie PNC</h2>
                        <p>Découvrez les simulateurs, rencontrez les formateurs et assistez à une démonstration de procédures cabine.</p>
                    </div>
                    <a href="#" class="announcement_open" aria-label="Ouvrir l'événement"><i class="fa-solid fa-arrow-right"></i></a>
                </article>

                <article class="announcement_card_item">
                    <div class="announcement_date"><strong>15</strong><span>NOV</span></div>
                    <div class="announcement_card_content">
                        <div class="announcement_labels"><span class="announcement_label academic">Académique</span><span>Il y a 3 jours</span></div>
                        <h2>Nouvelle ressource disponible : anglais technique</h2>
                        <p>Un support audiovisuel sur la communication standardisée avec l'équipage a été ajouté à votre espace.</p>
                    </div>
                    <a href="#" class="announcement_open" aria-label="Ouvrir l'annonce"><i class="fa-solid fa-arrow-right"></i></a>
                </article>
            </div>

            <aside class="events_sidebar">
                <article class="events_calendar">
                    <div class="events_side_header"><h2>Novembre 2026</h2><i class="fa-solid fa-calendar-days"></i></div>
                    <div class="mini_calendar">
                        <span>L</span><span>M</span><span>M</span><span>J</span><span>V</span><span>S</span><span>D</span>
                        <span class="muted">26</span><span class="muted">27</span><span class="muted">28</span><span class="muted">29</span><span class="muted">30</span><span>1</span><span>2</span>
                        <span>3</span><span>4</span><span>5</span><span>6</span><span>7</span><span>8</span><span>9</span>
                        <span>10</span><span>11</span><span class="event_day">12</span><span>13</span><span>14</span><span>15</span><span>16</span>
                        <span>17</span><span>18</span><span>19</span><span class="today">20</span><span>21</span><span>22</span><span>23</span>
                        <span>24</span><span>25</span><span>26</span><span>27</span><span>28</span><span>29</span><span>30</span>
                    </div>
                </article>

                <article class="upcoming_events">
                    <div class="events_side_header"><h2>Prochains événements</h2><span>3</span></div>
                    <div class="upcoming_event"><div class="upcoming_time"><strong>12</strong><span>NOV</span></div><div><h3>Portes ouvertes</h3><p>09h00 • Campus principal</p></div></div>
                    <div class="upcoming_event"><div class="upcoming_time"><strong>13</strong><span>NOV</span></div><div><h3>Rattrapage sécurité</h3><p>14h00 • Salle simulateur 2</p></div></div>
                    <div class="upcoming_event"><div class="upcoming_time"><strong>20</strong><span>NOV</span></div><div><h3>Atelier anglais PNC</h3><p>10h30 • Salle polyvalente</p></div></div>
                </article>
            </aside>
        </section>
    </main>

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
