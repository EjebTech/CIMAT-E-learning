let homeworkModal;
let homeworkModalTitle;

function downloadPdf(filename) {
    alert(`Le téléchargement du document "${filename}" a démarré avec succès.`);
}

function downloadHwSubject(filename) {
    alert(`Téléchargement du sujet : "${filename}"`);
}

function openSubmitModal(title) {
    homeworkModal ??= document.getElementById('homeworkModal');
    homeworkModalTitle ??= document.getElementById('modalHwTitle');

    if (!homeworkModal || !homeworkModalTitle) {
        return;
    }

    homeworkModalTitle.textContent = `Soumission : ${title}`;
    homeworkModal.classList.add('active');
}

function closeSubmitModal() {
    homeworkModal ??= document.getElementById('homeworkModal');
    homeworkModal?.classList.remove('active');
}

function submitHomeworkAction() {
    alert('Votre travail a été transmis avec succès à l’instructeur !');
    closeSubmitModal();
}

document.addEventListener('DOMContentLoaded', () => {
    homeworkModal = document.getElementById('homeworkModal');
    homeworkModalTitle = document.getElementById('modalHwTitle');

    const filterButtons = document.querySelectorAll('.homework_container .filter_btn');
    const homeworkItems = document.querySelectorAll('.homework_item');

    filterButtons.forEach((button) => {
        button.addEventListener('click', () => {
            filterButtons.forEach((item) => item.classList.remove('active'));
            button.classList.add('active');
            const filterValue = button.getAttribute('data-filter');

            homeworkItems.forEach((item) => {
                const itemDate = item.getAttribute('data-date');
                item.style.display = filterValue === 'all' || itemDate === filterValue ? 'flex' : 'none';
            });
        });
    });

    homeworkModal?.addEventListener('click', (event) => {
        if (event.target === homeworkModal) {
            closeSubmitModal();
        }
    });
});
