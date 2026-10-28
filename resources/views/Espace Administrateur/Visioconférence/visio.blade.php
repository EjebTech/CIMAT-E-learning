@extends('template-admin')
@section('content')
        <section class="dashboard">
            <div class="header_actions_container">
                <div class="dashboard_header_top">
                    <h2>Sessions de Visioconférence</h2>
                    <p>Planifiez et rejoignez les cours en direct avec vos formateurs et groupes.</p>
                </div>
                <div class="boutons_action_groupe">
                    <a href="{{route('Admin.organize-videoconference')}}" class="btn_ajout_unique"><i class="fa-solid fa-video"></i> Planifier une visio</a>
                </div>
            </div>

            <div class="liste">
                <h3 class="section_title"><i class="fa-solid fa-tower-broadcast"></i> Sessions en direct et programmées</h3>
                <table>
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>INTITULÉ DE LA SESSION</th>
                            <th>FORMATEUR</th>
                            <th>DATE & HEURE</th>
                            <th>GROUPE</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Atelier pratique de Billetterie en ligne</td>
                            <td>Marie Curie</td>
                            <td>Aujourd'hui à 15:00</td>
                            <td>Groupe Web 2026</td>
                            <td class="contenu_cours"><a href="#"><i class="fa-solid fa-video"></i> Rejoindre</a></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Conversation et prononciation anglaise</td>
                            <td>Alexandre Martin</td>
                            <td>Demain à 10:30</td>
                            <td>Groupe Anglais</td>
                            <td class="contenu_cours"><a href="#"> Programmé</a></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Correction des requêtes SQL et indexation</td>
                            <td>Marie Curie</td>
                            <td>28 Fév 2026 à 14:00</td>
                            <td>Groupe Informatique</td>
                            <td class="contenu_cours"><a href="#"> Programmé</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
@endsection
