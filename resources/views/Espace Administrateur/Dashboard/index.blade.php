@extends('template-admin')
@section('title', 'Vue d’ensemble')

@section('content')
    <main class="admin_dashboard">
        <header class="admin_dashboard_intro">
            <div>
                <p class="admin_eyebrow">PILOTAGE PÉDAGOGIQUE · PNC</p>
                <h1>Vue d’ensemble</h1>
                <p>Gérez les utilisateurs, les groupes et les contenus de formation depuis un seul espace.</p>
            </div>
            <span class="admin_demo_note">
                <i class="fa-regular fa-calendar" aria-hidden="true"></i>
                Session 2026–2027
            </span>
        </header>

        <section class="admin_quick_actions" aria-label="Actions rapides">
            <a href="{{ route('Admin.insert-teacher') }}">
                <i class="fa-solid fa-person-chalkboard" aria-hidden="true"></i>
                <span>Ajouter un formateur</span>
                <i class="fa-solid fa-arrow-up-right-from-square action_arrow" aria-hidden="true"></i>
            </a>
            <a href="{{ route('Admin.insert-student') }}">
                <i class="fa-solid fa-user-plus" aria-hidden="true"></i>
                <span>Inscrire un apprenant</span>
                <i class="fa-solid fa-arrow-up-right-from-square action_arrow" aria-hidden="true"></i>
            </a>
            <a href="{{ route('Admin.assign-student') }}">
                <i class="fa-solid fa-people-arrows-left-right" aria-hidden="true"></i>
                <span>Affecter à un groupe</span>
                <i class="fa-solid fa-arrow-up-right-from-square action_arrow" aria-hidden="true"></i>
            </a>
        </section>

        <section class="admin_stats_grid" aria-label="Indicateurs de la plateforme">
            <a class="admin_stat" href="{{ route('Admin.list-student') }}">
                <span class="admin_stat_icon stat-students">
                    <i class="fa-solid fa-user-graduate" aria-hidden="true"></i>
                </span>
                <span class="admin_stat_value">7</span>
                <span class="admin_stat_label">Apprenants inscrits</span>
                <span class="admin_stat_link">
                    Voir la liste <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
                </span>
            </a>
            <a class="admin_stat" href="{{ route('Admin.list-teacher') }}">
                <span class="admin_stat_icon stat-teachers">
                    <i class="fa-solid fa-person-chalkboard" aria-hidden="true"></i>
                </span>
                <span class="admin_stat_value">13</span>
                <span class="admin_stat_label">Formateurs</span>
                <span class="admin_stat_link">
                    Voir la liste <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
                </span>
            </a>
            <a class="admin_stat" href="{{ route('Admin.groups') }}">
                <span class="admin_stat_icon stat-groups">
                    <i class="fa-solid fa-people-group" aria-hidden="true"></i>
                </span>
                <span class="admin_stat_value">9</span>
                <span class="admin_stat_label">Groupes</span>
                <span class="admin_stat_link">
                    Gérer <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
                </span>
            </a>
            <a class="admin_stat" href="{{ route('Admin.programs') }}">
                <span class="admin_stat_icon stat-programs">
                    <i class="fa-solid fa-graduation-cap" aria-hidden="true"></i>
                </span>
                <span class="admin_stat_value">7</span>
                <span class="admin_stat_label">Formations</span>
                <span class="admin_stat_link">
                    Parcourir <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
                </span>
            </a>
            <a class="admin_stat" href="{{ route('Admin.courses') }}">
                <span class="admin_stat_icon stat-courses">
                    <i class="fa-solid fa-book-open" aria-hidden="true"></i>
                </span>
                <span class="admin_stat_value">4</span>
                <span class="admin_stat_label">Cours</span>
                <span class="admin_stat_link">
                    Parcourir <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
                </span>
            </a>
        </section>

        <div class="admin_dashboard_columns">
            <section class="admin_panel admin_activity_panel" aria-labelledby="activity-title">
                <header class="admin_panel_header">
                    <div>
                        <p class="admin_eyebrow">PLATEFORME</p>
                        <h2 id="activity-title">Activité récente</h2>
                    </div>
                    <i class="fa-solid fa-clock-rotate-left" aria-hidden="true"></i>
                </header>
                <div class="admin_activity_list">
                    <article>
                        <span class="activity_marker marker-student"><i class="fa-solid fa-user-plus" aria-hidden="true"></i></span>
                        <div>
                            <strong>Nouvel apprenant inscrit</strong>
                            <p>Jean Dupont · Groupe PNC première année</p>
                        </div>
                        <time>14:32</time>
                    </article>
                    <article>
                        <span class="activity_marker marker-course"><i class="fa-solid fa-file-circle-plus" aria-hidden="true"></i></span>
                        <div>
                            <strong>Nouveau support de cours</strong>
                            <p>Guide des procédures de sécurité cabine</p>
                        </div>
                        <time>13:15</time>
                    </article>
                    <article>
                        <span class="activity_marker marker-group"><i class="fa-solid fa-people-group" aria-hidden="true"></i></span>
                        <div>
                            <strong>Affectation à un groupe</strong>
                            <p>4 apprenants · Groupe PNC première année</p>
                        </div>
                        <time>11:40</time>
                    </article>
                    <article>
                        <span class="activity_marker marker-session"><i class="fa-solid fa-video" aria-hidden="true"></i></span>
                        <div>
                            <strong>Session planifiée</strong>
                            <p>Atelier premiers secours · 12 novembre</p>
                        </div>
                        <time>10:05</time>
                    </article>
                </div>
            </section>

            <section class="admin_panel admin_management_panel" aria-labelledby="management-title">
                <header class="admin_panel_header">
                    <div>
                        <p class="admin_eyebrow">ACCÈS DIRECT</p>
                        <h2 id="management-title">Gestion des espaces</h2>
                    </div>
                </header>
                <div class="admin_management_links">
                    <a href="{{ route('Admin.list-exercise') }}">
                        <span><i class="fa-solid fa-clipboard-check" aria-hidden="true"></i></span>
                        <div>
                            <strong>Devoirs &amp; corrections</strong>
                            <small>Exercices et travaux rendus</small>
                        </div>
                        <i class="fa-solid fa-chevron-right" aria-hidden="true"></i>
                    </a>
                    <a href="{{ route('Admin.videoconference') }}">
                        <span><i class="fa-solid fa-video" aria-hidden="true"></i></span>
                        <div>
                            <strong>Visioconférences</strong>
                            <small>Sessions et replays</small>
                        </div>
                        <i class="fa-solid fa-chevron-right" aria-hidden="true"></i>
                    </a>
                    <a href="{{ route('Admin.courses-file') }}">
                        <span><i class="fa-regular fa-folder-open" aria-hidden="true"></i></span>
                        <div>
                            <strong>Fichiers de cours</strong>
                            <small>Ressources pédagogiques</small>
                        </div>
                        <i class="fa-solid fa-chevron-right" aria-hidden="true"></i>
                    </a>
                    <a href="{{ route('Admin.list-admin') }}">
                        <span><i class="fa-solid fa-user-shield" aria-hidden="true"></i></span>
                        <div>
                            <strong>Administrateurs</strong>
                            <small>Gestion des accès</small>
                        </div>
                        <i class="fa-solid fa-chevron-right" aria-hidden="true"></i>
                    </a>
                </div>
            </section>
        </div>
    </main>
@endsection
