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
                        <span class="badge">3</span>
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
                    <button class="filter_btn" data-filter="PNC">PNC</button>
                    <button class="filter_btn" data-filter="Anglais">Anglais</button>
                    <button class="filter_btn" data-filter="Informatique">Informatique</button>
                </div>
            </div>

            <!-- Grille des cours (7 cours par module : PNC, Anglais, Informatique) -->
            <div class="courses_grid" id="coursesGrid">


                <!-- ===== MODULE PNC ===== -->
                <article class="course_card" data-category="PNC">
                    <div class="card_banner">
                        <img src="https://images.unsplash.com/photo-1584515979956-d9f6e5d09982?auto=format&fit=crop&q=80&w=600" alt="Secourisme" loading="lazy">
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

                <article class="course_card" data-category="PNC">
                    <div class="card_banner">
                        <img src="https://images.unsplash.com/photo-1540959733332-eab4deabeeaf?auto=format&fit=crop&q=80&w=600" alt="Sécurité Évacuation" loading="lazy">
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

                <article class="course_card" data-category="PNC">
                    <div class="card_banner">
                        <img src="https://images.unsplash.com/photo-1570710891163-6d3b5c47248b?auto=format&fit=crop&q=80&w=600" alt="Service à Bord" loading="lazy">
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

                <article class="course_card" data-category="PNC">
                    <div class="card_banner">
                        <img src="https://images.unsplash.com/photo-1436491865332-7a61a109cc05?auto=format&fit=crop&q=80&w=600" alt="Réglementation Aéronautique" loading="lazy">
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

                <article class="course_card" data-category="PNC">
                    <div class="card_banner">
                        <img src="https://images.unsplash.com/photo-1508873696983-2df515122519?auto=format&fit=crop&q=80&w=600" alt="Lutte contre les Incendies" loading="lazy">
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

                <article class="course_card" data-category="PNC">
                    <div class="card_banner">
                        <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?auto=format&fit=crop&q=80&w=600" alt="Communication & Facteurs Humains" loading="lazy">
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

                <article class="course_card" data-category="PNC">
                    <div class="card_banner">
                        <img src="https://images.unsplash.com/photo-1531482615713-2afd69097998?auto=format&fit=crop&q=80&w=600" alt="Accueil et embarquement" loading="lazy">
                        <span class="category_tag">Service à Bord</span>
                        <div class="play_overlay" onclick="openVideoModal('Accueil et Embarquement des Passagers', 'https://www.youtube.com/embed/dQw4w9WgXcQ')">
                            <div class="play_btn_icon"><i class="fa-solid fa-play"></i></div>
                        </div>
                    </div>
                    <div class="card_body">
                        <h3 class="course_title">Accueil et Embarquement des Passagers</h3>
                        <p class="course_description">Accueil à la porte, placement en cabine, gestion des bagages cabine et des passagers à besoins spécifiques avant le départ.</p>
                        <div class="course_info">
                            <span><i class="fa-regular fa-clock"></i> 3h 15m</span>
                            <span><i class="fa-regular fa-user"></i> Mme. K. Toure</span>
                        </div>
                        <div class="card_actions">
                            <button class="btn_action btn_pdf" onclick="downloadPdf('Accueil_Embarquement.pdf')">
                                <i class="fa-regular fa-file-pdf"></i> PDF
                            </button>
                            <button class="btn_action btn_video" onclick="openVideoModal('Accueil et Embarquement des Passagers', 'https://www.youtube.com/embed/dQw4w9WgXcQ')">
                                <i class="fa-solid fa-circle-play"></i> Voir la vidéo
                            </button>
                        </div>
                    </div>
                </article>


                <!-- ===== MODULE ANGLAIS ===== -->
                <article class="course_card" data-category="Anglais">
                    <div class="card_banner">
                        <img src="https://images.unsplash.com/photo-1456513080510-7bf3a84b82f8?auto=format&fit=crop&q=80&w=600" alt="Anglais aéronautique" loading="lazy">
                        <span class="category_tag">Anglais</span>
                        <div class="play_overlay" onclick="openVideoModal('Anglais Aéronautique : Vocabulaire de Base', 'https://www.youtube.com/embed/dQw4w9WgXcQ')">
                            <div class="play_btn_icon"><i class="fa-solid fa-play"></i></div>
                        </div>
                    </div>
                    <div class="card_body">
                        <h3 class="course_title">Anglais Aéronautique : Vocabulaire de Base</h3>
                        <p class="course_description">Vocabulaire essentiel de l'aviation civile : parties de l'avion, équipements de cabine, personnel navigant et termes d'aéroport.</p>
                        <div class="course_info">
                            <span><i class="fa-regular fa-clock"></i> 4h 00m</span>
                            <span><i class="fa-regular fa-user"></i> Mme. A. Kouassi</span>
                        </div>
                        <div class="card_actions">
                            <button class="btn_action btn_pdf" onclick="downloadPdf('Anglais_Vocabulaire_Base.pdf')">
                                <i class="fa-regular fa-file-pdf"></i> PDF
                            </button>
                            <button class="btn_action btn_video" onclick="openVideoModal('Anglais Aéronautique : Vocabulaire de Base', 'https://www.youtube.com/embed/dQw4w9WgXcQ')">
                                <i class="fa-solid fa-circle-play"></i> Voir la vidéo
                            </button>
                        </div>
                    </div>
                </article>

                <article class="course_card" data-category="Anglais">
                    <div class="card_banner">
                        <img src="https://images.unsplash.com/photo-1434030216411-0b793f4b4173?auto=format&fit=crop&q=80&w=600" alt="Annonces en cabine" loading="lazy">
                        <span class="category_tag">Anglais</span>
                        <div class="play_overlay" onclick="openVideoModal('Annonces en Cabine (PA Announcements)', 'https://www.youtube.com/embed/dQw4w9WgXcQ')">
                            <div class="play_btn_icon"><i class="fa-solid fa-play"></i></div>
                        </div>
                    </div>
                    <div class="card_body">
                        <h3 class="course_title">Annonces en Cabine (PA Announcements)</h3>
                        <p class="course_description">Rédaction et diction des annonces de bienvenue, de sécurité, de turbulences et d'atterrissage en anglais clair et professionnel.</p>
                        <div class="course_info">
                            <span><i class="fa-regular fa-clock"></i> 3h 30m</span>
                            <span><i class="fa-regular fa-user"></i> M. F. Traoré</span>
                        </div>
                        <div class="card_actions">
                            <button class="btn_action btn_pdf" onclick="downloadPdf('Anglais_Annonces_Cabine.pdf')">
                                <i class="fa-regular fa-file-pdf"></i> PDF
                            </button>
                            <button class="btn_action btn_video" onclick="openVideoModal('Annonces en Cabine (PA Announcements)', 'https://www.youtube.com/embed/dQw4w9WgXcQ')">
                                <i class="fa-solid fa-circle-play"></i> Voir la vidéo
                            </button>
                        </div>
                    </div>
                </article>

                <article class="course_card" data-category="Anglais">
                    <div class="card_banner">
                        <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?auto=format&fit=crop&q=80&w=600" alt="Service à bord en anglais" loading="lazy">
                        <span class="category_tag">Anglais</span>
                        <div class="play_overlay" onclick="openVideoModal('Service à Bord en Anglais', 'https://www.youtube.com/embed/dQw4w9WgXcQ')">
                            <div class="play_btn_icon"><i class="fa-solid fa-play"></i></div>
                        </div>
                    </div>
                    <div class="card_body">
                        <h3 class="course_title">Service à Bord en Anglais</h3>
                        <p class="course_description">Dialogues types pour le service repas et boissons, la prise de commande, les demandes spéciales et les régimes alimentaires.</p>
                        <div class="course_info">
                            <span><i class="fa-regular fa-clock"></i> 4h 15m</span>
                            <span><i class="fa-regular fa-user"></i> Mme. C. Yao</span>
                        </div>
                        <div class="card_actions">
                            <button class="btn_action btn_pdf" onclick="downloadPdf('Anglais_Service_Bord.pdf')">
                                <i class="fa-regular fa-file-pdf"></i> PDF
                            </button>
                            <button class="btn_action btn_video" onclick="openVideoModal('Service à Bord en Anglais', 'https://www.youtube.com/embed/dQw4w9WgXcQ')">
                                <i class="fa-solid fa-circle-play"></i> Voir la vidéo
                            </button>
                        </div>
                    </div>
                </article>

                <article class="course_card" data-category="Anglais">
                    <div class="card_banner">
                        <img src="https://images.unsplash.com/photo-1546410531-bb4caa6b424d?auto=format&fit=crop&q=80&w=600" alt="Briefing de sécurité" loading="lazy">
                        <span class="category_tag">Anglais</span>
                        <div class="play_overlay" onclick="openVideoModal('Phraséologie de Sécurité et Briefing Passagers', 'https://www.youtube.com/embed/dQw4w9WgXcQ')">
                            <div class="play_btn_icon"><i class="fa-solid fa-play"></i></div>
                        </div>
                    </div>
                    <div class="card_body">
                        <h3 class="course_title">Phraséologie de Sécurité et Briefing Passagers</h3>
                        <p class="course_description">Consignes de sécurité, démonstration des équipements et instructions aux passagers avec une phraséologie standardisée.</p>
                        <div class="course_info">
                            <span><i class="fa-regular fa-clock"></i> 3h 45m</span>
                            <span><i class="fa-regular fa-user"></i> M. B. Ouattara</span>
                        </div>
                        <div class="card_actions">
                            <button class="btn_action btn_pdf" onclick="downloadPdf('Anglais_Phraseologie_Securite.pdf')">
                                <i class="fa-regular fa-file-pdf"></i> PDF
                            </button>
                            <button class="btn_action btn_video" onclick="openVideoModal('Phraséologie de Sécurité et Briefing Passagers', 'https://www.youtube.com/embed/dQw4w9WgXcQ')">
                                <i class="fa-solid fa-circle-play"></i> Voir la vidéo
                            </button>
                        </div>
                    </div>
                </article>

                <article class="course_card" data-category="Anglais">
                    <div class="card_banner">
                        <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&q=80&w=600" alt="Situations d'urgence" loading="lazy">
                        <span class="category_tag">Anglais</span>
                        <div class="play_overlay" onclick="openVideoModal('Anglais des Situations d\'Urgence', 'https://www.youtube.com/embed/dQw4w9WgXcQ')">
                            <div class="play_btn_icon"><i class="fa-solid fa-play"></i></div>
                        </div>
                    </div>
                    <div class="card_body">
                        <h3 class="course_title">Anglais des Situations d'Urgence</h3>
                        <p class="course_description">Commandes d'évacuation, incendie, dépressurisation et urgences médicales : se faire comprendre vite et sans ambiguïté.</p>
                        <div class="course_info">
                            <span><i class="fa-regular fa-clock"></i> 5h 00m</span>
                            <span><i class="fa-regular fa-user"></i> Mme. N. Koffi</span>
                        </div>
                        <div class="card_actions">
                            <button class="btn_action btn_pdf" onclick="downloadPdf('Anglais_Situations_Urgence.pdf')">
                                <i class="fa-regular fa-file-pdf"></i> PDF
                            </button>
                            <button class="btn_action btn_video" onclick="openVideoModal('Anglais des Situations d\'Urgence', 'https://www.youtube.com/embed/dQw4w9WgXcQ')">
                                <i class="fa-solid fa-circle-play"></i> Voir la vidéo
                            </button>
                        </div>
                    </div>
                </article>

                <article class="course_card" data-category="Anglais">
                    <div class="card_banner">
                        <img src="https://images.unsplash.com/photo-1513258496099-48168024aec0?auto=format&fit=crop&q=80&w=600" alt="Communication interculturelle" loading="lazy">
                        <span class="category_tag">Anglais</span>
                        <div class="play_overlay" onclick="openVideoModal('Communication Interculturelle et Gestion des Plaintes', 'https://www.youtube.com/embed/dQw4w9WgXcQ')">
                            <div class="play_btn_icon"><i class="fa-solid fa-play"></i></div>
                        </div>
                    </div>
                    <div class="card_body">
                        <h3 class="course_title">Communication Interculturelle et Gestion des Plaintes</h3>
                        <p class="course_description">Gérer une réclamation, apaiser un passager mécontent et adapter son registre de langue à des clientèles internationales.</p>
                        <div class="course_info">
                            <span><i class="fa-regular fa-clock"></i> 3h 00m</span>
                            <span><i class="fa-regular fa-user"></i> M. Y. Soro</span>
                        </div>
                        <div class="card_actions">
                            <button class="btn_action btn_pdf" onclick="downloadPdf('Anglais_Communication_Interculturelle.pdf')">
                                <i class="fa-regular fa-file-pdf"></i> PDF
                            </button>
                            <button class="btn_action btn_video" onclick="openVideoModal('Communication Interculturelle et Gestion des Plaintes', 'https://www.youtube.com/embed/dQw4w9WgXcQ')">
                                <i class="fa-solid fa-circle-play"></i> Voir la vidéo
                            </button>
                        </div>
                    </div>
                </article>

                <article class="course_card" data-category="Anglais">
                    <div class="card_banner">
                        <img src="https://images.unsplash.com/photo-1481627834876-b7833e8f5570?auto=format&fit=crop&q=80&w=600" alt="Préparation TOEIC" loading="lazy">
                        <span class="category_tag">Anglais</span>
                        <div class="play_overlay" onclick="openVideoModal('Anglais Professionnel et Préparation au TOEIC', 'https://www.youtube.com/embed/dQw4w9WgXcQ')">
                            <div class="play_btn_icon"><i class="fa-solid fa-play"></i></div>
                        </div>
                    </div>
                    <div class="card_body">
                        <h3 class="course_title">Anglais Professionnel et Préparation au TOEIC</h3>
                        <p class="course_description">Compréhension orale et écrite, grammaire utile et méthodologie pour réussir le test de niveau exigé par les compagnies.</p>
                        <div class="course_info">
                            <span><i class="fa-regular fa-clock"></i> 6h 00m</span>
                            <span><i class="fa-regular fa-user"></i> Mme. R. Aka</span>
                        </div>
                        <div class="card_actions">
                            <button class="btn_action btn_pdf" onclick="downloadPdf('Anglais_Preparation_TOEIC.pdf')">
                                <i class="fa-regular fa-file-pdf"></i> PDF
                            </button>
                            <button class="btn_action btn_video" onclick="openVideoModal('Anglais Professionnel et Préparation au TOEIC', 'https://www.youtube.com/embed/dQw4w9WgXcQ')">
                                <i class="fa-solid fa-circle-play"></i> Voir la vidéo
                            </button>
                        </div>
                    </div>
                </article>


                <!-- ===== MODULE INFORMATIQUE / BUREAUTIQUE ===== -->
                <article class="course_card" data-category="Informatique">
                    <div class="card_banner">
                        <img src="https://images.unsplash.com/photo-1486312338219-ce68d2c6f44d?auto=format&fit=crop&q=80&w=600" alt="Initiation informatique" loading="lazy">
                        <span class="category_tag">Informatique</span>
                        <div class="play_overlay" onclick="openVideoModal('Initiation à l\'Ordinateur et à Windows', 'https://www.youtube.com/embed/dQw4w9WgXcQ')">
                            <div class="play_btn_icon"><i class="fa-solid fa-play"></i></div>
                        </div>
                    </div>
                    <div class="card_body">
                        <h3 class="course_title">Initiation à l'Ordinateur et à Windows</h3>
                        <p class="course_description">Prise en main du poste de travail : bureau, fichiers et dossiers, paramètres, clé USB et bonnes pratiques d'utilisation.</p>
                        <div class="course_info">
                            <span><i class="fa-regular fa-clock"></i> 3h 00m</span>
                            <span><i class="fa-regular fa-user"></i> M. I. Cissé</span>
                        </div>
                        <div class="card_actions">
                            <button class="btn_action btn_pdf" onclick="downloadPdf('Info_Initiation_Windows.pdf')">
                                <i class="fa-regular fa-file-pdf"></i> PDF
                            </button>
                            <button class="btn_action btn_video" onclick="openVideoModal('Initiation à l\'Ordinateur et à Windows', 'https://www.youtube.com/embed/dQw4w9WgXcQ')">
                                <i class="fa-solid fa-circle-play"></i> Voir la vidéo
                            </button>
                        </div>
                    </div>
                </article>

                <article class="course_card" data-category="Informatique">
                    <div class="card_banner">
                        <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?auto=format&fit=crop&q=80&w=600" alt="Word" loading="lazy">
                        <span class="category_tag">Bureautique</span>
                        <div class="play_overlay" onclick="openVideoModal('Word : Rédaction et Mise en Forme de Documents', 'https://www.youtube.com/embed/dQw4w9WgXcQ')">
                            <div class="play_btn_icon"><i class="fa-solid fa-play"></i></div>
                        </div>
                    </div>
                    <div class="card_body">
                        <h3 class="course_title">Word : Rédaction et Mise en Forme de Documents</h3>
                        <p class="course_description">Mise en page, styles, listes, tableaux, en-têtes et pieds de page pour rédiger lettres, rapports et comptes rendus.</p>
                        <div class="course_info">
                            <span><i class="fa-regular fa-clock"></i> 5h 00m</span>
                            <span><i class="fa-regular fa-user"></i> Mme. L. Gnahoré</span>
                        </div>
                        <div class="card_actions">
                            <button class="btn_action btn_pdf" onclick="downloadPdf('Word_Redaction_Mise_En_Forme.pdf')">
                                <i class="fa-regular fa-file-pdf"></i> PDF
                            </button>
                            <button class="btn_action btn_video" onclick="openVideoModal('Word : Rédaction et Mise en Forme de Documents', 'https://www.youtube.com/embed/dQw4w9WgXcQ')">
                                <i class="fa-solid fa-circle-play"></i> Voir la vidéo
                            </button>
                        </div>
                    </div>
                </article>

                <article class="course_card" data-category="Informatique">
                    <div class="card_banner">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&q=80&w=600" alt="Excel" loading="lazy">
                        <span class="category_tag">Bureautique</span>
                        <div class="play_overlay" onclick="openVideoModal('Excel : Tableaux et Formules de Base', 'https://www.youtube.com/embed/dQw4w9WgXcQ')">
                            <div class="play_btn_icon"><i class="fa-solid fa-play"></i></div>
                        </div>
                    </div>
                    <div class="card_body">
                        <h3 class="course_title">Excel : Tableaux et Formules de Base</h3>
                        <p class="course_description">Saisie, formats de cellules, formules simples (SOMME, MOYENNE, SI), tri et filtres pour organiser des données.</p>
                        <div class="course_info">
                            <span><i class="fa-regular fa-clock"></i> 6h 00m</span>
                            <span><i class="fa-regular fa-user"></i> M. K. Bamba</span>
                        </div>
                        <div class="card_actions">
                            <button class="btn_action btn_pdf" onclick="downloadPdf('Excel_Tableaux_Formules.pdf')">
                                <i class="fa-regular fa-file-pdf"></i> PDF
                            </button>
                            <button class="btn_action btn_video" onclick="openVideoModal('Excel : Tableaux et Formules de Base', 'https://www.youtube.com/embed/dQw4w9WgXcQ')">
                                <i class="fa-solid fa-circle-play"></i> Voir la vidéo
                            </button>
                        </div>
                    </div>
                </article>

                <article class="course_card" data-category="Informatique">
                    <div class="card_banner">
                        <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&q=80&w=600" alt="Excel avancé" loading="lazy">
                        <span class="category_tag">Bureautique</span>
                        <div class="play_overlay" onclick="openVideoModal('Excel Avancé : Graphiques et Tableaux Croisés', 'https://www.youtube.com/embed/dQw4w9WgXcQ')">
                            <div class="play_btn_icon"><i class="fa-solid fa-play"></i></div>
                        </div>
                    </div>
                    <div class="card_body">
                        <h3 class="course_title">Excel Avancé : Graphiques et Tableaux Croisés</h3>
                        <p class="course_description">Graphiques, RECHERCHEV, mise en forme conditionnelle et tableaux croisés dynamiques pour analyser et présenter des résultats.</p>
                        <div class="course_info">
                            <span><i class="fa-regular fa-clock"></i> 5h 30m</span>
                            <span><i class="fa-regular fa-user"></i> M. K. Bamba</span>
                        </div>
                        <div class="card_actions">
                            <button class="btn_action btn_pdf" onclick="downloadPdf('Excel_Avance_TCD.pdf')">
                                <i class="fa-regular fa-file-pdf"></i> PDF
                            </button>
                            <button class="btn_action btn_video" onclick="openVideoModal('Excel Avancé : Graphiques et Tableaux Croisés', 'https://www.youtube.com/embed/dQw4w9WgXcQ')">
                                <i class="fa-solid fa-circle-play"></i> Voir la vidéo
                            </button>
                        </div>
                    </div>
                </article>

                <article class="course_card" data-category="Informatique">
                    <div class="card_banner">
                        <img src="https://images.unsplash.com/photo-1531482615713-2afd69097998?auto=format&fit=crop&q=80&w=600" alt="PowerPoint" loading="lazy">
                        <span class="category_tag">Bureautique</span>
                        <div class="play_overlay" onclick="openVideoModal('PowerPoint : Créer une Présentation Professionnelle', 'https://www.youtube.com/embed/dQw4w9WgXcQ')">
                            <div class="play_btn_icon"><i class="fa-solid fa-play"></i></div>
                        </div>
                    </div>
                    <div class="card_body">
                        <h3 class="course_title">PowerPoint : Créer une Présentation Professionnelle</h3>
                        <p class="course_description">Structure d'un diaporama, modèles, images, transitions et conseils pour présenter à l'oral avec assurance.</p>
                        <div class="course_info">
                            <span><i class="fa-regular fa-clock"></i> 4h 00m</span>
                            <span><i class="fa-regular fa-user"></i> Mme. L. Gnahoré</span>
                        </div>
                        <div class="card_actions">
                            <button class="btn_action btn_pdf" onclick="downloadPdf('PowerPoint_Presentation_Pro.pdf')">
                                <i class="fa-regular fa-file-pdf"></i> PDF
                            </button>
                            <button class="btn_action btn_video" onclick="openVideoModal('PowerPoint : Créer une Présentation Professionnelle', 'https://www.youtube.com/embed/dQw4w9WgXcQ')">
                                <i class="fa-solid fa-circle-play"></i> Voir la vidéo
                            </button>
                        </div>
                    </div>
                </article>

                <article class="course_card" data-category="Informatique">
                    <div class="card_banner">
                        <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&q=80&w=600" alt="Messagerie" loading="lazy">
                        <span class="category_tag">Bureautique</span>
                        <div class="play_overlay" onclick="openVideoModal('Outlook et Messagerie Professionnelle', 'https://www.youtube.com/embed/dQw4w9WgXcQ')">
                            <div class="play_btn_icon"><i class="fa-solid fa-play"></i></div>
                        </div>
                    </div>
                    <div class="card_body">
                        <h3 class="course_title">Outlook et Messagerie Professionnelle</h3>
                        <p class="course_description">Rédiger un e-mail professionnel, gérer son agenda, ses contacts et ses pièces jointes, et organiser sa boîte de réception.</p>
                        <div class="course_info">
                            <span><i class="fa-regular fa-clock"></i> 2h 30m</span>
                            <span><i class="fa-regular fa-user"></i> M. I. Cissé</span>
                        </div>
                        <div class="card_actions">
                            <button class="btn_action btn_pdf" onclick="downloadPdf('Outlook_Messagerie_Pro.pdf')">
                                <i class="fa-regular fa-file-pdf"></i> PDF
                            </button>
                            <button class="btn_action btn_video" onclick="openVideoModal('Outlook et Messagerie Professionnelle', 'https://www.youtube.com/embed/dQw4w9WgXcQ')">
                                <i class="fa-solid fa-circle-play"></i> Voir la vidéo
                            </button>
                        </div>
                    </div>
                </article>

                <article class="course_card" data-category="Informatique">
                    <div class="card_banner">
                        <img src="https://images.unsplash.com/photo-1555949963-ff9fe0c870eb?auto=format&fit=crop&q=80&w=600" alt="Cybersécurité" loading="lazy">
                        <span class="category_tag">Informatique</span>
                        <div class="play_overlay" onclick="openVideoModal('Internet, Recherche et Cybersécurité de Base', 'https://www.youtube.com/embed/dQw4w9WgXcQ')">
                            <div class="play_btn_icon"><i class="fa-solid fa-play"></i></div>
                        </div>
                    </div>
                    <div class="card_body">
                        <h3 class="course_title">Internet, Recherche et Cybersécurité de Base</h3>
                        <p class="course_description">Recherche d'information fiable, mots de passe, hameçonnage, protection des données personnelles et usage responsable du web.</p>
                        <div class="course_info">
                            <span><i class="fa-regular fa-clock"></i> 3h 30m</span>
                            <span><i class="fa-regular fa-user"></i> Mme. D. Zadi</span>
                        </div>
                        <div class="card_actions">
                            <button class="btn_action btn_pdf" onclick="downloadPdf('Internet_Cybersecurite_Base.pdf')">
                                <i class="fa-regular fa-file-pdf"></i> PDF
                            </button>
                            <button class="btn_action btn_video" onclick="openVideoModal('Internet, Recherche et Cybersécurité de Base', 'https://www.youtube.com/embed/dQw4w9WgXcQ')">
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
    <script>
        const filterBtn = document.querySelectorAll('.filter_btn');
        const courses = document.querySelectorAll('.course_card');
        const searchInput = document.getElementById("courseSearchInput");

        // 1. Gestion des filtres par catégorie
        filterBtn.forEach(btn => {
            btn.addEventListener('click', () => {
                // Retirer la classe active de tous les boutons
                filterBtn.forEach(b => b.classList.remove('active'));
                // Ajouter la classe active sur le bouton cliqué
                btn.classList.add('active');

                const filter = btn.getAttribute('data-filter');

                // Afficher ou masquer les cartes selon la catégorie
                courses.forEach(card => {
                    const category = card.getAttribute('data-category');
                    if (filter === 'all' || filter === category) {
                        card.style.display = 'flex';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });

        // 2. Gestion de la barre de recherche en temps réel (insensible à la casse)
        searchInput.addEventListener('input', () => {
            const searchValue = searchInput.value.toLowerCase().trim();

            courses.forEach(card => {
                const titleElement = card.querySelector('.course_title');
                const titleText = titleElement.textContent.toLowerCase();

                if (titleText.includes(searchValue) || searchValue === '') {
                    card.style.display = 'flex';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    </script>
@endsection
