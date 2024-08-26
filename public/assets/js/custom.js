// JS filter

const filterButtons = document.querySelectorAll('.filter-btn');
const cardItems = document.querySelectorAll('.card-item');

// Tambahkan event listener untuk setiap tombol filter
filterButtons.forEach(button => {
    button.addEventListener('click', () => {
        button.classList.toggle('active');
        filterCards();
    });
});

function filterCards() {
    const activeFilters = document.querySelectorAll('.filter-btn.active');
    const activeClasses = [];

    activeFilters.forEach(button => {
        activeClasses.push(button.dataset.filter);
    });

    cardItems.forEach(card => {
        const cardClasses = card.className.split(' ');
        const showCard = activeClasses.some(filter => cardClasses.includes(filter));
        if (showCard || activeClasses.length === 0) {
            card.style.display = 'block';
        } else {
            card.style.display = 'none';
        }
    });
}
