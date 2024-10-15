document.addEventListener('DOMContentLoaded', function() {
    // Crear el elemento header
    const header = document.createElement('header');
    header.className = 'header-area header-sticky';

    // Crear contenedor
    const container = document.createElement('div');
    container.className = 'container';

    // Crear fila
    const row = document.createElement('div');
    row.className = 'row';

    // Crear columna
    const col = document.createElement('div');
    col.className = 'col-12';

    // Crear nav
    const nav = document.createElement('nav');
    nav.className = 'main-nav';

    // Crear logo
    const logo = document.createElement('a');
    logo.href = 'index.html';
    logo.className = 'logo';

    const logoImg = document.createElement('img');
    logoImg.src = 'assets/images/logo.png';
    logoImg.alt = 'Logo Centro de Arbitraje';
    logoImg.style.width = '200px';
    logoImg.style.height = 'auto';
    logo.appendChild(logoImg);

    // Crear menú
    const ul = document.createElement('ul');
    ul.className = 'nav';

    const menuItems = [
        { text: 'Inicio', href: 'index.html', active: true },
        { text: 'Sobre nosotros', href: 'nosotros.html' },
        { text: 'Servicios', href: '#' },
        { text: 'Contactenos', href: '#' },
        { text: 'Comunicados', href: '#' },
    ];

    menuItems.forEach(item => {
        const li = document.createElement('li');
        if (item.active) li.className = 'scroll-to-section';
        const a = document.createElement('a');
        a.href = item.href;
        a.textContent = item.text;
        if (item.active) a.className = 'active';
        li.appendChild(a);
        ul.appendChild(li);
    });

    // Crear el botón de menú
    const menuTrigger = document.createElement('a');
    menuTrigger.className = 'menu-trigger';
    menuTrigger.innerHTML = '<span>Menu</span>';

    // Estructura final
    nav.appendChild(logo);
    nav.appendChild(ul);
    nav.appendChild(menuTrigger);
    col.appendChild(nav);
    row.appendChild(col);
    container.appendChild(row);
    header.appendChild(container);

    // Añadir el encabezado al body
    document.body.insertBefore(header, document.body.firstChild);
});
