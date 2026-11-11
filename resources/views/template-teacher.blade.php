<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Espace Étudiant - CIMAT</title>
    <link rel="stylesheet" href="{{ asset('Elements/style_formateur.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>
    <div class="container teacher" id="TeacherContainer">
        <nav class="menu_section" id="menuSection">
            <div class="top">
                <div class="logo_presentation">
                    <img src="{{ asset('Elements/images/logo.png') }}" alt="Logo CIMAT">
                </div>
                <button class="open_close" id="toggleBtn">
                    <i class="fa-solid fa-circle-chevron-left"></i>
                </button>
            </div>

            <div class="sidebar">
                <div class="group-selector">
                    <label for="teacher-group">Groupe actif</label>
                    <select id="teacher-group" name="teacher-group" aria-label="Choisir le groupe actif">
                        <option value="developpement-web">PNC-1ère année</option>
                        <option value="bureautique">Fret Aérien</option>
                    </select>
                </div>
                <a href="{{route('Teacher.dashboard')}}" class="link {{request()->routeIs('Teacher.dashboard') ? 'active' : ''}}">
                    <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="24px" width="24px" fill="currentColor"><path d="M13,9V3h8V9H13ZM3,13V3h8V13H3Zm10,8V11h8V21H13ZM3,21V15h8v6H3ZM5,11H9V5H5v6Zm10,8h4V13H15v6ZM15,7h4V5H15V7ZM5,19H9V17H5v2Zm4-8Zm6-4Zm0,6ZM9,17Z"/></svg></span>
                    <h3>Dashboard</h3>
                </a>
                <a href="{{route('Teacher.groups')}}" class="link {{request()->routeIs('Teacher.groups') ? 'active' : ''}}">
                    <span><i class="fa-solid fa-users"></i></span>
                    <h3>Mes groupes</h3>
                </a>
                <a href="{{route('Teacher.resources')}}" class="link {{request()->routeIs('Teacher.resources*', 'Teacher.programs') ? 'active' : ''}}">
                    <span><i class="fa-solid fa-folder-open"></i></span>
                    <h3>Cours et ressources</h3>
                </a>
                <a href="{{route('Teacher.evaluations')}}" class="link {{request()->routeIs('Teacher.evaluations*', 'Teacher.corrections', 'Teacher.insert-correction') ? 'active' : ''}}">
                    <span><i class="fa-solid fa-book-open"></i></span>
                    <h3>Devoirs et evaluations</h3>
                </a>
                <a href="{{route('Teacher.profil')}}" class="link {{request()->routeIs('Teacher.profil*') ? 'active' : ''}}">
                    <span><i class="fa-regular fa-circle-user"></i></span>
                    <h3>Profil</h3>
                </a>
                <a href="{{route('Teacher.videoconference')}}" class="link {{request()->routeIs('Teacher.videoconference') ? 'active' : ''}}">
                    <span><i class="fa-solid fa-tower-broadcast"></i></span>
                    <h3>Visioconférence</h3>
                </a>

                <div class="footer_sidebar">
                    <a href="" class="link">
                        <span><i class="fa-solid fa-gear"></i></span>
                        <h3>Paramètres</h3>
                    </a>
                    <a href="" class="link logout">
                        <span><i class="fa-solid fa-arrow-right-from-bracket"></i></span>
                        <h3>Déconnexion</h3>
                    </a>
                </div>
            </div>
        </nav>
        @yield('content-teacher')

    </div>

    <script src="{{ asset('Elements/js/navigation.js') }}"></script>
    <script src="{{ asset('Elements/js/courses.js') }}"></script>
    <script src="{{ asset('Elements/js/video-modal.js') }}"></script>
    <script src="{{ asset('Elements/js/homework.js') }}"></script>
    <script src="{{ asset('Elements/js/videoconference.js') }}"></script>
    <script src="{{ asset('Elements/js/profile-preview.js') }}"></script>
</body>
</html>
