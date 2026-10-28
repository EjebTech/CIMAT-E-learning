@extends('template-admin')

@section('content')
        <!-- Contenu principal -->
        <section class="dashboard">
            <div class="header_actions_container">
                <div class="dashboard_header_top">
                    <h2>Affectation des Apprenants aux Groupes</h2>
                    <p>Cochez les apprenants souhaités puis choisissez le groupe d'affectation.</p>
                </div>
                <div class="boutons_action_groupe">
                    <a href="{{route('Admin.groups')}}" class="btn_ajout_unique"><i class="fa-solid fa-users"></i> Voir la liste des groupes</a>
                </div>
            </div>

            <!-- FORMULAIRE PRINCIPAL DE SÉLECTION ET D'AFFECTATION -->
            <form action="" method="post">
                <div class="barre_attribution_groupe">
                    <div class="select_groupe_container">
                        <label for="groupe_destination"><strong>Groupe cible :</strong></label>
                        <select name="groupe_id" id="groupe_destination" required>
                            <option value="" disabled selected>Sélectionner un groupe d'accueil...</option>
                            <option value="1">Groupe Anglais de Spécialité - Promotion 2026</option>
                            <option value="2">Groupe Fret Aérien - Session Intensif</option>
                            <option value="3">Groupe Billetterie & Transport - Cohorte 1</option>
                            <option value="4">Groupe GDS Amadeus - Expert</option>
                        </select>
                    </div>
                    <button type="submit" class="btn_attribuer">
                        <i class="fa-solid fa-user-plus"></i> Ajouter les candidats cochés
                    </button>
                </div>

                <div class="liste">
                    <div class="top">
                        <h3 class="section_title"><i class="fa-solid fa-user-graduate"></i> Apprenants disponibles</h3>

                    </div>

                    <table>
                        <thead>
                            <tr>
                                <th style="width: 40px; text-align: center;">CHOIX</th>
                                <th>N°</th>
                                <th>NOM & PRÉNOMS</th>
                                <th>EMAIL</th>
                                <th>FORMATION INSCRITE</th>
                                <th>GROUPE ACTUEL</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="text-align: center;">
                                    <input type="checkbox" name="etudiants[]" value="1">
                                </td>
                                <td>1</td>
                                <td>KOUASSI Jean-Emmanuel</td>
                                <td>j.kouassi@cimat-student.ci</td>
                                <td>ANGLAIS DE SPÉCIALITÉ VOYAGE ET TOURISME</td>
                                <td><em>Aucun groupe</em></td>
                            </tr>
                            <tr>
                                <td style="text-align: center;">
                                    <input type="checkbox" name="etudiants[]" value="2">
                                </td>
                                <td>2</td>
                                <td>DIABATÉ Aminata</td>
                                <td>a.diabate@cimat-student.ci</td>
                                <td>FRET AÉRIEN</td>
                                <td><em>Aucun groupe</em></td>
                            </tr>
                            <tr>
                                <td style="text-align: center;">
                                    <input type="checkbox" name="etudiants[]" value="3">
                                </td>
                                <td>3</td>
                                <td>YAPO Marc-Antoine</td>
                                <td>m.yapo@cimat-student.ci</td>
                                <td>BILLETERIE-TRANSPORT AÉRIEN ET TOURISME</td>
                                <td>Groupe Billetterie - Cohorte 1</td>
                            </tr>
                            <tr>
                                <td style="text-align: center;">
                                    <input type="checkbox" name="etudiants[]" value="4">
                                </td>
                                <td>4</td>
                                <td>BAMBA Fatoumata</td>
                                <td>f.bamba@cimat-student.ci</td>
                                <td>LOGICIELS DE RESERVATION GDS AMADEUS / SABRE / GALILEO</td>
                                <td><em>Aucun groupe</em></td>
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
            </form>
        </section>
@endsection
