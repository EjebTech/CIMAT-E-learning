@extends('template-admin')

@section('content')
        <section class="dashboard">
            <div class="header_actions_container">
                <div class="dashboard_header_top">
                    <h2>Gestion des Formateurs</h2>
                    <p>Consultez la liste des formateurs enregistrés et leurs domaines d'expertise.</p>
                </div>
                <div class="boutons_action_groupe">
                    <a href="{{route('Admin.insert-teacher')}}" class="btn_ajout_unique"><i class="fa-solid fa-plus"></i> Ajouter un formateur</a>
                </div>
            </div>

            <!-- Grille de cartes pour les formateurs -->
            <div class="grid_content">
                <div class="element">
                    <div class="image">
                        <img src="../../Elements/images/formateur1.jpg" alt="Photo Formateur">
                        <span class="nom_cours">Informatique</span>
                    </div>
                    <div class="infos_formateur">
                        <div class="initiales_formateur">MC</div>
                        <div>
                            <p class="nom_formateur">Marie Curie</p>
                            <p class="specialite_formateur">Bases de données & SQL</p>
                        </div>
                    </div>
                    <hr>
                    <div class="infos_cours">
                        <p class="description"><i class="fa-solid fa-envelope"></i> m.curie@komptech-cimat.net</p>
                        <p class="description"><i class="fa-solid fa-phone"></i> +225 0701020304</p>
                    </div>
                    <div class="contenu_cours" style="padding: 15px; text-align: center;">
                        <a href="{{route('Admin.update-teacher')}}"><i class="fa-solid fa-pen-to-square"></i> Modifier le profil</a>
                    </div>
                </div>

                <div class="element">
                    <div class="image">
                        <img src="../../Elements/images/formateur2.jpg" alt="Photo Formateur">
                        <span class="nom_cours">Anglais</span>
                    </div>
                    <div class="infos_formateur">
                        <div class="initiales_formateur">AM</div>
                        <div>
                            <p class="nom_formateur">Alexandre Martin</p>
                            <p class="specialite_formateur">Anglais des affaires & Oral</p>
                        </div>
                    </div>
                    <hr>
                    <div class="infos_cours">
                        <p class="description"><i class="fa-solid fa-envelope"></i> a.martin@komptech-cimat.net</p>
                        <p class="description"><i class="fa-solid fa-phone"></i> +225 0505060708</p>
                    </div>
                    <div class="contenu_cours" style="padding: 15px; text-align: center;">
                        <a href="{{route('Admin.update-teacher')}}"><i class="fa-solid fa-pen-to-square"></i> Modifier le profil</a>
                    </div>
                </div>

                <div class="element">
                    <div class="image">
                        <img src="../../Elements/images/formateur3.jpg" alt="Photo Formateur">
                        <span class="nom_cours">Billetterie</span>
                    </div>
                    <div class="infos_formateur">
                        <div class="initiales_formateur">BE</div>
                        <div>
                            <p class="nom_formateur">Barou Edmond</p>
                            <p class="specialite_formateur">Systèmes de Réservation & Billetterie</p>
                        </div>
                    </div>
                    <hr>
                    <div class="infos_cours">
                        <p class="description"><i class="fa-solid fa-envelope"></i> e.barou@komptech-cimat.net</p>
                        <p class="description"><i class="fa-solid fa-phone"></i> +225 0102030405</p>
                    </div>
                    <div class="contenu_cours" style="padding: 15px; text-align: center;">
                        <a href="{{route('Admin.update-teacher')}}"><i class="fa-solid fa-pen-to-square"></i> Modifier le profil</a>
                    </div>
                </div>
            </div>
        </section>

@endsection
