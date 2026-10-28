@extends('menu-admin')

@section('content')
        <section class="dashboard dashboard_tableaux_admin">
            <div class="header_actions_container">
                <div class="dashboard_header_top">
                    <h2>Gestion des Cours</h2>
                    <p>Consultez les cours et leur formation de rattachement.</p>
                </div>
                <div class="boutons_action_groupe">
                    <a href="{{route('Admin.insert-courses')}}" class="btn_ajout_unique"><i class="fa-solid fa-plus"></i> Ajouter un cours</a>
                </div>
            </div>

            <div class="liste">
                <h3 class="section_title"><i class="fa-solid fa-book-open"></i> Liste des cours</h3>
                <table class="tableau_admin">
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>INTITULÉ DU COURS</th>
                            <th>FORMATION RATTACHÉE</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>PHRASÉOLOGIE STANDARDISÉE DE L'AVIATION</td>
                            <td>ANGLAIS DE SPÉCIALITÉ VOYAGE ET TOURISME</td>
                            <td class="contenu_cours"><a href="{{route('Admin.update-courses')}}"><i class="fa-solid fa-pen-to-square"></i> Modifier</a></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>TRAITEMENT ET DOCUMENTATION DES MARCHANDISES</td>
                            <td>FRET AÉRIEN</td>
                            <td class="contenu_cours"><a href="{{route('Admin.update-courses')}}"><i class="fa-solid fa-pen-to-square"></i> Modifier</a></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>CALCUL TARIFAIRE DU FRET</td>
                            <td>FRET AÉRIEN</td>
                            <td class="contenu_cours"><a href="{{route('Admin.update-courses')}}"><i class="fa-solid fa-pen-to-square"></i> Modifier</a></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>ANGLAIS DE L'ACCUEIL ET DU SERVICE CLIENT</td>
                            <td>ANGLAIS DE SPÉCIALITÉ VOYAGE ET TOURISME</td>
                            <td class="contenu_cours"><a href="{{route('Admin.update-courses')}}"><i class="fa-solid fa-pen-to-square"></i> Modifier</a></td>
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
        </section>
@endsection
