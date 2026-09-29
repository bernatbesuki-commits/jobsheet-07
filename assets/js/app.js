// Toggle Navigation Menu
const navToggleBtn = document.getElementById('nav-toggle-btn');
const nav = document.querySelector('nav');

if (navToggleBtn) {
    navToggleBtn.addEventListener('click', function() {
        nav.classList.toggle('active');
    });

    // Close menu when a link is clicked
    const navLinks = nav.querySelectorAll('a');
    navLinks.forEach(link => {
        link.addEventListener('click', function() {
            nav.classList.remove('active');
        });
    });
}

// Search/Filter functionality (if needed)
const searchInput = document.getElementById('search-input');
if (searchInput) {
    searchInput.addEventListener('keyup', function() {
        const searchTerm = this.value.toLowerCase();
        const tableRows = document.querySelectorAll('table tbody tr');

        tableRows.forEach(row => {
            const cells = row.querySelectorAll('td');
            let found = false;

            cells.forEach(cell => {
                if (cell.textContent.toLowerCase().includes(searchTerm)) {
                    found = true;
                }
            });

            row.style.display = found ? '' : 'none';
        });
    });
}
