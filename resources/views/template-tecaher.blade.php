<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.min.css">
    <title>Dashboard - Espace Formateur</title>
    <link rel="stylesheet" href="{{asset('Elements/style.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <section>
            <div class="logo">
                <img src="{{asset('Elements/images/logo.png')}}" alt="CIMAT Logo">
            </div>
            <nav class="rubriques">
                <ul>
                    <li>
                        <a class="rubrique" href="{{route('Teacher.dashboard')}}">Dashboard</a>
                    </li>
                    <li>
                        <a class="rubrique" >Formation & Cours <i class="fa-solid fa-chevron-down"></i></a>
                        <ul class="menu_deroulant">
                            <li><a href="{{route('Teacher.programs')}}">Formations</a></li>
                            <li><a href="{{route('Teacher.courses')}}">Cours</a></li>
                            <li><a href="{{route('Teacher.course-file')}}">Fichiers de Cours</a></li>
                            <li><a href="{{route('Teacher.video')}}">Vidéos de Cours</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="rubrique">Évaluation <i class="fa-solid fa-chevron-down"></i></a>
                        <ul class="menu_deroulant">
                            <li><a href="{{route('Teacher.exercise')}}">Exercices</a></li>
                            <li><a href="{{route('Teacher.corrections')}}">Corrections d'exercices</a></li>
                        </ul>
                    </li>
                    <li><a class="rubrique" href="{{route('Teacher.videoconference')}}">Visioconférence</a></li>
                    <li><a class="rubrique" href="{{route('Teacher.groups')}}">Groupes</a></li>
                </ul>
            </nav>
        </section>
        <div class="profil">
            <ul>
                <li>
                    <a href="" class="profil-btn">
                        <i class="fa-solid fa-user"></i>
                    </a>
                    <div class="menu_deroulant_profil">
                        <p class="statut">Vous êtes connecté en tant que :</p>
                        <p class="nom-utilisateur">Barou Edmond</p>
                        <hr>
                        <a href=""><i class="fa-solid fa-gear"></i> Modifier mon profil</a>
                        <a href=""><i class="fa-solid fa-arrow-right-from-bracket"></i> Se déconnecter</a>
                    </div>
                </li>
            </ul>
        </div>
    </header>

        @yield('content-teacher')

    <footer>
        <p>Créé par <a href="https://cimat-ci.net/">@CIMAT IATA </a> | 2026 Tous droits réservés.</p>
        <div class="reseau_social">
            <a href=""><i class="fa-brands fa-facebook-f"></i></a>
            <a href=""><i class="fa-brands fa-youtube"></i></a>
            <a href=""><i class="fa-brands fa-linkedin"></i></a>
        </div>
    </footer>
</body>
</html>
