<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.min.css">
    <title>Gestion des Formations - Espace Administrateur</title>
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
                    <a href="../Dashboard/dashboard.html"><li>DASHBOARD</li></a>
                    <a href="../Formation et cours/Formation.html"><li>FORMATIONS</li></a>
                    <a href="../Formation et cours/Cours.html"><li>COURS</li></a>
                    <a href="../Formation et cours/fichier_de_cours.html"><li>FICHIERS DE COURS</li></a>
                </ul>
            </div>
            <div class="sous_menu">
                <p>SESSION DE COURS</p>
                <ul>
                    <a href="../Visioconférence/visio.html"><li>VISIOCONFÉRENCE</li></a>
                    <a href="../Exercice/Exercice.html"><li>EXERCICES</li></a>
                    <a href="../Exercice/Correction.html"><li>CORRECTIONS</li></a>
                    <a href="../Groupe/liste_groupes.html"><li>GROUPES</li></a>
                </ul>
            </div>
            <div class="sous_menu">
                <p>CONNEXION</p>
                <ul>
                    <a href="../Utilisateurs/Administrateur/liste_administrateur.html"><li></i> ADMINISTRATEUR</li></a>
                    <a href="../../Espace Administrateur/Utilisateurs/Formateur/liste_formateur.html"><li> FORMATEUR</li></a>
                    <a href="../Utilisateurs/Participant/liste_participant.html"><li></i> PARTICIPANT</li></a>
                </ul>
            </div>
        </section>
        
        <section class="dashboard">
            <!-- En-tête avec les 2 boutons d'ajout -->
            <div class="header_actions_container">
                <div class="dashboard_header_top">
                    <h2>Gestion des Formations</h2>
                    <p>Visualisez et gérez les formations proposées aux apprenants.</p>
                </div>
                <div class="boutons_action_groupe">
                    <a href="../Formation et cours/form_ajout_formation.html" class="btn_ajout_unique"><i class="fa-solid fa-plus"></i> Ajouter une formation</a>
                </div>
            </div>

            <!-- Table 1 : Liste des Formations -->
            <div class="liste">
                <h3 class="section_title"><i class="fa-solid fa-graduation-cap"></i> Liste des Formations</h3>
                
                <table>
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>FORMATION</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>ANGLAIS DE SPÉCIALITÉ VOYAGE ET TOURISME</td>
                            <td class="contenu_cours"><a href="#"><i class="fa-solid fa-trash"></i> Supprimer</a></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>FRET AÉRIEN</td>
                            <td class="contenu_cours"><a href="#"><i class="fa-solid fa-trash"></i> Supprimer</a></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>BILLETERIE-TRANSPORT AÉRIEN ET TOURISME</td>
                            <td class="contenu_cours"><a href="#"><i class="fa-solid fa-trash"></i> Supprimer</a></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>PERSONNEL NAVIGANT COMMERCIAL</td>
                            <td class="contenu_cours"><a href="#"><i class="fa-solid fa-trash"></i> Supprimer</a></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>LOGICIELS DE RESERVATION GDS AMADEUS / SABRE / GALILEO</td>
                            <td class="contenu_cours"><a href="#"><i class="fa-solid fa-trash"></i> Supprimer</a></td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>AGENT DE VOYAGE SPÉCIALISÉ DIGITAL MARKETING</td>
                            <td class="contenu_cours"><a href="#"><i class="fa-solid fa-trash"></i> Supprimer</a></td>
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
        <p>Créé par <a href="https://cimat-ci.net/">@CIMAT IATA </a> | 2026 Tous droits réservés.</p>
        <div class="reseau_social">
            <a href=""><i class="fa-brands fa-facebook-f"></i></a>
            <a href=""><i class="fa-brands fa-youtube"></i></a>
            <a href=""><i class="fa-brands fa-linkedin"></i></a>
        </div>
    </footer>
</body>
</html>