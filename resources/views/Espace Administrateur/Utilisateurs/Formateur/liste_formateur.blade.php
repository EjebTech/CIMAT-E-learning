@extends('template-admin')
@section('title', 'Gestion des Formateurs')

@section('content')
    <div class="admin_page_header">
        <div class="admin_page_header_info">
            <h1>Corps Enseignant &amp; Formateurs</h1>
            <p>Gérez les instructeurs aéronautiques, leurs spécialités d'enseignement et leurs cours assignés.</p>
        </div>
        <div class="admin_page_actions">
            <button class="btn_admin_primary" type="button" data-modal-open="createTeacherModal">
                <i class="fa-solid fa-person-chalkboard" aria-hidden="true"></i> Ajouter un formateur
            </button>
        </div>
    </div>


    {{-- Statistiques rapides --}}
    <section class="admin_stats_grid">
        <div class="admin_stat_card">
            <div class="admin_stat_icon stat_orange"><i class="fa-solid fa-chalkboard-user"></i></div>
            <div class="admin_stat_content">
                <span class="admin_stat_val">{{ $total_teachers }}</span>
                <span class="admin_stat_lbl">Total formateurs</span>
            </div>
        </div>
        <div class="admin_stat_card">
            <div class="admin_stat_icon stat_blue"><i class="fa-solid fa-book-bookmark"></i></div>
            <div class="admin_stat_content">
                <span class="admin_stat_val">36</span>
                <span class="admin_stat_lbl">Cours dispensés</span>
            </div>
        </div>
        <div class="admin_stat_card">
            <div class="admin_stat_icon stat_green"><i class="fa-solid fa-circle-check"></i></div>
            <div class="admin_stat_content">
                <span class="admin_stat_val">16</span>
                <span class="admin_stat_lbl">Disponibles</span>
            </div>
        </div>
    </section>

    {{-- Filtres & Recherche --}}
    <div class="admin_filter_bar">
        <div class="admin_filter_group">
            <button class="admin_filter_pill active" type="button" data-admin-filter="all"
                data-filter-target=".teacher_row">Tous ({{ $total_teachers }})</button>
            <button class="admin_filter_pill" type="button" data-admin-filter="securite"
                data-filter-target=".teacher_row">Sécurité &amp; Sauvetage</button>
            <button class="admin_filter_pill" type="button" data-admin-filter="service"
                data-filter-target=".teacher_row">Relation Client</button>
            <button class="admin_filter_pill" type="button" data-admin-filter="reglementation"
                data-filter-target=".teacher_row">Réglementation</button>
        </div>

        <div class="admin_filter_search">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="search" placeholder="Rechercher un enseignant..." data-admin-search=".teacher_row">
        </div>
    </div>

    {{-- Tableau des Formateurs --}}
    <div class="admin_card">
        <div class="admin_card_header">
            <h2><i class="fa-solid fa-person-chalkboard"></i> Liste des formateurs et instructeurs</h2>
        </div>
        <div class="admin_table_wrapper">
            <table class="admin_table">
                <thead>
                    <tr>
                        <th>Instructeur</th>
                        <th>Téléphone</th>
                        <th>Spécialité</th>
                        <th>Date d'ajout</th>
                        <th>Statut</th>
                        <th style="text-align: right;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($teachers as $teacher)
                        <tr class="teacher_row" data-category="all">
                            <td>
                                <div class="table_user_cell">
                                    @if ($teacher->PhotoTeacher)
                                        <img style="width: 70px; height: 55px;object-fit:contain; border-radius:50%" src="{{ asset('storage/' . $teacher->PhotoTeacher) }}"
                                            class="table_avatar_img" alt="Photo">
                                    @else
                                        <span class="table_avatar"
                                            style="background: #e0f2fe; color: #0284c7;">{{ strtoupper(substr($teacher->FNameTeacher, 0, 1) . substr($teacher->LNameTeacher, 0, 1)) }}</span>
                                    @endif
                                    <div>
                                        <strong>{{ $teacher->LNameTeacher }} {{ $teacher->FNameTeacher }}</strong>
                                        <small>{{ $teacher->EmailTeacher }}</small>
                                    </div>
                                </div>
                            </td>
                            <td>{{ $teacher->PhoneTeacher ?? '—' }}</td>
                            <td>
                                @if ($teacher->SpecTeacher)
                                    <span class="badge_status badge_info">{{ $teacher->SpecTeacher }}</span>
                                @else
                                    <span class="badge_status">—</span>
                                @endif
                            </td>
                            <td>{{ $teacher->created_at->format('d/m/Y') }}</td>
                            <td><span class="badge_status badge_success"><i class="fa-solid fa-circle"
                                        style="font-size: 0.5rem;"></i> {{ $teacher->StatusTeacher ?? 'Actif' }}</span>
                            </td>
                            <td>
                                <div class="table_actions">
                                    {{-- Bouton Modifier --}}
                                    <button
                                        data-modal-open="editTeacherModal"
                                        data-id="{{ $teacher->MatTeacher }}"
                                        data-fname="{{ $teacher->FNameTeacher }}"
                                        data-lname="{{ $teacher->LNameTeacher }}"
                                        data-email="{{ $teacher->EmailTeacher }}"
                                        data-password="{{ $teacher->PasswordTeacher }}"
                                        data-phone="{{ $teacher->PhoneTeacher }}"
                                        data-spec="{{ $teacher->SpecTeacher }}"
                                        data-photo="{{ $teacher->PhotoTeacher }}"
                                        class="action_icon_btn btn_edit_teacher"
                                        title="Modifier">
                                        <i class="fa-regular fa-pen-to-square"></i>
                                    </button>

                                    {{-- Bouton Supprimer --}}
                                    <form action="{{ route('Admin.delete-teacher', $teacher->MatTeacher) }}"
                                        method="POST" style="display:inline;"
                                        onsubmit="return confirm('Voulez-vous vraiment supprimer ce formateur ?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="action_icon_btn btn_delete" title="Supprimer">
                                            <i class="fa-regular fa-trash-can"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" style="text-align:center; padding: 2rem; color: #64748b;">
                                <i class="fa-solid fa-person-chalkboard" style="font-size: 2rem; opacity:0.3;"></i>
                                <p>Aucun formateur n'a encore été enregistré</p>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="mt-6 flex justify-center">
            {{ $teachers->links() }}
        </div>
    </div>

    {{-- ===== Modale : Ajouter un Formateur ===== --}}
    <div class="admin_modal" id="createTeacherModal" hidden>
        <div class="admin_modal_dialog modal_lg">
            <header class="admin_modal_header">
                <div class="modal_header_title">
                    <i class="fa-solid fa-person-chalkboard"></i>
                    <div>
                        <h2>Ajouter un nouveau formateur</h2>
                        <p>Créez les identifiants d'un enseignant et configurez sa spécialité.</p>
                    </div>
                </div>
                <button type="button" class="admin_modal_close" data-modal-close="createTeacherModal"
                    aria-label="Fermer">&times;</button>
            </header>
            <form method="POST" action="{{ route('Admin.create-teacher') }}" enctype="multipart/form-data">
                @csrf
                <div class="admin_modal_body">
                    <div class="admin_form_grid">
                        <div class="admin_form_group">
                            <label for="tch_first_name">Prénom</label>
                            <input type="text" id="tch_first_name" name="FNameTeacher"
                                placeholder="Ex: Robert" value="{{ old('FNameTeacher') }}" required>
                            @error('FNameTeacher')
                                <span style="color: red; font-size: 0.85rem;">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="admin_form_group">
                            <label for="tch_last_name">Nom de famille</label>
                            <input type="text" id="tch_last_name" name="LNameTeacher"
                                placeholder="Ex: Kouassi" value="{{ old('LNameTeacher') }}" required>
                            @error('LNameTeacher')
                                <span style="color: red; font-size: 0.85rem;">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="admin_form_group">
                            <label for="tch_email">E-mail professionnel</label>
                            <input type="email" id="tch_email" name="EmailTeacher"
                                placeholder="r.kouassi@cimat-teacher.ci" value="{{ old('EmailTeacher') }}" required>
                            @error('EmailTeacher')
                                <span style="color: red; font-size: 0.85rem;">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="admin_form_group">
                            <label for="tch_phone">Numéro de téléphone</label>
                            <input type="tel" id="tch_phone" name="PhoneTeacher"
                                placeholder="+225 XX XX XX XX XX" value="{{ old('PhoneTeacher') }}">
                            @error('PhoneTeacher')
                                <span style="color: red; font-size: 0.85rem;">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="admin_form_group">
                            <label for="tch_spec">Spécialité / Domaine d'expertise</label>
                            <input type="text" id="tch_spec" name="SpecTeacher"
                                placeholder="Ex: Sécurité cabine, Anglais ICAO, DGR..."
                                value="{{ old('SpecTeacher') }}">
                            @error('SpecTeacher')
                                <span style="color: red; font-size: 0.85rem;">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="admin_form_group">
                            <label for="tch_password">Mot de passe</label>
                            <input type="password" id="tch_password" name="PasswordTeacher" placeholder="....." required>
                            @error('PasswordTeacher')
                                <span style="color: red; font-size: 0.85rem;">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="admin_form_group col_full">
                            <label>Photo de profil (Optionnel)</label>
                            <input type="file" name="PhotoTeacher" accept="image/*">
                        </div>
                    </div>
                </div>
                <footer class="admin_modal_footer">
                    <button type="button" class="admin_modal_cancel"
                        data-modal-close="createTeacherModal">Annuler</button>
                    <button type="submit" class="btn_admin_primary">
                        <i class="fa-solid fa-check"></i> Créer le compte formateur
                    </button>
                </footer>
            </form>
        </div>
    </div>

    {{-- ===== Modale : Modifier un Formateur ===== --}}
    <div class="admin_modal" id="editTeacherModal" hidden>
        <div class="admin_modal_dialog modal_lg">
            <header class="admin_modal_header">
                <div class="modal_header_title">
                    <i class="fa-solid fa-person-chalkboard"></i>
                    <div>
                        <h2>Modifier un formateur existant</h2>
                        <p>Mettre à jour les informations d'un enseignant.</p>
                    </div>
                </div>
                <button type="button" class="admin_modal_close" data-modal-close="editTeacherModal"
                    aria-label="Fermer">&times;</button>
            </header>
            <form method="POST" id="editTeacherForm" action="" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="admin_modal_body">
                    <div class="admin_form_grid">
                        <div class="admin_form_group">
                            <label for="edit_tch_fname">Prénom</label>
                            <input type="text" id="edit_tch_fname" name="FNameTeacher"
                                placeholder="Ex: Robert" required>
                            @error('FNameTeacher')
                                <span style="color: red; font-size: 0.85rem;">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="admin_form_group">
                            <label for="edit_tch_lname">Nom de famille</label>
                            <input type="text" id="edit_tch_lname" name="LNameTeacher"
                                placeholder="Ex: Kouassi" required>
                            @error('LNameTeacher')
                                <span style="color: red; font-size: 0.85rem;">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="admin_form_group">
                            <label for="edit_tch_email">E-mail professionnel</label>
                            <input type="email" id="edit_tch_email" name="EmailTeacher"
                                placeholder="r.kouassi@cimat-teacher.ci" required>
                            @error('EmailTeacher')
                                <span style="color: red; font-size: 0.85rem;">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="admin_form_group">
                            <label for="edit_tch_phone">Numéro de téléphone</label>
                            <input type="tel" id="edit_tch_phone" name="PhoneTeacher"
                                placeholder="+225 XX XX XX XX XX">
                        </div>
                        <div class="admin_form_group">
                            <label for="edit_tch_spec">Spécialité / Domaine d'expertise</label>
                            <input type="text" id="edit_tch_spec" name="SpecTeacher"
                                placeholder="Ex: Sécurité cabine, Anglais ICAO, DGR...">
                        </div>
                        <div class="admin_form_group">
                            <label for="edit_tch_password">Mot de passe</label>
                            <input type="password" id="edit_tch_password" name="PasswordTeacher"
                                placeholder=".....">
                            @error('PasswordTeacher')
                                <span style="color: red; font-size: 0.85rem;">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="admin_form_group col_full">
                            <label>Photo de profil (Optionnel)</label>
                            <input type="file" name="PhotoTeacher" accept="image/*">
                            <p style="margin: 6px 0 2px; font-size: 0.8rem; color: #64748b;">Image actuelle :</p>
                            <img src="" id="edit_tch_current_photo"
                                style="width: 115px; height: 85px; object-fit: contain; border-radius: 6px;">
                            <p id="edit_tch_no_photo" style="font-size: 0.8rem; color: #94a3b8;"></p>
                        </div>
                    </div>
                </div>
                <footer class="admin_modal_footer">
                    <button type="button" class="admin_modal_cancel"
                        data-modal-close="editTeacherModal">Annuler</button>
                    <button type="submit" class="btn_admin_primary">
                        <i class="fa-solid fa-floppy-disk"></i> Enregistrer les modifications
                    </button>
                </footer>
            </form>
        </div>
    </div>

    {{-- Réouvrir la modale création si erreurs de validation --}}
    @if ($errors->any())
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                document.getElementById('createTeacherModal').removeAttribute('hidden');
            });
        </script>
    @endif

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const btnEdits = document.querySelectorAll('.btn_edit_teacher');
            const editModal = document.getElementById('editTeacherModal');
            const editForm = document.getElementById('editTeacherForm');
            const photoImg = document.getElementById('edit_tch_current_photo');
            const noPhotoText = document.getElementById('edit_tch_no_photo');

            btnEdits.forEach(btn => {
                btn.addEventListener('click', function() {
                    const id = this.dataset.id;
                    const fname = this.dataset.fname;
                    const lname = this.dataset.lname;
                    const email = this.dataset.email;
                    const password = this.dataset.password;
                    const phone = this.dataset.phone;
                    const spec = this.dataset.spec;
                    const photo = this.dataset.photo;

                    editForm.querySelector('#edit_tch_fname').value = fname;
                    editForm.querySelector('#edit_tch_lname').value = lname;
                    editForm.querySelector('#edit_tch_email').value = email;
                    editForm.querySelector('#edit_tch_phone').value = phone;
                    editForm.querySelector('#edit_tch_spec').value = spec;
                    editForm.querySelector('#edit_tch_password').value = password;

                    if (photo) {
                        photoImg.setAttribute('src', `/storage/${photo}`);
                        noPhotoText.textContent = '';
                    } else {
                        photoImg.src = '';
                        noPhotoText.textContent = "Aucune image enregistrée pour l'instant";
                    }

                    editForm.action = `/Admin/Update-teacher/${id}`;
                    editModal.removeAttribute('hidden');
                });
            });
        });
    </script>
@endsection
