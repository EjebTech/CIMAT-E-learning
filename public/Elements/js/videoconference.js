function joinLiveSession(title) {
    alert(`Connexion au salon : ${title}`);
}

function setReminder(title) {
    alert(`Rappel configuré pour : ${title}`);
}

function downloadMaterials(filename) {
    alert(`Téléchargement du support : ${filename}`);
}

function closeVisioModal() {
    const modal = document.getElementById('visioModal');
    modal?.classList.remove('active');
}
