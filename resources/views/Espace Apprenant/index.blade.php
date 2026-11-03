@extends('template-student')

@section('content')
    <div class="contenu_dashboard">
        <header class="top_dashboard">
            <div class="title-section">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="24px" width="24px" fill="#e3e3e3"><path d="M13,9V3h8V9H13ZM3,13V3h8V13H3Zm10,8V11h8V21H13ZM3,21V15h8v6H3ZM5,11H9V5H5v6Zm10,8h4V13H15v6ZM15,7h4V5H15V7ZM5,19H9V17H5v2Zm4-8Zm6-4Zm0,6ZM9,17Z"/></svg>
                <h2>Dashboard</h2>
            </div>
            <div class="nav">
                <div class="search">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <input type="search" name="" id="">
                </div>
                <div class="notif">
                    <a href="" class="notification-icon">
                        <span>
                            <i class="fa-solid fa-bell"></i>
                            <span class="badge">3</span>
                        </span>
                    </a>
                </div>
                <div class="profile_student">
                    <div class="image"></div>
                    <div class="name">
                        <p>Edmond Barou</p>
                        <p>Personnel Navigant Commercial - 2e Année</p>
                    </div>
                    <div class="icon">
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                </div>
            </div>
        </header>

        <!-- Grille principale du contenu -->
        <section class="main_content_dashboard_student">
            <div class="greetings">
                <div class="greetings_text">
                    <h2>Bienvenue, 👋</h2>
                    <p>Edmond Barou !</p>
                    <span>Restez informé de votre parcours scolaire</span>
                </div>
                <div class="greetings_image">
                    <img src="{{asset('Elements/images/Air hostess-rafiki.png')}}" alt="">
                </div>
            </div>
            <div class="item2">
                <div class="stat">
                    <div class="icon">

                    </div>
                    <div class="info_stat">
                        <p>Temps d'Étude</p>
                        <p>3j 13h</p>
                        <p>Cette semaine</p>
                    </div>
                </div>
                <div class="stat">
                    <div class="icon"></div>
                    <div class="info_stat">
                        <p>Examens/Devoirs complétés</p>
                        <p>7</p>
                        <p>Ce trimestre</p>
                    </div>
                </div>
                <div class="stat">
                    <div class="icon"></div>
                    <div class="info_stat">
                        <p>Présence</p>
                        <p>67%</p>
                        <p>Ce trimestre</p>
                    </div>
                </div>


            </div>
            <div class="item3">item3</div>
            <div class="item4">item4</div>
            <div class="item5">item5</div>
            <div class="item6">item6</div>
            <div class="item7">item7</div>
        </section>
    </div>
@endsection

