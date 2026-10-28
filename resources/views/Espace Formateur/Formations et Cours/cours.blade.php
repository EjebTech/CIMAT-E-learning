@extends('template-tecaher')
@section('content-teacher')
    <main>
        <div class="top">
            <div class="titre_et_desc">
                <h2>Liste des cours</h2>
                <p>Consultez les modules et formations dispensés par vous.</p>
            </div>
            <div class="recherche_filtre">
                <div class="barre_recherche">
                    <i class="fa-solid fa-search"></i><input type="text" name="search" placeholder="Rechercher un cours">
                </div>
            </div>
            <a class="btn_ajout" href="{{route('Teacher.insert-courses')}}">Ajouter un cours</a>
        </div>

        <hr>
        <div class="grid_content">
            <div class="element">
                <div class="image">
                    <img src="{{asset('Elements/images/cours/british-flag-union-3840x2160-9445.jpg')}}" alt="image du module">
                    <p class="nom_cours">Anglais de spécialité voyage et tourisme</p>
                </div>
                <div class="infos_cours">
                    <p class="titre">PHRASÉOLOGIE STANDARDISÉE DE L'AVIATION</p>
                    <p class="description">Perfectionnement de l'anglais professionnel à travers le vocabulaire technique, la phraséologie standardisée de l'aviation et la pratique des annonces micro.</p>
                </div>
            </div>

            <div class="element">
                <div class="image">
                    <img src="{{asset('Elements/images/cours/OIP-1322717868.jpg')}}" alt="">
                    <p class="nom_cours">Fret aérien</p>
                </div>
                <div class="infos_cours">
                    <p class="titre">TRAITEMENT ET DOCUMENTATION DES MARCHANDISES</p>
                    <p class="description">Maîtrise des outils informatiques et des procédures appliquées à la création de tableaux de suivi de vols et à la gestion de plannings de fret.</p>
                </div>
            </div>

            <div class="element">
                <div class="image">
                    <img src="{{asset('Elements/images/cours/world-map-atlas-1920x1080-16642.jpg')}}" alt="image du module">
                    <p class="nom_cours">Fret aérien</p>
                </div>
                <div class="infos_cours">
                    <p class="titre">CALCUL TARIFAIRE DU FRET.</p>
                    <p class="description">Maîtrise des méthodes de calcul IATA pour le transport aérien. Apprenez à déterminer le poids taxable, à appliquer les tarifs généraux et spécifiques, et à établir des devis précis pour l'expédition de marchandises.</p>
                </div>
            </div>

            <div class="element">
                <div class="image">
                    <img src="{{asset('Elements/images/cours/7407421c-8cb9-47ec-8f5f-86a2a94ca0cb.jpg')}}" alt="">
                    <p class="nom_cours">Anglais de spécialité voyage et tourisme</p>
                </div>
                <div class="infos_cours">
                    <p class="titre">ANGLAIS DE L'ACCUEUIL ET DU SERVICE CLIENT</p>
                    <p class="description">Perfectionnement de l'expression orale et écrite pour l'accueil des clients en milieu aéroportuaire et touristique. Apprenez à gérer les demandes des passagers, à orienter la clientèle et à résoudre efficacement les situations d'attente ou de réclamation en anglais.</p>
                </div>
            </div>


            </div>
        </div>
        <div class="pagination">
            <div class="pages_links">
                <a href="#" class="btn_page"><i class="fa-solid fa-angle-left"></i> Précédent</a>
                <a href="#" class="btn_page active">1</a>
                <a href="#" class="btn_page">Suivant <i class="fa-solid fa-angle-right"></i></a>
            </div>
        </div>
    </main>
@endsection
