let videoModal;
let modalCourseTitle;
let modalVideoFrame;

function openVideoModal(title, videoUrl = 'https://www.youtube.com/embed/dQw4w9WgXcQ') {
    videoModal ??= document.getElementById('videoModal');
    modalCourseTitle ??= document.getElementById('modalCourseTitle');
    modalVideoFrame ??= document.getElementById('modalVideoFrame');

    if (!videoModal || !modalCourseTitle || !modalVideoFrame) {
        return;
    }

    modalCourseTitle.innerHTML = `<i class="fa-solid fa-circle-play" style="color: var(--color-accent);"></i> ${title}`;
    modalVideoFrame.src = `${videoUrl}?autoplay=1`;
    videoModal.classList.add('active');
}

function closeVideoModal() {
    videoModal ??= document.getElementById('videoModal');
    modalVideoFrame ??= document.getElementById('modalVideoFrame');

    if (!videoModal || !modalVideoFrame) {
        return;
    }

    videoModal.classList.remove('active');
    modalVideoFrame.src = '';
}

document.addEventListener('DOMContentLoaded', () => {
    videoModal = document.getElementById('videoModal');
    modalCourseTitle = document.getElementById('modalCourseTitle');
    modalVideoFrame = document.getElementById('modalVideoFrame');

    videoModal?.addEventListener('click', (event) => {
        if (event.target === videoModal) {
            closeVideoModal();
        }
    });
});
