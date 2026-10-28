@extends('template-student')
@section('content-student')
    <main>
        <div class="top">
            <section class="titre_description">
                <h2><i class="fa-solid fa-video"></i> Visioconférence</h2>
                <p>Accédez à vos sessions de formation en direct</p>
            </section>
            <div class="barre_recherche">
                <i class="fa-solid fa-search"></i><input type="text" name="search" placeholder="Rechercher une session...">
            </div>
        </div>
        <div class="Filtre">
            <div class="element_filtre"><a href="">Toutes</a></div>
            <div class="element_filtre"><a href="">Aujourd'hui</a></div>
            <div class="element_filtre"><a href="">Demain</a></div>
            <div class="element_filtre"><a href="">Cette semaine</a></div>
            <div class="element_filtre"><a href="">Ce mois-ci</a></div>
        </div>
        <div class="visio_liste">
            <div class="visio">
                <section class="infos">
                    <h3>Architecture logicielle moderne & Microservices</h3>
                    <p class="description">Découvrez les fondamentaux du découpage microservices, les protocoles de communication asynchrones (gRPC, Kafka) et la résilience en environnement cloud distribué.</p>
                    <p class="formateur"><b>Formateur : </b>Dr. Gaspard Cédric (Architecte Solutions Cloud)</p>
                    <div class="date_heure">
                        <p><span>Date :</span> 24 Octobre 2026      <span>| Heure et Durée :</span> 14:00 (Durée : 1h30)</p>
                    </div>
                </section>
                <section class="bouton_visio">
                    <img src="../../Elements/images/cours/premium_photo-1664297989345-f4ff2063b212.avif" alt="image du thème de la visio">
                    <a href=""><i class="fa-solid fa-video"></i> Assister à la visio</a>
                </section>
            </div>
            <div class="visio">
                <section class="infos">
                    <h3>Réglementation et Droit des Passagers Aériens</h3>
                    <p class="description">Analyse en ligne des droits des voyageurs (annulations, surbooking, indemnisations) et de la législation aéronautique internationale.</p>
                    <p class="formateur"><b>Formateur : </b>Dr. Gaspard Cédric (Architecte Solutions Cloud)</p>
                    <div class="date_heure">
                        <p><span>Date :</span> 24 Octobre 2026      <span>| Heure et Durée :</span> 14:00 (Durée : 1h30)</p>
                    </div>
                </section>
                <section class="bouton_visio">
                    <img src="../../Elements/images/cours/photo-1530521954074-e64f6810b32d.avif" alt="image du thème de la visio">
                    <a href=""><i class="fa-solid fa-video"></i> Assister à la visio</a>
                </section>
            </div>
            <div class="visio">
                <section class="infos">
                    <h3>Anglais Commercial & Vente de Prestations Touristiques</h3>
                    <p class="description">Jeux de rôle en visioconférence pour maîtriser l'argumentaire de vente, le traitement des réclamations et la négociation en anglais avec les clients.</p>
                    <p class="formateur"><b>Formateur : </b>Dr. Gaspard Cédric (Formateur en Anglais des Affaires & Hospitality)</p>
                    <div class="date_heure">
                        <p><span>Date :</span> 11 Novembre 2026      <span>| Heure et Durée :</span> 9:00 (Durée : 2h)</p>
                    </div>
                </section>
                <section class="bouton_visio">
                    <img src="../../Elements/images/cours/british-flag-union-3840x2160-9445.jpg" alt="image du thème de la visio">
                    <a href=""><i class="fa-solid fa-video"></i> Assister à la visio</a>
                </section>
            </div>

        </div>
    </main>
@endsection
