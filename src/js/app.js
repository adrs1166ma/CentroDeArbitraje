// Clase para manejar la animación de contadores
class CounterAnimation {
    constructor(element, targetValue, duration = 2000) {
        this.element = element;
        this.targetValue = parseInt(targetValue);
        this.duration = duration;
        this.current = 0;
        this.increment = this.targetValue / (this.duration / 16);
        this.animating = false;
    }

    animate() {
        if (this.animating) return;
        this.animating = true;

        const updateCounter = () => {
            if (this.current >= this.targetValue) {
                this.current = this.targetValue;
                this.element.textContent = this.targetValue;
                this.animating = false;
                return;
            }

            this.current += this.increment;
            this.element.textContent = Math.floor(this.current);
            requestAnimationFrame(updateCounter);
        };

        requestAnimationFrame(updateCounter);
    }
}

// Clase principal para manejar todos los contadores
class FactsCounter {
    constructor(selector = '.fact-stat-number') {
        this.counters = [];
        this.initialized = false;
        this.observer = null;
        this.counterElements = document.querySelectorAll(selector);
        
        this.init();
    }

    init() {
        if (this.initialized) return;
        
        this.counterElements.forEach(element => {
            const targetValue = element.getAttribute('data-target');
            this.counters.push(new CounterAnimation(element, targetValue));
        });

        this.setupObserver();
        this.initialized = true;
    }

    setupObserver() {
        const options = {
            root: null,
            rootMargin: '0px',
            threshold: 0.5
        };

        this.observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const element = entry.target;
                    const counter = this.counters.find(c => c.element === element);
                    
                    if (counter) {
                        counter.animate();
                        this.observer.unobserve(element);
                    }
                }
            });
        }, options);

        this.counterElements.forEach(element => {
            this.observer.observe(element);
        });
    }
}

// Código existente
document.addEventListener('DOMContentLoaded', function() {
    // Funciones existentes
    eventListeners();
    
    // Inicializar el contador de hechos
    initializeFactsCounter();
    
    // Inicializar efectos hover en las tarjetas de estadísticas
    initializeFactsHoverEffects();
});

function eventListeners() {
    const mobileMenu = document.querySelector('.mm1');
    mobileMenu.addEventListener('click', navegacionResponsive);
}

function navegacionResponsive() {
    const navegacion = document.querySelector('.barra-abajo');
    navegacion.classList.toggle('mostrar')
}

// Función para inicializar el contador
function initializeFactsCounter() {
    const factsCounter = new FactsCounter();
}

// Función para inicializar efectos hover
function initializeFactsHoverEffects() {
    const factItems = document.querySelectorAll('.fact-stat-item');
    factItems.forEach(item => {
        item.addEventListener('mouseenter', () => {
            item.style.transform = 'translateY(-5px)';
            item.style.transition = 'transform 0.3s ease';
        });

        item.addEventListener('mouseleave', () => {
            item.style.transform = 'translateY(0)';
        });
    });
}

// Inicialización de Swiper (código existente)
new Swiper('.card-wrapper', {
    loop: true,
    spaceBetween: 30,

    autoplay: {
        delay: 4000,
        disableOnInteraction: false,
    },

    pagination: {
        el: '.swiper-pagination',
        clickable: true,
        dynamicBullets: true
    },

    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    breakpoints: {
        0: {
            slidesPerView: 1
        },
        768: {
            slidesPerView: 2
        },
        1024: {
            slidesPerView: 3
        },
    }
});