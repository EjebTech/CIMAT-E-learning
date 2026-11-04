<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('Elements/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.min.css">
</head>
<body>
    <div class="container_authentification">
        <div class="authentification">
            <div class="form-login">
                <div class="top">
                    <h3>BIENVENUE À</h3>
                    <div class="logo">
                        <img src="{{asset('Elements/images/logo.png')}}" alt="">
                    </div>
                    <span>Authentifiez-vous pour accéder à votre espace.</span>
                </div>
                <form action="{{ route('Student.dashboard') }}">
                    <div class="input-box">
                        <span><i class="fa-regular fa-user"></i></span>
                        <input type="text" placeholder="Nom d'utilisateur...">
                    </div>
                    <div class="input-box">
                        <span><i class="fa-solid fa-lock"></i></span>
                        <input type="password" placeholder="Mot de passe...">
                        <span><i class="fa-regular fa-circle-question"></i></span>
                    </div>
                    <div class="forgot_password">
                        <p>Vous avez oublié votre mot de passe ?</p>
                        <a href="">Mot de passe oublié</a>
                    </div>
                    <button type="submit" class="submit">CONNECTEZ-VOUS</button>
                </form>
            </div>
            <div class="presentation">
                <div class="logo_presentation">
                    <img src="{{asset('Elements/images/logo.png')}}" alt="">
                </div>
                <div class="presentation_text">
                    <p>Bénéficiez de notre formation de qualité sur cette plateforme</p>
                </div>
            </div>
        </div>
    </div>
<script src="{{asset('Elements/app.js')}}"></script>
</body>
</html>
