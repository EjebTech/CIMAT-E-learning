<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.min.css">
    <title>Modifier l'Administrateur - Groupe Komptech Cimat</title>
    <link rel="stylesheet" href="../../../Elements/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Familjen+Grotesk:ital,wght@0,400..700;1,400..700&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <main>
        <div class="formulaire_creation">
            <div class="form_header">
                <h2><i class="fa-solid fa-user-pen"></i> Modifier l'administrateur</h2>
                <a href="liste_administrateur.html"><i class="fa-solid fa-arrow-left"></i> Retour à la liste</a>
            </div>

            <form action="" class="form" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Nom & Prénoms *</label>
                    <input type="text" name="nom_complet" value="" required>
                </div>

                <div class="form-group">
                    <label>Adresse e-mail *</label>
                    <input type="email" name="email" value="" required>
                </div>

                <div class="form-group">
                    <label>Téléphone *</label>
                    <input type="tel" name="telephone" value="" required>
                </div>

                <div class="form-group">
                    <label>Nouveau mot de passe (laisser vide si inchangé)</label>
                    <input type="password" name="password">
                </div>

                <div class="form-group">
                    <label>Changer la photo de profil</label>
                    <input type="file" name="photo_profil" accept="image/png, image/jpeg, image/jpg">
                </div>
                <p style="font-size: 12px; color: var(--text-muted);">NB : Formats d'image acceptés : JPG, JPEG, PNG</p>

                <div class="form-row">    
                    <button type="submit"><i class="fa-solid fa-floppy-disk"></i> Modifier l'administrateur</button>
                    
                </div>
            </form>
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