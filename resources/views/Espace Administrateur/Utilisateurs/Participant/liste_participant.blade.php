@extends('template-admin')
@section('title', 'Gestion des Apprenants')

@section('content')
    <div class="admin_page_header">
        <div class="admin_page_header_info">
            <h1>Gestion des Apprenants (Élèves)</h1>
            <p>Inscrivez de nouveaux étudiants, suivez leurs promotions et gérez leurs dossiers académiques.</p>
        </div>
        <div class="admin_page_actions">
            <button class="btn_admin_primary" type="button" data-modal-open="createStudentModal">
                <i class="fa-solid fa-user-plus" aria-hidden="true"></i> Inscrire un apprenant
            </button>
        </div>
    </div>

    <!-- Statistiques rapides -->
    <section class="admin_stats_grid">
        <div class="admin_stat_card">
            <div class="admin_stat_icon stat_blue"><i class="fa-solid fa-user-graduate"></i></div>
            <div class="admin_stat_content">
                <span class="admin_stat_val">{{$total_students}}</span>
                <span class="admin_stat_lbl">Total apprenants</span>
            </div>
        </div>
        <div class="admin_stat_card">
            <div class="admin_stat_icon stat_green"><i class="fa-solid fa-user-check"></i></div>
            <div class="admin_stat_content">
                <span class="admin_stat_val">138</span>
                <span class="admin_stat_lbl">Comptes actifs</span>
            </div>
        </div>
        <div class="admin_stat_card">
            <div class="admin_stat_icon stat_orange"><i class="fa-solid fa-user-clock"></i></div>
            <div class="admin_stat_content">
                <span class="admin_stat_val">4</span>
                <span class="admin_stat_lbl">Inscriptions en attente</span>
            </div>
        </div>
    </section>

    <!-- Filtres & Recherche -->
    <div class="admin_filter_bar">
        <div class="admin_filter_group">
            <button class="admin_filter_pill active" type="button" data-admin-filter="all" data-filter-target=".student_row">Tous (142)</button>
            <button class="admin_filter_pill" type="button" data-admin-filter="pnc" data-filter-target=".student_row">PNC</button>
            <button class="admin_filter_pill" type="button" data-admin-filter="escale" data-filter-target=".student_row">Agent d'Escale</button>
            <button class="admin_filter_pill" type="button" data-admin-filter="pending" data-filter-target=".student_row">En attente</button>
        </div>

        <div class="admin_filter_search">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="search" placeholder="Rechercher par nom ou e-mail..." data-admin-search=".student_row">
        </div>
    </div>

    <!-- Tableau des Apprenants -->
    <div class="admin_card">
        <div class="admin_card_header">
            <h2><i class="fa-solid fa-users"></i> Répertoire des étudiants</h2>
        </div>
        <div class="admin_table_wrapper">
            <table class="admin_table">
                <thead>
                    <tr>
                        <th>Étudiant</th>
                        <th>Téléphone</th>
                        <th>Formation &amp; Groupe</th>
                        <th>Date d'inscription</th>
                        <th>Statut</th>
                        <th style="text-align: right;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($students as $student)
                        <tr class="student_row" data-category="pnc">
                            <td>
                                <div class="table_user_cell">
                                    <span class="table_avatar" style="background: #ffedd5; color: #ea580c;">SK</span>
                                    <div>
                                        <strong>{{$student->LNameStud}} {{$student->FNameStud}}</strong>
                                        <small>{{$student->EmailStud}}</small>
                                    </div>
                                </div>
                            </td>
                            <td>{{$student->PhoneStud}}</td>
                            <td><span class="badge_status badge_info">PNC · Promo 2026-A</span></td>
                            <td>{{$student->created_at}}</td>
                            <td><span class="badge_status badge_success"><i class="fa-solid fa-circle" style="font-size: 0.5rem;"></i> {{$student->StatusStud}}</span></td>
                            <td>
                                <div class="table_actions">

                                    <button
                                    data-modal-open="editStudentModal"
                                    data-id="{{ $student->MatStud }}"
                                    data-fname="{{ $student->FNameStud }}"
                                    data-lname="{{ $student->LNameStud }}"
                                    data-email="{{ $student->EmailStud }}"
                                    data-password="{{ $student->PasswordStud }}"
                                    data-phone="{{ $student->PhoneStud }}"
                                    class="action_icon_btn btn_edit"
                                    title="Modifier">
                                        <i class="fa-regular fa-pen-to-square"></i>
                                    </button>
                                    <button class="action_icon_btn btn_delete" title="Supprimer"><i class="fa-regular fa-trash-can"></i></button>
                                </div>
                            </td>
                        </tr>

                    @empty
                        <h3>Aucun étudiant n'a encore été enregistré</h3>
                    @endforelse

                </tbody>

            </table>

        </div>
        <div class="mt-6 flex justify-center">
            {{$students->links()}}
        </div>
    </div>

    <!-- Modale : Inscrire un Apprenant -->
    <div class="admin_modal" id="createStudentModal" hidden>
        <div class="admin_modal_dialog modal_lg">
            <header class="admin_modal_header">
                <div class="modal_header_title">
                    <i class="fa-solid fa-user-graduate"></i>
                    <div>
                        <h2>Inscrire un nouvel apprenant</h2>
                        <p>Créez le profil d'un étudiant et attribuez-lui sa promotion.</p>
                    </div>
                </div>
                <button type="button" class="admin_modal_close" data-modal-close="createStudentModal" aria-label="Fermer">&times;</button>
            </header>
            <form method="POST" action="{{route('Admin.create-student')}}" enctype="multipart/form-data">
                @csrf
                {{-- @error sert à afficher un message d'erreur si un champ n'a pas été rempli
                La methode old() sert a conserver l'ancienne valeur entrée dans un champ au cas où il y a une erreur
                --}}
                <div class="admin_modal_body">
                    <div class="admin_form_grid">
                        <div class="admin_form_group">
                            <label for="std_first_name">Prénom de l'apprenant</label>
                            <input type="text" id="std_first_name" name="FNameStud" placeholder="Ex: Jean-Luc" value="{{old('FNameStud')}}" required>

                            @error('FNameStud')
                                {{$message}}
                            @enderror
                        </div>
                        <div class="admin_form_group">
                            <label for="std_last_name">Nom de famille</label>
                            <input type="text" id="std_last_name" name="LNameStud" placeholder="Ex: Kouamé" value="{{old('LNameStud')}}" required>
                            @error('LNameStud')
                                <span style="color: red; font-size: 0.85rem;">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="admin_form_group">
                            <label for="std_email">Adresse e-mail</label>
                            <input type="email" id="std_email" name="EmailStud" placeholder="apprenant@example.com" value="{{old('EmailStud')}}" required>
                            @error('EmailStud')
                                <span style="color: red; font-size: 0.85rem;">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="admin_form_group">
                            <label for="std_phone">Numéro de téléphone</label>
                            <input type="tel" value="{{old('PhoneStud')}}" id="std_phone" name="PhoneStud" placeholder="+225 XX XX XX XX XX">
                            @error('PhoneStud')
                                <span style="color: red; font-size: 0.85rem;">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="admin_form_group">
                            <label for="std_program">Mot de passe</label>
                            <input type="password" name="PasswordStud" id="std_password" value="{{old('PasswordStud')}}">
                            @error('PasswordStud')
                                <span style="color: red; font-size: 0.85rem;">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="admin_form_group">
                            <label for="std_group">Groupe / Promotion</label>
                            <select id="std_group" name="group_id">
                                <option value="pnc-2026-a">PNC - Promotion 2026-A</option>
                                <option value="pnc-2026-b">PNC - Promotion 2026-B</option>
                                <option value="escale-2026">Agent d'Escale - 2026</option>
                            </select>
                        </div>
                        <div class="admin_form_group col_full">
                            <label>Photo de profil (Optionnel)</label>
                            <input type="file" accept="image/*" name="PhotoStud">
                        </div>
                    </div>
                </div>
                <footer class="admin_modal_footer">
                    <button type="button" class="admin_modal_cancel" data-modal-close="createStudentModal">Annuler</button>
                    <button type="submit" class="btn_admin_primary"><i class="fa-solid fa-user-plus"></i> Enregistrer l'apprenant</button>
                </footer>
            </form>
        </div>
    </div>
    <!-- Modale : Modifier un Apprenant -->
    <div class="admin_modal" id="editStudentModal" hidden>
        <div class="admin_modal_dialog modal_lg">
            <header class="admin_modal_header">
                <div class="modal_header_title">
                    <i class="fa-solid fa-user-graduate"></i>
                    <div>
                        <h2>Modifier un apprenant exisant</h2>
                        <p>Modifier le profil d'un étudiant.</p>
                    </div>
                </div>
                <button type="button" class="admin_modal_close" data-modal-close="editStudentModal" aria-label="Fermer">&times;</button>
            </header>
            <form method="POST" id="editStudentForm" action="" enctype="multipart/form-data">
                @csrf
                {{-- @error sert à afficher un message d'erreur si un champ n'a pas été rempli
                La methode old() sert a conserver l'ancienne valeur entrée dans un champ au cas où il y a une erreur
                --}}
                <div class="admin_modal_body">
                    <div class="admin_form_grid">
                        <div class="admin_form_group">
                            <label for="edit_first_name">Prénom de l'apprenant</label>
                            <input type="text" id="edit_first_name" name="FNameStud" placeholder="Ex: Jean-Luc" value="{{old('FNameStud')}}" required>

                            @error('FNameStud')
                                {{$message}}
                            @enderror
                        </div>
                        <div class="admin_form_group">
                            <label for="edit_last_name">Nom de famille</label>
                            <input type="text" id="edit_last_name" name="LNameStud" placeholder="Ex: Kouamé" value="{{old('LNameStud')}}" required>
                            @error('LNameStud')
                                <span style="color: red; font-size: 0.85rem;">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="admin_form_group">
                            <label for="edit_email">Adresse e-mail</label>
                            <input type="email" id="edit_email" name="EmailStud" placeholder="apprenant@example.com" value="{{old('EmailStud')}}" required>
                            @error('EmailStud')
                                <span style="color: red; font-size: 0.85rem;">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="admin_form_group">
                            <label for="edit_phone">Numéro de téléphone</label>
                            <input type="tel" value="{{old('PhoneStud')}}" id="edit_phone" name="PhoneStud" placeholder="+225 XX XX XX XX XX">
                            @error('PhoneStud')
                                <span style="color: red; font-size: 0.85rem;">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="admin_form_group">
                            <label for="edit_program">Mot de passe</label>
                            <input type="password" name="PasswordStud" id="edit_password" value="{{old('PasswordStud')}}">
                            @error('PasswordStud')
                                <span style="color: red; font-size: 0.85rem;">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="admin_form_group">
                            <label for="edit_group">Groupe / Promotion</label>
                            <select id="edit_group" name="group_id">
                                <option value="pnc-2026-a">PNC - Promotion 2026-A</option>
                                <option value="pnc-2026-b">PNC - Promotion 2026-B</option>
                                <option value="escale-2026">Agent d'Escale - 2026</option>
                            </select>
                        </div>
                        <div class="admin_form_group col_full">
                            <label>Photo de profil (Optionnel)</label>
                            <input type="file" accept="image/*" name="PhotoStud">
                        </div>
                    </div>
                </div>
                <footer class="admin_modal_footer">
                    <button type="button" class="admin_modal_cancel" data-modal-close="editStudentModal">Annuler</button>
                    <button type="submit" class="btn_admin_primary"><i class="fa-solid fa-user-plus"></i> Modifier l'apprenant</button>
                </footer>
            </form>
        </div>
    </div>
    {{-- S'il existe des erreurs alors on affiche toujours la modale car elle se ferme automatiquement --}}
    @if ($errors->any())
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                document.getElementById('createStudentModal').removeAttribute('hidden');
            });
        </script>
    @endif

    <script>
        document.addEventListener("DOMContentLoaded", function(){
            const btn_edit = document.querySelectorAll('.btn_edit'); //tous les boutons de modifications
            const edit_modal = document.getElementById('editStudentModal') //la modale
            const form = document.getElementById('editStudentForm'); //le formulaire de la modale

            //au click de chaque bouton je récupère les différentes données passées dans les attributs data
            btn_edit.forEach(btn=>{
                btn.addEventListener('click', function(){
                    const fname = this.dataset.fname
                    const lname = this.dataset.lname
                    const id = this.dataset.id
                    const email = this.dataset.email
                    const password = this.dataset.password
                    const phone = this.dataset.phone

                    //puis on les insère dans chaque champ de notre formulaire de modification
                    form.querySelector('#edit_first_name').value = fname
                    form.querySelector('#edit_last_name').value =  lname
                    form.querySelector('#edit_email').value = email
                    form.querySelector('#edit_phone').value = phone
                    form.querySelector('#edit_password').value = password


                    form.action = `/Admin/Update-student/${id}` ; //Changer dynamiquement l'action du formulaire pour faire passer en paramètre l'id de l'article et effectuer la mise à jour

                    //et enfin on affiche la modale
                    edit_modal.removeAttribute('hidden')


                })
            })
        })
    </script>
@endsection
