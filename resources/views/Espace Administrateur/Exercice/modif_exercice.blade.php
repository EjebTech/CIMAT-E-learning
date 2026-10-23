<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.min.css">
    <title>Ajouter un exercice - Groupe Komptech Cimat</title>
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
        <section class="dashboard">
            <main style="padding: 0; flex: none;">
                <div class="formulaire_creation" style="width: 100%; box-sizing: border-box;">
                    <div class="form_header">
                        <h2><i class="fa-solid fa-pen-to-square"></i> Modifier l'exercice</h2>
                        <a href="../Exercice/Exercice.html"><i class="fa-solid fa-arrow-left"></i> Retour à la liste</a>
                    </div>
                    
                    <form action="" class="form" method="post" enctype="multipart/form-data">
                        <!-- Sélection de la Formation -->
                        <div class="form-group">
                            <label>Formation *</label>
                            <select name="formation" required>
                                <option value="" disabled selected>Sélectionnez une formation</option>
                                <option value="1">ANGLAIS DE SPÉCIALITÉ VOYAGE ET TOURISME</option>
                                <option value="2">FRET AÉRIEN</option>
                                <option value="3">BILLETERIE-TRANSPORT AÉRIEN ET TOURISME</option>
                                <option value="4">PERSONNEL NAVIGANT COMMERCIAL</option>
                                <option value="5">LOGICIELS DE RESERVATION GDS AMADEUS / SABRE / GALILEO</option>
                                <option value="6">AGENT DE VOYAGE SPÉCIALISÉ DIGITAL MARKETING</option>
                            </select>
                        </div>

                        <!-- Sélection du Cours -->
                        <div class="form-group">
                            <label>Cours rattaché *</label>
                            <select name="cours" required>
                                <option value="" disabled selected>Sélectionnez le cours associé</option>
                                <option value="1">PHRASÉOLOGIE STANDARDISÉE DE L'AVIATION</option>
                                <option value="2">TRAITEMENT ET DOCUMENTATION DES MARCHANDISES</option>
                                <option value="3">ÉMISSION ET TARIFICATION DE BILLETS</option>
                                <option value="4">SÉCURITÉ ET SAUVETAGE EN CABINE</option>
                                <option value="5">RÉSERVATION ET ENCODAGE AMADEUS</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Titre de l'exercice *</label>
                            <input type="text" name="titre_exercice" placeholder="Ex: Établissement d'une Lettre de Transport Aérien (LTA)" required>
                        </div>

                        <div class="form-group">
                            <label>Date d'échéance *</label>
                            <input type="date" name="date_echeance" required>
                        </div>

                        <div class="form-group">
                            <label>Fichier d'exercice (Sujet / Consignes)</label>
                            <input type="file" name="fichier_exercice" accept=".pdf,.docx,.txt">
                        </div>
                        <p style="font-size: 13px; color: var(--text-muted);">NB : Formats acceptés : pdf, docx, txt</p>

                        <div class="form-row">    
                            <button type="submit"><i class="fa-solid fa-floppy-disk"></i> Enregistrer l'exercice</button>
                        </div>
                    </form>
                </div>
            </main>
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