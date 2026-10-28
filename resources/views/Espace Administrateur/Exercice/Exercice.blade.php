@extends('template-admin')

@section('content')
        <!-- Contenu principal -->
    <section class="dashboard dashboard_tableaux_admin">
        <div class="header_actions_container">
            <div class="dashboard_header_top">
                <h2>Gestion des Exercices</h2>
                <p>Consultez et suivez les exercices pratiques proposés aux apprenants.</p>
            </div>
            <div class="boutons_action_groupe">
                <a href="../Exercice/ajout_exercice.html" class="btn_ajout_unique"><i class="fa-solid fa-plus"></i> Ajouter un exercice</a>
            </div>
        </div>

        <!-- TABLEAU 1 : LISTE DES EXERCICES -->
        <div class="liste">
            <div class="top">
                <h3 class="section_title"><i class="fa-solid fa-laptop-code"></i> Liste des exercices pratiques</h3>
                <div class="recherche_filtre">
                    <div class="barre_recherche">
                        <i class="fa-solid fa-search"></i><input type="text" name="search_exercice" placeholder="Rechercher un exercice...">
                    </div>
                    <div class="Filtre">
                        <label for="">Filtre :</label>
                        <select name="filtre_exercice">
                            <option value="" selected>Toutes les formations</option>
                            <option value="1">ANGLAIS DE SPÉCIALITÉ VOYAGE ET TOURISME</option>
                            <option value="2">FRET AÉRIEN</option>
                            <option value="3">BILLETERIE-TRANSPORT AÉRIEN ET TOURISME</option>
                            <option value="4">PERSONNEL NAVIGANT COMMERCIAL</option>
                            <option value="5">LOGICIELS DE RESERVATION GDS AMADEUS / SABRE / GALILEO</option>
                            <option value="6">AGENT DE VOYAGE SPÉCIALISÉ DIGITAL MARKETING</option>
                        </select>
                    </div>
                </div>
            </div>

            <table>
                <thead>
                    <tr>
                        <th>N°</th>
                        <th>FORMATION</th>
                        <th>COURS</th>
                        <th>INTITULÉ DE L'EXERCICE</th>
                        <th>ÉCHÉANCE</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>ANGLAIS DE SPÉCIALITÉ VOYAGE ET TOURISME</td>
                        <td>PHRASÉOLOGIE STANDARDISÉE DE L'AVIATION</td>
                        <td>Mise en situation : Annonces micro en aérogare</td>
                        <td>28 Fév 2026</td>
                        <td class="contenu_cours"><a href="modif_exercice.html"><i class="fa-solid fa-pen-to-square"></i> Modifier</a></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>FRET AÉRIEN</td>
                        <td>TRAITEMENT ET DOCUMENTATION DES MARCHANDISES</td>
                        <td>Établissement d'une Lettre de Transport Aérien (LTA)</td>
                        <td>02 Mar 2026</td>
                        <td class="contenu_cours"><a href="modif_exercice.html"><i class="fa-solid fa-pen-to-square"></i> Modifier</a></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>FRET AÉRIEN</td>
                        <td>CALCUL TARIFAIRE DU FRET</td>
                        <td>Détermination du poids taxable et calcul de devis</td>
                        <td>05 Mar 2026</td>
                        <td class="contenu_cours"><a href="modif_exercice.html"><i class="fa-solid fa-pen-to-square"></i> Modifier</a></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>LOGICIELS DE RESERVATION GDS AMADEUS</td>
                        <td>RÉSERVATION ET ENCODAGE AMADEUS</td>
                        <td>Création d'un dossier PNR et tarification itinéraire</td>
                        <td>10 Mar 2026</td>
                        <td class="contenu_cours"><a href="modif_exercice.html"><i class="fa-solid fa-pen-to-square"></i> Modifier</a></td>
                    </tr>
                </tbody>
            </table>

            <div class="pagination">
                <div class="pages_links">
                    <a href="#" class="btn_page "><i class="fa-solid fa-angle-left"></i> Précédent</a>
                    <a href="#" class="btn_page active">1</a>
                    <a href="#" class="btn_page">Suivant <i class="fa-solid fa-angle-right"></i></a>
                </div>
            </div>
        </div>

    </section>
@endsection

