@extends('template-admin')

@section('content')
    <main>
        <div class="formulaire_creation">
        <div class="form_header">
            <h2><i class="fa-solid fa-video"></i> Ajouter une session</h2>
            <a href="{{route('Admin.videoconference')}}"><i class="fa-solid fa-arrow-left"></i> Retour à la liste</a>
        </div>
        <form action="" class="form" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label>Nom de la session *</label>
                <input type="text" name="" required>
            </div>
            <div class="form-group">
                <label>Formateur *</label>
                <input type="text" name="" required>
            </div>

            <div class="form-group">
                <label>Description</label>
                <input type="text">
            </div>

            <div class="form-group">
                <label>Date de la session *</label>
                <input type="date">
            </div>
            <div class="form-group">
                <label>Heure de début *</label>
                <input type="time">
            </div>
            <div class="form-group">
                <label>Heure de fin *</label>
                <input type="time">
            </div>

            <div class="form-group">
                <label>Groupe </label>
                <select name="" id="">
                    <option value="">Groupe 1</option>
                    <option value="">Groupe 2</option>
                    <option value="">Groupe 3</option>
                </select>
            </div>

            <div class="form-row">
                <button type="submit"><i class="fa-solid fa-floppy-disk"></i> Enregistrer la session</button>

            </div>

        </form>

    </div>
    </main>

@endsection
