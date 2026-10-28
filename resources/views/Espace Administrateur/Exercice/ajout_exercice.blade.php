@extends('menu-admin')

@section('content')
    <!-- Contenu principal -->
    <section class="dashboard">
        <main style="padding: 0; flex: none;">
            <div class="formulaire_creation" style="width: 100%; box-sizing: border-box;">
                <div class="form_header">
                    <h2><i class="fa-solid fa-pen-to-square"></i> Ajouter un exercice</h2>
                    <a href="../Exercice/Exercice.html"><i class="fa-solid fa-arrow-left"></i> Retour à la liste</a>
                </div>

                <form action="" class="form" method="post" enctype="multipart/form-data">
                    <!-- Sélection de la Formation -->
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

                    <!-- Sélection du Cours -->
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
                        <label>Titre de l'exercice *</label>
                        <input type="text" name="titre_exercice"  required>
                    </div>

                    <div class="form-group">
                        <label>Date d'échéance *</label>
                        <input type="date" name="date_echeance" required>
                    </div>

                    <div class="form-group">
                        <label>Fichier d'exercice</label>
                        <input type="file" name="fichier_exercice" accept=".pdf,.docx,.txt">
                    </div>
                    <p style="font-size: 13px; color: var(--text-muted);">NB : Formats acceptés : pdf, docx, txt</p>

                    <div class="form-row">
                        <button type="submit"><i class="fa-solid fa-floppy-disk"></i> Enregistrer l'exercice</button>
                    </div>
                </form>
            </div>
        </main>
    </section>
@endsection
