<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.min.css">
    <title>Document</title>
    <link rel="stylesheet" href="../../Elements/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Familjen+Grotesk:ital,wght@0,400..700;1,400..700&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="dashboard_container">
        <section class="menu">
            <img src="../../Elements/images/logo.png" alt="">
            <div class="sous_menu">
                <p>MENU</p>
                <ul>
                    <a href="{{route('Admin.dashboard')}}"><li>DASHBOARD</li></a>
                    <a href="{{route('Admin.programs')}}"><li>FORMATIONS</li></a>
                    <a href="{{route('Admin.courses')}}"><li>COURS</li></a>

                    <a href="{{route('Admin.courses-file')}}"><li>FICHIERS DE COURS</li></a>
                </ul>
            </div>
            <div class="sous_menu">
                <p>SESSION DE COURS</p>
                <ul>
                    <a href="{{route('Admin.videoconference')}}"><li>VISIOCONFÉRENCE</li></a>
                    <a href="{{route('Admin.list-exercise')}}"><li>EXERCICES</li></a>
                    <a href="{{route('Admin.list-correction')}}"><li>CORRECTIONS</li></a>
                    <a href="{{route('Admin.groups')}}"><li>GROUPES</li></a>
                </ul>
            </div>
            <div class="sous_menu">
                <p>CONNEXION</p>
                <ul>
                    <a href="{{route('Admin.list-admin')}}"><li> ADMINISTRATEUR</li></a>
                    <a href="{{route('Admin.list-teacher')}}"><li>FORMATEUR</li></a>
                    <a href="{{route('Admin.list-student')}}"><li> PARTICIPANT</li></a>
                </ul>
            </div>
        </section>
        @yield('content')

    </div>

   <footer>
        <p>Crée par <a href="https://cimat-ci.net/">@CIMAT IATA </a> | 2026 Tous droits réservés.</p>
        <div class="reseau_social">
            <a href=""><i class="fa-brands fa-facebook-f"></i></a>
            <a href=""><i class="fa-brands fa-youtube"></i></a>
            <a href=""><i class="fa-brands fa-linkedin"></i></a>
        </div>
    </footer>
</body>
</html>
