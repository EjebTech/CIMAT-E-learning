@extends('template-admin')

@section('content')
        <section class="dashboard">
            <div class="header_actions_container">
                <div class="dashboard_header_top">
                    <h2>Gestion des Participants</h2>
                    <p>Consultez la liste des apprenants inscrits et leurs informations de contact.</p>
                </div>
                <div class="boutons_action_groupe">
                    <a href="{{route('Admin.insert-student')}}" class="btn_ajout_unique"><i class="fa-solid fa-plus"></i> Inscrire un participant</a>
                </div>
            </div>

            <div class="liste">
                <h3 class="section_title"><i class="fa-solid fa-user-graduate"></i> Liste des participants inscrits</h3>
                <table>
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>NOM & PRÉNOMS</th>
                            <th>EMAIL</th>
                            <th>TÉLÉPHONE</th>
                            <th>GROUPE</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Jean Dupont</td>
                            <td>jean.dupont@email.com</td>
                            <td>+225 0708091011</td>
                            <td>Groupe Web 2026</td>
                            <td class="contenu_cours"><a href="{{route('Admin.update-student')}}"><i class="fa-solid fa-pen-to-square"></i> Modifier</a></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Kouamé Alice</td>
                            <td>alice.kouame@email.com</td>
                            <td>+225 0504030201</td>
                            <td>Groupe Anglais Débutant</td>
                            <td class="contenu_cours"><a href="{{route('Admin.update-student')}}"><i class="fa-solid fa-pen-to-square"></i> Modifier</a></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Aka Emmanuel</td>
                            <td>emmanuel.aka@email.com</td>
                            <td>+225 0102030405</td>
                            <td>Groupe Billetterie - Session 1</td>
                            <td class="contenu_cours"><a href="{{route('Admin.update-student')}}"><i class="fa-solid fa-pen-to-square"></i> Modifier</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </div>

@endsection
