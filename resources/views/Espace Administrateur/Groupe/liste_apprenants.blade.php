@extends('template-admin')
@section('title', 'Affectations des Apprenants')

@section('content')
    <div class="admin_page_header">
        <div class="admin_page_header_info">
            <h1>Affectation des Apprenants aux Groupes</h1>
            <p>Assignez facilement les étudiants inscrits à leurs promotions respectives.</p>
        </div>
        <div class="admin_page_actions">
            <a href="{{ route('Admin.groups') }}" class="btn_admin_secondary">
                <i class="fa-solid fa-arrow-left"></i> Retour aux groupes
            </a>
            <button class="btn_admin_primary" type="button" onclick="alert('Affectation enregistrée avec succès !');">
                <i class="fa-solid fa-floppy-disk"></i> Valider les affectations
            </button>
        </div>
    </div>

    <!-- Sélecteur de groupe de destination -->
    <div class="admin_card" style="padding: 18px 22px; margin-bottom: 20px;">
        <div style="display: flex; align-items: center; justify-content: space-between; gap: 20px; flex-wrap: wrap;">
            <div style="display: flex; align-items: center; gap: 14px;">
                <label for="target_group" style="font-weight: 700; color: #1e293b;">Groupe cible pour l'affectation :</label>
                <select id="target_group" style="padding: 8px 14px; border-radius: 8px; border: 1px solid var(--color-border); font-weight: 600; color: var(--color-primary);">
                    <option value="pnc-2026-a">PNC - Promotion 2026-A (42 apprenants)</option>
                    <option value="pnc-2026-b">PNC - Promotion 2026-B (42 apprenants)</option>
                    <option value="escale-2026">Agent d'Escale - 2026 (36 apprenants)</option>
                </select>
            </div>

            <div class="admin_filter_search">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="search" placeholder="Filtrer un étudiant..." data-admin-search=".assign_student_row">
            </div>
        </div>
    </div>

    <!-- Tableau de sélection des étudiants -->
    <div class="admin_card">
        <div class="admin_card_header">
            <h2><i class="fa-solid fa-user-check"></i> Sélectionner les apprenants à affecter</h2>
            <small style="color: #64748b;">Cochez les étudiants puis cliquez sur "Valider"</small>
        </div>
        <div class="admin_table_wrapper">
            <table class="admin_table">
                <thead>
                    <tr>
                        <th style="width: 40px; text-align: center;"><input type="checkbox" id="selectAllCheckbox" onclick="document.querySelectorAll('.student_checkbox').forEach(c => c.checked = this.checked);"></th>
                        <th>Apprenant</th>
                        <th>E-mail</th>
                        <th>Filière actuelle</th>
                        <th>Groupe actuel</th>
                        <th>Statut</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="assign_student_row">
                        <td style="text-align: center;"><input type="checkbox" class="student_checkbox" checked></td>
                        <td>
                            <div class="table_user_cell">
                                <span class="table_avatar">EB</span>
                                <div><strong>Edmond Barou</strong></div>
                            </div>
                        </td>
                        <td>edmond.barou@example.com</td>
                        <td>PNC</td>
                        <td><span class="badge_status badge_info">PNC 2026-A</span></td>
                        <td><span class="badge_status badge_success">Inscrit</span></td>
                    </tr>
                    <tr class="assign_student_row">
                        <td style="text-align: center;"><input type="checkbox" class="student_checkbox" checked></td>
                        <td>
                            <div class="table_user_cell">
                                <span class="table_avatar" style="background: #ffedd5; color: #ea580c;">SK</span>
                                <div><strong>Sarah Koné</strong></div>
                            </div>
                        </td>
                        <td>sarah.kone@example.com</td>
                        <td>PNC</td>
                        <td><span class="badge_status badge_info">PNC 2026-A</span></td>
                        <td><span class="badge_status badge_success">Inscrit</span></td>
                    </tr>
                    <tr class="assign_student_row">
                        <td style="text-align: center;"><input type="checkbox" class="student_checkbox"></td>
                        <td>
                            <div class="table_user_cell">
                                <span class="table_avatar" style="background: #e0e7ff; color: #4338ca;">MT</span>
                                <div><strong>Marc Touré</strong></div>
                            </div>
                        </td>
                        <td>marc.toure@example.com</td>
                        <td>Agent d'Escale</td>
                        <td><span class="badge_status badge_warning">Non affecté</span></td>
                        <td><span class="badge_status badge_warning">En attente</span></td>
                    </tr>
                    <tr class="assign_student_row">
                        <td style="text-align: center;"><input type="checkbox" class="student_checkbox"></td>
                        <td>
                            <div class="table_user_cell">
                                <span class="table_avatar" style="background: #dcfce7; color: #15803d;">AY</span>
                                <div><strong>Amina Yapi</strong></div>
                            </div>
                        </td>
                        <td>amina.yapi@example.com</td>
                        <td>PNC</td>
                        <td><span class="badge_status badge_info">PNC 2026-B</span></td>
                        <td><span class="badge_status badge_success">Inscrit</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
