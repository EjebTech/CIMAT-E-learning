@extends('template-tecaher')
@section('content-teacher')
    <main>
        <div class="formulaire_creation">
        <div class="form_header">
            <h2><i class="fa-solid fa-video"></i> Ajouter une vidéo</h2>
            <a href="{{route('Teacher.video')}}"><i class="fa-solid fa-arrow-left"></i> Retour à la liste</a>
        </div>
        <form action="" class="form" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label>Titre de la vidéo *</label>
                <input type="text" name="" required>
            </div>

            <div class="form-group">
                <label>Cours  </label>
                <select name="" id="">
                    <option value="">PHRASÉOLOGIE STANDARDISÉE DE L'AVIATION</option>
                    <option value="">TRAITEMENT ET DOCUMENTATION DES MARCHANDISES</option>
                    <option value="">CALCUL TARIFAIRE DU FRET.</option>
                    <option value="">ANGLAIS DE L'ACCUEUIL ET DU SERVICE CLIENT</option>
                </select>
            </div>

            <div class="form-group">
                <label>Formation * </label>
                <select name="filtre">
                    <option value="">ANGLAIS DE SPÉCIALITÉ VOYAGE ET TOURISME</option>
                    <option value="">FRET AÉRIEN</option>
                </select>
            </div>

            <div class="form-group">
                <label>Vidéo </label>
                <input type="file" name="">
            </div>
            <p>NB : Formats acceptés : mp4, mkv, avi</p>

            <div class="form-row">
                <button type="submit"><i class="fa-solid fa-floppy-disk"></i> Enregistrer la vidéo</button>

            </div>

        </form>

    </div>
    </main>
@endsection
