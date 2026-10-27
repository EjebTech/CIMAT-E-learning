<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.min.css">
    <title>Gestion des Corrections - Espace Administrateur</title>
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
                    <a href="../Utilisateurs/Administrateur/liste_administrateur.html"><li>ADMINISTRATEUR</li></a>
                    <a href="../Utilisateurs/Formateur/liste_formateur.html"><li>FORMATEUR</li></a>
                    <a href="../Utilisateurs/Participant/liste_participant.html"><li>PARTICIPANT</li></a>
                </ul>
            </div>
        </section>

        <section class="dashboard dashboard_tableaux_admin">
            <div class="header_actions_container">
                <div class="dashboard_header_top">
                    <h2>Gestion des Corrections</h2>
                    <p>Consultez et téléchargez les corrigés officiels des exercices.</p>
                </div>
                <div class="boutons_action_groupe">
                    <a href="../Exercice/ajout_correction.html" class="btn_ajout_unique btn_cours"><i class="fa-solid fa-file-circle-check"></i> Ajouter une correction</a>
                </div>
            </div>

            <div class="liste">
                <div class="top">
                    <h3 class="section_title"><i class="fa-solid fa-file-circle-check"></i> Liste des corrections disponibles</h3>
                    <div class="recherche_filtre">
                        <div class="barre_recherche">
                            <i class="fa-solid fa-search"></i><input type="text" name="search_correction" placeholder="Rechercher une correction...">
                        </div>
                        <div class="Filtre">
                            <label for="">Filtre :</label>
                            <select name="filtre_correction">
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

                <div class="table_corrections_container">
                    <table class="table_corrections">
                        <thead>
                            <tr>
                                <th>FORMATION</th>
                                <th>COURS</th>
                                <th>EXERCICE CORRIGÉ</th>
                                <th>FICHIER CORRIGÉ</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>ANGLAIS DE SPÉCIALITÉ VOYAGE ET TOURISME</td>
                                <td>PHRASÉOLOGIE STANDARDISÉE DE L'AVIATION</td>
                                <td>Mise en situation : Annonces micro en aérogare</td>
                                <td>Corrige_Annonces_Micro_V1.pdf</td>
                                <td class="contenu_cours"><a href="#"><i class="fa-solid fa-download"></i> Télécharger</a></td>
                            </tr>
                            <tr>
                                <td>FRET AÉRIEN</td>
                                <td>TRAITEMENT ET DOCUMENTATION DES MARCHANDISES</td>
                                <td>Établissement d'une Lettre de Transport Aérien (LTA)</td>
                                <td>Corrige_LTA_Marche_Reel.pdf</td>
                                <td class="contenu_cours"><a href="#"><i class="fa-solid fa-download"></i> Télécharger</a></td>
                            </tr>
                            <tr>
                                <td>FRET AÉRIEN</td>
                                <td>CALCUL TARIFAIRE DU FRET</td>
                                <td>Détermination du poids taxable et calcul de devis</td>
                                <td>Corrige_Calcul_Devis_Fret.pdf</td>
                                <td class="contenu_cours"><a href="#"><i class="fa-solid fa-download"></i> Télécharger</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

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
