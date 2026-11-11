document.addEventListener('DOMContentLoaded', () => {
    const authBox = document.querySelector('.authentification');

    if (authBox) {
        setTimeout(() => authBox.classList.add('is-visible'), 50);
    }

    const toggleBtn = document.getElementById('toggleBtn');
    const menuSection = document.getElementById('menuSection');
    const pageContainer = document.getElementById('studentContainer')
        ?? document.getElementById('TeacherContainer')
        ?? document.getElementById('adminContainer');

    if (!toggleBtn || !menuSection || !pageContainer) {
        return;
    }

    if (localStorage.getItem('sidebarState') === 'closed') {
        document.body.classList.add('no-transition');
        menuSection.classList.add('close', 'no-transition');
        pageContainer.classList.add('sidebar-closed');

        setTimeout(() => {
            document.body.classList.remove('no-transition');
            menuSection.classList.remove('no-transition');
        }, 50);
    }

    toggleBtn.addEventListener('click', () => {
        menuSection.classList.remove('no-transition');
        document.body.classList.remove('no-transition');
        menuSection.classList.toggle('close');
        pageContainer.classList.toggle('sidebar-closed');
        localStorage.setItem('sidebarState', menuSection.classList.contains('close') ? 'closed' : 'open');
    });
});
