/**
 * CIMAT E-learning - Prévisualisation instantanée de la photo de profil
 */
document.addEventListener('DOMContentLoaded', () => {
    const photoInput = document.getElementById('photo');
    const photoPreview = document.getElementById('profilePhotoPreview');

    if (photoInput && photoPreview) {
        photoInput.addEventListener('change', (e) => {
            const file = e.target.files && e.target.files[0];
            if (file && file.type.startsWith('image/')) {
                const reader = new FileReader();
                reader.onload = (event) => {
                    photoPreview.src = event.target.result;
                };
                reader.readAsDataURL(file);
            }
        });
    }
});
