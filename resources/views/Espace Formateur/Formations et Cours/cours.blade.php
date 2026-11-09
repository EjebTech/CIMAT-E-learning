@extends('template-teacher')
@section('content-teacher')
	<main class="courses_page">
		<header class="top_dashboard_teacher courses_top_dashboard">
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

		<section class="courses_heading">
			<div>
				<p class="groups_overline"></p>
				<h1>Cours et ressources</h1>
				<p>Supports pédagogiques pour la formation Personnel Navigant Commercial.</p>
			</div>
			<div class="courses_heading_actions">
				<button class="secondary_button" type="button" data-modal-open="pdfCourseModal">
					<i class="fa-regular fa-file-pdf" aria-hidden="true"></i> Ajouter un cours PDF
				</button>
				<button class="primary_button" type="button" data-modal-open="videoCourseModal">
					<i class="fa-solid fa-video" aria-hidden="true"></i> Ajouter une vidéo
				</button>
			</div>
		</section>

		<section class="course_summary" aria-label="Résumé des ressources">
			<div><i class="fa-solid fa-book-open" aria-hidden="true"></i><span><strong>10</strong> supports</span></div>
			<div><i class="fa-regular fa-file-pdf" aria-hidden="true"></i><span><strong>6</strong> avec PDF</span></div>
			<div><i class="fa-solid fa-video" aria-hidden="true"></i><span><strong>6</strong> avec vidéo</span></div>
		</section>

		<section class="course_list_panel" aria-labelledby="course-list-title">
			<header class="course_list_header">
				<div>
					<h2 id="course-list-title">Supports de formation</h2>
					<p>Documents, vidéos et supports combinés pour les cours PNC.</p>
				</div>
				<label class="course_search">
					<i class="fa-solid fa-magnifying-glass" aria-hidden="true"></i>
					<span class="visually_hidden">Rechercher dans les cours</span>
					<input type="search" id="courseSearch" placeholder="Rechercher un cours...">
				</label>
			</header>

			<div class="course_filters" aria-label="Filtrer les supports">
				<button class="course_filter active" type="button" data-course-filter="all" aria-pressed="true">Tous <span>10</span></button>
				<button class="course_filter" type="button" data-course-filter="pdf" aria-pressed="false">PDF</button>
				<button class="course_filter" type="button" data-course-filter="video" aria-pressed="false">Vidéo</button>
				<button class="course_filter" type="button" data-course-filter="pdf-video" aria-pressed="false">PDF + vidéo</button>
			</div>

			<div class="course_list_table" role="table" aria-label="Liste des cours et ressources">
				
				<div class="course_list_rows" role="rowgroup">
					<article class="course_row" role="row" data-course-row data-type="pdf" data-title="procédures de sécurité cabine">
						<div class="course_row_title" role="cell"><span class="course_type_icon type-pdf"><i class="fa-regular fa-file-pdf" aria-hidden="true"></i></span><div><h3>Procédures de sécurité cabine</h3><p>Consignes de sécurité, issues et équipements de bord</p></div></div>
						<div class="course_row_type" role="cell"><span class="course_type_badge">PDF</span></div>
						<time class="course_row_date" role="cell" datetime="2026-03-18">18 mars 2026</time>
						<div class="course_row_actions" role="cell"><button type="button" class="course_action_button"><i class="fa-regular fa-eye" aria-hidden="true"></i><span>Consulter</span></button><button type="button" class="course_delete_button" aria-label="Supprimer Procédures de sécurité cabine"><i class="fa-regular fa-trash-can" aria-hidden="true"></i></button></div>
					</article>
					<article class="course_row" role="row" data-course-row data-type="pdf-video" data-title="service à bord et relation passager">
						<div class="course_row_title" role="cell"><span class="course_type_icon type-combined"><i class="fa-solid fa-book-open" aria-hidden="true"></i></span><div><h3>Service à bord et relation passager</h3><p>Étapes du service, posture et communication avec les passagers</p></div></div>
						<div class="course_row_type" role="cell"><span class="course_type_badge">PDF + vidéo</span></div>
						<time class="course_row_date" role="cell" datetime="2026-03-15">15 mars 2026</time>
						<div class="course_row_actions" role="cell"><button type="button" class="course_action_button"><i class="fa-regular fa-eye" aria-hidden="true"></i><span>Consulter</span></button><button type="button" class="course_delete_button" aria-label="Supprimer Service à bord et relation passager"><i class="fa-regular fa-trash-can" aria-hidden="true"></i></button></div>
					</article>
					<article class="course_row" role="row" data-course-row data-type="video" data-title="premiers secours en milieu aéronautique">
						<div class="course_row_title" role="cell"><span class="course_type_icon type-video"><i class="fa-solid fa-circle-play" aria-hidden="true"></i></span><div><h3>Premiers secours en milieu aéronautique</h3><p>Gestes d’urgence et prise en charge d’un passager</p></div></div>
						<div class="course_row_type" role="cell"><span class="course_type_badge">Vidéo</span></div>
						<time class="course_row_date" role="cell" datetime="2026-03-12">12 mars 2026</time>
						<div class="course_row_actions" role="cell"><button type="button" class="course_action_button"><i class="fa-regular fa-eye" aria-hidden="true"></i><span>Consulter</span></button><button type="button" class="course_delete_button" aria-label="Supprimer Premiers secours en milieu aéronautique"><i class="fa-regular fa-trash-can" aria-hidden="true"></i></button></div>
					</article>
					<article class="course_row" role="row" data-course-row data-type="pdf" data-title="accueil et embarquement des passagers">
						<div class="course_row_title" role="cell"><span class="course_type_icon type-pdf"><i class="fa-regular fa-file-pdf" aria-hidden="true"></i></span><div><h3>Accueil et embarquement des passagers</h3><p>Contrôle des documents et accompagnement à bord</p></div></div>
						<div class="course_row_type" role="cell"><span class="course_type_badge">PDF</span></div>
						<time class="course_row_date" role="cell" datetime="2026-03-10">10 mars 2026</time>
						<div class="course_row_actions" role="cell"><button type="button" class="course_action_button"><i class="fa-regular fa-eye" aria-hidden="true"></i><span>Consulter</span></button><button type="button" class="course_delete_button" aria-label="Supprimer Accueil et embarquement des passagers"><i class="fa-regular fa-trash-can" aria-hidden="true"></i></button></div>
					</article>
					<article class="course_row" role="row" data-course-row data-type="pdf-video" data-title="gestion des situations difficiles">
						<div class="course_row_title" role="cell"><span class="course_type_icon type-combined"><i class="fa-solid fa-book-open" aria-hidden="true"></i></span><div><h3>Gestion des situations difficiles</h3><p>Prévention des conflits et mises en situation en cabine</p></div></div>
						<div class="course_row_type" role="cell"><span class="course_type_badge">PDF + vidéo</span></div>
						<time class="course_row_date" role="cell" datetime="2026-03-08">8 mars 2026</time>
						<div class="course_row_actions" role="cell"><button type="button" class="course_action_button"><i class="fa-regular fa-eye" aria-hidden="true"></i><span>Consulter</span></button><button type="button" class="course_delete_button" aria-label="Supprimer Gestion des situations difficiles"><i class="fa-regular fa-trash-can" aria-hidden="true"></i></button></div>
					</article>
					<article class="course_row" role="row" data-course-row data-type="video" data-title="annonces et démonstrations de sécurité">
						<div class="course_row_title" role="cell"><span class="course_type_icon type-video"><i class="fa-solid fa-circle-play" aria-hidden="true"></i></span><div><h3>Annonces et démonstrations de sécurité</h3><p>Présentation des consignes aux passagers</p></div></div>
						<div class="course_row_type" role="cell"><span class="course_type_badge">Vidéo</span></div>
						<time class="course_row_date" role="cell" datetime="2026-03-06">6 mars 2026</time>
						<div class="course_row_actions" role="cell"><button type="button" class="course_action_button"><i class="fa-regular fa-eye" aria-hidden="true"></i><span>Consulter</span></button><button type="button" class="course_delete_button" aria-label="Supprimer Annonces et démonstrations de sécurité"><i class="fa-regular fa-trash-can" aria-hidden="true"></i></button></div>
					</article>
					<article class="course_row" role="row" data-course-row data-type="pdf" data-title="marchandises dangereuses en cabine">
						<div class="course_row_title" role="cell"><span class="course_type_icon type-pdf"><i class="fa-regular fa-file-pdf" aria-hidden="true"></i></span><div><h3>Marchandises dangereuses en cabine</h3><p>Identification, signalement et procédures applicables</p></div></div>
						<div class="course_row_type" role="cell"><span class="course_type_badge">PDF</span></div>
						<time class="course_row_date" role="cell" datetime="2026-03-04">4 mars 2026</time>
						<div class="course_row_actions" role="cell"><button type="button" class="course_action_button"><i class="fa-regular fa-eye" aria-hidden="true"></i><span>Consulter</span></button><button type="button" class="course_delete_button" aria-label="Supprimer Marchandises dangereuses en cabine"><i class="fa-regular fa-trash-can" aria-hidden="true"></i></button></div>
					</article>
					<article class="course_row" role="row" data-course-row data-type="video" data-title="préparation de la cabine avant le vol">
						<div class="course_row_title" role="cell"><span class="course_type_icon type-video"><i class="fa-solid fa-circle-play" aria-hidden="true"></i></span><div><h3>Préparation de la cabine avant le vol</h3><p>Vérifications des équipements et de la cabine</p></div></div>
						<div class="course_row_type" role="cell"><span class="course_type_badge">Vidéo</span></div>
						<time class="course_row_date" role="cell" datetime="2026-03-02">2 mars 2026</time>
						<div class="course_row_actions" role="cell"><button type="button" class="course_action_button"><i class="fa-regular fa-eye" aria-hidden="true"></i><span>Consulter</span></button><button type="button" class="course_delete_button" aria-label="Supprimer Préparation de la cabine avant le vol"><i class="fa-regular fa-trash-can" aria-hidden="true"></i></button></div>
					</article>
					<article class="course_row" role="row" data-course-row data-type="pdf" data-title="protocoles de service premium">
						<div class="course_row_title" role="cell"><span class="course_type_icon type-pdf"><i class="fa-regular fa-file-pdf" aria-hidden="true"></i></span><div><h3>Protocoles de service premium</h3><p>Accueil personnalisé et standards de service à bord</p></div></div>
						<div class="course_row_type" role="cell"><span class="course_type_badge">PDF</span></div>
						<time class="course_row_date" role="cell" datetime="2026-02-27">27 févr. 2026</time>
						<div class="course_row_actions" role="cell"><button type="button" class="course_action_button"><i class="fa-regular fa-eye" aria-hidden="true"></i><span>Consulter</span></button><button type="button" class="course_delete_button" aria-label="Supprimer Protocoles de service premium"><i class="fa-regular fa-trash-can" aria-hidden="true"></i></button></div>
					</article>
					<article class="course_row" role="row" data-course-row data-type="video" data-title="coordination de l'équipage en vol">
						<div class="course_row_title" role="cell"><span class="course_type_icon type-video"><i class="fa-solid fa-circle-play" aria-hidden="true"></i></span><div><h3>Coordination de l’équipage en vol</h3><p>Communication et répartition des rôles au sein de l’équipage</p></div></div>
						<div class="course_row_type" role="cell"><span class="course_type_badge">Vidéo</span></div>
						<time class="course_row_date" role="cell" datetime="2026-02-24">24 févr. 2026</time>
						<div class="course_row_actions" role="cell"><button type="button" class="course_action_button"><i class="fa-regular fa-eye" aria-hidden="true"></i><span>Consulter</span></button><button type="button" class="course_delete_button" aria-label="Supprimer Coordination de l’équipage en vol"><i class="fa-regular fa-trash-can" aria-hidden="true"></i></button></div>
					</article>
				</div>
			</div>

			<footer class="course_list_footer">
				<p data-course-count>Affichage de 1 à 8 sur 10 supports</p>
				<nav class="course_pagination" aria-label="Pagination des supports">
					<button type="button" data-page-previous aria-label="Page précédente" disabled><i class="fa-solid fa-chevron-left" aria-hidden="true"></i></button>
					<span data-page-status>Page 1 sur 2</span>
					<button type="button" data-page-next aria-label="Page suivante"><i class="fa-solid fa-chevron-right" aria-hidden="true"></i></button>
				</nav>
			</footer>
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

	<div class="course_modal" id="pdfCourseModal" role="dialog" aria-modal="true" aria-labelledby="pdfCourseModalTitle" hidden>
		<section class="course_modal_panel">
			<header class="course_modal_header"><h2 id="pdfCourseModalTitle"><i class="fa-regular fa-file-pdf" aria-hidden="true"></i> Ajouter un cours PDF</h2><button class="course_modal_close" type="button" data-modal-close="pdfCourseModal" aria-label="Fermer">&times;</button></header>
			<form class="course_form" enctype="multipart/form-data">
				<label>Titre du cours<input type="text" name="title" required></label>
				<label>Description<textarea name="description" rows="3"></textarea></label>
				<label>Fichier PDF<input type="file" name="document" accept="application/pdf,.pdf" required></label>
				<footer class="course_form_footer"><button class="course_form_cancel" type="button" data-modal-close="pdfCourseModal">Annuler</button><button class="course_form_submit" type="submit">Ajouter le cours</button></footer>
			</form>
		</section>
	</div>

	<div class="course_modal" id="videoCourseModal" role="dialog" aria-modal="true" aria-labelledby="videoCourseModalTitle" hidden>
		<section class="course_modal_panel">
			<header class="course_modal_header"><h2 id="videoCourseModalTitle"><i class="fa-solid fa-video" aria-hidden="true"></i> Ajouter une vidéo de cours</h2><button class="course_modal_close" type="button" data-modal-close="videoCourseModal" aria-label="Fermer">&times;</button></header>
			<form class="course_form" enctype="multipart/form-data">
				<label>Titre de la vidéo<input type="text" name="title" required></label>
				<label>Description<textarea name="description" rows="3"></textarea></label>
				<label>Fichier vidéo<input type="file" name="video" accept="video/*" required></label>
				<footer class="course_form_footer"><button class="course_form_cancel" type="button" data-modal-close="videoCourseModal">Annuler</button><button class="course_form_submit" type="submit">Ajouter la vidéo</button></footer>
			</form>
		</section>
	</div>

	<script>
		const courseRows = [...document.querySelectorAll('[data-course-row]')];
		const courseCount = document.querySelector('[data-course-count]');
		const pageStatus = document.querySelector('[data-page-status]');
		const previousPageButton = document.querySelector('[data-page-previous]');
		const nextPageButton = document.querySelector('[data-page-next]');
		const pageSize = 8;
		let currentPage = 1;

		function updateCourseList() {
			const pageCount = Math.max(1, Math.ceil(courseRows.length / pageSize));
			currentPage = Math.min(currentPage, pageCount);

			const startIndex = (currentPage - 1) * pageSize;
			const visibleRows = new Set(courseRows.slice(startIndex, startIndex + pageSize));
			courseRows.forEach((row) => { row.hidden = !visibleRows.has(row); });

			const visibleStart = courseRows.length ? startIndex + 1 : 0;
			const visibleEnd = Math.min(startIndex + pageSize, courseRows.length);
			courseCount.textContent = `Affichage de ${visibleStart} à ${visibleEnd} sur ${courseRows.length} supports`;
			pageStatus.textContent = `Page ${currentPage} sur ${pageCount}`;
			previousPageButton.disabled = currentPage === 1;
			nextPageButton.disabled = currentPage === pageCount;
		}

		previousPageButton.addEventListener('click', () => {
			currentPage -= 1;
			updateCourseList();
		});

		nextPageButton.addEventListener('click', () => {
			currentPage += 1;
			updateCourseList();
		});

		updateCourseList();
	</script>
@endsection
