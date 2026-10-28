@extends('template-admin')

@section('content')
    <main>
        <div class="formulaire_creation">
            <div class="form_header">
                <h2><i class="fa-solid fa-user-plus"></i> Inscrire un participant</h2>
                <a href="{{route('Admin.list-student')}}"><i class="fa-solid fa-arrow-left"></i> Retour à la liste</a>
            </div>

            <form action="" class="form" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Nom & Prénoms *</label>
                    <input type="text" name="nom_complet" placeholder="Ex: Jean Dupont" required>
                </div>

                <div class="form-group">
                    <label>Adresse e-mail *</label>
                    <input type="email" name="email" placeholder="jean.dupont@email.com" required>
                </div>

                <div class="form-group">
                    <label>Téléphone *</label>
                    <input type="tel" name="telephone" placeholder="+225 0700000000" required>
                </div>

                <div class="form-group">
                    <label>Groupe d'affectation</label>
                    <select name="groupe_id">
                        <option value="">-- Sélectionnez un groupe --</option>
                        <option value="1">Groupe Web 2026</option>
                        <option value="2">Groupe Anglais Débutant</option>
                        <option value="3">Groupe Billetterie - Session 1</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Mot de passe *</label>
                    <input type="password" name="password" required>
                </div>

                <div class="form-group">
                    <label>Photo de profil</label>
                    <input type="file" name="photo_participant" accept="image/png, image/jpeg, image/jpg">
                </div>
                <p style="font-size: 12px; color: var(--text-muted);">NB : Formats d'image acceptés : JPG, JPEG, PNG</p>

                <div class="form-row">
                    <button type="submit"><i class="fa-solid fa-floppy-disk"></i> Enregistrer le participant</button>

                </div>
            </form>
        </div>
    </main>
@endsection
