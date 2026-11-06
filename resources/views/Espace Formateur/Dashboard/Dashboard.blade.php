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
            <div class="stat">
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
            <div class="stat alert">
                <div class="top_stat">
                    <h3>Devoirs en attente</h3>
                    <i class="fa-solid fa-users"></i>
                </div>
                <div class="main_stat">
                    <div class="chiffre">14</div>
                    <div class="description">Action requise</div>
                </div>
                <div class="bottom_stat">
                    <p><span>8 copies reçues</span> il y a moins de 24h</p>
                </div>
            </div>
            <div class="stat">
                <div class="top_stat">
                    <h3>Prochaine séance</h3>
                    <i class="fa-solid fa-users"></i>
                </div>
                <div class="main_stat">
                    <div class="chiffre">10H15</div>
                    <div class="description">Fret Aérien</div>
                </div>
                <div class="bottom_stat"></div>
            </div>
            <div class="stat">
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

        </div>
    </div>
@endsection
