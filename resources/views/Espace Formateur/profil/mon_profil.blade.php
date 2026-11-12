@extends('template-teacher')

@section('content-teacher')
    <div class="teacher_profile_page">
        <!-- En-tête supérieur du tableau de bord -->
        <header class="top_dashboard_teacher">
            <div class="left">
                <div class="search">
                    <i class="fa-solid fa-magnifying-glass" aria-hidden="true"></i>
                    <input type="search" aria-label="Recherche globale" placeholder="Rechercher un élève, un cours, un devoir...">
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

        <!-- Contenu principal du profil -->
        <main class="student_profile_content">
            <header class="student_profile_header">
                <div>
                    <h1>Mon profil</h1>
                    <p>Consultez et mettez à jour vos informations professionnelles et personnelles.</p>
                </div>
            </header>

            <form class="student_profile_form" method="POST" action="#" enctype="multipart/form-data">
                @csrf

                <!-- Carte de l'avatar et identité -->
                <section class="student_profile_card student_profile_identity">
                    <div class="student_profile_avatar">
                        <img id="profilePhotoPreview" src="/Elements/images/OIP-2658464322.jpg" alt="Photo de profil formateur">
                    </div>
                    <div class="student_profile_identity_text">
                        <h2>Prof. Edmond Barou</h2>
                        <p>Formateur</p>
                        <label for="photo" class="student_profile_photo_button">
                            <i class="fa-solid fa-camera" aria-hidden="true"></i> Modifier la photo
                        </label>
                        <input class="student_profile_file_input" type="file" id="photo" name="photo" accept="image/*">
                    </div>
                </section>

                <!-- Carte des informations modifiables -->
                <section class="student_profile_card">
                    <div class="student_profile_card_header">
                        <h2><i class="fa-solid fa-user" aria-hidden="true"></i> Informations professionnelles</h2>
                        <p>Vos informations affichées sur la plateforme formateur.</p>
                    </div>

                    <div class="student_profile_fields">
                        <div class="student_profile_field">
                            <label for="first_name">Prénom</label>
                            <input id="first_name" name="first_name" type="text" value="Edmond">
                        </div>
                        <div class="student_profile_field">
                            <label for="last_name">Nom</label>
                            <input id="last_name" name="last_name" type="text" value="Barou">
                        </div>
                        <div class="student_profile_field">
                            <label for="email">Adresse e-mail professionnelle</label>
                            <input id="email" name="email" type="email" value="edmond.barou@cimat-teacher.ci">
                        </div>
                        <div class="student_profile_field">
                            <label for="phone">Téléphone</label>
                            <input id="phone" name="phone" type="tel" value="+225 07 89 00 00 00" placeholder="+225 XX XX XX XX XX">
                        </div>
                    </div>

                    <div class="student_profile_actions">
                        <button class="student_profile_reset" type="reset">Annuler</button>
                        <button class="student_profile_save" type="submit"><i class="fa-solid fa-floppy-disk" aria-hidden="true"></i> Enregistrer</button>
                    </div>
                </section>
            </form>
        </main>

        <!-- Pied de page -->
        <footer class="teacher_footer">
            <p>&copy; {{ date('Y') }} <a href="#">Groupe Komptech Cimat</a>. Tous droits réservés.</p>
            <div class="footer_socials">
                <a href="#" aria-label="Facebook" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-facebook-f" aria-hidden="true"></i></a>
                <a href="#" aria-label="LinkedIn" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-linkedin-in" aria-hidden="true"></i></a>
                <a href="#" aria-label="Instagram" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-instagram" aria-hidden="true"></i></a>
            </div>
        </footer>
    </div>
@endsection
