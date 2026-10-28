@extends('template-student')
@section('content-student')
    <main>
        <div class="top">
            <div class="titre_et_desc">
                <h2>Liste des formateurs</h2>
                <p>Consultez et recherchez l'ensemble des formateurs référencés.</p>
            </div>
            <div class="recherche_filtre">
                <div class="barre_recherche">
                    <i class="fa-solid fa-search"></i><input type="text" name="search" placeholder="Rechercher un formateur...">
                </div>
                <div class="Filtre">
                    <label for="">Filtre par formations :</label>
                    <select name="filtre">
                        <option value="" selected>Toutes les formations</option>
                        <option value="">Anglais</option>
                        <option value="">Informatique</option>
                        <option value="">Billeterie</option>
                        <option value="">Art plastique</option>
                        <option value="">Histoire-Géographie</option>
                    </select>
                </div>
            </div>
        </div>
        <hr>
        <div class="grid_content">
            <div class="element">
                <div class="image">
                    <img src="../../Elements/images/formateurs/photo-1783012039560-5690190a9b9b.avif" alt="image du module">

                </div>
                <div class="infos_formateur">

                    <p class="initiales_formateur">CC</p>
                    <section>
                        <p class="nom_formateur">Charles Clovanny</p>
                        <p class="specialite_formateur">Spécialiste Billetterie & Tarification IATA</p>
                    </section>

                </div>
                <hr>
                <section class="infos_formateur">
                    <i class="fa-solid fa-envelope"></i> <p>CharlesClovanny@gmail.com</p>

                    <i class="fa-solid fa-phone"></i> <p>+225 xxxxxxxxx</p>
                </section>
            </div>
            <div class="element">
                <div class="image">
                    <img src="../../Elements/images/formateurs/istockphoto-2218333101-612x612.webp" alt="image du module">

                </div>
                <div class="infos_formateur">

                    <p class="initiales_formateur">HE</p>
                    <section>
                        <p class="nom_formateur">Hans Emmanuel</p>
                        <p class="specialite_formateur">Enseignant en Arts Appliqués</p>
                    </section>

                </div>
                <hr>
                <section class="infos_formateur">
                    <i class="fa-solid fa-envelope"></i> <p>HansEmmanuel@gmail.com</p>

                    <i class="fa-solid fa-phone"></i> <p>+225 xxxxxxxxx</p>
                </section>
            </div>
            <div class="element">
                <div class="image">
                    <img src="../../Elements/images/formateurs/photo-1632765854612-9b02b6ec2b15.avif" alt="image du module">

                </div>
                <div class="infos_formateur">

                    <p class="initiales_formateur">AF</p>
                    <section>
                        <p class="nom_formateur">Antibo Faga</p>
                        <p class="specialite_formateur">Enseignante-Chercheuse en Géographie du Tourisme</p>
                    </section>

                </div>
                <hr>
                <section class="infos_formateur">
                    <i class="fa-solid fa-envelope"></i> <p>AntiboFaga@gmail.com</p>

                    <i class="fa-solid fa-phone"></i> <p>+225 xxxxxxxxx</p>
                </section>
            </div>
            <div class="element">
                <div class="image">
                    <img src="../../Elements/images/formateurs/istockphoto-2192499195-612x612.webp" alt="image du module">

                </div>
                <div class="infos_formateur">

                    <p class="initiales_formateur">BG</p>
                    <section>
                        <p class="nom_formateur">Blehoue Gervais</p>
                        <p class="specialite_formateur">Formateur spécialisé en bureautique professionnelle</p>
                    </section>

                </div>
                <hr>
                <section class="infos_formateur">
                    <i class="fa-solid fa-envelope"></i> <p>BlehoueGervais@gmail.com</p>

                    <i class="fa-solid fa-phone"></i> <p>+225 xxxxxxxxx</p>
                </section>
            </div>


        </div>
    </main>
@endsection
