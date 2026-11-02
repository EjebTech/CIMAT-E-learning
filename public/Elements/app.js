document.addEventListener("DOMContentLoaded", () => {
    const authBox = document.querySelector(".authentification");
    if (authBox) {
        setTimeout(() => {
            authBox.classList.add("is-visible");
        }, 50);
    }

    const btn_submit = document.querySelector('.submit');
    if (btn_submit) {
        btn_submit.addEventListener('click', (e) => {
            e.preventDefault();
            btn_submit.textContent = 'CONNEXION EN COURS...';
            setTimeout(() => {
                btn_submit.textContent = 'CONNECTEZ-VOUS';
            }, 2000);
        });
    }

    const link_nav = document.querySelectorAll('.sidebar .link');
    if (link_nav.length > 0) {
        link_nav.forEach(link => {
            link.addEventListener('click', (e) => {
                e.preventDefault();

                link_nav.forEach(item => item.classList.remove('active'));
                link.classList.add('active');
            });
        });
    }
});


document.addEventListener("DOMContentLoaded", () => {
    const toggleBtn = document.querySelector('.open_close');
    const menuSection = document.querySelector('.menu_section');
    const mainContainer = document.querySelector('.container.student');

    if (toggleBtn && menuSection) {
        toggleBtn.addEventListener('click', () => {
            menuSection.classList.toggle('close');
            if (mainContainer) {
                mainContainer.classList.toggle('sidebar-closed');
            }
        });
    }

})
