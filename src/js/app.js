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