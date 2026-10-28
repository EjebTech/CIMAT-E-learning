@extends('template-admin')

@section('content')
        <section class="dashboard dashboard_tableaux_admin">
            <div class="header_actions_container">
                <div class="dashboard_header_top">
                    <h2>Bibliothèque des Fichiers de Cours</h2>
                    <p>Téléchargez, consultez et gérez l'ensemble des supports pédagogiques partagés.</p>
                </div>
                <div class="boutons_action_groupe">
                    <a href="{{route('Admin.insert-couses-file')}}" class="btn_ajout_unique"><i class="fa-solid fa-cloud-arrow-up"></i> Importer un fichier</a>
                </div>
            </div>

            <div class="liste">
                <div class="top">
                    <h3 class="section_title"><i class="fa-solid fa-folder-open"></i> Liste des fichiers disponibles</h3>
                    <div class="recherche_filtre">
                        <div class="barre_recherche">
                            <i class="fa-solid fa-search"></i><input type="text" name="search" placeholder="Rechercher un fichier...">
                        </div>
                        <div class="Filtre">
                            <label for="">Filtre :</label>
                            <select name="filtre">
                                <option value="" selected>Toutes les formations</option>
                                <option value="1">ANGLAIS DE SPÉCIALITÉ VOYAGE ET TOURISME</option>
                                <option value="2">FRET AÉRIEN</option>
                                <option value="3">BILLETERIE-TRANSPORT AÉRIEN ET TOURISME</option>
                                <option value="4">PERSONNEL NAVIGANT COMMERCIAL</option>
                                <option value="5">LOGICIELS DE RESERVATION GDS AMADEUS</option>
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
                            <th>NOM DU FICHIER</th>
                            <th>FORMAT</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>ANGLAIS DE SPÉCIALITÉ VOYAGE ET TOURISME</td>
                            <td>PHRASÉOLOGIE STANDARDISÉE DE L'AVIATION</td>
                            <td>Support_Phraseologie_Aviation.pdf</td>
                            <td><span class="badge_format format_pdf">PDF</span></td>
                            <td class="contenu_cours"><a href="#"> Télécharger</a></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>FRET AÉRIEN</td>
                            <td>TRAITEMENT ET DOCUMENTATION DES MARCHANDISES</td>
                            <td>Manuel_Traitement_Marchandises.pdf</td>
                            <td><span class="badge_format format_pdf">PDF</span></td>
                            <td class="contenu_cours"><a href="#"> Télécharger</a></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>BILLETERIE-TRANSPORT AÉRIEN ET TOURISME</td>
                            <td>ÉMISSION ET TARIFICATION DE BILLETS</td>
                            <td>Guide_Tarification_Billetterie.docx</td>
                            <td><span class="badge_format format_doc">DOCX</span></td>
                            <td class="contenu_cours"><a href="#"> Télécharger</a></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>PERSONNEL NAVIGANT COMMERCIAL</td>
                            <td>SÉCURITÉ ET SAUVETAGE EN CABINE</td>
                            <td>Procedures_Securite_PNC.pdf</td>
                            <td><span class="badge_format format_pdf">PDF</span></td>
                            <td class="contenu_cours"><a href="#"> Télécharger</a></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>LOGICIELS DE RESERVATION GDS AMADEUS</td>
                            <td>RÉSERVATION ET ENCODAGE AMADEUS</td>
                            <td>Exercices_Encodage_Amadeus.zip</td>
                            <td><span class="badge_format format_zip">ZIP</span></td>
                            <td class="contenu_cours"><a href="#"> Télécharger</a></td>
                        </tr>
                    </tbody>
                </table>

                <div class="pagination">
                    <div class="pages_links">
                        <a href="#" class="btn_page"><i class="fa-solid fa-angle-left"></i> Précédent</a>
                        <a href="#" class="btn_page active">1</a>
                        <a href="#" class="btn_page">Suivant <i class="fa-solid fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </section>
@endsection
