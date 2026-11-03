document.addEventListener("DOMContentLoaded", () => {
    const authBox = document.querySelector(".authentification");

    if (authBox) {
        setTimeout(() => {
            authBox.classList.add("is-visible");
        }, 50);
    }

    const btn_submit = document.querySelector('.submit');
    if (btn_submit) {
        const form = btn_submit.closest('form');
        btn_submit.addEventListener('click', (e) => {
            e.preventDefault();
            btn_submit.textContent = 'CONNEXION EN COURS...';
            setTimeout(() => {
                if (form) {
                    form.submit();
                    btn_submit.textContent = "CONNECTÉ"
                }
            }, 1000);

            setTimeout(() => {
                btn_submit.textContent = "CONNECTEZ-VOUS"
            }, 1100);
        });
    }


});

// Application de la classe close de la sidebar
document.addEventListener("DOMContentLoaded", () => {
    const toggleBtnOpenClose = document.querySelector('.open_close');
    const menuSection = document.querySelector('.menu_section');
    const mainContainer = document.querySelector('.container.student');

   if (toggleBtnOpenClose && menuSection) {
        //couper l'animation
        document.body.classList.add('no-transition');
        // Restaure l'état de la sidebar dès le chargement de la page
        const sidebarState = localStorage.getItem('sidebarState');
        if (sidebarState === 'closed') {
            menuSection.classList.add('close');
            menuSection.classList.add('no-transition');

            if (mainContainer) {
                mainContainer.classList.add('sidebar-closed');
            }
        }

        setTimeout(() => {
            document.body.classList.remove('no-transition');
        }, 50);

        // Alterne l'état au clic sur le bouton
        toggleBtnOpenClose.addEventListener('click', () => {
            menuSection.classList.toggle('close');
            if (mainContainer) {
                mainContainer.classList.toggle('sidebar-closed');
            }

            // Enregistre le choix dans le navigateur
            if (menuSection.classList.contains('close')) {
                localStorage.setItem('sidebarState', 'closed');
            } else {
                localStorage.setItem('sidebarState', 'open');
            }
        });
    }
})



