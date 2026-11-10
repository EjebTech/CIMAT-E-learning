// Déclaration des variables globales pour stocker les éléments
let pdfModal;
let videoModal;

// Fonction universelle pour ouvrir une modale par son ID
function openCourseModal(modalId) {
    const modal = document.getElementById(modalId);
    if (modal) {
        modal.removeAttribute('hidden');
    }
}

// Fonction universelle pour fermer une modale par son ID
function closeCourseModal(modalId) {
    const modal = document.getElementById(modalId);
    if (modal) {
        modal.setAttribute('hidden', 'true');

        // Optionnel : Si c'est la modale vidéo, on peut vider le formulaire ou réinitialiser si besoin
        const form = modal.querySelector('form');
        if (form) form.reset();
    }
}

// Initialisation au chargement du DOM
document.addEventListener('DOMContentLoaded', () => {
    pdfModal = document.getElementById('pdfCourseModal');
    videoModal = document.getElementById('videoCourseModal');

    // 1. Gestion des clics sur les boutons d'ouverture
    const openButtons = document.querySelectorAll('.courses_heading_actions button');
    openButtons.forEach(button => {
        button.addEventListener('click', () => {
            const modalId = button.getAttribute('data-modal-open');
            openCourseModal(modalId); // Appel de la fonction d'ouverture
        });
    });

    // 2. Gestion des clics sur les boutons de fermeture (croix et annuler)
    const closeButtons = document.querySelectorAll('.course_modal_close, .course_form_cancel');
    closeButtons.forEach(button => {
        button.addEventListener('click', () => {
            const modalId = button.getAttribute('data-modal-close');
            closeCourseModal(modalId); // Appel de la fonction de fermeture
        });
    });

    // 3. Fermeture en cliquant sur l'arrière-plan sombre (overlay) pour chaque modale
    const allModals = document.querySelectorAll('.course_modal');
    allModals.forEach(modal => {
        modal.addEventListener('click', (e) => {
            if (e.target === modal) {
                const modalId = modal.getAttribute('id');
                closeCourseModal(modalId); // Appel de la fermeture par l'overlay
            }
        });
    });
});
