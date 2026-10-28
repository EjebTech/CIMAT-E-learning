@extends('template-tecaher')
@section('content-teacher')
    <main>
        <div class="formulaire_creation">
        <div class="form_header">
            <h2><i class="fa-solid fa-book"></i> Ajouter un Cours</h2>
            <a href="{{route('Teacher.courses')}}"><i class="fa-solid fa-arrow-left"></i> Retour à la liste</a>
        </div>
        <form action="" class="form" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label>Titre du cours *</label>
                <input type="text" name="" required>
            </div>



            <div class="form-group">
                <label> Formations * </label>
                <select name="groupes" id="">
                    <option value="">ANGLAIS DE SPÉCIALITÉ VOYAGE ET TOURISME</option>
                    <option value="">FRET AÉRIEN</option>
                </select>
            </div>



            <div class="form-group">
                <label>Description  </label>
                <input type="text" name="" >
            </div>




            <div class="form-group">
                <label>Image d'illustration </label>
                <input type="file" name="" accept="image/*">
            </div>
            <p>NB : Formats acceptés : png, jpeg, jpg, webp</p>

            <div class="form-row">
                <button type="submit"><i class="fa-solid fa-floppy-disk"></i> Enregistrer le cours</button>

            </div>

        </form>

    </div>
    </main>
@endsection
