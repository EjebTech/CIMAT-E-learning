@extends('template-admin')

@section('content')
    <!-- Contenu principal -->
    <section class="dashboard">
        <main style="padding: 0; flex: none;">
            <div class="formulaire_creation" style="width: 100%; box-sizing: border-box;">
                <div class="form_header">
                    <h2><i class="fa-solid fa-file-circle-check"></i> Ajouter une correction</h2>
                    <a href="../Exercice/Correction.html"><i class="fa-solid fa-arrow-left"></i> Retour à la liste</a>
                </div>

                <form action="" class="form" method="post" enctype="multipart/form-data">
                    <!-- Sélection de l'Exercice -->
                    <div class="form-group">
                        <label>Exercice concerné *</label>
                        <select name="exercice" required>
                            <option value="" disabled selected>Sélectionnez l'exercice à corriger</option>
                            <option value="1">Mise en situation : Annonces micro en aérogare</option>
                            <option value="2">Établissement d'une Lettre de Transport Aérien (LTA)</option>
                            <option value="3">Détermination du poids taxable et calcul de devis</option>
                            <option value="4">Création d'un dossier PNR et tarification itinéraire</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Titre de la correction *</label>
                        <input type="text" name="titre_correction" >
                    </div>

                    <div class="form-group">
                        <label>Fichier de correction (Document) *</label>
                        <input type="file" name="fichier_correction" accept=".pdf,.docx,.txt" required>
                    </div>
                    <p style="font-size: 13px; color: var(--text-muted);">NB : Formats acceptés : pdf, docx, txt</p>

                    <div class="form-row">
                        <button type="submit"><i class="fa-solid fa-floppy-disk"></i> Enregistrer la correction</button>
                    </div>
                </form>
            </div>
        </main>
    </section>
@endsection
