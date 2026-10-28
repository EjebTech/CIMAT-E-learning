@extends('menu-admin')

@section('content')
    <main>
        <div class="formulaire_creation">
        <div class="form_header">
            <h2><i class="fa-solid fa-book"></i> Modifier une formation</h2>
            <a href="../Formation et cours/Formation.html"><i class="fa-solid fa-arrow-left"></i> Retour à la liste</a>
        </div>
        <form action="" class="form" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label>Titre de la formation *</label>
                <input type="text" name="" required>
            </div>


            <div class="form-group">
                <label>Description * </label>
                <input type="text" name="" required>
            </div>

            <div class="form-group">
                <label>Image d'illustration </label>
                <input type="file" name="" accept="image/*">
            </div>
            <p>NB : Formats acceptés : png, jpeg, jpg, webp</p>

            <div class="form-row">
                <button type="submit"><i class="fa-solid fa-floppy-disk"></i> Enregistrer la formation</button>

            </div>

        </form>

@endsection
