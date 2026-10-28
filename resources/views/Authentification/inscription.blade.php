<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CIMAT E-learning - Inscription</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../Elements/style.css">
</head>
<body>

    <div class="conteneur-authentification">
        <div class="carte-authentification">

            <div class="entete-authentification">
                <h2>CIMAT E-learning</h2>
                <p>Créer un compte</p>
            </div>

            <form action="#" method="POST" class="formulaire-authentification">
                <div class="form-group">
                    <label for="nom_complet">Nom complet</label>
                    <input type="text" name="nom_complet" required autofocus placeholder="Ex: Jean Dupont">
                </div>

                <div class="form-group">
                    <label for="email">Adresse Email</label>
                    <input type="email" name="email" required placeholder="votre.email@cimat.com">
                </div>

                <div class="form-group">
                    <label for="mot_de_passe">Mot de passe</label>
                    <input type="password" name="mot_de_passe" required placeholder="••••••••">
                </div>

                <div class="form-group">
                    <label for="confirmation_mot_de_passe">Confirmer le mot de passe</label>
                    <input type="password" name="confirmation_mot_de_passe" required placeholder="••••••••">
                </div>

                <button type="submit">S'inscrire</button>
            </form>

            <div class="footer-authentification">
                <p>Déjà un compte ? <a href="{{route('Connexion')}}">Connectez-vous</a></p>
            </div>

        </div>
    </div>

</body>
</html>
