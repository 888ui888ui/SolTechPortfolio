// Theme Toggle Logic
const themeBtn = document.getElementById('theme-toggle');
const body = document.body;
const icon = themeBtn ? themeBtn.querySelector('i') : null;

if (themeBtn && icon) {
    themeBtn.addEventListener('click', () => {
        body.classList.toggle('dark-mode');
        if (body.classList.contains('dark-mode')) {
            icon.classList.replace('fa-moon', 'fa-sun');
            localStorage.setItem('theme', 'dark');
        } else {
            icon.classList.replace('fa-sun', 'fa-moon');
            localStorage.setItem('theme', 'light');
        }
    });

    // Check for saved theme preference
    if (localStorage.getItem('theme') === 'dark') {
        body.classList.add('dark-mode');
        icon.classList.replace('fa-moon', 'fa-sun');
    }
}

// Back to Top Button Logic
// We create it and ensure it has the ID "back-to-top" to match your CSS/Logic
const backToTop = document.createElement('button');
backToTop.id = 'back-to-top'; // Added this line to fix the "null" error
backToTop.innerHTML = '<i class="fas fa-arrow-up"></i>';
backToTop.className = 'back-to-top';
document.body.appendChild(backToTop);

// Single scroll listener for both Progress Bar and Back to Top
window.onscroll = function() {
    // 1. Progress Bar Logic
    const indicator = document.getElementById("scroll-indicator");
    if (indicator) {
        let winScroll = document.body.scrollTop || document.documentElement.scrollTop;
        let height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        let scrolled = (winScroll / height) * 100;
        indicator.style.width = scrolled + "%";
    }

    // 2. Back to Top Logic
    if (window.pageYOffset > 300) {
        backToTop.classList.add('show');
        backToTop.style.display = "block"; // Extra insurance for visibility
    } else {
        backToTop.classList.remove('show');
        backToTop.style.display = "none";
    }
};

backToTop.addEventListener('click', () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
});

// Mobile Menu Logic
const menu = document.querySelector('#mobile-menu');
const menuLinks = document.querySelector('.nav-links');

if (menu && menuLinks) {
    menu.addEventListener('click', function() {
        menu.classList.toggle('is-active');
        menuLinks.classList.toggle('active');
    });

    document.querySelectorAll('.nav-links a').forEach(n => n.addEventListener('click', () => {
        menu.classList.remove('is-active');
        menuLinks.classList.remove('active');
    }));
}