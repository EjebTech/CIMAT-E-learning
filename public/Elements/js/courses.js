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
