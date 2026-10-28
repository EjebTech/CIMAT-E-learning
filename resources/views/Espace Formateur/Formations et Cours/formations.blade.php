@extends('template-tecaher')
@section('content-teacher')
    <main>
        <div class="top">
            <div class="titre_et_desc">
                <h2>Liste des formations</h2>
                <p>Les formations auxquelles vous êtes affiliées.</p>
            </div>
            <div class="recherche_filtre">
                <div class="barre_recherche">
                    <i class="fa-solid fa-search"></i><input type="text" name="search" placeholder="Rechercher une formation...">
                </div>
            </div>
        </div>

        <hr>
        <div class="grid_content">
            <div class="element">
                <div class="image">
                    <img src="{{asset('Elements/images/cours/british-flag-union-3840x2160-9445.jpg')}}" alt="image du module">
                </div>
                <div class="infos_cours">
                    <p class="titre">ANGLAIS DE SPÉCIALITÉ VOYAGE ET TOURISME</p>

                </div>
            </div>

            <div class="element">
                <div class="image">
                    <img src="{{asset('Elements/images/cours/OIP-3839051582.jpg')}}" alt="">
                </div>
                <div class="infos_cours">
                    <p class="titre">FRET AÉRIEN</p>

                </div>
            </div>


        </div>
    </main>
@endsection
