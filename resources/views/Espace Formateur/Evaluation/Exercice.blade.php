@extends('template-tecaher')
@section('content-teacher')
    <main>
        <div class="top">
            <div class="titre_et_desc">
                <h2>Liste des exercices</h2>
                <p>Devoirs, QCM et travaux pratiques assignés aux classes.</p>
            </div>
            <div class="recherche_filtre">
                <div class="barre_recherche">
                    <i class="fa-solid fa-search"></i><input type="text" name="search" placeholder="Rechercher un exercice...">
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
            <div>
                <a class="btn_ajout" href="{{route('Teacher.insert-exercise')}}"></i> Ajouter un exercice</a>
            </div>
        </div>

        <hr>
        <div class="liste liste_evaluation">
            <table>
                <thead>
                    <tr>
                        <th>N°</th>
                        <th>FORMATION</th>
                        <th>COURS</th>
                        <th>TITRE</th>
                        <th>DESCRIPTION</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>ANGLAIS DE SPÉCIALITÉ VOYAGE ET TOURISME</td>
                        <td>PHRASÉOLOGIE STANDARDISÉE DE L'AVIATION</td>
                        <td>Mise en situation : Annonces micro en aérogare</td>
                        <td>Rédaction et enregistrement audio d'annonces de retard, d'embarquement et de consignes de sécurité en anglais.</td>
                        <td class="contenu_cours"><a href="#"><i class="fa-solid fa-eye"></i> Voir l'exercice</a></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>FRET AÉRIEN</td>
                        <td>TRAITEMENT ET DOCUMENTATION DES MARCHANDISES</td>
                        <td>Établissement d'une Lettre de Transport Aérien (LTA)</td>
                        <td>Cas pratique d'encodage des informations d'expédition et de contrôle des mentions obligatoires d'une LTA IATA.</td>
                        <td class="contenu_cours"><a href="#"><i class="fa-solid fa-eye"></i> Voir l'exercice</a></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>FRET AÉRIEN</td>
                        <td>CALCUL TARIFAIRE DU FRET</td>
                        <td>Détermination du poids taxable et calcul de devis</td>
                        <td>Exercices de comparaison entre poids brut et poids volumétrique pour l'application des tarifs généraux IATA.</td>
                        <td class="contenu_cours"><a href="#"><i class="fa-solid fa-eye"></i> Voir l'exercice</a></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>ANGLAIS DE SPÉCIALITÉ VOYAGE ET TOURISME</td>
                        <td>ANGALAIS DE L'ACCUEIL ET DU SERVICE CLIENT</td>
                        <td>Gestion de réclamations passagers au comptoir</td>
                        <td>Rédaction d'un dialogue d'assistance en anglais pour le traitement d'une perte de bagage et proposition de solution.</td>
                        <td class="contenu_cours"><a href="#"><i class="fa-solid fa-eye"></i> Voir l'exercice</a></td>
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
