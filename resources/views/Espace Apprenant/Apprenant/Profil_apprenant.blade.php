@extends('template-student')

@section('content')
    <div class="contenu_dashboard student_profile_page">
        <header class="top dashboard">
            <div class="title-section">
                <i class="fa-solid fa-circle-user"></i>
                <h3>Mon profil</h3>
            </div>

            <div class="nav">
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

        <main class="student_profile_content">
        <header class="student_profile_header">
            <div>

                <h1>Mon profil</h1>
                <p>Consultez et mettez à jour vos informations personnelles.</p>
            </div>
        </header>

        <form class="student_profile_form" method="POST" action="#" enctype="multipart/form-data">

            <section class="student_profile_card student_profile_identity">
                <div class="student_profile_avatar">
                    <img id="profilePhotoPreview" src="/Elements/images/OIP-2658464322.jpg" alt="Photo de profil">
                </div>
                <div class="student_profile_identity_text">
                    <h2>Edmond Barou</h2>
                    <p>Apprenant</p>
                    <label for="photo" class="student_profile_photo_button">
                        <i class="fa-solid fa-camera"></i> Modifier la photo
                    </label>
                    <input class="student_profile_file_input" type="file" id="photo" name="photo" accept="image/*">
                </div>
            </section>

            <section class="student_profile_card">
                <div class="student_profile_card_header">
                    <h2><i class="fa-solid fa-user"></i> Informations personnelles</h2>
                    <p>Vos informations utilisées sur la plateforme.</p>
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
                        <label for="email">Adresse e-mail</label>
                        <input id="email" name="email" type="email" value="edmond.barou@example.com">
                    </div>
                    <div class="student_profile_field">
                        <label for="phone">Téléphone</label>
                        <input id="phone" name="phone" type="tel" value="" placeholder="+225 XX XX XX XX XX">
                    </div>
                </div>

                <div class="student_profile_actions">
                    <button class="student_profile_reset" type="reset">Annuler</button>
                    <button class="student_profile_save" type="submit"><i class="fa-solid fa-floppy-disk"></i> Enregistrer</button>
                </div>
            </section>
        </form>
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

    <script>
        document.getElementById('photo').addEventListener('change', function () {
            const [file] = this.files;
            if (file) {
                document.getElementById('profilePhotoPreview').src = URL.createObjectURL(file);
            }
        });
    </script>
@endsection
