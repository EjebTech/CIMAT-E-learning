@extends('template-tecaher')
@section('content-teacher')
    <main>
        <div class="formulaire_creation">
        <div class="form_header">
            <h2><i class="fa-solid fa-clipboard"></i> Ajouter une correction</h2>
            <a href="{{route('Teacher.corrections')}}"><i class="fa-solid fa-arrow-left"></i> Retour à la liste</a>
        </div>
        <form action="" class="form" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label>Titre de la correction *</label>
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
                <label> Formation * </label>
                <select name="groupes" id="">
                    <option value="">ANGLAIS DE SPÉCIALITÉ VOYAGE ET TOURISME</option>
                    <option value="">FRET AÉRIEN</option>
                </select>
            </div>

            <div class="form-group">
                <label> Exercice associé * </label>
                <select name="groupes" id="">
                    <option value="">Mise en situation : Annonces micro en aérogare</option>
                    <option value="">Établissement d'une Lettre de Transport Aérien (LTA)</option>
                    <option value="">Détermination du poids taxable et calcul de devis</option>
                    <option value="">Gestion de réclamations passagers au comptoir</option>
                </select>
            </div>

            <div class="form-group">
                <label>Fichier </label>
                <input type="file" name="" accept="image/*">
            </div>
            <p>NB : Formats acceptés : pdf, docx, txt</p>

            <div class="form-row">
                <button type="submit"><i class="fa-solid fa-floppy-disk"></i> Enregistrer la correction</button>
            </div>

        </form>

    </div>
    </main>
@endsection
