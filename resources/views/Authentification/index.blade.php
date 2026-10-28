<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CIMAT E-learning - Connexion</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../Elements/style.css">
</head>
<body >

    <div class="conteneur-authentification">
        <div class="carte-authentification">

            <div class="entete-authentification">
                <h2>CIMAT E-learning</h2>
                <p>Connectez-vous à votre espace</p>
            </div>

            <form action="#" method="POST" class="formulaire-authentification">
                <div class="form-group">
                    <label for="email">Adresse Email</label>
                    <input type="email"  name="email" required autofocus placeholder="votre.email@cimat.com">
                </div>

                <div class="form-group">
                    <label for="mot_de_passe">Mot de passe</label>
                    <input type="password"  name="mot_de_passe" required placeholder="••••••••">
                </div>

                <div class="actions-alignees">
                    <label class="option-souvenir">
                        <input type="checkbox" name="se_souvenir"> Se souvenir de moi
                    </label>
                    <a href="#" class="mot_de_passe">Mot de passe oublié ?</a>
                </div>

                <button type="submit">Se connecter</button>
            </form>

            <div class="footer-authentification">
                <p>Pas encore de compte ? <a href="{{route('Inscription')}}">Inscrivez-vous</a></p>
            </div>

        </div>
    </div>

</body>
</html>
