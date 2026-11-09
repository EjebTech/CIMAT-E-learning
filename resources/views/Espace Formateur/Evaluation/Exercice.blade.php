@extends('template-teacher')
@section('content-teacher')
	<main class="evaluations_page">
		<header class="top_dashboard_teacher evaluations_top_dashboard">
			<div class="left">
				<div class="search">
					<i class="fa-solid fa-magnifying-glass" aria-hidden="true"></i>
					<input type="search" aria-label="Recherche globale" placeholder="Recherche un élève, un cours, un devoir...">
				</div>
			</div>
			<div class="right">
				<div class="date_header"><p>Jeudi, 12 Novembre 2026 - 9h27</p></div>
				<div class="notif">
					<a href="#" class="notification-icon" aria-label="Notifications, 3 nouvelles">
						<i class="fa-regular fa-bell" aria-hidden="true"></i>
						<span class="badge">3</span>
					</a>
				</div>
				<div class="profile_teacher">
					<a href="#" class="profile_icon" aria-label="Profil formateur">
						<i class="fa-regular fa-user" aria-hidden="true"></i>
					</a>
				</div>
			</div>
		</header>

		<section class="evaluations_heading">
			<div>
				<p class="groups_overline">ESPACE FORMATEUR</p>
				<h1>Devoirs &amp; évaluations</h1>
				<p>Créez des exercices PNC, suivez les rendus et donnez vos retours aux apprenants.</p>
			</div>
			<div class="evaluation_create_actions">
				<button class="secondary_button" type="button" data-modal-open="exerciseModal"><i class="fa-regular fa-square-check" aria-hidden="true"></i> Créer un exercice</button>
				<button class="primary_button" type="button" data-modal-open="homeworkModal"><i class="fa-solid fa-file-pen" aria-hidden="true"></i> Créer un devoir</button>
			</div>
		</section>

		<section class="evaluation_summary" aria-label="Résumé des évaluations">
			<article><span class="evaluation_summary_icon summary-orange"><i class="fa-solid fa-pen-to-square" aria-hidden="true"></i></span><div><strong>3</strong><span>Rendus à corriger</span></div></article>
			<article><span class="evaluation_summary_icon summary-blue"><i class="fa-solid fa-file-lines" aria-hidden="true"></i></span><div><strong>8</strong><span>Devoirs actifs</span></div></article>
			<article><span class="evaluation_summary_icon summary-green"><i class="fa-solid fa-users" aria-hidden="true"></i></span><div><strong>32</strong><span>Apprenants PNC</span></div></article>
		</section>

		<section class="submissions_panel" aria-labelledby="submissions-title">
			<header class="evaluation_section_header">
				<div>
					<h2 id="submissions-title">Travaux rendus</h2>
					<p>Ouvrez un rendu pour attribuer une note et laisser un commentaire.</p>
				</div>
				<div class="evaluation_section_tools">
					<form class="evaluation_search" method="GET" action="{{ route('Teacher.evaluations') }}">
						<label for="evaluation-search">Rechercher un élève, un devoir ou un exercice</label>
						<div><i class="fa-solid fa-magnifying-glass" aria-hidden="true"></i><input id="evaluation-search" type="search" name="search" placeholder="Nom ou titre..."><button type="submit">Rechercher</button></div>
					</form>
					<span class="evaluation_count">3 à corriger</span>
				</div>
			</header>

			<div class="submission_list">
				<article class="submission_row">
					<span class="submission_avatar avatar-blue" aria-hidden="true">LM</span>
					<div class="submission_student"><h3>Lucas Moreau</h3><span>PNC-042 · Groupe PNC</span></div>
					<div class="submission_assignment"><strong>Procédures de sécurité cabine</strong><span>Rendu le 18 mars 2026</span></div>
					<span class="submission_status status-pending">À corriger</span>
					<button class="submission_view_button" type="button" data-submission-view="PNC-042-security"><i class="fa-regular fa-eye" aria-hidden="true"></i> Voir le rendu</button>
					<details class="grading_disclosure">
						<summary><i class="fa-solid fa-pen-to-square" aria-hidden="true"></i> Corriger &amp; commenter</summary>
						<form class="grading_form">
							<label>Note sur 20<input type="number" name="grade" min="0" max="20" step="0.5" placeholder="Ex. 16"></label>
							<label>Commentaire<textarea name="comment" rows="3" placeholder="Votre retour à l’apprenant..."></textarea></label>
							<button class="grading_submit" type="submit">Enregistrer la correction</button>
						</form>
					</details>
				</article>

				<article class="submission_row">
					<span class="submission_avatar avatar-green" aria-hidden="true">CD</span>
					<div class="submission_student"><h3>Camille Dupuis</h3><span>PNC-011 · Groupe PNC</span></div>
					<div class="submission_assignment"><strong>Service à bord et relation passager</strong><span>Rendu le 17 mars 2026</span></div>
					<span class="submission_status status-corrected">Corrigé · 16/20</span>
					<button class="submission_view_button" type="button" data-submission-view="PNC-011-service"><i class="fa-regular fa-eye" aria-hidden="true"></i> Voir le rendu</button>
					<details class="grading_disclosure">
						<summary><i class="fa-solid fa-pen-to-square" aria-hidden="true"></i> Voir la correction</summary>
						<form class="grading_form">
							<label>Note sur 20<input type="number" name="grade" min="0" max="20" step="0.5" value="16"></label>
							<label>Commentaire<textarea name="comment" rows="3">Bonne qualité d’accueil et posture professionnelle.</textarea></label>
							<button class="grading_submit" type="submit">Modifier la correction</button>
						</form>
					</details>
				</article>

				<article class="submission_row">
					<span class="submission_avatar avatar-blue aria-hidden="true">SB</span>
					<div class="submission_student"><h3>Sarah Benali</h3><span>PNC-015 · Groupe PNC</span></div>
					<div class="submission_assignment"><strong>Quiz : premiers secours en cabine</strong><span>Rendu le 16 mars 2026</span></div>
					<span class="submission_status status-pending">À corriger</span>
					<button class="submission_view_button" type="button" data-submission-view="PNC-015-first-aid"><i class="fa-regular fa-eye" aria-hidden="true"></i> Voir le rendu</button>
					<details class="grading_disclosure">
						<summary><i class="fa-solid fa-pen-to-square" aria-hidden="true"></i> Corriger &amp; commenter</summary>
						<form class="grading_form">
							<label>Note sur 20<input type="number" name="grade" min="0" max="20" step="0.5" placeholder="Ex. 16"></label>
							<label>Commentaire<textarea name="comment" rows="3" placeholder="Votre retour à l’apprenant..."></textarea></label>
							<button class="grading_submit" type="submit">Enregistrer la correction</button>
						</form>
					</details>
				</article>

				<article class="submission_row">
					<span class="submission_avatar avatar-blue" aria-hidden="true">TG</span>
					<div class="submission_student"><h3>Thomas Garnier</h3><span>PNC-019 · Groupe PNC</span></div>
					<div class="submission_assignment"><strong>Accueil et embarquement des passagers</strong><span>Rendu le 15 mars 2026</span></div>
					<span class="submission_status status-corrected">Corrigé · 18/20</span>
					<button class="submission_view_button" type="button" data-submission-view="PNC-019-boarding"><i class="fa-regular fa-eye" aria-hidden="true"></i> Voir le rendu</button>
					<details class="grading_disclosure">
						<summary><i class="fa-solid fa-pen-to-square" aria-hidden="true"></i> Voir la correction</summary>
						<form class="grading_form">
							<label>Note sur 20<input type="number" name="grade" min="0" max="20" step="0.5" value="18"></label>
							<label>Commentaire<textarea name="comment" rows="3">Très bon déroulement de l’embarquement et communication claire.</textarea></label>
							<button class="grading_submit" type="submit">Modifier la correction</button>
						</form>
					</details>
				</article>

				<article class="submission_row">
					<span class="submission_avatar avatar-blue" aria-hidden="true">EL</span>
					<div class="submission_student"><h3>Emma Laurent</h3><span>PNC-024 · Groupe PNC</span></div>
					<div class="submission_assignment"><strong>Gestion des situations difficiles</strong><span>Rendu le 14 mars 2026</span></div>
					<span class="submission_status status-pending">À corriger</span>
					<button class="submission_view_button" type="button" data-submission-view="PNC-024-difficult-situation"><i class="fa-regular fa-eye" aria-hidden="true"></i> Voir le rendu</button>
					<details class="grading_disclosure">
						<summary><i class="fa-solid fa-pen-to-square" aria-hidden="true"></i> Corriger &amp; commenter</summary>
						<form class="grading_form">
							<label>Note sur 20<input type="number" name="grade" min="0" max="20" step="0.5" placeholder="Ex. 16"></label>
							<label>Commentaire<textarea name="comment" rows="3" placeholder="Votre retour à l’apprenant..."></textarea></label>
							<button class="grading_submit" type="submit">Enregistrer la correction</button>
						</form>
					</details>
				</article>
			</div>
		</section>

		<section class="published_evaluations" aria-labelledby="published-evaluations-title">
			<header class="evaluation_section_header">
				<div>
					<h2 id="published-evaluations-title">Exercices et devoirs</h2>
					<p>Contenus proposés au groupe PNC.</p>
				</div>
			</header>
			<div class="published_evaluation_list">
				<article class="published_evaluation">
					<span class="published_icon icon-exercise"><i class="fa-regular fa-square-check" aria-hidden="true"></i></span>
					<div><span class="evaluation_type">Exercice</span><h3>Consignes de sécurité et équipements cabine</h3><p>Quiz · Groupe PNC · 20 questions</p></div>
					<span class="published_count">32 rendus</span>
					<div class="published_evaluation_actions"><button type="button" aria-label="Modifier Consignes de sécurité et équipements cabine"><i class="fa-solid fa-pen" aria-hidden="true"></i><span>Modifier</span></button><button type="button" class="published_delete_button" aria-label="Supprimer Consignes de sécurité et équipements cabine"><i class="fa-regular fa-trash-can" aria-hidden="true"></i><span>Supprimer</span></button></div>
				</article>
				<article class="published_evaluation">
					<span class="published_icon icon-homework"><i class="fa-solid fa-file-pen" aria-hidden="true"></i></span>
					<div><span class="evaluation_type">Devoir</span><h3>Étude de cas : incident en cabine</h3><p>À rendre le 25 mars 2026 · Groupe PNC</p></div>
					<span class="published_count">24 rendus</span>
					<div class="published_evaluation_actions"><button type="button" aria-label="Modifier Étude de cas : incident en cabine"><i class="fa-solid fa-pen" aria-hidden="true"></i><span>Modifier</span></button><button type="button" class="published_delete_button" aria-label="Supprimer Étude de cas : incident en cabine"><i class="fa-regular fa-trash-can" aria-hidden="true"></i><span>Supprimer</span></button></div>
				</article>
				<article class="published_evaluation">
					<span class="published_icon icon-exercise"><i class="fa-regular fa-square-check" aria-hidden="true"></i></span>
					<div><span class="evaluation_type">Exercice</span><h3>Mise en situation : annonce de sécurité</h3><p>Oral · Groupe PNC · 10 minutes</p></div>
					<span class="published_count">18 rendus</span>
					<div class="published_evaluation_actions"><button type="button" aria-label="Modifier Mise en situation : annonce de sécurité"><i class="fa-solid fa-pen" aria-hidden="true"></i><span>Modifier</span></button><button type="button" class="published_delete_button" aria-label="Supprimer Mise en situation : annonce de sécurité"><i class="fa-regular fa-trash-can" aria-hidden="true"></i><span>Supprimer</span></button></div>
				</article>
			</div>
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

	<div class="course_modal" id="exerciseModal" role="dialog" aria-modal="true" aria-labelledby="exerciseModalTitle" hidden>
		<section class="course_modal_panel">
			<header class="course_modal_header"><h2 id="exerciseModalTitle"><i class="fa-regular fa-square-check" aria-hidden="true"></i> Créer un exercice</h2><button class="course_modal_close" type="button" data-modal-close="exerciseModal" aria-label="Fermer">&times;</button></header>
			<form class="course_form">
				<label>Titre de l’exercice<input type="text" name="title" required></label>
				<label>Consignes<textarea name="description" rows="4" required></textarea></label>
				<label>Groupe<select name="group"><option>PNC · Première année</option><option>Tous les groupes PNC</option></select></label>
				<label>Date limite<input type="date" name="due_date"></label>
                <label>Document de référence<input type="file" name="attachment" accept="application/pdf,.pdf"></label>
				<footer class="course_form_footer"><button class="course_form_cancel" type="button" data-modal-close="exerciseModal">Annuler</button><button class="course_form_submit" type="submit">Créer l’exercice</button></footer>
			</form>
		</section>
	</div>

	<div class="course_modal" id="homeworkModal" role="dialog" aria-modal="true" aria-labelledby="homeworkModalTitle" hidden>
		<section class="course_modal_panel">
			<header class="course_modal_header"><h2 id="homeworkModalTitle"><i class="fa-solid fa-file-pen" aria-hidden="true"></i> Créer un devoir</h2><button class="course_modal_close" type="button" data-modal-close="homeworkModal" aria-label="Fermer">&times;</button></header>
			<form class="course_form" enctype="multipart/form-data">
				<label>Titre du devoir<input type="text" name="title" required></label>
				<label>Consignes<textarea name="description" rows="4" required></textarea></label>
				<label>Groupe<select name="group"><option>PNC · Première année</option><option>Tous les groupes PNC</option></select></label>
				<label>Date limite<input type="date" name="due_date" required></label>
				<label>Document de référence<input type="file" name="attachment" accept="application/pdf,.pdf"></label>
				<footer class="course_form_footer"><button class="course_form_cancel" type="button" data-modal-close="homeworkModal">Annuler</button><button class="course_form_submit" type="submit">Créer le devoir</button></footer>
			</form>
		</section>
	</div>
@endsection
