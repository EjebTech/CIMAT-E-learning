<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.min.css">
    <title>Gestion des Cours - Espace Administrateur</title>
    <link rel="stylesheet" href="../../Elements/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Familjen+Grotesk:ital,wght@0,400..700;1,400..700&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="dashboard_container">
        <section class="menu">
            <img src="../../Elements/images/logo.png" alt="Logo CIMAT">
            <div class="sous_menu">
                <p>MENU</p>
                <ul>
                    <a href="../Dashboard/dashboard.html"><li>DASHBOARD</li></a>
                    <a href="Formation.html"><li>FORMATIONS</li></a>
                    <a href="Cours.html"><li>COURS</li></a>
                    <a href="fichier_de_cours.html"><li>FICHIERS DE COURS</li></a>
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
                    <a href="../Utilisateurs/Administrateur/liste_administrateur.html"><li></i> ADMINISTRATEUR</li></a>
                    <a href="../Utilisateurs/Formateur/liste_formateur.html"><li> FORMATEUR</li></a>
                    <a href="../Utilisateurs/Participant/liste_participant.html"><li></i> APPRENANTS</li></a>
                </ul>
            </div>
        </section>

        <section class="dashboard dashboard_tableaux_admin">
            <div class="header_actions_container">
                <div class="dashboard_header_top">
                    <h2>Gestion des Cours</h2>
                    <p>Consultez les cours et leur formation de rattachement.</p>
                </div>
                <div class="boutons_action_groupe">
                    <a href="form_ajout_cours.html" class="btn_ajout_unique"><i class="fa-solid fa-plus"></i> Ajouter un cours</a>
                </div>
            </div>

            <div class="liste">
                <h3 class="section_title"><i class="fa-solid fa-book-open"></i> Liste des cours</h3>
                <table class="tableau_admin">
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>INTITULÉ DU COURS</th>
                            <th>FORMATION RATTACHÉE</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>PHRASÉOLOGIE STANDARDISÉE DE L'AVIATION</td>
                            <td>ANGLAIS DE SPÉCIALITÉ VOYAGE ET TOURISME</td>
                            <td class="contenu_cours"><a href="form_modif_cours.html"><i class="fa-solid fa-pen-to-square"></i> Modifier</a></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>TRAITEMENT ET DOCUMENTATION DES MARCHANDISES</td>
                            <td>FRET AÉRIEN</td>
                            <td class="contenu_cours"><a href="form_modif_cours.html"><i class="fa-solid fa-pen-to-square"></i> Modifier</a></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>CALCUL TARIFAIRE DU FRET</td>
                            <td>FRET AÉRIEN</td>
                            <td class="contenu_cours"><a href="form_modif_cours.html"><i class="fa-solid fa-pen-to-square"></i> Modifier</a></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>ANGLAIS DE L'ACCUEIL ET DU SERVICE CLIENT</td>
                            <td>ANGLAIS DE SPÉCIALITÉ VOYAGE ET TOURISME</td>
                            <td class="contenu_cours"><a href="form_modif_cours.html"><i class="fa-solid fa-pen-to-square"></i> Modifier</a></td>
                        </tr>
                    </tbody>
                </table>
                <div class="pagination">
                    <div class="pages_links">
                        <a href="#" class="btn_page"><i class="fa-solid fa-angle-left"></i> Précédent</a>
                        <a href="#" class="btn_page active">1</a>
                        <a href="#" class="btn_page">Suivant <i class="fa-solid fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <footer>
        <p>Créé par <a href="https://cimat-ci.net/">@CIMAT IATA</a> | 2026 Tous droits réservés.</p>
        <div class="reseau_social">
            <a href=""><i class="fa-brands fa-facebook-f"></i></a>
            <a href=""><i class="fa-brands fa-youtube"></i></a>
            <a href=""><i class="fa-brands fa-linkedin"></i></a>
        </div>
    </footer>
</body>
</html>
