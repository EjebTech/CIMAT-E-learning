@extends('template-admin')


@section('content')
    <section class="dashboard dashboard_admin">
        <div class="statistiques">

            <div class="stat">
                <div class="chiffres">
                    <i class="fa-solid fa-user-graduate"></i>
                    <p>7</p>
                </div>
                <div class="titre">
                    <h3>PARTICIPANTS INSCRITS</h3>
                    <a href="{{route('Admin.list-student')}}">Parcourir</a>
                </div>
            </div>
            <div class="stat">
                <div class="chiffres">
                    <i class="fa-solid fa-book"></i>
                    <p>7</p>
                </div>
                <div class="titre">
                    <h3>NOMBRE DE FORMATIONS</h3>
                    <a href="{{route('Admin.programs')}}">Parcourir</a>
                </div>
            </div>
            <div class="stat">
                <div class="chiffres">
                    <i class="fa-solid fa-book-open"></i>
                    <p>4</p>
                </div>
                <div class="titre">
                    <h3>NOMBRE DE COURS</h3>
                    <a href="{{route('Admin.courses')}}">Parcourir</a>
                </div>
            </div>
            <div class="stat">
                <div class="chiffres">
                    <i class="fa-solid fa-users-between-lines"></i>
                    <p>9</p>
                </div>
                <div class="titre">
                    <h3>GROUPES</h3>
                    <a href="{{route('Admin.groups')}}">Parcourir</a>
                </div>
            </div>
            <div class="stat">
                <div class="chiffres">
                    <i class="fa-solid fa-person-chalkboard"></i>
                    <p>13</p>
                </div>
                <div class="titre">
                    <h3>FORMATEURS INSCRITS</h3>
                    <a href="{{route('Admin.list-teacher')}}">Parcourir</a>
                </div>
            </div>

        </div>
        <div class="flux_activite">
            <div class="flux_header">
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
                        <td>
                            <span class="event_inscription">
                                <i class="fa-solid fa-user-plus"></i> Inscription
                            </span>
                        </td>
                        <td><strong>Jean Dupont</strong> s'est inscrit sur la plateforme</td>
                        <td><span class="role_tag role_participant">Participant</span></td>
                        <td>24 Fév 2026 - 14:32</td>
                    </tr>
                    <tr>
                        <td>
                            <span class="event_cours">
                                <i class="fa-solid fa-file-circle-plus"></i> Contenu
                            </span>
                        </td>
                        <td><strong>Marie Curie</strong> a publié un nouveau fichier de cours</td>
                        <td><span class="role_tag role_formateur">Formateur</span></td>
                        <td>24 Fév 2026 - 13:15</td>
                    </tr>
                    <tr>
                        <td>
                            <span class="event_connexion">
                                <i class="fa-solid fa-right-to-bracket"></i> Connexion
                            </span>
                        </td>
                        <td><strong>Komptech Admin</strong> s'est connecté au système</td>
                        <td><span class="role_tag role_admin">Administrateur</span></td>
                        <td>24 Fév 2026 - 11:00</td>
                    </tr>
                    <tr>
                        <td>
                            <span class="event_cours">
                                <i class="fa-solid fa-graduation-cap"></i> Formation
                            </span>
                        </td>
                        <td>Création de la formation <strong>"Développement Web Avancé"</strong></td>
                        <td><span class="role_tag role_admin">Administrateur</span></td>
                        <td>23 Fév 2026 - 16:45</td>
                    </tr>
                    <tr>
                        <td>
                            <span class="event_connexion">
                                <i class="fa-solid fa-right-to-bracket"></i> Connexion
                            </span>
                        </td>
                        <td><strong>Alexandre Martin</strong> s'est connecté</td>
                        <td><span class="role_tag role_participant">Participant</span></td>
                        <td>23 Fév 2026 - 10:20</td>
                    </tr>
                </tbody>
            </table>

        </div>

    </section>
@endsection
