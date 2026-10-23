<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.min.css">
    <title>Gestion des Groupes - Groupe Komptech Cimat</title>
    <link rel="stylesheet" href="../../Elements/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Familjen+Grotesk:ital,wght@0,400..700;1,400..700&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="dashboard_container">
        <!-- Menu latéral -->
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
        
        <!-- Contenu principal -->
        <section class="dashboard dashboard_tableaux_admin">
            <div class="header_actions_container">
                <div class="dashboard_header_top">
                    <h2>Gestion des Groupes</h2>
                    <p>Organisez les apprenants et attribuez-les aux différentes formations.</p>
                </div>
                <div class="boutons_action_groupe">
                    <a href="ajout_groupe.html" class="btn_ajout_unique"><i class="fa-solid fa-plus"></i> Créer un groupe</a>
                    <a href="liste_apprenants.html" class="btn_ajout_unique"><i class="fa-solid fa-plus"></i> AJouter un apprenant à un groupe</a>
                </div>
            </div>

            <div class="liste">
                <div class="top">
                    <h3 class="section_title"><i class="fa-solid fa-users-between-lines"></i> Liste des groupes d'étude</h3>
                    <div class="recherche_filtre">
                        <div class="barre_recherche">
                            <i class="fa-solid fa-search"></i><input type="text" name="search" placeholder="Rechercher un groupe...">
                        </div>
                        <div class="Filtre">
                            <label for="">Filtre :</label>
                            <select name="filtre">
                                <option value="" selected>Toutes les formations</option>
                                <option value="1">ANGLAIS DE SPÉCIALITÉ VOYAGE ET TOURISME</option>
                                <option value="2">FRET AÉRIEN</option>
                                <option value="3">BILLETERIE-TRANSPORT AÉRIEN ET TOURISME</option>
                                <option value="4">PERSONNEL NAVIGANT COMMERCIAL</option>
                                <option value="5">LOGICIELS DE RESERVATION GDS AMADEUS / SABRE / GALILEO</option>
                                <option value="6">AGENT DE VOYAGE SPÉCIALISÉ DIGITAL MARKETING</option>
                            </select>
                        </div>
                    </div>
                </div>

                <table>
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>NOM DU GROUPE</th>
                            <th>FORMATION ASSOCIÉE</th>
                            <th>MEMBRES</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Groupe Anglais de Spécialité - Promotion 2026</td>
                            <td>ANGLAIS DE SPÉCIALITÉ VOYAGE ET TOURISME</td>
                            <td>20 apprenants</td>
                            <td class="contenu_cours"><a href="form_modif_groupe.html"><i class="fa-solid fa-pen-to-square"></i> Modifier</a></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Groupe Fret Aérien - Session Intensif</td>
                            <td>FRET AÉRIEN</td>
                            <td>15 apprenants</td>
                            <td class="contenu_cours"><a href="form_modif_groupe.html"><i class="fa-solid fa-pen-to-square"></i> Modifier</a></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Groupe Billetterie & Transport - Cohorte 1</td>
                            <td>BILLETERIE-TRANSPORT AÉRIEN ET TOURISME</td>
                            <td>12 apprenants</td>
                            <td class="contenu_cours"><a href="form_modif_groupe.html"><i class="fa-solid fa-pen-to-square"></i> Modifier</a></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Groupe GDS Amadeus - Expert</td>
                            <td>LOGICIELS DE RESERVATION GDS AMADEUS / SABRE / GALILEO</td>
                            <td>18 apprenants</td>
                            <td class="contenu_cours"><a href="form_modif_groupe.html"><i class="fa-solid fa-pen-to-square"></i> Modifier</a></td>
                        </tr>
                    </tbody>
                </table>

                <!-- Pagination -->
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