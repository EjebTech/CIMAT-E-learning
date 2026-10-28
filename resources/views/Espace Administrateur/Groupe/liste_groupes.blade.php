@extends('template-admin')

@section('content')
        <!-- Contenu principal -->
        <section class="dashboard dashboard_tableaux_admin">
            <div class="header_actions_container">
                <div class="dashboard_header_top">
                    <h2>Gestion des Groupes</h2>
                    <p>Organisez les apprenants et attribuez-les aux différentes formations.</p>
                </div>
                <div class="boutons_action_groupe">
                    <a href="{{route('Admin.insert-groups')}}" class="btn_ajout_unique"><i class="fa-solid fa-plus"></i> Créer un groupe</a>
                    <a href="{{route('Admin.assign-student')}}" class="btn_ajout_unique"><i class="fa-solid fa-plus"></i> AJouter un apprenant à un groupe</a>
                </div>
            </div>

            <div class="liste">
                <div class="top">
                    <h3 class="section_title"><i class="fa-solid fa-users-between-lines"></i> Liste des groupes d'étude</h3>
                    <div class="recherche_filtre">
                        <div class="barre_recherche">
                            <i class="fa-solid fa-search"></i><input type="text" name="search" placeholder="Rechercher un groupe...">
                        </div>
                        <div class="Filtre">
                            <label for="">Filtre :</label>
                            <select name="filtre">
                                <option value="" selected>Toutes les formations</option>
                                <option value="1">ANGLAIS DE SPÉCIALITÉ VOYAGE ET TOURISME</option>
                                <option value="2">FRET AÉRIEN</option>
                                <option value="3">BILLETERIE-TRANSPORT AÉRIEN ET TOURISME</option>
                                <option value="4">PERSONNEL NAVIGANT COMMERCIAL</option>
                                <option value="5">LOGICIELS DE RESERVATION GDS AMADEUS / SABRE / GALILEO</option>
                                <option value="6">AGENT DE VOYAGE SPÉCIALISÉ DIGITAL MARKETING</option>
                            </select>
                        </div>
                    </div>
                </div>

                <table>
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>NOM DU GROUPE</th>
                            <th>FORMATION ASSOCIÉE</th>
                            <th>MEMBRES</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Groupe Anglais de Spécialité - Promotion 2026</td>
                            <td>ANGLAIS DE SPÉCIALITÉ VOYAGE ET TOURISME</td>
                            <td>20 apprenants</td>
                            <td class="contenu_cours"><a href="{{route('Admin.update-groups')}}"><i class="fa-solid fa-pen-to-square"></i> Modifier</a></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Groupe Fret Aérien - Session Intensif</td>
                            <td>FRET AÉRIEN</td>
                            <td>15 apprenants</td>
                            <td class="contenu_cours"><a href="{{route('Admin.update-groups')}}"><i class="fa-solid fa-pen-to-square"></i> Modifier</a></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Groupe Billetterie & Transport - Cohorte 1</td>
                            <td>BILLETERIE-TRANSPORT AÉRIEN ET TOURISME</td>
                            <td>12 apprenants</td>
                            <td class="contenu_cours"><a href="{{route('Admin.update-groups')}}"><i class="fa-solid fa-pen-to-square"></i> Modifier</a></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Groupe GDS Amadeus - Expert</td>
                            <td>LOGICIELS DE RESERVATION GDS AMADEUS / SABRE / GALILEO</td>
                            <td>18 apprenants</td>
                            <td class="contenu_cours"><a href="{{route('Admin.update-groups')}}"><i class="fa-solid fa-pen-to-square"></i> Modifier</a></td>
                        </tr>
                    </tbody>
                </table>

                <!-- Pagination -->
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
