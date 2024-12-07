<header class="bg-[#A31A13] border-b-4 border-[#910000] px-6 py-4 fixed top-0 left-0 w-full transition-transform" style="z-index: 12;">
    <div class="flex flex-col justify-start items-start flex-nowrap gap-6 w-full h-auto lg:flex-row lg:justify-between lg:items-center">
        <div class="flex flex-row justify-between items-center w-full h-auto">
            <!-- Logo -->
            <div class="flex-shrink-0 inline-block">
                <a href="centro_de_arbitraje">
                    <img class="h-10" src="build/img/logoCblanco.webp" alt="Logo Centro de Arbitraje">
                </a>
            </div>
            <!-- Mobile Menu Button -->
            <button 
            id="menu-button" 
            class="lg:hidden flex items-center justify-center h-10 w-10 text-white focus:outline-none"
            >
                <img src="assets/icons/barras.svg" alt="Icono Menú">
            </button>
        </div>
        <!-- Navigation Menu -->
        <nav 
        id="menu-links" 
        class="hidden lg:flex flex-col lg:flex-row  lg:space-x-6 mt-4 lg:mt-0"
        >
            <a href="centro_de_arbitraje" class="text-white text-sm font-medium px-3 py-2 hover:text-[#e8241a] @apply whitespace-pre">Inicio</a>
            <a href="nosotros" class="text-white text-sm font-medium px-3 py-2 hover:text-[#e8241a] @apply whitespace-pre">Nosotros</a>
            <a href="arbitraje" class="text-white text-sm font-medium px-3 py-2 hover:text-[#e8241a] @apply whitespace-pre">Arbitraje</a>
            <a href="registro_arbitros" class="text-white text-sm font-medium px-3 py-2 hover:text-[#e8241a] @apply whitespace-pre">Registro de Árbitros</a>
            <a href="centro_de_arbitraje" class="text-white text-sm font-medium px-3 py-2 hover:text-[#e8241a] @apply whitespace-pre">Contáctenos</a>
        </nav>
        <!-- text-[#e8241a] | para activacion -->
    </div>
</header>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const menuButton = document.getElementById("menu-button");
        const menuLinks = document.getElementById("menu-links");

        menuButton.addEventListener("click", () => {
            // Toggle visibility of menu links
            menuLinks.classList.toggle("hidden");
            menuLinks.classList.toggle("flex");
        });
    });
</script>