@extends('template-student')

@section('content-student')
    <main>
        <div class="top">
            <div class="titre_et_desc">
                <h2>Liste des cours</h2>
                <p>Consultez les modules dispensés par nos formateurs.</p>
            </div>
            <div class="recherche_filtre">
                <div class="barre_recherche">
                    <i class="fa-solid fa-search"></i><input type="text" name="search" placeholder="Rechercher un cours...">
                </div>
                <div class="Filtre">
                    <label for="">Filtre :</label>
                    <select name="filtre">
                        <option value="" selected>Toutes les formations</option>
                        <option value="">ANGLAIS DE SPÉCIALITÉ VOYAGE ET TOURISME</option>
                        <option value="">FRET AÉRIEN</option>
                    </select>
                </div>
            </div>
        </div>
        <hr>
        <div class="grid_content cours_apprenant">


            <div class="element">
                <div class="image">
                    <img src="{{asset('Elements/images/cours/british-flag-union-3840x2160-9445.jpg')}}" alt="Phraséologie Standardisée">
                    <p class="nom_cours">ANGLAIS DE SPÉCIALITÉ VOYAGE ET TOURISME</p>
                </div>
                <div class="infos_cours">
                    <p class="titre">PHRASÉOLOGIE STANDARDISÉE DE L'AVIATION</p>
                    <p class="description">Maîtrise du vocabulaire technique aéronautique, apprentissage des termes réglementaires de l'aviation civile et entraînement intensif à la prononciation des annonces au micro.</p>
                </div>
                <hr>
                <div class="infos_formateur">
                    <p class="initiales_formateur">JD</p>
                    <section>
                        <p class="nom_formateur">John Doe</p>
                    </section>
                </div>
            </div>


            <div class="element">
                <div class="image">
                    <img src="{{asset('Elements/images/cours/premium_photo-1718674394245-9f270c5fd2b3.avif')}}" alt="Traitement du Fret">
                    <p class="nom_cours">FRET AÉRIEN</p>
                </div>
                <div class="infos_cours">
                    <p class="titre">TRAITEMENT ET DOCUMENTATION DES MARCHANDISES</p>
                    <p class="description">Gestion administrative des expéditions aériennes, procédures de réception de la cargaison et maîtrise complète du remplissage des Lettres de Transport Aérien (LTA / AWB).</p>
                </div>
                <hr>
                <div class="infos_formateur">
                    <p class="initiales_formateur">CC</p>
                    <section>
                        <p class="nom_formateur">Charles Clovanny</p>
                    </section>
                </div>
            </div>


            <div class="element">
                <div class="image">
                    <img src="{{asset('Elements/images/cours/world-map-atlas-1920x1080-16642.jpg')}}" alt="Calcul Tarifaire Fret">
                    <p class="nom_cours">FRET AÉRIEN</p>
                </div>
                <div class="infos_cours">
                    <p class="titre">CALCUL TARIFAIRE DU FRET</p>
                    <p class="description">Maîtrise des règles et grilles IATA. Apprenez à déterminer le poids taxable, à appliquer les tarifs généraux et spécifiques, et à établir des devis d'expédition précis.</p>
                </div>
                <hr>
                <div class="infos_formateur">
                    <p class="initiales_formateur">CC</p>
                    <section>
                        <p class="nom_formateur">Charles Clovanny</p>
                    </section>
                </div>
            </div>


            <div class="element">
                <div class="image">
                    <img src="{{asset('Elements/images/cours/microsoft-office-1920x1080-12053.jpg')}}" alt="Anglais Accueil Client">
                    <p class="nom_cours">ANGLAIS DE SPÉCIALITÉ VOYAGE ET TOURISME</p>
                </div>
                <div class="infos_cours">
                    <p class="titre">ANGLAIS DE L'ACCUEIL ET DU SERVICE CLIENT</p>
                    <p class="description">Perfectionnement de l'expression orale et écrite pour l'accueil des passagers, la gestion des demandes au comptoir, l'orientation et la résolution des litiges en anglais.</p>
                </div>
                <hr>
                <div class="infos_formateur">
                    <p class="initiales_formateur">JD</p>
                    <section>
                        <p class="nom_formateur">John Doe</p>
                    </section>
                </div>
            </div>


            <div class="element">
                <div class="image">
                    <img src="{{asset('Elements/images/cours/7407421c-8cb9-47ec-8f5f-86a2a94ca0cb.jpg')}}" alt="Marchandises Dangereuses">
                    <p class="nom_cours">FRET AÉRIEN</p>
                </div>
                <div class="infos_cours">
                    <p class="titre">RÉGLEMENTATION DES MARCHANDISES DANGEREUSES (DGR)</p>
                    <p class="description">Identification, classification, emballage et étiquetage des matières dangereuses transportées par voie aérienne selon les normes strictes de sécurité IATA.</p>
                </div>
                <hr>
                <div class="infos_formateur">
                    <p class="initiales_formateur">BG</p>
                    <section>
                        <p class="nom_formateur">Blehoue Gervais</p>
                    </section>
                </div>
            </div>


            <div class="element">
                <div class="image">
                    <img src="{{asset('Elements/images/cours/british-flag-union-3840x2160-9445.jpg')}}" alt="Anglais Billetrie">
                    <p class="nom_cours">ANGLAIS DE SPÉCIALITÉ VOYAGE ET TOURISME</p>
                </div>
                <div class="infos_cours">
                    <p class="titre">ANGLAIS APPLIQUÉ À LA BILLETTERIE ET AUX RÉSERVATIONS</p>
                    <p class="description">Vocabulaire commercial et rédactions professionnelles pour le traitement des réservations, l'explication des conditions tarifaires et le suivi des demandes clients.</p>
                </div>
                <hr>
                <div class="infos_formateur">
                    <p class="initiales_formateur">AF</p>
                    <section>
                        <p class="nom_formateur">Antibo Faga</p>
                    </section>
                </div>
            </div>

        </div>


        <div class="pagination">
            <div class="pages_links">
                <a href="#" class="btn_page"><i class="fa-solid fa-angle-left"></i> Précédent</a>
                <a href="#" class="btn_page">1</a>
                <a href="#" class="btn_page">Suivant <i class="fa-solid fa-angle-right"></i></a>
            </div>
        </div>
    </main>
@endsection

