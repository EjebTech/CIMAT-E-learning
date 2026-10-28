@extends('template-tecaher')
@section('content-teacher')
    <main>
        <div class="top">
            <div class="titre_et_desc">
                <h2>Liste des fichiers de cours</h2>
                <p>Consultez la liste des cours préparée pour vos étudiants.</p>
            </div>
            <div class="recherche_filtre">
                <div class="barre_recherche">
                    <i class="fa-solid fa-search"></i><input type="text" name="search" placeholder="Rechercher un fichier...">
                </div>
                <div class="Filtre">
                    <label for="">Filtre :</label>
                    <select name="filtre">
                        <option value="" selected>Tous les fichiers</option>
                        <option value="">ANGLAIS DE SPÉCIALITÉ VOYAGE ET TOURISME</option>
                        <option value="">FRET AÉRIEN</option>
                    </select>
                </div>
            </div>
            <a class="btn_ajout" href="{{route('Teacher.insert-course-file')}}">Ajouter un fichier</a>
        </div>

        <hr>
        <div class="liste">
            <table>
                <thead>
                    <tr>
                        <th>N°</th>
                        <th>FORMATION</th>
                        <th>COURS</th>
                        <th>TITRE DU FICHIER</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>ANGLAIS DE SPÉCIALITÉ VOYAGE ET TOURISME</td>
                        <td>PHRASÉOLOGIE STANDARDISÉE DE L'AVIATION</td>
                        <td>Lexique_Officiel_Phraséologie_Aviation.pdf</td>
                        <td class="contenu_cours"><a  href="../../Elements/images/cours/CV_Gbohourou_Sery_Stage_Developpeur.pdf"><i class="fa-solid fa-eye"></i> Voir le cours</a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>FRET AÉRIEN</td>
                        <td>TRAITEMENT ET DOCUMENTATION DES MARCHANDISES</td>
                        <td>Support_Cours_Tarification_IATA_2026.pdf</td>
                        <td class="contenu_cours"><a href=""><i class="fa-solid fa-eye"></i> Voir le cours</a>
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
