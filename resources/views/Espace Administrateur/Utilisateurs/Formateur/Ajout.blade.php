@extends('menu-admin')

@section('content')
    <main>
        <div class="formulaire_creation">
            <div class="form_header">
                <h2><i class="fa-solid fa-person-chalkboard"></i> Ajouter un formateur</h2>
                <a href="{{route('Admin.list-teacher')}}"><i class="fa-solid fa-arrow-left"></i> Retour à la liste</a>
            </div>

            <form action="" class="form" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Nom & Prénoms *</label>
                    <input type="text" name="nom_complet" placeholder="Ex: Marie Curie" required>
                </div>

                <div class="form-group">
                    <label>Spécialité / Domaine d'expertise *</label>
                    <input type="text" name="specialite" placeholder="Ex: Bases de données & SQL" required>
                </div>

                <div class="form-group">
                    <label>Adresse e-mail *</label>
                    <input type="email" name="email" placeholder="m.curie@komptech-cimat.net" required>
                </div>

                <div class="form-group">
                    <label>Téléphone *</label>
                    <input type="tel" name="telephone" placeholder="+225 0700000000" required>
                </div>

                <div class="form-group">
                    <label>Mot de passe *</label>
                    <input type="password" name="password" required>
                </div>

                <div class="form-group">
                    <label>Photo du formateur *</label>
                    <input type="file" name="photo_formateur" accept="image/png, image/jpeg, image/jpg" required>
                </div>
                <p style="font-size: 12px; color: var(--text-muted);">NB : Formats d'image acceptés : JPG, JPEG, PNG</p>

                <div class="form-row">
                    <button type="submit"><i class="fa-solid fa-floppy-disk"></i> Enregistrer le formateur</button>

                </div>
            </form>
        </div>
    </main>

  @endsection
