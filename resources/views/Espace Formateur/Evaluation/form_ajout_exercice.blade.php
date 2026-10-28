@extends('template-tecaher')
@section('content-teacher')
    <main>
        <div class="formulaire_creation">
        <div class="form_header">
            <h2><i class="fa-solid fa-clipboard"></i> Ajouter un exercice</h2>
            <a href="{{route('Teacher.exercise')}}"><i class="fa-solid fa-arrow-left"></i> Retour à la liste</a>
        </div>
        <form action="" class="form" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label>Titre de l'exercice *</label>
                <input type="text" name="" required>
            </div>

            <div class="form-group">
                <label> Cours * </label>
                <select name="groupes" id="">
                    <option value="">PHRASÉOLOGIE STANDARDISÉE DE L'AVIATION</option>
                    <option value="">TRAITEMENT ET DOCUMENTATION DES MARCHANDISES</option>
                    <option value="">CALCUL TARIFAIRE DU FRET.</option>
                    <option value="">ANGLAIS DE L'ACCUEUIL ET DU SERVICE CLIENT</option>
                </select>
            </div>

            <div class="form-group">
                <label> Formations * </label>
                <select name="groupes" id="">
                    <option value="">ANGLAIS DE SPÉCIALITÉ VOYAGE ET TOURISME</option>
                    <option value="">FRET AÉRIEN</option>
                </select>
            </div>

            <div class="form-group">
                <label> Description </label>
                <input type="text" >
            </div>

            <div class="form-group">
                <label>Fichier </label>
                <input type="file" name="" accept="image/*">
            </div>
            <p>NB : Formats acceptés : pdf, docx, txt</p>

            <div class="form-row">
                <button type="submit"><i class="fa-solid fa-floppy-disk"></i> Enregistrer le fichier</button>

            </div>

        </form>

    </div>
    </main>
@endsection
