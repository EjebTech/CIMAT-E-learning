/**
 * CIMAT E-learning - Gestion des fenêtres modales et interactions Espace Administrateur
 */

document.addEventListener('DOMContentLoaded', () => {
    // 1. Fonctions d'ouverture et de fermeture des modales
    window.openAdminModal = function (modalId) {
        const modal = document.getElementById(modalId);
        if (modal) {
            modal.removeAttribute('hidden');
            modal.classList.add('active');
            document.body.classList.add('modal-open');
        }
    };

    window.closeAdminModal = function (modalOrId) {
        let modal = typeof modalOrId === 'string' ? document.getElementById(modalOrId) : modalOrId;
        if (modal) {
            modal.setAttribute('hidden', 'true');
            modal.classList.remove('active');
            if (!document.querySelector('.admin_modal.active, .admin_modal:not([hidden])')) {
                document.body.classList.remove('modal-open');
            }
        }
    };

    // 2. Écouteurs globaux pour l'ouverture
    document.addEventListener('click', (e) => {
        const openTrigger = e.target.closest('[data-modal-open]');
        if (openTrigger) {
            e.preventDefault();
            const modalId = openTrigger.getAttribute('data-modal-open');
            window.openAdminModal(modalId);
            return;
        }

        const closeTrigger = e.target.closest('[data-modal-close], .admin_modal_close, .admin_modal_cancel');
        if (closeTrigger) {
            e.preventDefault();
            const modalId = closeTrigger.getAttribute('data-modal-close');
            if (modalId) {
                window.closeAdminModal(modalId);
            } else {
                const parentModal = closeTrigger.closest('.admin_modal');
                if (parentModal) window.closeAdminModal(parentModal);
            }
            return;
        }

        // Clic sur l'overlay (l'arrière-plan de la modale)
        if (e.target.classList.contains('admin_modal')) {
            window.closeAdminModal(e.target);
        }
    });

    // 3. Fermeture par la touche Échap (Escape)
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') {
            const openModals = document.querySelectorAll('.admin_modal.active, .admin_modal:not([hidden])');
            openModals.forEach((modal) => window.closeAdminModal(modal));
        }
    });



    
});
