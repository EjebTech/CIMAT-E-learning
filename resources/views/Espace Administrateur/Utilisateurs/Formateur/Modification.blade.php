@extends('menu-admin')

@section('content')
    <main>
        <div class="formulaire_creation">
            <div class="form_header">
                <h2><i class="fa-solid fa-user-pen"></i> Modifier le formateur</h2>
                <a href="{{route('Admin.list-teacher')}}"><i class="fa-solid fa-arrow-left"></i> Annuler</a>
            </div>

            <form action="" class="form" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Nom & Prénoms *</label>
                    <input type="text" name="nom_complet"  required>
                </div>

                <div class="form-group">
                    <label>Spécialité / Domaine d'expertise *</label>
                    <input type="text" name="specialite" required>
                </div>

                <div class="form-group">
                    <label>Adresse e-mail *</label>
                    <input type="email" name="email"  required>
                </div>

                <div class="form-group">
                    <label>Téléphone *</label>
                    <input type="tel" name="telephone"  required>
                </div>

                <div class="form-group">
                    <label>Nouveau mot de passe (laisser vide si inchangé)</label>
                    <input type="password" name="password">
                </div>

                <div class="form-group">
                    <label>Changer la photo du formateur</label>
                    <input type="file" name="photo_formateur" accept="image/png, image/jpeg, image/jpg">
                </div>
                <p style="font-size: 12px; color: var(--text-muted);">NB : Formats d'image acceptés : JPG, JPEG, PNG</p>

                <div class="form-row">
                    <button type="submit"><i class="fa-solid fa-floppy-disk"></i> Mettre à jour</button>

                </div>
            </form>
        </div>
    </main>

@endsection
