<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Administration') - CIMAT E-learning</title>
    <link rel="stylesheet" href="{{ asset('Elements/style_admin.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Familjen+Grotesk:ital,wght@0,400..700;1,400..700&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container admin" id="adminContainer">
        <!-- Sidebar Administrateur : Modèle distinct et moderne -->
        <nav class="menu_section" id="menuSection">
            <div class="top admin_top_card">
                <div class="logo_presentation">
                    <img src="{{ asset('Elements/images/logo.png') }}" alt="Logo CIMAT">
                    {{-- <div class="brand_text">
                        <small>ESPACE ADMINISTRATEUR</small>
                    </div> --}}
                </div>
                <div>
                    <div class="brand_text">
                        <p>ESPACE ADMINISTRATEUR</p>
                    </div>
                    <button class="open_close" id="toggleBtn" type="button" aria-label="Réduire ou agrandir le menu">
                        <i class="fa-solid fa-circle-chevron-left"></i>
                    </button>
                </div>
                {{-- <button class="open_close" id="toggleBtn" type="button" aria-label="Réduire ou agrandir le menu">
                    <i class="fa-solid fa-circle-chevron-left"></i>
                </button> --}}
            </div>

            <div class="sidebar">
                <a href="{{ route('Admin.dashboard') }}" class="link admin_nav_item {{ request()->routeIs('Admin.dashboard') ? 'active' : '' }}">
                    <span class="admin_nav_icon"><i class="fa-solid fa-chart-pie"></i></span>
                    <span class="admin_nav_text">
                        <h3>Dashboard</h3>
                        <small>Vue synthétique</small>
                    </span>
                </a>

                <div class="admin_section_heading">
                    <span class="heading_dot"></span>
                    <span>PÉDAGOGIE</span>
                </div>

                <a href="{{ route('Admin.programs') }}" class="link admin_nav_item {{ request()->routeIs('Admin.programs*') ? 'active' : '' }}">
                    <span class="admin_nav_icon"><i class="fa-solid fa-graduation-cap"></i></span>
                    <span class="admin_nav_text">
                        <h3>Formations</h3>
                        <small>Filières &amp; Cursus</small>
                    </span>
                </a>
                <a href="{{ route('Admin.courses') }}" class="link admin_nav_item {{ request()->routeIs('Admin.courses*') ? 'active' : '' }}">
                    <span class="admin_nav_icon"><i class="fa-solid fa-book-open"></i></span>
                    <span class="admin_nav_text">
                        <h3>Cours &amp; Vidéos</h3>
                        <small>Modules de formation</small>
                    </span>
                </a>
                <a href="{{ route('Admin.list-exercise') }}" class="link admin_nav_item {{ request()->routeIs('Admin.list-exercise*', 'Admin.list-correction*') ? 'active' : '' }}">
                    <span class="admin_nav_icon"><i class="fa-solid fa-clipboard-check"></i></span>
                    <span class="admin_nav_text">
                        <h3>Devoirs &amp; Examens</h3>
                        <small>Évaluations &amp; Notes</small>
                    </span>
                </a>
                <a href="{{ route('Admin.videoconference') }}" class="link admin_nav_item {{ request()->routeIs('Admin.videoconference*') ? 'active' : '' }}">
                    <span class="admin_nav_icon"><i class="fa-solid fa-tower-broadcast"></i></span>
                    <span class="admin_nav_text">
                        <h3>Visioconférences</h3>
                        <small>Classes virtuelles</small>
                    </span>
                </a>

                <div class="admin_section_heading">
                    <span class="heading_dot"></span>
                    <span>ORGANISATION</span>
                </div>

                <a href="{{ route('Admin.groups') }}" class="link admin_nav_item {{ request()->routeIs('Admin.groups*') ? 'active' : '' }}">
                    <span class="admin_nav_icon"><i class="fa-solid fa-people-group"></i></span>
                    <span class="admin_nav_text">
                        <h3>Groupes</h3>
                        <small>Promotions &amp; Classes</small>
                    </span>
                </a>
                <a href="{{ route('Admin.assign-student') }}" class="link admin_nav_item {{ request()->routeIs('Admin.assign-student*') ? 'active' : '' }}">
                    <span class="admin_nav_icon"><i class="fa-solid fa-user-plus"></i></span>
                    <span class="admin_nav_text">
                        <h3>Affectations</h3>
                        <small>Assigner les élèves</small>
                    </span>
                </a>

                <div class="admin_section_heading">
                    <span class="heading_dot"></span>
                    <span>COMPTES &amp; ACCÈS</span>
                </div>

                <a href="{{ route('Admin.list-student') }}" class="link admin_nav_item {{ request()->routeIs('Admin.list-student*') ? 'active' : '' }}">
                    <span class="admin_nav_icon"><i class="fa-solid fa-user-graduate"></i></span>
                    <span class="admin_nav_text">
                        <h3>Apprenants</h3>
                        <small>Gestion des élèves</small>
                    </span>
                </a>
                <a href="{{ route('Admin.list-teacher') }}" class="link admin_nav_item {{ request()->routeIs('Admin.list-teacher*') ? 'active' : '' }}">
                    <span class="admin_nav_icon"><i class="fa-solid fa-person-chalkboard"></i></span>
                    <span class="admin_nav_text">
                        <h3>Formateurs</h3>
                        <small>Corps enseignant</small>
                    </span>
                </a>
                <a href="{{ route('Admin.list-admin') }}" class="link admin_nav_item {{ request()->routeIs('Admin.list-admin*') ? 'active' : '' }}">
                    <span class="admin_nav_icon"><i class="fa-solid fa-user-shield"></i></span>
                    <span class="admin_nav_text">
                        <h3>Administrateurs</h3>
                        <small>Gestion des rôles</small>
                    </span>
                </a>

                <div class="footer_sidebar">
                    <a href="{{ route('Admin.list-admin') }}" class="link admin_nav_item">
                        <span class="admin_nav_icon"><i class="fa-solid fa-gear"></i></span>
                        <span class="admin_nav_text">
                            <h3>Paramètres</h3>
                        </span>
                    </a>
                    <a href="#" class="link admin_nav_item logout">
                        <span class="admin_nav_icon"><i class="fa-solid fa-arrow-right-from-bracket"></i></span>
                        <span class="admin_nav_text">
                            <h3>Déconnexion</h3>
                        </span>
                    </a>
                </div>
            </div>
        </nav>

        <!-- Espace de travail de l'administrateur -->
        <div class="admin_workspace">
            <header class="admin_topbar">
                <div class="admin_topbar_left">

                    <strong>@yield('title', 'Vue d’ensemble')</strong>
                </div>

                <div class="admin_topbar_center">
                    <div class="admin_search_bar">
                        <i class="fa-solid fa-magnifying-glass" aria-hidden="true"></i>
                        <input type="search" placeholder="Recherche globale (cours, élève, groupe, visio...)" aria-label="Recherche">
                    </div>
                </div>

                <div class="admin_topbar_right">
                    <div class="admin_date_pill">
                        <i class="fa-regular fa-calendar-days"></i>
                        <span>{{ now()->translatedFormat('d M Y') }}</span>
                    </div>

                    <div class="admin_notif_wrap">
                        <a href="#" class="admin_notif_btn" aria-label="Notifications">
                            <i class="fa-regular fa-bell"></i>
                            <span class="admin_notif_count">5</span>
                        </a>
                    </div>

                    <a class="admin_profile_pill" href="{{ route('Admin.list-admin') }}" title="Gérer le profil admin">
                        <span class="admin_profile_avatar">AD</span>
                        <div class="admin_profile_meta">
                            <strong>Super Admin</strong>
                            <small>Direction CIMAT</small>
                        </div>
                    </a>
                </div>
            </header>

            <div class="admin_content">
                @yield('content')
            </div>

            <footer class="admin_footer">
                <p>&copy; {{ date('Y') }} <a href="#">Groupe Komptech CIMAT</a>. Tous droits réservés.</p>
                <div class="admin_footer_links">
                    <span>Plateforme d'Enseignement &amp; de Gestion Académique</span>
                </div>
            </footer>
        </div>
    </div>

    <!-- Scripts : Navigation/Toggle de la sidebar & Modales Admin -->
    <script src="{{ asset('Elements/js/navigation.js') }}"></script>
    <script src="{{ asset('Elements/js/admin-modal.js') }}"></script>
</body>
</html>
