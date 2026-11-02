<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Espace Étudiant - CIMAT</title>
    <link rel="stylesheet" href="{{ asset('Elements/style.css') }}">
    <!-- Version stable de Font Awesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>
    <div class="container student">
        <nav class="menu_section">
            <div class="top">
                <div class="logo_presentation">
                    <img src="{{ asset('Elements/images/logo.png') }}" alt="Logo CIMAT">
                </div>
            </div>

            <div class="sidebar">
                <a href="#" class="link active">
                    <span><i class="fa-solid fa-house"></i></span>
                    <h3>Dashboard</h3>
                </a>
                <a href="#" class="link">
                    <span><i class="fa-regular fa-file"></i></span>
                    <h3>Mes formations et cours</h3>
                </a>
                <a href="#" class="link">
                    <span><i class="fa-solid fa-book-open"></i></span>
                    <h3>Devoirs et exercices</h3>
                </a>
                <a href="#" class="link">
                    <span><i class="fa-regular fa-circle-user"></i></span>
                    <h3>Profil</h3>
                </a>
                <a href="#" class="link">
                    <span><i class="fa-solid fa-tower-broadcast"></i></span>
                    <h3>Visioconférence</h3>
                </a>
                <a href="#" class="link">
                    <span><i class="fa-solid fa-chart-simple"></i></span>
                    <h3>Statistiques</h3>
                </a>
                <a href="#" class="link">
                    <span><i class="fa-solid fa-bullhorn"></i></span>
                    <h3>Annonces / Évènements</h3>
                </a>
                <a href="#" class="link">
                    <span><i class="fa-solid fa-gear"></i></span>
                    <h3>Paramètres</h3>
                </a>
                <a href="#" class="link logout">
                    <span><i class="fa-solid fa-arrow-right-from-bracket"></i></span>
                    <h3>Déconnexion</h3>
                </a>
            </div>
        </nav>

        @yield('content')
    </div>
    <script src="{{asset('Elements/app.js')}}"></script>
</body>
</html>
