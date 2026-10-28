@extends('menu-admin')

@section('content')
    <main>
        <div class="formulaire_creation">
            <div class="form_header">
                <h2><i class="fa-solid fa-user-pen"></i> Modifier l'administrateur</h2>
                <a href="{{route('Admin.list-admin')}}"><i class="fa-solid fa-arrow-left"></i> Retour à la liste</a>
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

@endsection
