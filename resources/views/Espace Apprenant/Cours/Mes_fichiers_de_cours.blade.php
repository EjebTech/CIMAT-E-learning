@extends('template-student')
@section('content-student')
    <main>
        <div class="top">
            <div class="titre_et_desc">
                <h2>Liste des fichiers de cours</h2>
                <p>Retrouvez les supports et documents mis à disposition pour vos cours.</p>
            </div>
            <div class="recherche_filtre">
                <div class="barre_recherche">
                    <i class="fa-solid fa-search"></i><input type="text" name="search" placeholder="Rechercher un fichier...">
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
        </div>
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
                        <td>Support_Phraseologie_Aviation.pdf</td>
                        <td class="contenu_cours"><a href="#" class="btn_page"><i class="fa-solid fa-eye"></i> Voir le cours</a></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>FRET AÉRIEN</td>
                        <td>TRAITEMENT ET DOCUMENTATION DES MARCHANDISES</td>
                        <td>Manuel_Traitement_Marchandises.pdf</td>
                        <td class="contenu_cours"><a href="#" class="btn_page"><i class="fa-solid fa-eye"></i> Voir le cours</a></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>FRET AÉRIEN</td>
                        <td>CALCUL TARIFAIRE DU FRET</td>
                        <td>Guide_Tarification_IATA.pdf</td>
                        <td class="contenu_cours"><a href="#" class="btn_page"><i class="fa-solid fa-eye"></i> Voir le cours</a></td>
                    </tr>
                </tbody>
            </table>

            <!-- Pagination alignée en bas à droite -->
            <div class="pagination">
                <div class="pages_links">
                    <a href="#" class="btn_page"><i class="fa-solid fa-angle-left"></i> Précédent</a>
                    <a href="#" class="btn_page active">1</a>
                    <a href="#" class="btn_page">Suivant <i class="fa-solid fa-angle-right"></i></a>
                </div>
            </div>
        </div>
    </main>
@endsection
