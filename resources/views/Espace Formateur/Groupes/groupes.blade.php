@extends('template-teacher')
@section('content-teacher')
	<main class="groups_page">
		<header class="top_dashboard_teacher groups_top_dashboard">
			<div class="left">
				<div class="search">
					<i class="fa-solid fa-magnifying-glass" aria-hidden="true"></i>
					<input type="search" aria-label="Recherche globale" placeholder="Recherche un élève, un cours, un devoir...">
				</div>
			</div>
			<div class="admin_topbar_right">
                <div class="admin_date_pill">
                    <i class="fa-regular fa-calendar-days"></i>
                    <span>{{ now()->translatedFormat('d M Y') }}</span>
                </div>

                <div class="admin_notif_wrap">
                    <a href="#" class="admin_notif_btn" aria-label="Notifications">
                        <i class="fa-regular fa-bell"></i>
                        <span class="admin_notif_count">5</span>
                    </a>
                </div>

                <a class="admin_profile_pill" href="{{ route('Admin.list-admin') }}" title="Gérer le profil admin">
                    <span class="admin_profile_avatar"></span>
                    <div class="admin_profile_meta">
                        <strong>Edmond Barou</strong>
                        <small>Direction CIMAT</small>
                    </div>
                </a>
            </div>
		</header>

		<header class="groups_page_header">
			<div>
				<p class="groups_overline"></p>
				<h1>Mes groupes</h1>
				<p>Suivi des apprenants de la formation Personnel Navigant Commercial</p>
			</div>
			<div class="groups_header_count">
				<strong>32</strong>
				<span>apprenants</span>
			</div>
		</header>

		<section class="groups_workspace" aria-label="Groupe PNC première année">
			<div class="students_panel">
				<div class="students_panel_header">
					<div>
						<h2>Groupe PNC · Première année</h2>
						<p>Élèves du groupe <span class="groups_count_badge">32 inscrits</span></p>
					</div>
				</div>

				<div class="students_toolbar">
					<label class="student_search">
						<i class="fa-solid fa-magnifying-glass" aria-hidden="true"></i>
						<span class="visually_hidden">Rechercher un apprenant</span>
						<input type="search" placeholder="Rechercher un apprenant…">
					</label>
					<div class="student_filter_summary" aria-label="Résumé du groupe">
						<span class="filter_summary_active">Tous <strong>32</strong></span>
						<span>À évaluer <strong>5</strong></span>
						<span>Évalués <strong>27</strong></span>
					</div>
				</div>

				<div class="students_grid">
					<button class="student_card student_card-selected" type="button" data-student-name="Lucas Moreau" data-student-id="PNC-042" data-student-average="15.5" data-student-homework="8/8" aria-pressed="true">
						<div class="student_card_identity">
							<span class="student_initials initials-blue" aria-hidden="true">LM</span>
							<div>
								<h3>Lucas Moreau</h3>
								<p>ID : PNC-042</p>
							</div>
						</div>
						<div class="student_metrics">
							<div><span>Moyenne</span><strong>15.5<small>/20</small></strong></div>
							<div><span>Devoirs</span><strong>8/8</strong></div>
						</div>
					</button>
					<button class="student_card" type="button" data-student-name="Camille Dupuis" data-student-id="PNC-011" data-student-average="17.5" data-student-homework="8/8" aria-pressed="false">
						<div class="student_card_identity">
							<span class="student_initials initials-green" aria-hidden="true">CD</span>
							<div>
								<h3>Camille Dupuis</h3>
								<p>ID : PNC-011</p>
							</div>
						</div>
						<div class="student_metrics">
							<div><span>Moyenne</span><strong>17.5<small>/20</small></strong></div>
							<div><span>Devoirs</span><strong>8/8</strong></div>
						</div>
					</button>
					<button class="student_card" type="button" data-student-name="Sarah Benali" data-student-id="PNC-015" data-student-average="16.2" data-student-homework="8/8" aria-pressed="false">
						<div class="student_card_identity">
							<span class="student_initials initials-coral" aria-hidden="true">SB</span>
							<div>
								<h3>Sarah Benali</h3>
								<p>ID : PNC-015</p>
							</div>
						</div>
						<div class="student_metrics">
							<div><span>Moyenne</span><strong>16.2<small>/20</small></strong></div>
							<div><span>Devoirs</span><strong>8/8</strong></div>
						</div>
					</button>
					<button class="student_card" type="button" data-student-name="Thomas Garnier" data-student-id="PNC-019" data-student-average="8.5" data-student-homework="2/8" aria-pressed="false">
						<div class="student_card_identity">
							<span class="student_initials initials-orange" aria-hidden="true">TG</span>
							<div>
								<h3>Thomas Garnier</h3>
								<p>ID : PNC-019</p>
							</div>
						</div>
						<div class="student_metrics">
							<div><span>Moyenne</span><strong>8.5<small>/20</small></strong></div>
							<div><span>Devoirs</span><strong>2/8</strong></div>
						</div>
					</button>
					<button class="student_card" type="button" data-student-name="Emma Laurent" data-student-id="PNC-024" data-student-average="14.0" data-student-homework="8/8" aria-pressed="false">
						<div class="student_card_identity">
							<span class="student_initials initials-violet" aria-hidden="true">EL</span>
							<div>
								<h3>Emma Laurent</h3>
								<p>ID : PNC-024</p>
							</div>
						</div>
						<div class="student_metrics">
							<div><span>Moyenne</span><strong>14.0<small>/20</small></strong></div>
							<div><span>Devoirs</span><strong>8/8</strong></div>
						</div>
					</button>
					<button class="student_card" type="button" data-student-name="Antoine Denis" data-student-id="PNC-017" data-student-average="13.8" data-student-homework="7/8" aria-pressed="false">
						<div class="student_card_identity">
							<span class="student_initials initials-sky" aria-hidden="true">AD</span>
							<div>
								<h3>Antoine Denis</h3>
								<p>ID : PNC-017</p>
							</div>
						</div>
						<div class="student_metrics">
							<div><span>Moyenne</span><strong>13.8<small>/20</small></strong></div>
							<div><span>Devoirs</span><strong>7/8</strong></div>
						</div>
					</button>
					<button class="student_card" type="button" data-student-name="Inès Belkacem" data-student-id="PNC-015" data-student-average="16.8" data-student-homework="8/8" aria-pressed="false">
						<div class="student_card_identity">
							<span class="student_initials initials-green" aria-hidden="true">IB</span>
							<div>
								<h3>Inès Belkacem</h3>
								<p>ID : PNC-015</p>
							</div>
						</div>
						<div class="student_metrics">
							<div><span>Moyenne</span><strong>16.8<small>/20</small></strong></div>
							<div><span>Devoirs</span><strong>8/8</strong></div>
						</div>
					</button>
					<button class="student_card" type="button" data-student-name="Hugo Meyer" data-student-id="PNC-029" data-student-average="12.4" data-student-homework="7/8" aria-pressed="false">
						<div class="student_card_identity">
							<span class="student_initials initials-coral" aria-hidden="true">HM</span>
							<div>
								<h3>Hugo Meyer</h3>
								<p>ID : PNC-029</p>
							</div>
						</div>
						<div class="student_metrics">
							<div><span>Moyenne</span><strong>12.4<small>/20</small></strong></div>
							<div><span>Devoirs</span><strong>7/8</strong></div>
						</div>
					</button>
				</div>

				<footer class="students_panel_footer">
					<span>Affichage de 8 sur 32 apprenants</span>
					<nav class="students_pagination" aria-label="Pagination des apprenants">
						<button type="button" aria-label="Page précédente" disabled><i class="fa-solid fa-chevron-left" aria-hidden="true"></i></button>
						<button type="button" class="page_current" aria-current="page">1</button>
						<button type="button">2</button>
						<button type="button">3</button>
						<button type="button">4</button>
						<button type="button" aria-label="Page suivante"><i class="fa-solid fa-chevron-right" aria-hidden="true"></i></button>
					</nav>
				</footer>
			</div>

			<aside class="student_detail_panel" aria-labelledby="student-detail-title">
				<header class="student_detail_header">
					<span class="student_initials student_detail_avatar initials-blue" aria-hidden="true">LM</span>
					<div>
						<h2 id="student-detail-title">Lucas Moreau</h2>
						<p>ID : PNC-042</p>
						<span>Groupe PNC · Première année</span>
					</div>
				</header>

				<div class="student_detail_metrics">
					<article>
						<span>Moyenne générale</span>
						<strong class="student_detail_average">15.5<small>/20</small></strong>
						<p>Moyenne du groupe : 14.8</p>
					</article>
					<article>
						<span>Devoirs rendus</span>
						<strong class="student_detail_homework">8<small>/8</small></strong>
						<p>Tous les travaux demandés</p>
					</article>
				</div>

				<section class="student_evaluations" aria-labelledby="student-evaluations-title">
					<div class="student_detail_section-heading">
						<h3 id="student-evaluations-title">Évaluations récentes du groupe</h3>
					</div>
					<ul>
						<li>
							<span class="evaluation_marker marker-navy" aria-hidden="true"></span>
							<div><strong>Procédures de sécurité cabine</strong><small>Rendu le 18 mars · Commenté</small></div>
							<span class="evaluation_grade">15.5/20</span>
						</li>
						<li>
							<span class="evaluation_marker marker-green" aria-hidden="true"></span>
							<div><strong>Service à bord et relation passager</strong><small>Écrit en salle · Coeff. 3</small></div>
							<span class="evaluation_grade">16/20</span>
						</li>
						<li>
							<span class="evaluation_marker marker-orange" aria-hidden="true"></span>
							<div><strong>Quiz : premiers secours</strong><small>Évaluation en ligne</small></div>
							<span class="evaluation_grade">18/20</span>
						</li>
					</ul>
				</section>
			</aside>
		</section>
		<footer class="teacher_footer">
			<p>&copy; {{ date('Y') }} <a href="{{ route('Teacher.dashboard') }}">Groupe Komptech Cimat</a>. Tous droits réservés.</p>
			<div class="footer_socials">
				<a href="#" aria-label="Facebook" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-facebook-f" aria-hidden="true"></i></a>
				<a href="#" aria-label="LinkedIn" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-linkedin-in" aria-hidden="true"></i></a>
				<a href="#" aria-label="Instagram" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-instagram" aria-hidden="true"></i></a>
			</div>
		</footer>
	</main>

	<script>
		document.querySelectorAll('.student_card').forEach((card) => {
			card.addEventListener('click', () => {
				document.querySelectorAll('.student_card').forEach((studentCard) => {
					studentCard.classList.remove('student_card-selected');
					studentCard.setAttribute('aria-pressed', 'false');
				});

				card.classList.add('student_card-selected');
				card.setAttribute('aria-pressed', 'true');
				});
		});
	</script>
@endsection
