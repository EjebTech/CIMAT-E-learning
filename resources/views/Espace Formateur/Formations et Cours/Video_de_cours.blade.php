@extends('template-tecaher')
@section('content-teacher')
    <main>
        <div class="top">
            <div class="titre_et_desc">
                <h2>Liste des vidéos de cours</h2>
                <p>Consultez la liste des vidéos préparée pour vos étudiants.</p>
            </div>
            <div class="recherche_filtre">
                <div class="barre_recherche">
                    <i class="fa-solid fa-search"></i><input type="text" name="search" placeholder="Rechercher une vidéo...">
                </div>
                <div class="Filtre">
                    <label for="">Filtre :</label>
                    <select name="filtre">
                        <option value="" selected>Toutes les vidéos</option>
                        <option value="">ANGLAIS DE SPÉCIALITÉ VOYAGE ET TOURISME</option>
                        <option value="">FRET AÉRIEN</option>
                    </select>
                </div>
            </div>
            <a class="btn_ajout" href="{{route('Teacher.insert-video')}}">Ajouter une vidéo</a>
        </div>

        <hr>
        <div class="grid_content">
            <iframe style="border-radius: var(--global-radius);" width="560" height="315" src="https://www.youtube.com/embed/uX5uBPHxKD4?si=EbNQHyDgG25Skwu5" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            <iframe style="border-radius: var(--global-radius);" width="560" height="315" src="https://www.youtube.com/embed/65kQhuYVTuI?si=_oEwedWhDjg-g5n9" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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
