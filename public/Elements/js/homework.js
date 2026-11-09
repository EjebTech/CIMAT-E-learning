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

    homeworkModal?.addEventListener('click', (event) => {
        if (event.target === homeworkModal) {
            closeSubmitModal();
        }
    });
});
