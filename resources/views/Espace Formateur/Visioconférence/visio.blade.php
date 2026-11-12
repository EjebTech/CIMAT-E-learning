@extends('template-teacher')
@section('content-teacher')
	<main class="visio_page">
		<header class="top_dashboard_teacher visio_top_dashboard">
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
        <div class="global-group-banner">
            <label for="teacher-group">
                <i class="fa-solid fa-layer-group"></i>
                Cliquez pour sélectionner les groupes que vous gérez :
            </label>
            <select id="teacher-group" name="teacher-group" aria-label="Choisir le groupe actif">
                <option value="developpement-web">PNC-1ère année</option>
                <option value="bureautique">Fret Aérien</option>
            </select>
        </div>
		<section class="visio_heading">
			<div>

				<h1>Visioconférences</h1>
				<p>Organisez les briefings, ateliers et débriefings de la formation PNC.</p>
			</div>
			<div class="visio_heading_actions">
				<form class="visio_search" method="GET" action="{{ route('Teacher.videoconference') }}">
					<label class="visually_hidden" for="visio-search">Rechercher une visioconférence</label>
					<i class="fa-solid fa-magnifying-glass" aria-hidden="true"></i>
					<input id="visio-search" type="search" name="q" value="{{ request('q') }}" placeholder="Rechercher une session...">
					<button type="submit" aria-label="Rechercher"><i class="fa-solid fa-arrow-right" aria-hidden="true"></i></button>
				</form>
				<button class="primary_button" type="button" data-modal-open="createVisioModal"><i class="fa-solid fa-plus" aria-hidden="true"></i> Planifier une session</button>
			</div>
		</section>

		<section class="visio_summary" aria-label="Résumé des visioconférences">
			<article><span class="visio_summary_icon visio-icon-live"><i class="fa-solid fa-tower-broadcast" aria-hidden="true"></i></span><div><strong>1</strong><span>En direct</span></div></article>
			<article><span class="visio_summary_icon visio-icon-upcoming"><i class="fa-regular fa-calendar" aria-hidden="true"></i></span><div><strong>3</strong><span>À venir</span></div></article>
			<article><span class="visio_summary_icon visio-icon-replay"><i class="fa-solid fa-play" aria-hidden="true"></i></span><div><strong>8</strong><span>Replays disponibles</span></div></article>
		</section>

		<section class="visio_live_panel" aria-labelledby="visio-live-title">
			<div class="visio_live_signal"><span class="visio_live_signal"></span> EN DIRECT MAINTENANT</div>
			<div class="visio_live_content">
				<div class="visio_live_icon"><i class="fa-solid fa-video" aria-hidden="true"></i></div>
				<div>
					<p class="visio_session_group">GROUPE PNC · PREMIÈRE ANNÉE</p>
					<h2 id="visio-live-title">Coordination sécurité cabine</h2>
					<p>Briefing pré-vol et procédures incendie · Instructrice : Sophie Laurent</p>
				</div>
				<div class="visio_live_time"><strong>09:00 – 10:00</strong><span>12 nov. 2026</span></div>
			</div>
			<a class="visio_join_button" href="#" aria-label="Rejoindre la visioconférence Coordination sécurité cabine"><i class="fa-solid fa-arrow-up-right-from-square" aria-hidden="true"></i> Rejoindre le salon</a>
		</section>

		<section class="visio_section" aria-labelledby="upcoming-visios-title">
			<header class="visio_section_header">
				<div><h2 id="upcoming-visios-title">Sessions à venir</h2><p>Prochaines rencontres du groupe PNC</p></div>
				<span class="visio_section_count">3 sessions</span>
			</header>
			<div class="visio_session_grid">
				<article class="visio_session_card">
					<div class="visio_session_card_top"><div class="visio_date_block"><strong>12</strong><span>NOV.</span></div><div class="visio_session_title"><span class="visio_tag tag-security">Sécurité cabine</span><span class="visio_tag tag-today">Aujourd’hui</span></div></div>
					<h3>Atelier urgences médicales et premiers secours</h3>
					<p>Groupe PNC · Intervenante : Dr Sophie Laurent</p>
					<div class="visio_session_card_footer"><div class="visio_session_time"><strong>14:00 – 15:30</strong><span>90 min</span></div><div class="visio_session_actions"><button type="button">Modifier</button><button type="button" class="visio_cancel_button">Annuler</button></div></div>
				</article>
				<article class="visio_session_card">
					<div class="visio_session_card_top"><div class="visio_date_block"><strong>14</strong><span>NOV.</span></div><div class="visio_session_title"><span class="visio_tag tag-service">Service à bord</span><span class="visio_tag">À venir</span></div></div>
					<h3>Gestion des passagers VIP et service premium</h3>
					<p>Groupe PNC · Instructeur : Marc Dubois</p>
					<div class="visio_session_card_footer"><div class="visio_session_time"><strong>10:00 – 11:30</strong><span>90 min</span></div><div class="visio_session_actions"><button type="button">Modifier</button><button type="button" class="visio_cancel_button">Annuler</button></div></div>
				</article>
				<article class="visio_session_card">
					<div class="visio_session_card_top"><div class="visio_date_block"><strong>17</strong><span>NOV.</span></div><div class="visio_session_title"><span class="visio_tag tag-crew">Facteurs humains</span><span class="visio_tag">À venir</span></div></div>
					<h3>CRM et coordination de l’équipage</h3>
					<p>Groupe PNC · Instructrice : Sarah Jenkins</p>
					<div class="visio_session_card_footer"><div class="visio_session_time"><strong>16:00 – 17:00</strong><span>60 min</span></div><div class="visio_session_actions"><button type="button">Modifier</button><button type="button" class="visio_cancel_button">Annuler</button></div></div>
				</article>
			</div>
		</section>

		<section class="visio_section" aria-labelledby="replays-title">
			<header class="visio_section_header">
				<div><h2 id="replays-title">Replays récents</h2><p>Enregistrements des dernières sessions PNC</p></div>
				<span class="visio_section_count">8 disponibles</span>
			</header>
			<div class="visio_replay_grid">
				<article class="visio_replay_card">
					<span class="visio_replay_icon"><i class="fa-solid fa-play" aria-hidden="true"></i></span>
					<div><h3>Procédures d’évacuation et matériel de sécurité</h3><p>Groupe PNC · 10 nov. 2026 · 1 h 12</p></div>
					<a href="#" aria-label="Visionner Procédures d’évacuation et matériel de sécurité">Visionner <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
				</article>
				<article class="visio_replay_card">
					<span class="visio_replay_icon"><i class="fa-solid fa-play" aria-hidden="true"></i></span>
					<div><h3>Accueil, embarquement et annonces cabine</h3><p>Groupe PNC · 8 nov. 2026 · 48 min</p></div>
					<a href="#" aria-label="Visionner Accueil, embarquement et annonces cabine">Visionner <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
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

	<div class="course_modal" id="createVisioModal" role="dialog" aria-modal="true" aria-labelledby="createVisioModalTitle" hidden>
		<section class="course_modal_panel">
			<header class="course_modal_header"><h2 id="createVisioModalTitle"><i class="fa-solid fa-video" aria-hidden="true"></i> Planifier une visioconférence</h2><button class="course_modal_close" type="button" data-modal-close="createVisioModal" aria-label="Fermer">&times;</button></header>
			<form class="course_form">
				<label>Titre de la session<input type="text" name="title" required></label>
				<label>Description<textarea name="description" rows="3"></textarea></label>
				<label>Groupe<select name="group"><option>PNC · Première année</option><option>Tous les groupes PNC</option></select></label>
				<label>Date et heure<input type="datetime-local" name="starts_at" required></label>
				<label>Lien du salon<input type="url" name="meeting_url" placeholder="https://" required></label>
				<footer class="course_form_footer"><button class="course_form_cancel" type="button" data-modal-close="createVisioModal">Annuler</button><button class="course_form_submit" type="submit">Planifier</button></footer>
			</form>
		</section>
	</div>
    <script>
        // Fonctions universelles pour ouvrir et fermer n'importe quelle modale par son ID
        function openModal(modalId) {
            const modal = document.getElementById(modalId);
            if (modal) {
                modal.removeAttribute('hidden');
            }
        }

        function closeModal(modalId) {
            const modal = document.getElementById(modalId);
            if (modal) {
                modal.setAttribute('hidden', 'true');

                // Réinitialise le formulaire si l'utilisateur annule la saisie
                const form = modal.querySelector('form');
                if (form) form.reset();
            }
        }

        document.addEventListener('DOMContentLoaded', () => {
            // 1. Gestion de l'ouverture (Bouton "Planifier une session")
            const openButtons = document.querySelectorAll('[data-modal-open]');
            openButtons.forEach(button => {
                button.addEventListener('click', () => {
                    const modalId = button.getAttribute('data-modal-open');
                    openModal(modalId);
                });
            });

            // 2. Gestion de la fermeture (Croix et boutons "Annuler")
            const closeButtons = document.querySelectorAll('.course_modal_close, .course_form_cancel');
            closeButtons.forEach(button => {
                button.addEventListener('click', () => {
                    const modalId = button.getAttribute('data-modal-close');
                    closeModal(modalId);
                });
            });

            // 3. Fermeture en cliquant sur l'arrière-plan sombre (overlay)
            const allModals = document.querySelectorAll('.course_modal');
            allModals.forEach(modal => {
                modal.addEventListener('click', (e) => {
                    if (e.target === modal) {
                        const modalId = modal.getAttribute('id');
                        closeModal(modalId);
                    }
                });
            });
        });
    </script>
@endsection
