document.addEventListener('DOMContentLoaded', () => {
    const photoInput = document.getElementById('photo');
    const preview = document.getElementById('profilePhotoPreview');

    photoInput?.addEventListener('change', () => {
        const [file] = photoInput.files;
        if (file && preview) {
            preview.src = URL.createObjectURL(file);
        }
    });
});
