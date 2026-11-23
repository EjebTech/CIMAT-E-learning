@extends('template-admin')
@section('title', 'Formations')

@section('content')
    <div class="admin_page_header">
        <div class="admin_page_header_info">
            <h1>Formations dispensées</h1>
            <p>Gérez les parcours de formation certifiants dispensés au sein du CIMAT.</p>
        </div>
        <div class="admin_page_actions">
            <button class="btn_admin_primary" type="button" data-modal-open="createProgramModal">
                <i class="fa-solid fa-plus" aria-hidden="true"></i> Créer une formation
            </button>
        </div>
    </div>

    {{-- Message de succès --}}
    @if (session('success'))
        <div class="admin_alert admin_alert_success">
            <i class="fa-solid fa-circle-check"></i> {{ session('success') }}
        </div>
    @endif

    {{-- Statistiques rapides --}}
    <section class="admin_stats_grid">
        <div class="admin_stat_card">
            <div class="admin_stat_icon stat_blue"><i class="fa-solid fa-graduation-cap"></i></div>
            <div class="admin_stat_content">
                <span class="admin_stat_val">{{ $total_formations }}</span>
                <span class="admin_stat_lbl">Total formations</span>
            </div>
        </div>
    </section>

    {{-- Grille des Formations --}}
    <div class="admin_grid_cards">
        @forelse ($formations as $formation)
            <article class="admin_content_card">
                <div>
                    <div class="content_card_header">
                        <div class="content_card_icon" style="background: #e0f2fe; color: #0284c7;">
                            <i class="fa-solid fa-graduation-cap"></i>
                        </div>
                    </div>
                    <div style="margin-top: 14px;">
                        <h3 style="font-size: 1.05rem; margin: 0 0 6px;">{{ $formation->NameFormation }}</h3>
                        <p style="color: #64748b; font-size: 0.84rem; margin: 0;">
                            {{ $formation->DescFormation ?? 'Aucune description renseignée.' }}
                        </p>
                    </div>
                </div>
                <div>
                    <div class="content_card_footer" style="margin-top: 14px;">
                        <small style="color:#94a3b8; font-size: 0.75rem;">
                            Créée le {{ $formation->created_at->format('d/m/Y') }}
                        </small>
                        <div class="table_actions">
                            <button
                                class="action_icon_btn btn_edit_formation"
                                data-modal-open="editProgramModal"
                                data-id="{{ $formation->IdFormation }}"
                                data-name="{{ $formation->NameFormation }}"
                                data-desc="{{ $formation->DescFormation }}"
                                title="Modifier">
                                <i class="fa-regular fa-pen-to-square"></i>
                            </button>
                            <form action="{{ route('Admin.delete-program', $formation->IdFormation) }}"
                                method="POST" style="display:inline;"
                                onsubmit="return confirm('Voulez-vous vraiment supprimer cette formation ?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="action_icon_btn btn_delete" title="Supprimer">
                                    <i class="fa-regular fa-trash-can"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </article>
        @empty
            <div style="grid-column: 1 / -1; text-align: center; padding: 3rem; color: #64748b;">
                <i class="fa-solid fa-graduation-cap" style="font-size: 2.5rem; opacity: 0.3;"></i>
                <p style="margin-top: 1rem;">Aucune formation n'a encore été créée.</p>
            </div>
        @endforelse
    </div>

    {{-- Pagination --}}
    <div class="mt-6 flex justify-center">
        {{ $formations->links() }}
    </div>

    {{-- ===== Modale : Créer une Formation ===== --}}
    <div class="admin_modal" id="createProgramModal" hidden>
        <div class="admin_modal_dialog">
            <header class="admin_modal_header">
                <div class="modal_header_title">
                    <i class="fa-solid fa-graduation-cap"></i>
                    <div>
                        <h2>Créer une nouvelle formation</h2>
                        <p>Définissez un nouveau cursus pédagogique au sein du centre.</p>
                    </div>
                </div>
                <button type="button" class="admin_modal_close" data-modal-close="createProgramModal"
                    aria-label="Fermer">&times;</button>
            </header>
            <form method="POST" action="{{ route('Admin.create-program') }}">
                @csrf
                <div class="admin_modal_body">
                    <div class="admin_form_grid">
                        <div class="admin_form_group col_full">
                            <label for="program_name">Intitulé de la formation</label>
                            <input type="text" id="program_name" name="NameFormation"
                                placeholder="Ex: Agent d'Opérations Aériennes (Flight Dispatcher)"
                                value="{{ old('NameFormation') }}" required>
                            @error('NameFormation')
                                <span style="color: red; font-size: 0.85rem;">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="admin_form_group col_full">
                            <label for="program_desc">Description / Objectifs</label>
                            <textarea id="program_desc" name="DescFormation" rows="4"
                                placeholder="Compétences visées, certifications obtenues, prérequis d'admission...">{{ old('DescFormation') }}</textarea>
                            @error('DescFormation')
                                <span style="color: red; font-size: 0.85rem;">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <footer class="admin_modal_footer">
                    <button type="button" class="admin_modal_cancel"
                        data-modal-close="createProgramModal">Annuler</button>
                    <button type="submit" class="btn_admin_primary">
                        <i class="fa-solid fa-plus"></i> Enregistrer la formation
                    </button>
                </footer>
            </form>
        </div>
    </div>

    {{-- ===== Modale : Modifier une Formation ===== --}}
    <div class="admin_modal" id="editProgramModal" hidden>
        <div class="admin_modal_dialog">
            <header class="admin_modal_header">
                <div class="modal_header_title">
                    <i class="fa-solid fa-graduation-cap"></i>
                    <div>
                        <h2>Modifier la formation</h2>
                        <p>Mettre à jour l'intitulé et la description d'une formation.</p>
                    </div>
                </div>
                <button type="button" class="admin_modal_close" data-modal-close="editProgramModal"
                    aria-label="Fermer">&times;</button>
            </header>
            <form method="POST" id="editProgramForm" action="">
                @csrf
                <div class="admin_modal_body">
                    <div class="admin_form_grid">
                        <div class="admin_form_group col_full">
                            <label for="edit_program_name">Intitulé de la formation</label>
                            <input type="text" id="edit_program_name" name="NameFormation"
                                placeholder="Ex: Agent d'Opérations Aériennes" required>
                            @error('NameFormation')
                                <span style="color: red; font-size: 0.85rem;">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="admin_form_group col_full">
                            <label for="edit_program_desc">Description / Objectifs</label>
                            <textarea id="edit_program_desc" name="DescFormation" rows="4"
                                placeholder="Compétences visées, certifications obtenues..."></textarea>
                            @error('DescFormation')
                                <span style="color: red; font-size: 0.85rem;">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <footer class="admin_modal_footer">
                    <button type="button" class="admin_modal_cancel"
                        data-modal-close="editProgramModal">Annuler</button>
                    <button type="submit" class="btn_admin_primary">
                        <i class="fa-solid fa-floppy-disk"></i> Enregistrer les modifications
                    </button>
                </footer>
            </form>
        </div>
    </div>

    {{-- Réouvrir la modale si erreurs de validation --}}
    @if ($errors->any())
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                document.getElementById('createProgramModal').removeAttribute('hidden');
            });
        </script>
    @endif

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const btnEdits = document.querySelectorAll('.btn_edit_formation');
            const editModal = document.getElementById('editProgramModal');
            const editForm = document.getElementById('editProgramForm');

            btnEdits.forEach(btn => {
                btn.addEventListener('click', function() {
                    const id = this.dataset.id;
                    const name = this.dataset.name;
                    const desc = this.dataset.desc;

                    editForm.querySelector('#edit_program_name').value = name;
                    editForm.querySelector('#edit_program_desc').value = desc ?? '';
                    editForm.action = `/Admin/Update-programs/${id}`;

                    editModal.removeAttribute('hidden');
                });
            });
        });
    </script>
@endsection
