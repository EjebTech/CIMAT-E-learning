@extends('menu-admin')

@section('content')
        <section class="dashboard">
            <div class="header_actions_container">
                <div class="dashboard_header_top">
                    <h2>Gestion des Administrateurs</h2>
                    <p>Gérez les comptes administrateurs et leurs autorisations d'accès au système.</p>
                </div>
                <div class="boutons_action_groupe">
                    <a href="{{route('Admin.insert-admin')}}" class="btn_ajout_unique"><i class="fa-solid fa-plus"></i> Ajouter un administrateur</a>
                </div>
            </div>

            <div class="liste">
                <h3 class="section_title"><i class="fa-solid fa-user-shield"></i> Liste des administrateurs</h3>
                <table>
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>NOM & PRÉNOMS</th>
                            <th>EMAIL</th>
                            <th>TELEPHONE</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Komptech Admin</td>
                            <td>admin@komptech-cimat.net</td>
                            <td>+225 0700000001</td>
                            <td class="contenu_cours"><a href="{{route('Admin.update-admin')}}"><i class="fa-solid fa-pen-to-square"></i> Modifier</a></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Kouassi Jean</td>
                            <td>j.kouassi@komptech-cimat.net</td>
                            <td>+225 0500000002</td>
                            <td class="contenu_cours"><a href="{{route('Admin.update-admin')}}"><i class="fa-solid fa-pen-to-square"></i> Modifier</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>


@endsection
