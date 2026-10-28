@extends('menu-admin')

@section('content')
        <section class="dashboard">
            <main style="padding: 0; flex: none;">
                <div class="formulaire_creation" style="width: 100%; box-sizing: border-box;">
                    <div class="form_header">
                        <h2><i class="fa-solid fa-cloud-arrow-up"></i> Importer un fichier de cours</h2>
                        <a href="{{route('Admin.courses-file')}}"><i class="fa-solid fa-arrow-left"></i> Retour à la liste</a>
                    </div>

                    <form action="" class="form" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Formation *</label>
                            <select name="formation" required>
                                <option value="" disabled selected>Sélectionnez une formation</option>
                                <option value="1">ANGLAIS DE SPÉCIALITÉ VOYAGE ET TOURISME</option>
                                <option value="2">FRET AÉRIEN</option>
                                <option value="3">BILLETERIE-TRANSPORT AÉRIEN ET TOURISME</option>
                                <option value="4">PERSONNEL NAVIGANT COMMERCIAL</option>
                                <option value="5">LOGICIELS DE RESERVATION GDS AMADEUS / SABRE / GALILEO</option>
                                <option value="6">AGENT DE VOYAGE SPÉCIALISÉ DIGITAL MARKETING</option>
                            </select>
                        </div>


                        <div class="form-group">
                            <label>Cours rattaché *</label>
                            <select name="cours" required>
                                <option value="" disabled selected>Sélectionnez le cours associé</option>
                                <option value="1">PHRASÉOLOGIE STANDARDISÉE DE L'AVIATION</option>
                                <option value="2">TRAITEMENT ET DOCUMENTATION DES MARCHANDISES</option>
                                <option value="3">ÉMISSION ET TARIFICATION DE BILLETS</option>
                                <option value="4">SÉCURITÉ ET SAUVETAGE EN CABINE</option>
                                <option value="5">RÉSERVATION ET ENCODAGE AMADEUS</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Titre du fichier *</label>
                            <input type="text" name="titre_fichier" placeholder="Ex: Support de cours - Module 1" required>
                        </div>



                        <div class="form-group">
                            <label>Fichier de cours *</label>
                            <input type="file" name="fichier_document" accept=".pdf,.doc,.docx,.ppt,.pptx,.zip" required>
                        </div>
                        <p style="font-size: 13px; color: var(--text-muted);">NB : Formats acceptés : pdf, doc, docx, ppt, pptx, zip</p>




                        <div class="form-row">
                            <button type="submit"><i class="fa-solid fa-floppy-disk"></i> Enregistrer le fichier</button>
                        </div>
                    </form>
                </div>
            </main>
        </section>
@endsection
