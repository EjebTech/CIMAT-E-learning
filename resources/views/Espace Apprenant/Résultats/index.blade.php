@extends('template-student')

@section('content')
<div class="contenu_dashboard student_results_page">
    <header class="top dashboard">
        <div class="title-section">
            <i class="fa-solid fa-chart-line"></i>
            <h3>Mes résultats</h3>
        </div>

        <div class="nav">
            <div class="search">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="search" placeholder="Rechercher un résultat...">
            </div>
            <div class="notif">
                <a href="#" class="notification-icon">
                    <i class="fa-solid fa-bell"></i>
                    <span class="badge">3</span>
                </a>
            </div>
            <div class="profile_student">
                <div class="image">
                    <img src="/Elements/images/OIP-2658464322.jpg" alt="Photo de profil">
                </div>
                <div class="name">
                    <p>Edmond Barou</p>
                    <p>PNC - 2e Année</p>
                </div>
            </div>
        </div>
    </header>

    <main class="results_content">
        <section class="section_header results_banner">
            <div class="section_header_text">
                <h1>Résultats Académiques PNC</h1>
                <p>Consultez vos notes, suivez votre progression et analysez vos performances par matière tout au long du trimestre.</p>
            </div>
            <div class="badge_pnc">
                <i class="fa-solid fa-plane-departure"></i> Académie PNC
            </div>
        </section>

        <section class="results_heading">

            <button class="results_period" type="button">
                <i class="fa-solid fa-calendar-days"></i>
                Trimestre en cours
                <i class="fa-solid fa-chevron-down"></i>
            </button>
        </section>

        <section class="results_stats" aria-label="Synthèse des résultats">
            <article class="stat result_stat_card">
                <div class="icon"><i class="fa-solid fa-star"></i></div>
                <div class="info_stat">
                    <p>Moyenne générale</p>
                    <p class="stat_num">16,2 / 20</p>
                    <p class="stat_period"><i class="fa-solid fa-arrow-trend-up"></i> +1,4 pts ce trimestre</p>
                </div>
            </article>
            <article class="stat result_stat_card">
                <div class="icon"><i class="fa-solid fa-award"></i></div>
                <div class="info_stat">
                    <p>Meilleure note</p>
                    <p class="stat_num">18,5 / 20</p>
                    <p class="stat_period neutral">Sûreté aérienne</p>
                </div>
            </article>
            <article class="stat result_stat_card">
                <div class="icon"><i class="fa-solid fa-list-check"></i></div>
                <div class="info_stat">
                    <p>Évaluations</p>
                    <p class="stat_num">8</p>
                    <p class="stat_period neutral">6 devoirs • 2 exercices</p>
                </div>
            </article>
            <article class="stat result_stat_card">
                <div class="icon"><i class="fa-solid fa-ranking-star"></i></div>
                <div class="info_stat">
                    <p>Classement</p>
                    <p class="stat_num">4<sup>e</sup></p>
                    <p class="stat_period neutral">Sur 28 apprenants</p>
                </div>
            </article>
        </section>

        <section class="results_main_grid">
            <article class="results_panel grade_list_panel">
                <div class="results_panel_header">
                    <div>
                        <h2>Notes obtenues</h2>
                        <p>Dernières évaluations corrigées</p>
                    </div>
                    <button class="results_filter" type="button"><i class="fa-solid fa-sliders"></i> Filtrer</button>
                </div>

                <div class="grade_list">
                    <div class="grade_item">
                        <div class="grade_status excellent"><i class="fa-solid fa-check"></i></div>
                        <div class="grade_info">
                            <div><h3>Rapport d'analyse d'évacuation A320</h3><span class="grade_type devoir">Devoir</span></div>
                            <p>Sécurité & urgence • Remis le 28 octobre</p>
                        </div>
                        <div class="grade_score excellent"><strong>18,5</strong><span>/20</span></div>
                    </div>
                    <div class="grade_item">
                        <div class="grade_status good"><i class="fa-solid fa-check"></i></div>
                        <div class="grade_info">
                            <div><h3>Cas clinique : utilisation du DAE</h3><span class="grade_type exercice">Exercice</span></div>
                            <p>Secourisme aéronautique • Remis le 24 octobre</p>
                        </div>
                        <div class="grade_score good"><strong>16,0</strong><span>/20</span></div>
                    </div>
                    <div class="grade_item">
                        <div class="grade_status excellent"><i class="fa-solid fa-check"></i></div>
                        <div class="grade_info">
                            <div><h3>Annonces de sécurité en anglais</h3><span class="grade_type devoir">Devoir</span></div>
                            <p>Anglais technique • Remis le 20 octobre</p>
                        </div>
                        <div class="grade_score excellent"><strong>17,5</strong><span>/20</span></div>
                    </div>
                    <div class="grade_item">
                        <div class="grade_status average"><i class="fa-solid fa-minus"></i></div>
                        <div class="grade_info">
                            <div><h3>QCM facteurs humains en équipage</h3><span class="grade_type exercice">Exercice</span></div>
                            <p>CRM & facteurs humains • Remis le 16 octobre</p>
                        </div>
                        <div class="grade_score average"><strong>13,5</strong><span>/20</span></div>
                    </div>
                    <div class="grade_item">
                        <div class="grade_status good"><i class="fa-solid fa-check"></i></div>
                        <div class="grade_info">
                            <div><h3>Étude de cas protocole VIP</h3><span class="grade_type devoir">Devoir</span></div>
                            <p>Service à bord • Remis le 11 octobre</p>
                        </div>
                        <div class="grade_score good"><strong>15,5</strong><span>/20</span></div>
                    </div>
                </div>
            </article>

            <div class="results_side">
                <article class="results_panel subject_panel">
                    <div class="results_panel_header">
                        <div><h2>Moyennes par matière</h2><p>Sur le trimestre actuel</p></div>
                    </div>
                    <div class="subject_grades">
                        <div class="subject_grade">
                            <div><span>Sécurité & urgence</span><strong>17,8</strong></div>
                            <div class="subject_bar"><span style="width: 89%"></span></div>
                        </div>
                        <div class="subject_grade">
                            <div><span>Anglais technique</span><strong>16,9</strong></div>
                            <div class="subject_bar"><span style="width: 84.5%"></span></div>
                        </div>
                        <div class="subject_grade">
                            <div><span>Service à bord</span><strong>15,5</strong></div>
                            <div class="subject_bar"><span style="width: 77.5%"></span></div>
                        </div>
                        <div class="subject_grade">
                            <div><span>CRM & facteurs humains</span><strong>13,5</strong></div>
                            <div class="subject_bar"><span style="width: 67.5%"></span></div>
                        </div>
                    </div>
                </article>

                <article class="results_panel progression_panel">
                    <div class="results_panel_header">
                        <div><h2>Progression</h2><p>5 dernières évaluations</p></div>
                    </div>
                    <div class="progress_overview">
                        <div class="progress_score">
                            <strong>16,2</strong>
                            <span>/20</span>
                        </div>
                        <div class="progress_gain">
                            <i class="fa-solid fa-arrow-trend-up"></i>
                            <strong>+1,4 point</strong>
                            <span>depuis le début du trimestre</span>
                        </div>
                    </div>
                    <div class="progress_goal">
                        <div class="progress_goal_header">
                            <span>Objectif trimestriel</span>
                            <strong>81%</strong>
                        </div>
                        <div class="progress_goal_track"><span></span></div>
                    </div>
                    <div class="progress_milestones" aria-label="Jalons de progression">
                        <div class="progress_milestone reached">
                            <span><i class="fa-solid fa-check"></i></span>
                            <strong>Début</strong>
                            <small>14,8</small>
                        </div>
                        <div class="progress_milestone current">
                            <span><i class="fa-solid fa-chart-line"></i></span>
                            <strong>Actuel</strong>
                            <small>16,2</small>
                        </div>
                        <div class="progress_milestone">
                            <span><i class="fa-solid fa-bullseye"></i></span>
                            <strong>Objectif</strong>
                            <small>17,0</small>
                        </div>
                    </div>
                </article>
            </div>
        </section>
    </main>

    <footer class="student_footer">
        <div class="footer_content">
            <p>&copy; 2026 <a href="#">Groupe Komptech Cimat</a>. Tous droits réservés.</p>
            <div class="footer_socials">
                <a href="#" aria-label="Facebook" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#" aria-label="LinkedIn" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
                <a href="#" aria-label="Instagram" target="_blank"><i class="fa-brands fa-instagram"></i></a>
            </div>
        </div>
    </footer>
</div>
@endsection
