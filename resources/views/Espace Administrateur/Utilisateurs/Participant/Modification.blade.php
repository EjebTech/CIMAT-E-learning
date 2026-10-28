@extends('menu-admin')

@section('content')
    <main>
        <div class="formulaire_creation">
            <div class="form_header">
                <h2><i class="fa-solid fa-user-pen"></i> Modifier le participant</h2>
                <a href="{{route('Admin.list-student')}}"><i class="fa-solid fa-arrow-left"></i> Annuler</a>
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
                    <label>Groupe d'affectation</label>
                    <select name="groupe_id">
                        <option value="1" selected>Groupe Web 2026</option>
                        <option value="2">Groupe Anglais Débutant</option>
                        <option value="3">Groupe Billetterie - Session 1</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Nouveau mot de passe (laisser vide si inchangé)</label>
                    <input type="password" name="password">
                </div>

                <div class="form-group">
                    <label>Changer la photo de profil</label>
                    <input type="file" name="photo_participant" accept="image/png, image/jpeg, image/jpg">
                </div>
                <p style="font-size: 12px; color: var(--text-muted);">NB : Formats d'image acceptés : JPG, JPEG, PNG</p>

                <div class="form-row">
                    <button type="submit"><i class="fa-solid fa-floppy-disk"></i> Mettre à jour</button>

                </div>
            </form>
        </div>
    </main>
@endsection
