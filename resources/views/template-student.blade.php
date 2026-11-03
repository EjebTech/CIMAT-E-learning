<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Espace Étudiant - CIMAT</title>
    <link rel="stylesheet" href="{{ asset('Elements/style.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>
    <div class="container student">
        <nav class="menu_section">
            <div class="top">
                <div class="logo_presentation">
                    <img src="{{ asset('Elements/images/logo.png') }}" alt="Logo CIMAT">
                </div>
                <button class="open_close" id="toggleBtn">
                    <i class="fa-solid fa-circle-chevron-left"></i>
                </button>
            </div>

            <div class="sidebar">
                <a href="{{route('Student.dashboard')}}" class="link {{request()->routeIs('Student.dashboard') ? 'active' : ''}}">
                    <span><i class="fa-solid fa-house"></i></span>
                    <h3>Dashboard</h3>
                </a>
                <a href="{{route('Student.programs&courses')}}" class="link {{request()->routeIs('Student.programs&courses') ? 'active' : ''}}">
                    <span><i class="fa-regular fa-file"></i></span>
                    <h3>Formations et cours</h3>
                </a>
                <a href="{{route('Student.homework&correction')}}" class="link {{request()->routeIs('Student.homework&correction') ? 'active' : ''}}">
                    <span><i class="fa-solid fa-book-open"></i></span>
                    <h3>Devoirs et exercices</h3>
                </a>
                <a href="" class="link">
                    <span><i class="fa-regular fa-circle-user"></i></span>
                    <h3>Profil</h3>
                </a>
                <a href="{{route('Student.videoconference')}}" class="link {{request()->routeIs('Student.videoconference') ? 'active' : ''}}">
                    <span><i class="fa-solid fa-tower-broadcast"></i></span>
                    <h3>Visioconférence</h3>
                </a>
                <a href="" class="link">
                    <span><i class="fa-solid fa-chart-simple"></i></span>
                    <h3>Statistiques</h3>

                </a>
                <a href="" class="link ">
                    <span><i class="fa-solid fa-bullhorn"></i></span>
                    <h3>Annonces / Évènements</h3>
                </a>
                <a href="" class="link ">
                    <span><i class="fa-solid fa-calendar"></i></span>
                    <h3>Calendrier</h3>
                </a>
                <a href="" class="link ">
                    <span><i class="fa-solid fa-bullhorn"></i></span>
                    <h3>Annonces / Évènements</h3>
                </a>
                <div class="footer_sidebar">
                    <a href="" class="link">
                        <span><i class="fa-solid fa-gear"></i></span>
                        <h3>Paramètres</h3>
                    </a>
                    <a href="" class="link logout">
                        <span><i class="fa-solid fa-arrow-right-from-bracket"></i></span>
                        <h3>keyDéconnexion</h3>
                    </a>
                </div>
            </div>
        </nav>
        @yield('content')
    </div>

    <script src="{{asset('Elements/app.js')}}"></script>
</body>
</html>
