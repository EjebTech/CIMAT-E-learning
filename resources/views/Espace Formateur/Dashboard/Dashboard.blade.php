@extends('template-tecaher')
@section('content-teacher')
    <main>
        <div class="grid_content_dashboard">
            <!-- BLOC STATISTIQUES EN HAUT -->
            <section class="statistiques">
                <div class="stat">
                    <div class="chiffres">
                        <i class="fa-solid fa-book"></i>
                    </div>
                    <div class="titre">
                        <h3>Nombre de cours</h3>
                        <p>7</p>
                        <a href="{{route('Teacher.courses')}}">Parcourir</a>
                    </div>
                </div>
                <div class="stat">
                    <div class="chiffres">
                        <i class="fa-solid fa-book"></i>
                    </div>
                    <div class="titre">
                        <h3>Formations</h3>
                        <p>7</p>
                        <a href="{{route('Teacher.programs')}}">Parcourir</a>
                    </div>
                </div>
                <div class="stat">
                    <div class="chiffres">
                        <i class="fa-solid fa-users-between-lines"></i>
                    </div>
                    <div class="titre">
                        <h3>Groupes</h3>
                        <p>9</p>
                        <a href="{{route('Teacher.groups')}}">Parcourir</a>
                    </div>
                </div>
                <div class="stat">
                    <div class="chiffres">
                        <i class="fa-solid fa-file"></i>
                    </div>
                    <div class="titre">
                        <h3>Fichiers de cours</h3>
                        <p>13</p>
                        <a href="{{route('Teacher.course-file')}}">Parcourir</a>
                    </div>
                </div>
                <div class="stat">
                    <div class="chiffres">
                        <i class="fa-solid fa-person"></i>
                    </div>
                    <div class="titre">
                        <h3>Apprenants inscrits</h3>
                        <p>13</p>
                        <a href="">Parcourir</a>
                    </div>
                </div>
            </section>

            <!-- BLOC 1 : FICHIERS RÉCENTS -->
            <section class="fichier_recents liste">
                <h3 class="section_title"><i class="fa-solid fa-file-lines"></i> Fichiers récents</h3>
                <table>
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>TITRE DU FICHIER</th>
                            <th>COURS</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Billeterie</td>
                            <td>Maîtrise des logiciels de réservation</td>
                            <td class="contenu_cours"><a href=""><i class="fa-solid fa-eye"></i> Voir le cours</a></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Anglais</td>
                            <td>Techniques d'expression</td>
                            <td class="contenu_cours"><a href=""><i class="fa-solid fa-eye"></i> Voir le cours</a></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Support PDF GDS</td>
                            <td>Introduction aux systèmes Amadeus</td>
                            <td class="contenu_cours"><a href=""><i class="fa-solid fa-eye"></i> Voir le cours</a></td>
                        </tr>
                    </tbody>
                </table>
            </section>

            <!-- BLOC 2 : MES GROUPES -->
            <section class="groupes liste">
                <h3 class="section_title"><i class="fa-solid fa-user-group"></i> Mes groupes</h3>
                <table>
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>NOM DU GROUPE</th>

                            <th>PARTICIPANTS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Groupe 1</td>


                            <td>3 participant(s)</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Groupe 2</td>


                            <td>2 participant(s)</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Groupe 3</td>


                            <td>3 participant(s)</td>
                        </tr>
                    </tbody>
                </table>
            </section>

            <section class="flux_activite">
                <div class="entete_flux_activite">
                    <h3><i class="fa-solid fa-clock-rotate-left"></i> Flux d'activités récents</h3>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>Type d'événement</th>
                            <th>Description</th>
                            <th>Rôle</th>
                            <th>Date & Heure</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><span class="type_evenement evenement_contenu"><i class="fa-solid fa-file-circle-plus"></i> Contenu</span></td>
                            <td><strong>Support PDF GDS</strong> ajouté aux fichiers du cours Amadeus</td>
                            <td><span class="role_formateur">Formateur</span></td>
                            <td>21 Oct 2026 - 09:40</td>
                        </tr>
                        <tr>
                            <td><span class="type_evenement evenement_evaluation"><i class="fa-solid fa-clipboard-check"></i> Évaluation</span></td>
                            <td>Nouvel exercice publié : <strong>Annonces micro en aérogare</strong></td>
                            <td><span class="role_formateur">Formateur</span></td>
                            <td>21 Oct 2026 - 08:55</td>
                        </tr>
                        <tr>
                            <td><span class="type_evenement evenement_visio"><i class="fa-solid fa-video"></i> Visioconférence</span></td>
                            <td>Session planifiée : <strong>Architecture logicielle moderne & Microservices</strong></td>
                            <td><span class="role_formateur">Formateur</span></td>
                            <td>20 Oct 2026 - 16:10</td>
                        </tr>
                    </tbody>
                </table>
            </section>

            <section class="sessions_visio_a_venir">
                <h3 class="titre_sessions_visio"><i class="fa-solid fa-calendar-days"></i> Prochaines sessions de visio</h3>
                <ul class="liste_sessions_visio">
                    <li class="session_visio">
                        <div class="infos_session_visio">
                            <h4>Architecture logicielle moderne & Microservices</h4>
                            <p><i class="fa-regular fa-calendar"></i> 24 octobre 2026</p>
                            <p><i class="fa-regular fa-clock"></i> 14:00 · Durée : 1h30</p>
                        </div>
                        <a class="bouton_session_visio" href="../Visioconférence/visio.html" aria-label="Organiser la session Architecture logicielle moderne et Microservices"><i class="fa-solid fa-video"></i></a>
                    </li>
                    <li class="session_visio">
                        <div class="infos_session_visio">
                            <h4>Anglais Commercial & Vente de Prestations Touristiques</h4>
                            <p><i class="fa-regular fa-calendar"></i> 11 novembre 2026</p>
                            <p><i class="fa-regular fa-clock"></i> 09:00 · Durée : 2h</p>
                        </div>
                        <a class="bouton_session_visio" href="../Visioconférence/visio.html" aria-label="Organiser la session Anglais Commercial et Vente de Prestations Touristiques"><i class="fa-solid fa-video"></i></a>
                    </li>
                </ul>
            </section>
        </div>
    </main>
@endsection
