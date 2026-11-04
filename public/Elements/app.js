document.addEventListener("DOMContentLoaded", () => {

    /* ==========================================
       1. GESTION DU RECHARGEMENT & TOGGLE SIDEBAR
       ========================================== */


    const authBox = document.querySelector('.authentification');
    if (authBox) {
        // Petit délai optionnel pour laisser le navigateur souffler
        setTimeout(() => {
            authBox.classList.add('is-visible');
        }, 50);
    }
    const toggleBtn = document.getElementById('toggleBtn');
    const menuSection = document.getElementById('menuSection');
    const studentContainer = document.getElementById('studentContainer');

    if (toggleBtn && menuSection && studentContainer) {
        // Restauration de l'état de la sidebar sans transition au chargement
        const sidebarState = localStorage.getItem('sidebarState');
        if (sidebarState === 'closed') {
            document.body.classList.add('no-transition');
            menuSection.classList.add('close', 'no-transition');
            studentContainer.classList.add('sidebar-closed');

            setTimeout(() => {
                document.body.classList.remove('no-transition');
                menuSection.classList.remove('no-transition');
            }, 50);
        }

        // Clic sur le bouton de bascule de la sidebar
        toggleBtn.addEventListener('click', () => {
            menuSection.classList.remove('no-transition');
            document.body.classList.remove('no-transition');

            menuSection.classList.toggle('close');
            studentContainer.classList.toggle('sidebar-closed');

            const isClosed = menuSection.classList.contains('close');
            localStorage.setItem('sidebarState', isClosed ? 'closed' : 'open');
        });
    }

    /* ==========================================
       2. RECHERCHE & FILTRAGE DES COURS
       ========================================== */

    const searchInput = document.getElementById('courseSearchInput');
    const filterBtns = document.querySelectorAll('.filter_btn');
    const courseCards = document.querySelectorAll('.course_card');

    // Filtrage par catégories au clic sur les boutons
    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            filterBtns.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');

            const filterValue = btn.getAttribute('data-filter');
            filterCourses(filterValue, searchInput ? searchInput.value : '');
        });
    });

    // Recherche par mot-clé dans l'input
    if (searchInput) {
        searchInput.addEventListener('input', (e) => {
            const activeFilterElement = document.querySelector('.filter_btn.active');
            const activeFilter = activeFilterElement ? activeFilterElement.getAttribute('data-filter') : 'all';
            filterCourses(activeFilter, e.target.value);
        });
    }

    function filterCourses(category, searchText) {
        const searchLower = searchText.toLowerCase().trim();

        courseCards.forEach(card => {
            const cardCategory = card.getAttribute('data-category');
            const titleElement = card.querySelector('.course_title');
            const descElement = card.querySelector('.course_description');

            const cardTitle = titleElement ? titleElement.textContent.toLowerCase() : '';
            const cardDesc = descElement ? descElement.textContent.toLowerCase() : '';

            const matchesCategory = (category === 'all' || cardCategory === category);
            const matchesSearch = (cardTitle.includes(searchLower) || cardDesc.includes(searchLower));

            if (matchesCategory && matchesSearch) {
                card.style.display = "flex";
            } else {
                card.style.display = "none";
            }
        });
    }

    /*
       3. GÉNÉRATION DYNAMIQUE DU MINI-CALENDRIER (ITEM 5)
        */

    const calendarDays = document.getElementById('calendarDays');
    const calendarMonth = document.getElementById('calendarMonth');

    if (calendarDays) {
        const today = new Date();
        const currentDay = today.getDate();

        // Remplissage des jours du mois en cours (exemple 30 jours)
        let daysHTML = '';
        for (let i = 1; i <= 30; i++) {
            if (i === currentDay) {
                daysHTML += `<span class="today">${i}</span>`;
            } else if (i === 14 || i === 18) {
                daysHTML += `<span class="event" title="Événement prévu">${i}</span>`;
            } else {
                daysHTML += `<span>${i}</span>`;
            }
        }
        calendarDays.innerHTML = daysHTML;
    }
});

/*
   4. GESTION DE LA FENÊTRE MODALE VIDÉO
    */

const videoModal = document.getElementById('videoModal');
const modalCourseTitle = document.getElementById('modalCourseTitle');
const modalVideoFrame = document.getElementById('modalVideoFrame');

function openVideoModal(title, videoUrl) {
    if (videoModal && modalCourseTitle && modalVideoFrame) {
        modalCourseTitle.innerHTML = `<i class="fa-solid fa-circle-play" style="color: var(--color-accent);"></i> ${title}`;
        modalVideoFrame.src = videoUrl + "?autoplay=1";
        videoModal.classList.add('active');
    }
}

function closeVideoModal() {
    if (videoModal && modalVideoFrame) {
        videoModal.classList.remove('active');
        modalVideoFrame.src = ""; // Stoppe la lecture de la vidéo à la fermeture
    }
}

// Fermeture de la modale en cliquant à l'extérieur du contenu
if (videoModal) {
    videoModal.addEventListener('click', (e) => {
        if (e.target === videoModal) {
            closeVideoModal();
        }
    });
}

/*
   5. TÉLÉCHARGEMENT FACTICE DE FICHIER PDF
    */

function downloadPdf(filename) {
    alert(`Le téléchargement du document "${filename}" a démarré avec succès.`);
}



/* ==========================================
   GESTION DES DEVOIRS ET EXERCICES (LISTE & FILTRES)
   ========================================== */

document.addEventListener("DOMContentLoaded", () => {
    const hwFilterBtns = document.querySelectorAll('.homework_container .filter_btn');
    const hwItems = document.querySelectorAll('.homework_item');

    // Filtrage dynamique par date d'échéance
    if (hwFilterBtns.length > 0 && hwItems.length > 0) {
        hwFilterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                hwFilterBtns.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');

                const filterValue = btn.getAttribute('data-filter');

                hwItems.forEach(item => {
                    const itemDate = item.getAttribute('data-date');
                    if (filterValue === 'all' || itemDate === filterValue) {
                        item.style.display = "flex";
                    } else {
                        item.style.display = "none";
                    }
                });
            });
        });
    }
});

// Téléchargement du sujet
function downloadHwSubject(filename) {
    alert(`Téléchargement du sujet : "${filename}"`);
}

// Gestion de la modale de soumission
const hwModal = document.getElementById('homeworkModal');
const modalHwTitle = document.getElementById('modalHwTitle');

function openSubmitModal(title) {
    if (hwModal && modalHwTitle) {
        modalHwTitle.textContent = `Soumission : ${title}`;
        hwModal.classList.add('active');
    }
}

function closeSubmitModal() {
    if (hwModal) {
        hwModal.classList.remove('active');
    }
}

function submitHomeworkAction() {
    alert("Votre travail a été transmis avec succès à l'instructeur !");
    closeSubmitModal();
}

if (hwModal) {
    hwModal.addEventListener('click', (e) => {
        if (e.target === hwModal) {
            closeSubmitModal();
        }
    });
}
