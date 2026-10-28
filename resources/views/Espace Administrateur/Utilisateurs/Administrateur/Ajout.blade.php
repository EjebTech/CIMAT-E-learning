@extends('template-admin')

@section('content')
    <main>
        <div class="formulaire_creation">
            <div class="form_header">
                <h2><i class="fa-solid fa-user-shield"></i> Ajouter un administrateur</h2>
                <a href="{{route('Admin.list-admin')}}"><i class="fa-solid fa-arrow-left"></i> Retour à la liste</a>
            </div>

            <form action="" class="form" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Nom & Prénoms *</label>
                    <input type="text" name="nom_complet" placeholder="" required>
                </div>

                <div class="form-group">
                    <label>Adresse e-mail *</label>
                    <input type="email" name="email" placeholder="" required>
                </div>

                <div class="form-group">
                    <label>Téléphone *</label>
                    <input type="tel" name="telephone" placeholder="" required>
                </div>

                <div class="form-group">
                    <label>Mot de passe *</label>
                    <input type="password" name="password" required>
                </div>

                <div class="form-group">
                    <label>Photo de profil</label>
                    <input type="file" name="photo_profil" accept="image/png, image/jpeg, image/jpg">
                </div>
                <p style="font-size: 12px; color: var(--text-muted);">NB : Formats d'image acceptés : JPG, JPEG, PNG</p>

                <div class="form-row">
                    <button type="submit"><i class="fa-solid fa-floppy-disk"></i> Enregistrer l'administrateur</button>

                </div>
            </form>
        </div>
    </main>

@endsection
