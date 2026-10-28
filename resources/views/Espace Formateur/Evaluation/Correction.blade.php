@extends('template-tecaher')
@section('content-teacher')
    <main>
        <div class="top">
            <div class="titre_et_desc">
                <h2>Liste des corrections d'exercices</h2>
                <p>Barèmes, grilles d'évaluation et retours d'expériences.</p>
            </div>
            <div class="recherche_filtre">
                <div class="barre_recherche">
                    <i class="fa-solid fa-search"></i><input type="text" name="search" placeholder="Rechercher une correction...">
                </div>
                <div class="Filtre">
                    <label for="">Filtre :</label>
                    <select name="filtre">
                        <option value="" selected>Toutes les formations</option>
                        <option value="">ANGLAIS DE SPÉCIALITÉ VOYAGE ET TOURISME</option>
                        <option value="">FRET AÉRIEN</option>
                    </select>
                </div>
            </div>
            <a class="btn_ajout" href="{{route('Teacher.insert-correction')}}">Ajouter une correction</a>
        </div>

        <hr>
        <div class="liste liste_evaluation">
            <table>
                <thead>
                    <tr>
                        <th>N°</th>
                        <th>FORMATION</th>
                        <th>COURS</th>
                        <th>TITRE DE LA CORRECTION</th>
                        <th>EXERCICE ASSOCIÉ</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>ANGLAIS DE SPÉCIALITÉ VOYAGE ET TOURISME</td>
                        <td>PHRASÉOLOGIE STANDARDISÉE DE L'AVIATION</td>
                        <td>Correction type & Transcription des annonces micro</td>
                        <td>Mise en situation : Annonces micro en aérogare</td>
                        <td class="contenu_cours"><a href="#"><i class="fa-solid fa-eye"></i> Voir la correction</a></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>FRET AÉRIEN</td>
                        <td>TRAITEMENT ET DOCUMENTATION DES MARCHANDISES</td>
                        <td>Corrigé détaillé et modèle d'encodage LTA IATA</td>
                        <td>Établissement d'une Lettre de Transport Aérien (LTA)</td>
                        <td class="contenu_cours"><a href="#"><i class="fa-solid fa-eye"></i> Voir la correction</a></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>FRET AÉRIEN</td>
                        <td>CALCUL TARIFAIRE DU FRET</td>
                        <td>Barème de correction & Formules de calcul du poids volumétrique</td>
                        <td>Détermination du poids taxable et calcul de devis</td>
                        <td class="contenu_cours"><a href="#"><i class="fa-solid fa-eye"></i> Voir la correction</a></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>ANGLAIS DE SPÉCIALITÉ VOYAGE ET TOURISME</td>
                        <td>ANGLAIS DE L'ACCUEIL ET DU SERVICE CLIENT</td>
                        <td>Guide de réponse type et lexique de résolution de litiges</td>
                        <td>Gestion de réclamations passagers au comptoir</td>
                        <td class="contenu_cours"><a href="#"><i class="fa-solid fa-eye"></i> Voir la correction</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="pagination">
            <div class="pages_links">
                <a href="#" class="btn_page"><i class="fa-solid fa-angle-left"></i> Précédent</a>
                <a href="#" class="btn_page active">1</a>
                <a href="#" class="btn_page">Suivant <i class="fa-solid fa-angle-right"></i></a>
            </div>
        </div>
    </main>
@endsection
