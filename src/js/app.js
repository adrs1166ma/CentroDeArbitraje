document.addEventListener('DOMContentLoaded', function() {

    eventListeners();

});

function eventListeners() {
    const mobileMenu = document.querySelector('.mm1');

    mobileMenu.addEventListener('click', navegacionResponsive);
}

function navegacionResponsive() {
    const navegacion = document.querySelector('.barra-abajo');

    console.log('desde cmd')

    navegacion.classList.toggle('mostrar')
}

new Swiper('.card-wrapper', {
    loop: true,
    spaceBetween: 30,

    // Autoplay configuration
    autoplay: {
        delay: 4000, // Tiempo en milisegundos (3 segundos en este caso)
        disableOnInteraction: false, // Permite que continúe el autoplay incluso si el usuario interactúa con el carrusel
    },

    // Pagination bullets
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
        dynamicBullets: true
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    // Responsive breackpoints
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