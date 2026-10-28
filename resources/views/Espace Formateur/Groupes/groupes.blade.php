@extends('template-tecaher')
@section('content-teacher')
    <main>
        <div class="top">
            <div class="titre_et_desc">
                <h2>Liste des groupes</h2>
                <p>Consultez la liste des groupes que vous gérez</p>
            </div>
            <div class="recherche_filtre">
                <div class="barre_recherche">
                    <i class="fa-solid fa-search"></i><input type="text" name="search" placeholder="Rechercher un groupe...">
                </div>
            </div>
        </div>
        <div class="liste table_compact">
            <table class="table_compact">
                <thead>
                    <tr>
                        <th>N°</th>
                        <th>GROUPE</th>
                        <th>NOMBRE DE PARTICIPANTS</th>
                        <th>VOIR LA LISTE</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Groupe 1</td>
                        <td>9 participant(s)</td>
                        <td class="contenu_cours"><a href=""><i class="fa-solid fa-eye"></i> Voir la liste de ce groupe</a></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Groupe 2</td>
                        <td>11 participant(s)</td>
                        <td class="contenu_cours"><a href=""><i class="fa-solid fa-eye"></i> Voir la liste de ce groupe</a></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Groupe 3</td>
                        <td>14 participant(s)</td>
                        <td class="contenu_cours"><a href=""><i class="fa-solid fa-eye"></i> Voir la liste de ce groupe</a></td>
                    </tr>
                </tbody>
            </table>
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
