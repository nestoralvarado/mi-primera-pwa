// Animación al hacer scroll
const observerOptions = {
    threshold: 0.1
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('animate');
        }
    });
}, observerOptions);

document.querySelectorAll('section').forEach(section => {
    observer.observe(section);
});

// Efecto Parallax para el hero
function handleParallax() {
    const heroBackground = document.querySelector('.hero-background');
    
    window.addEventListener('scroll', () => {
        const scrolled = window.pageYOffset;
        const rate = scrolled * 0.5; // Ajusta este valor para cambiar la velocidad del efecto
        
        // Mueve el fondo más lento que el scroll
        heroBackground.style.transform = `translateY(${rate}px)`;
    });
}

// Inicializar el efecto parallax
handleParallax();