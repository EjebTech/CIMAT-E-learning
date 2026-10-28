@extends('template-admin')

@section('content')
    <main>
        <div class="formulaire_creation">
        <div class="form_header">
            <h2><i class="fa-solid fa-book"></i> Modifier un Cours</h2>
            <a href="{{route('Admin.courses')}}"><i class="fa-solid fa-arrow-left"></i> Retour à la liste</a>
        </div>
        <form action="" class="form" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label>Titre du cours *</label>
                <input type="text" name="" required>
            </div>

            <div class="form-group">
                <label>Formation rattachée* </label>
                <select name="filtre">
                    <option value="">ANGLAIS DE SPÉCIALITÉ VOYAGE ET TOURISME</option>
                    <option value="">FRET AÉRIEN</option>
                    <option value="">BILLETERIE-TRANSPORT AÉRIEN ET TOURISME</option>
                    <option value="">PERSONNEL NAVIGANT COMMERCIAL</option>
                    <option value="">LOGICIELS DE RESERVATION GDS AMADEUS / SABRE / GALILEO</option>
                    <option value="">AGENT DE VOYAGE SPÉCIALISÉ DIGITAL MARKETING</option>
                </select>
            </div>


            <div class="form-row">
                <button type="submit"><i class="fa-solid fa-floppy-disk"></i> Enregistrer le cours</button>

            </div>

        </form>

    </div>
    </main>
@endsection
