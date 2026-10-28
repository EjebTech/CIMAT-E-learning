<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.min.css">
    <title>Liste des cours - Espace Étudiant</title>
    <link rel="stylesheet" href="../../Elements/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Familjen+Grotesk:ital,wght@0,400..700;1,400..700&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <section>
            <div class="logo">
                <img src="../../Elements/images/logo.png" alt="">

            </div>

            <nav class="rubriques">
                <ul>
                    <li>
                        <a class="rubrique" >Cours <i class="fa-solid fa-chevron-down"></i></a>
                        <ul class="menu_deroulant">
                            <li><a href="{{route('Student.courses')}}">Mes cours</a></li>
                            <li><a href="{{route('Student.courses-file')}}">Mes fichiers de cours</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="rubrique">Évaluation <i class="fa-solid fa-chevron-down"></i></a>
                        <ul class="menu_deroulant">
                            <li><a href="{{route('Student.exercise')}}">Exercices</a></li>
                            <li><a href="{{route('Student.corrections')}}">Corrections d'exercices</a></li>
                        </ul>
                    </li>
                    <li><a class="rubrique" href="{{route('Student.videoconference')}}">Visioconférence</a></li>
                    <li><a class="rubrique" href="{{route('Student.teachers')}}">Formateurs</a></li>
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
                        <a href="">Modifier mon profil</a>
                        <a href="">Se déconnecter</a>
                    </div>
                </li>
            </ul>
        </div>
    </header>
        @yield('content-student')
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
