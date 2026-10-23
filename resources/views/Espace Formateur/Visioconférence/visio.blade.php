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
    <header>
        <section>
            <div class="logo">
                <img src="../../Elements/images/logo.png" alt="">
            </div>
            <nav class="rubriques">
                <ul>
                    <li>
                        <a class="rubrique" href="../Dashboard/Dashboard.html">Dashboard</a>
                    </li>
                    <li>
                        <a class="rubrique" href="#">Formation & Cours <i class="fa-solid fa-chevron-down"></i></a>
                        <ul class="menu_deroulant">
                            <li><a href="../Formations et Cours/formations.html">Formations</a></li>
                            <li><a href="../Formations et Cours/cours.html">Cours</a></li>
                            <li><a href="../Formations et Cours/fichier_de_cours.html">Fichiers de Cours</a></li>
                            <li><a href="../Formations et Cours/Video_de_cours.html">Vidéos de Cours</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="rubrique" href="#">Évaluation <i class="fa-solid fa-chevron-down"></i></a>
                        <ul class="menu_deroulant">
                            <li><a href="../Evaluation/Exercice.html">Exercices</a></li>
                            <li><a href="../Evaluation/Correction.html">Corrections d'exercices</a></li>
                        </ul>
                    </li>
                    <li><a class="rubrique" href="../Visioconférence/visio.html">Visioconférence</a></li>
                    <li><a class="rubrique" href="../Groupes/groupes.html">Groupes</a></li>
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
    <main>
        <div class="top">
            <section class="titre_description">
                <h2><i class="fa-solid fa-video"></i> Visioconférence</h2>
                <p>Accédez à vos sessions de formation en direct</p>
            </section>
            <div class="barre_recherche_visio">
                <i class="fa-solid fa-search"></i><input type="text" name="search" placeholder="Rechercher une session...">
            </div>
            <div>
                <a class="btn_ajout" href="../Visioconférence/form_ajout_visio.html">Ajouter une visioconférence</a>
            </div>
        </div>
        <div class="Filtre">
            <div class="element_filtre"><a href="">Toutes</a></div>
            <div class="element_filtre"><a href="">Aujourd'hui</a></div>
            <div class="element_filtre"><a href="">Demain</a></div>
            <div class="element_filtre"><a href="">Cette semaine</a></div>
            <div class="element_filtre"><a href="">Ce mois-ci</a></div>
        </div>
        
        <div class="visio_liste">
            <div class="visio">
                <section class="infos">
                    <h3>Architecture logicielle moderne & Microservices</h3>
                    <p class="description">Découvrez les fondamentaux du découpage microservices, les protocoles de communication asynchrones (gRPC, Kafka) et la résilience en environnement cloud distribué.</p>
                    <div class="date_heure">
                        <p><span>Date :</span> 24 Octobre 2026      <span>| Heure et Durée :</span> 14:00 (Durée : 1h30)</p>
                    </div>
                </section>
                <section class="bouton_visio">
                    <img src="../../Elements/images/cours/premium_photo-1664297989345-f4ff2063b212.avif" alt="image du thème de la visio">
                    <a href=""><i class="fa-solid fa-video"></i> Organiser la visio</a>
                </section>
            </div>
            <div class="visio">
                <section class="infos">
                    <h3>Réglementation et Droit des Passagers Aériens</h3>
                    <p class="description">Analyse en ligne des droits des voyageurs (annulations, surbooking, indemnisations) et de la législation aéronautique internationale.</p>
                    <div class="date_heure">
                        <p><span>Date :</span> 24 Octobre 2026      <span>| Heure et Durée :</span> 14:00 (Durée : 1h30)</p>
                    </div>
                </section>
                <section class="bouton_visio">
                    <img src="../../Elements/images/cours/photo-1530521954074-e64f6810b32d.avif" alt="image du thème de la visio">
                    <a href=""><i class="fa-solid fa-video"></i> Organiser la visio</a>
                </section>
            </div>
            <div class="visio">
                <section class="infos">
                    <h3>Anglais Commercial & Vente de Prestations Touristiques</h3>
                    <p class="description">Jeux de rôle en visioconférence pour maîtriser l'argumentaire de vente, le traitement des réclamations et la négociation en anglais avec les clients.</p>
                    
                    <div class="date_heure">
                        <p><span>Date :</span> 11 Novembre 2026      <span>| Heure et Durée :</span> 9:00 (Durée : 2h)</p>
                    </div>
                </section>
                <section class="bouton_visio">
                    <img src="../../Elements/images/cours/british-flag-union-3840x2160-9445.jpg" alt="image du thème de la visio">
                    <a href=""><i class="fa-solid fa-video"></i> Organiser la visio</a>
                </section>
            </div>
            
        </div>
    </main>
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