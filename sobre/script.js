const navbar = document.querySelector('.navbar');
const mobileNavToggle = document.querySelector('.mobile-nav-toggle');
const navLinks = document.querySelector('.nav-links');
const overlay = document.querySelector('.overlay');
let isMenuOpen = false;


// efeito do scroll na navbar
window.addEventListener('scroll', () => {
    if (window.scrollY > 50) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
});

// Tmenu mobile
function toggleMenu() {
    isMenuOpen = !isMenuOpen;
    mobileNavToggle.classList.toggle('active');
    navLinks.classList.toggle('active');
    overlay.classList.toggle('active');
    document.body.style.overflow = isMenuOpen ? 'hidden' : '';
}

mobileNavToggle.addEventListener('click', toggleMenu);
overlay.addEventListener('click', toggleMenu);

// Fechar menu ao clicar em um link
document.querySelectorAll('.nav-links a').forEach(link => {
    link.addEventListener('click', () => {
        if (isMenuOpen) toggleMenu();
    });
});

// Fechar menu com tecla ESC
document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && isMenuOpen) toggleMenu();
});

// Evitar scroll quando o menu estiver aberto
window.addEventListener('resize', () => {
    if (window.innerWidth > 768 && isMenuOpen) {
        toggleMenu();
    }
});

// slide
$('.carousel').carousel();