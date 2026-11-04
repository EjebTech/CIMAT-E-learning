@extends('template-student')

@section('content')
    <div class="contenu_dashboard">

        <header class="top dashboard">
            <div class="title-section">
                <i class="fa-solid fa-graduation-cap"></i>
                <h3>Formations et cours</h3>
            </div>

            <div class="nav">
                <div class="search">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <input type="search" placeholder="Rechercher un cours...">
                </div>

                <div class="notif">
                    <a href="#" class="notification-icon">
                        <i class="fa-solid fa-bell"></i>
                        <span class="badge"></span>
                    </a>
                </div>

                <div class="profile_student">
                    <div class="image">
                        <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&q=80&w=250" alt="Avatar Étudiant">
                    </div>
                    <div class="name">
                        <p>Edmond Barou</p>
                        <p>PNC - 2e Année</p>
                    </div>

                </div>
            </div>
        </header>


        <main class="courses_container">
            <!-- En-tête de section avec sous-titre -->
            <section class="section_header">
                <div class="section_header_text">
                    <h1>Catalogue Pédagogique PNC</h1>
                    <p>Consultez vos modules d'apprentissage, visionnez les cours dispensés par vos instructeurs ou téléchargez les supports de cours au format PDF.</p>
                </div>
                <div class="badge_pnc">
                    <i class="fa-solid fa-plane-departure"></i> Spécialisation PNC
                </div>
            </section>

            <!--Recherche et Filtres -->
            <div class="filter_toolbar">
                <div class="course_search_box">
                    <i class="fa-solid fa-magnifying-glass" style="color: var(--color-text-muted);"></i>
                    <input type="text" id="courseSearchInput" placeholder="Rechercher par titre de module ou instructeur...">
                </div>

                <div class="filter_categories">
                    <button class="filter_btn active" data-filter="all">Tous les cours</button>
                    <button class="filter_btn" data-filter="securite">Sécurité & Sauvetage</button>
                    <button class="filter_btn" data-filter="secourisme">Secourisme Aéronautique</button>
                    <button class="filter_btn" data-filter="service">Service à Bord</button>
                    <button class="filter_btn" data-filter="reglementation">Réglementation</button>
                </div>
            </div>

            <!-- Grille des cours PNC -->
            <div class="courses_grid" id="coursesGrid">


                <article class="course_card" data-category="secourisme">
                    <div class="card_banner">
                        <img src="https://images.unsplash.com/photo-1584515979956-d9f6e5d09982?auto=format&fit=crop&q=80&w=600" alt="Secourisme">
                        <span class="category_tag">Secourisme</span>
                        <div class="play_overlay" onclick="openVideoModal('Secourisme Aéronautique & Gestes d\'Urgence', 'https://www.youtube.com/embed/dQw4w9WgXcQ')">
                            <div class="play_btn_icon"><i class="fa-solid fa-play"></i></div>
                        </div>
                    </div>
                    <div class="card_body">
                        <h3 class="course_title">Secourisme Aéronautique & Gestes d'Urgence</h3>
                        <p class="course_description">Prise en charge des urgences médicales en vol, réanimation cardiorespiratoire et utilisation du défibrillateur (DSA).</p>
                        <div class="course_info">
                            <span><i class="fa-regular fa-clock"></i> 4h 30m</span>
                            <span><i class="fa-regular fa-user"></i> Dr. M. Coulibaly</span>
                        </div>
                        <div class="card_actions">
                            <button class="btn_action btn_pdf" onclick="downloadPdf('Secourisme_Aeronautique.pdf')">
                                <i class="fa-regular fa-file-pdf"></i> PDF
                            </button>
                            <button class="btn_action btn_video" onclick="openVideoModal('Secourisme Aéronautique & Gestes d\'Urgence', 'https://www.youtube.com/embed/dQw4w9WgXcQ')">
                                <i class="fa-solid fa-circle-play"></i> Voir la vidéo
                            </button>
                        </div>
                    </div>
                </article>


                <article class="course_card" data-category="securite">
                    <div class="card_banner">
                        <img src="https://images.unsplash.com/photo-1540959733332-eab4deabeeaf?auto=format&fit=crop&q=80&w=600" alt="Sécurité Évacuation">
                        <span class="category_tag">Sécurité Sauvetage</span>
                        <div class="play_overlay" onclick="openVideoModal('Procédures d\'Évacuation & Matériels de Sécurité', 'https://www.youtube.com/embed/dQw4w9WgXcQ')">
                            <div class="play_btn_icon"><i class="fa-solid fa-play"></i></div>
                        </div>
                    </div>
                    <div class="card_body">
                        <h3 class="course_title">Procédures d'Évacuation & Matériels de Sécurité</h3>
                        <p class="course_description">Utilisation des toboggans d'évacuation, canots de sauvetage, gilets et gestion des évacuations sur terre et mer.</p>
                        <div class="course_info">
                            <span><i class="fa-regular fa-clock"></i> 6h 15m</span>
                            <span><i class="fa-regular fa-user"></i> Capt. A. Diallo</span>
                        </div>
                        <div class="card_actions">
                            <button class="btn_action btn_pdf" onclick="downloadPdf('Evacuation_Securite.pdf')">
                                <i class="fa-regular fa-file-pdf"></i> PDF
                            </button>
                            <button class="btn_action btn_video" onclick="openVideoModal('Procédures d\'Évacuation & Matériels de Sécurité', 'https://www.youtube.com/embed/dQw4w9WgXcQ')">
                                <i class="fa-solid fa-circle-play"></i> Voir la vidéo
                            </button>
                        </div>
                    </div>
                </article>


                <article class="course_card" data-category="service">
                    <div class="card_banner">
                        <img src="https://images.unsplash.com/photo-1570710891163-6d3b5c47248b?auto=format&fit=crop&q=80&w=600" alt="Service à Bord">
                        <span class="category_tag">Service à Bord</span>
                        <div class="play_overlay" onclick="openVideoModal('Service à Bord & Protocoles VIP', 'https://www.youtube.com/embed/dQw4w9WgXcQ')">
                            <div class="play_btn_icon"><i class="fa-solid fa-play"></i></div>
                        </div>
                    </div>
                    <div class="card_body">
                        <h3 class="course_title">Service à Bord & Protocoles VIP</h3>
                        <p class="course_description">Excellence de la relation client, service de restauration en Classe Affaires/Première et gestion des passagers VIP.</p>
                        <div class="course_info">
                            <span><i class="fa-regular fa-clock"></i> 3h 45m</span>
                            <span><i class="fa-regular fa-user"></i> Mme. K. Toure</span>
                        </div>
                        <div class="card_actions">
                            <button class="btn_action btn_pdf" onclick="downloadPdf('Service_Bord_VIP.pdf')">
                                <i class="fa-regular fa-file-pdf"></i> PDF
                            </button>
                            <button class="btn_action btn_video" onclick="openVideoModal('Service à Bord & Protocoles VIP', 'https://www.youtube.com/embed/dQw4w9WgXcQ')">
                                <i class="fa-solid fa-circle-play"></i> Voir la vidéo
                            </button>
                        </div>
                    </div>
                </article>


                <article class="course_card" data-category="reglementation">
                    <div class="card_banner">
                        <img src="https://images.unsplash.com/photo-1436491865332-7a61a109cc05?auto=format&fit=crop&q=80&w=600" alt="Réglementation Aéronautique">
                        <span class="category_tag">Réglementation</span>
                        <div class="play_overlay" onclick="openVideoModal('Réglementation & Sûreté de l\'Aviation Civile', 'https://www.youtube.com/embed/dQw4w9WgXcQ')">
                            <div class="play_btn_icon"><i class="fa-solid fa-play"></i></div>
                        </div>
                    </div>
                    <div class="card_body">
                        <h3 class="course_title">Réglementation & Sûreté de l'Aviation Civile</h3>
                        <p class="course_description">Normes IATA/OACI, gestion des marchandises dangereuses (DGR) et prévention contre les actes d'intervention illicite.</p>
                        <div class="course_info">
                            <span><i class="fa-regular fa-clock"></i> 5h 00m</span>
                            <span><i class="fa-regular fa-user"></i> M. E. Konan</span>
                        </div>
                        <div class="card_actions">
                            <button class="btn_action btn_pdf" onclick="downloadPdf('Reglementation_Surete.pdf')">
                                <i class="fa-regular fa-file-pdf"></i> PDF
                            </button>
                            <button class="btn_action btn_video" onclick="openVideoModal('Réglementation & Sûreté de l\'Aviation Civile', 'https://www.youtube.com/embed/dQw4w9WgXcQ')">
                                <i class="fa-solid fa-circle-play"></i> Voir la vidéo
                            </button>
                        </div>
                    </div>
                </article>


                <article class="course_card" data-category="securite">
                    <div class="card_banner">
                        <img src="https://images.unsplash.com/photo-1508873696983-2df515122519?auto=format&fit=crop&q=80&w=600" alt="Lutte contre les Incendies">
                        <span class="category_tag">Sécurité Sauvetage</span>
                        <div class="play_overlay" onclick="openVideoModal('Gestion des Incendies & Équipements Respiratoires', 'https://www.youtube.com/embed/dQw4w9WgXcQ')">
                            <div class="play_btn_icon"><i class="fa-solid fa-play"></i></div>
                        </div>
                    </div>
                    <div class="card_body">
                        <h3 class="course_title">Gestion des Incendies & Équipements Respiratoires</h3>
                        <p class="course_description">Techniques d'extinction des feux en cabine/soute, maniement des bouteilles d'oxygène et cagoules cagoule PBE.</p>
                        <div class="course_info">
                            <span><i class="fa-regular fa-clock"></i> 3h 30m</span>
                            <span><i class="fa-regular fa-user"></i> Capt. A. Diallo</span>
                        </div>
                        <div class="card_actions">
                            <button class="btn_action btn_pdf" onclick="downloadPdf('Gestion_Incendies.pdf')">
                                <i class="fa-regular fa-file-pdf"></i> PDF
                            </button>
                            <button class="btn_action btn_video" onclick="openVideoModal('Gestion des Incendies & Équipements Respiratoires', 'https://www.youtube.com/embed/dQw4w9WgXcQ')">
                                <i class="fa-solid fa-circle-play"></i> Voir la vidéo
                            </button>
                        </div>
                    </div>
                </article>


                <article class="course_card" data-category="service">
                    <div class="card_banner">
                        <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?auto=format&fit=crop&q=80&w=600" alt="Communication & Facteurs Humains">
                        <span class="category_tag">Service à Bord</span>
                        <div class="play_overlay" onclick="openVideoModal('CRM & Facteurs Humains en Équipage', 'https://www.youtube.com/embed/dQw4w9WgXcQ')">
                            <div class="play_btn_icon"><i class="fa-solid fa-play"></i></div>
                        </div>
                    </div>
                    <div class="card_body">
                        <h3 class="course_title">CRM & Facteurs Humains en Équipage</h3>
                        <p class="course_description">Crew Resource Management : communication efficace avec le poste de pilotage, gestion du stress et synergie d'équipe.</p>
                        <div class="course_info">
                            <span><i class="fa-regular fa-clock"></i> 4h 00m</span>
                            <span><i class="fa-regular fa-user"></i> Mme. K. Toure</span>
                        </div>
                        <div class="card_actions">
                            <button class="btn_action btn_pdf" onclick="downloadPdf('CRM_Facteurs_Humains.pdf')">
                                <i class="fa-regular fa-file-pdf"></i> PDF
                            </button>
                            <button class="btn_action btn_video" onclick="openVideoModal('CRM & Facteurs Humains en Équipage', 'https://www.youtube.com/embed/dQw4w9WgXcQ')">
                                <i class="fa-solid fa-circle-play"></i> Voir la vidéo
                            </button>
                        </div>
                    </div>
                </article>

            </div>

        </main>
    </div>


    <!-- FENÊTRE MODALE DE VISIONNAGE VIDÉO -->
    <div class="modal_video_overlay" id="videoModal">
        <div class="modal_content">
            <div class="modal_header">
                <h3 id="modalCourseTitle"><i class="fa-solid fa-circle-play" style="color: var(--color-accent);"></i> Titre du cours</h3>
                <button class="close_modal_btn" onclick="closeVideoModal()" title="Fermer la vidéo">&times;</button>
            </div>
            <div class="video_wrapper">
                <iframe id="modalVideoFrame" src="" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="modal_footer">
                <span><i class="fa-solid fa-graduation-cap"></i> Espace Pédagogique CIMAT</span>
                <span>Instructeur qualifié PNC</span>
            </div>
        </div>
    </div>
@endsection
