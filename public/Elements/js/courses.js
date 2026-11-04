document.addEventListener('DOMContentLoaded', () => {
    const searchInput = document.getElementById('courseSearchInput');
    const filterButtons = document.querySelectorAll('.filter_btn');
    const courseCards = document.querySelectorAll('.course_card');

    const filterCourses = (category, searchText = '') => {
        const searchLower = searchText.toLowerCase().trim();

        courseCards.forEach((card) => {
            const categoryValue = card.getAttribute('data-category');
            const title = card.querySelector('.course_title')?.textContent.toLowerCase() ?? '';
            const description = card.querySelector('.course_description')?.textContent.toLowerCase() ?? '';
            const matchesCategory = category === 'all' || categoryValue === category;
            const matchesSearch = title.includes(searchLower) || description.includes(searchLower);

            card.style.display = matchesCategory && matchesSearch ? 'flex' : 'none';
        });
    };

    filterButtons.forEach((button) => {
        button.addEventListener('click', () => {
            filterButtons.forEach((item) => item.classList.remove('active'));
            button.classList.add('active');
            const activeFilter = button.getAttribute('data-filter') ?? 'all';
            filterCourses(activeFilter, searchInput?.value ?? '');
        });
    });

    searchInput?.addEventListener('input', (event) => {
        const activeButton = document.querySelector('.filter_btn.active');
        filterCourses(activeButton?.getAttribute('data-filter') ?? 'all', event.target.value);
    });
});

document.addEventListener('DOMContentLoaded', () => {
    const calendarDays = document.getElementById('calendarDays');

    if (!calendarDays) {
        return;
    }

    const currentDay = new Date().getDate();
    let days = '';

    for (let day = 1; day <= 30; day++) {
        const classes = day === currentDay ? 'today' : [14, 18].includes(day) ? 'event' : '';
        const title = classes === 'event' ? ' title="Événement prévu"' : '';
        days += `<span class="${classes}"${title}>${day}</span>`;
    }

    calendarDays.innerHTML = days;
});
