@extends('menu-admin')

@section('content')
        <section class="dashboard">
            <!-- En-tête avec les 2 boutons d'ajout -->
            <div class="header_actions_container">
                <div class="dashboard_header_top">
                    <h2>Gestion des Formations</h2>
                    <p>Visualisez et gérez les formations proposées aux apprenants.</p>
                </div>
                <div class="boutons_action_groupe">
                    <a href="{{route('Admin.insert-programs')}}" class="btn_ajout_unique"><i class="fa-solid fa-plus"></i> Ajouter une formation</a>
                </div>
            </div>

            <!-- Table 1 : Liste des Formations -->
            <div class="liste">
                <h3 class="section_title"><i class="fa-solid fa-graduation-cap"></i> Liste des Formations</h3>

                <table>
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>FORMATION</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>ANGLAIS DE SPÉCIALITÉ VOYAGE ET TOURISME</td>
                            <td class="contenu_cours"><a href="#"><i class="fa-solid fa-trash"></i> Supprimer</a></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>FRET AÉRIEN</td>
                            <td class="contenu_cours"><a href="#"><i class="fa-solid fa-trash"></i> Supprimer</a></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>BILLETERIE-TRANSPORT AÉRIEN ET TOURISME</td>
                            <td class="contenu_cours"><a href="#"><i class="fa-solid fa-trash"></i> Supprimer</a></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>PERSONNEL NAVIGANT COMMERCIAL</td>
                            <td class="contenu_cours"><a href="#"><i class="fa-solid fa-trash"></i> Supprimer</a></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>LOGICIELS DE RESERVATION GDS AMADEUS / SABRE / GALILEO</td>
                            <td class="contenu_cours"><a href="#"><i class="fa-solid fa-trash"></i> Supprimer</a></td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>AGENT DE VOYAGE SPÉCIALISÉ DIGITAL MARKETING</td>
                            <td class="contenu_cours"><a href="#"><i class="fa-solid fa-trash"></i> Supprimer</a></td>
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
