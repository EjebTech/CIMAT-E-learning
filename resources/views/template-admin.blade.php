<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Administration CIMAT')</title>
    <link rel="stylesheet" href="{{ asset('Elements/style_admin.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Familjen+Grotesk:ital,wght@0,400..700;1,400..700&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="admin_shell">
        <aside class="admin_sidebar">
            <a class="admin_brand" href="{{ route('Admin.dashboard') }}">
                <img src="{{ asset('Elements/images/logo.png') }}" alt="CIMAT">
                <span>
                    CIMAT
                    <small>ESPACE ADMINISTRATION</small>
                </span>
            </a>

            <nav class="admin_navigation" aria-label="Navigation administration">
                <p class="admin_nav_label">PILOTAGE</p>
                <a class="{{ request()->routeIs('Admin.dashboard') ? 'active' : '' }}" href="{{ route('Admin.dashboard') }}">
                    <i class="fa-solid fa-chart-pie" aria-hidden="true"></i>
                    <span>Vue d’ensemble</span>
                </a>

                <p class="admin_nav_label">PÉDAGOGIE</p>
                <a class="{{ request()->routeIs('Admin.programs*') ? 'active' : '' }}" href="{{ route('Admin.programs') }}">
                    <i class="fa-solid fa-graduation-cap" aria-hidden="true"></i>
                    <span>Formations</span>
                </a>
                <a class="{{ request()->routeIs('Admin.courses*') ? 'active' : '' }}" href="{{ route('Admin.courses') }}">
                    <i class="fa-solid fa-book-open" aria-hidden="true"></i>
                    <span>Cours</span>
                </a>
                <a href="{{ route('Admin.courses-file') }}">
                    <i class="fa-regular fa-folder-open" aria-hidden="true"></i>
                    <span>Fichiers de cours</span>
                </a>
                <a class="{{ request()->routeIs('Admin.list-exercise', 'Admin.list-correction') ? 'active' : '' }}" href="{{ route('Admin.list-exercise') }}">
                    <i class="fa-solid fa-clipboard-check" aria-hidden="true"></i>
                    <span>Devoirs &amp; corrections</span>
                </a>
                <a class="{{ request()->routeIs('Admin.videoconference*') ? 'active' : '' }}" href="{{ route('Admin.videoconference') }}">
                    <i class="fa-solid fa-video" aria-hidden="true"></i>
                    <span>Visioconférences</span>
                </a>

                <p class="admin_nav_label">ORGANISATION</p>
                <a class="{{ request()->routeIs('Admin.groups*') ? 'active' : '' }}" href="{{ route('Admin.groups') }}">
                    <i class="fa-solid fa-people-group" aria-hidden="true"></i>
                    <span>Groupes</span>
                </a>
                <a class="{{ request()->routeIs('Admin.assign-student') ? 'active' : '' }}" href="{{ route('Admin.assign-student') }}">
                    <i class="fa-solid fa-user-plus" aria-hidden="true"></i>
                    <span>Affectations</span>
                </a>

                <p class="admin_nav_label">COMPTES</p>
                <a class="{{ request()->routeIs('Admin.list-student*') ? 'active' : '' }}" href="{{ route('Admin.list-student') }}">
                    <i class="fa-solid fa-user-graduate" aria-hidden="true"></i>
                    <span>Apprenants</span>
                </a>
                <a class="{{ request()->routeIs('Admin.list-teacher*') ? 'active' : '' }}" href="{{ route('Admin.list-teacher') }}">
                    <i class="fa-solid fa-person-chalkboard" aria-hidden="true"></i>
                    <span>Formateurs</span>
                </a>
                <a class="{{ request()->routeIs('Admin.list-admin*') ? 'active' : '' }}" href="{{ route('Admin.list-admin') }}">
                    <i class="fa-solid fa-user-shield" aria-hidden="true"></i>
                    <span>Administrateurs</span>
                </a>
            </nav>

            <div class="admin_sidebar_footer">
                <span class="admin_status_dot"></span>
                Session académique 2026–2027
            </div>
        </aside>

        <div class="admin_workspace">
            <header class="admin_topbar">
                <div>
                    <span>ESPACE ADMINISTRATEUR</span>
                    <strong>@yield('title', 'Vue d’ensemble')</strong>
                </div>
                <a class="admin_profile" href="{{ route('Admin.list-admin') }}">
                    <span class="admin_profile_avatar">AD</span>
                    <span>
                        Administration
                        <small>Gestion CIMAT</small>
                    </span>
                </a>
            </header>
            <div class="admin_content">
                @yield('content')
            </div>
            <footer class="admin_footer">
                <span>&copy; {{ date('Y') }} Groupe Komptech Cimat</span>
                <span>Administration pédagogique</span>
            </footer>
        </div>
    </div>
</body>
</html>
