<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link para iconos de google fonts  -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=arrow_forward" />
    <!-- Link SwiperJS CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

    <title>Centro de arbitraje CNCP</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://ai-public.creatie.ai/gen_page/tailwind-custom.css" rel="stylesheet">    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/echarts/5.5.0/echarts.min.js"></script>
    <script src="https://cdn.tailwindcss.com/3.4.5?plugins=forms@0.5.7,typography@0.5.13,aspect-ratio@0.4.2,container-queries@0.1.1"></script>
    <script src="https://ai-public.creatie.ai/gen_page/tailwind-config.min.js" data-color="#2C5282" data-border-radius='medium'></script>

</head>
<body>
    <!-- start header  -->
    
    <?php 
    include "./includes/templates/headertail.php";
    ?>
    <!-- end header  -->
    
    <div class="relative h-screen w-full overflow-hidden">
        <div class="absolute inset-0 z-10 bg-red-950/30 flex items-center justify-center">
            <div class="text-white text-start max-w-4xl px-6 py-8 md:px-12 md:py-16">
                <h1 
                class="text-7xl md:text-8xl font-extrabold mb-6 leading-tight tracking-wide"
                style="text-shadow: 1px 1px 2px rgba(0, 0, 0, 1.5);">
                    Centro de Arbitraje
                </h1>
                <div class="space-y-6 mb-8">
                    <p class="text-lg md:text-xl font-medium"
                    style="text-shadow: 1px 1px 2px rgba(0, 0, 0, 1.5);">
                        Brindamos el mejor y eficiente servicio de arbitraje de derecho a cargo de los más destacados profesionales del país.
<br>
<br>
                        Con una amplia gama de árbitros peruanos quienes desarrollan el arbitraje de forma imparcial, justa y eficaz.
                    </p>
                </div>
                <a href="#contact-section"" class="bg-[#e8241a] text-white px-8 py-3 rounded-md font-semibold text-lg transition-all hover:bg-[#a31a13] hover:shadow-xl inline-block">
                    Contáctanos
                </a>
            </div>
        </div>
        <video class="absolute inset-0 w-full h-full object-cover z-0" autoplay muted loop>
            <source src="video/vp.mp4" type="video/mp4">
            <source src="video/vp.ogv" type="video/ogv">
            <source src="video/vp.webm" type="video/webm">
        </video>
    </div>

<style>
.celda-carta .swiper-pagination-bullet {
    height: 13px;
    width: 13px;
    opacity: 0.5;
    background: #e8241a;
}
.celda-carta .swiper-pagination-bullet-active {
    opacity: 1;
}

.celda-carta .swiper-slide-button {
    color: #e8241a;
    margin-top: -35px;
}

@media screen and (max-width: 768px) {
    .celda-carta {
        margin: 0 10px 25px;
    }
    .celda-carta .swiper-slide-button {
        display: none;
    }
}
</style>


    <main>
        <section class="flex justify-center items-center min-h-screen">
            <div class="swiper">
                <div class="max-w-[1100px] mx-[60px] mb-[35px] py-[20px] px-[10px] overflow-hidden celda-carta">
                    <ul class="swiper-wrapper">
                        <li class="list-none swiper-slide">
                            <a href="#" class="
                            group
                            select-none block bg-white p-[18px] rounded-[12px] border-2 border-transparent shadow-md 
                            shadow-black/50 transition ease-in-out duration-200 active:cursor-[grabbing] hover:border-[#a31a13]">
                                <img 
                                src="build/img/conciliacion.webp" 
                                alt="icono1" 
                                class="w-full aspect-video object-cover rounded-[10px]">
                                <p class="text-[#e8241a] bg-[#ffded8] px-[16px] py-[8px] text-[0.95rem] font-bold mt-[16px] my-0 mb-[18px] rounded-full w-fit"
                                >Centro de conciliación</p>
                                <h2 class="text-[#000] text-[1.19rem] font-thin">
                                    Facilitamos la resolución de conflictos a través de la conciliación. 
                                    Nuestros conciliadores imparciales ayudan a las partes a comunicarse y negociar acuerdos satisfactorios.
                                </h2>
                                <button class="h-[35px] w-[35px] text-[#e8241a] bg-white rounded-full mt-[30px] mx-0 mb-[5px] 
                                cursor-pointer border-2 border-[#e8241a] rotate-[-45deg] transition ease-in-out duration-200 
                                material-symbols-rounded
                                group-hover:text-white group-hover:bg-[#e8241a]
                                ">arrow_forward</button>
                            </a>
                        </li>                    
                        <li class="list-none swiper-slide">
                            <a href="#" class="
                            group
                            select-none block bg-white p-[18px] rounded-[12px] border-2 border-transparent shadow-md 
                            shadow-black/50 transition ease-in-out duration-200 active:cursor-[grabbing] hover:border-[#a31a13]">
                                <img 
                                src="build/img/asesorialegal.webp" 
                                alt="icono1" 
                                class="w-full aspect-video object-cover rounded-[10px]">
                                <p class="text-[#e8241a] bg-[#ffded8] px-[16px] py-[8px] text-[0.95rem] font-bold mt-[16px] my-0 mb-[18px] rounded-full w-fit"
                                >Asesoría Legal</p>
                                <h2 class="text-[#000] text-[1.19rem] font-thin">
                                    Ofrecemos asesoría legal personalizada para ayudarte a navegar el sistema jurídico con confianza. Nuestros abogados expertos 
                                    te brindan orientación en diversas áreas.
                                </h2>
                                <button class="h-[35px] w-[35px] text-[#e8241a] bg-white rounded-full mt-[30px] mx-0 mb-[5px] 
                                cursor-pointer border-2 border-[#e8241a] rotate-[-45deg] transition ease-in-out duration-200 
                                material-symbols-rounded
                                group-hover:text-white group-hover:bg-[#e8241a]
                                ">arrow_forward</button>
                            </a>
                        </li>                    
                        <li class="list-none swiper-slide">
                            <a href="#" class="
                            group
                            select-none block bg-white p-[18px] rounded-[12px] border-2 border-transparent shadow-md 
                            shadow-black/50 transition ease-in-out duration-200 active:cursor-[grabbing] hover:border-[#a31a13]">
                                <img 
                                src="build/img/consultoria.avif" 
                                alt="icono1" 
                                class="w-full aspect-video object-cover rounded-[10px]">
                                <p class="text-[#e8241a] bg-[#ffded8] px-[16px] py-[8px] text-[0.95rem] font-bold mt-[16px] my-0 mb-[18px] rounded-full w-fit"
                                >Consultoría de contratos</p>
                                <h2 class="text-[#000] text-[1.19rem] font-thin">
                                    Centrados en la redacción y revisión de acuerdos, garantizando la prevención de conflictos futuros. Nuestro equipo elabora contratos y 
                                    revisa documentos, identificando ambigüedades y riesgos.
                                </h2>
                                <button class="h-[35px] w-[35px] text-[#e8241a] bg-white rounded-full mt-[30px] mx-0 mb-[5px] 
                                cursor-pointer border-2 border-[#e8241a] rotate-[-45deg] transition ease-in-out duration-200 
                                material-symbols-rounded
                                group-hover:text-white group-hover:bg-[#e8241a]
                                ">arrow_forward</button>
                            </a>
                        </li>                    
                        <li class="list-none swiper-slide">
                            <a href="#" class="
                            group
                            select-none block bg-white p-[18px] rounded-[12px] border-2 border-transparent shadow-md 
                            shadow-black/50 transition ease-in-out duration-200 active:cursor-[grabbing] hover:border-[#a31a13]">
                                <img 
                                src="build/img/evaluacioncasos.webp" 
                                alt="icono1" 
                                class="w-full aspect-video object-cover rounded-[10px]">
                                <p class="text-[#e8241a] bg-[#ffded8] px-[16px] py-[8px] text-[0.95rem] font-bold mt-[16px] my-0 mb-[18px] rounded-full w-fit"
                                >Evaluación de Casos</p>
                                <h2 class="text-[#000] text-[1.19rem] font-thin">
                                    Análisis exhaustivo de disputas potenciales, ayudando a los clientes a determinar la mejor estrategia de resolución.
                                    Nuestro equipo examina los detalles de cada caso..
                                </h2>
                                <button class="h-[35px] w-[35px] text-[#e8241a] bg-white rounded-full mt-[30px] mx-0 mb-[5px] 
                                cursor-pointer border-2 border-[#e8241a] rotate-[-45deg] transition ease-in-out duration-200 
                                material-symbols-rounded
                                group-hover:text-white group-hover:bg-[#e8241a]
                                ">arrow_forward</button>
                            </a>
                        </li>                    
                        <li class="list-none swiper-slide">
                            <a href="#" class="
                            group
                            select-none block bg-white p-[18px] rounded-[12px] border-2 border-transparent shadow-md 
                            shadow-black/50 transition ease-in-out duration-200 active:cursor-[grabbing] hover:border-[#a31a13]">
                                <img 
                                src="build/img/mediacionfamiliar.webp" 
                                alt="icono1" 
                                class="w-full aspect-video object-cover rounded-[10px]">
                                <p class="text-[#e8241a] bg-[#ffded8] px-[16px] py-[8px] text-[0.95rem] font-bold mt-[16px] my-0 mb-[18px] rounded-full w-fit"
                                >Mediación Familiar</p>
                                <h2 class="text-[#000] text-[1.19rem] font-thin">
                                    Servicios de mediación para resolver conflictos familiares, como temas de custodia, 
                                    herencias o divorcios, entre otros; en un ambiente confidencial y neutral.
                                </h2>
                                <button class="h-[35px] w-[35px] text-[#e8241a] bg-white rounded-full mt-[30px] mx-0 mb-[5px] 
                                cursor-pointer border-2 border-[#e8241a] rotate-[-45deg] transition ease-in-out duration-200 
                                material-symbols-rounded
                                group-hover:text-white group-hover:bg-[#e8241a]
                                ">arrow_forward</button>
                            </a>
                        </li>
                    </ul>
        
                    <div class="swiper-pagination"></div>
                    <div class="swiper-slide-button swiper-button-prev"></div>
                    <div class="swiper-slide-button swiper-button-next"></div>
                </div>
            </div>

        </section>
        
        <div class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8">
            <section class="py-20 relative">            
                <div class="flex flex-col lg:flex-row items-center justify-between gap-12">
                    <div class="lg:w-1/2">
                        <h1 class="text-4xl font-bold text-gray-900 mb-6">Compromiso con la Justicia</h1>
                        <p class="text-lg text-gray-600 mb-8">
                            En el Centro de Arbitraje, trabajamos para garantizar que cada disputa se resuelva de manera justa y equitativa. Nuestro equipo está comprometido con la imparcialidad y la transparencia en cada proceso.
                        </p>                    
                            <a href="#contact-section" class="bg-[#e8241a] text-white px-8 py-3 !rounded-button font-extrabold hover:bg-[#a31a13] transition-all">Consultar Ahora</a>
                    </div>
                    <div class="lg:w-1/2">
                        <img src="./a5.jpg" alt="Justicia" class="w-full rounded-lg shadow-lg">                
                    </div>
                </div>
            </section>

            <section class="py-16 bg-white rounded-xl shadow-sm mb-20">            
                <div class="max-w-7xl mx-auto px-4">
                    <div class="grid md:grid-cols-2 gap-12">
                        <div class="text-center p-8">                        
                            <i class="fas fa-balance-scale text-4xl text-[#e8241a] mb-4"></i>
                            <h3 class="text-xl font-semibold mb-4">Confianza y Seguridad</h3>
                            <p class="text-gray-600">
                                Creamos un entorno seguro para que todas las partes se sientan cómodas al presentar sus casos.
                            </p>                    
                        </div>
                        <div class="text-center p-8">
                            <i class="fas fa-shield-alt text-4xl text-[#e8241a] mb-4"></i>
                            <h3 class="text-xl font-semibold mb-4">Profesionalismo</h3>
                            <p class="text-gray-600">
                                Nuestro equipo de expertos garantiza la máxima calidad en cada proceso de arbitraje.
                            </p>
                        </div>
                    </div>            
                </div>
            </section>

            <section class="py-16 bg-black text-white rounded-xl mb-20">
                <div class="max-w-7xl mx-auto px-4">                
                    <h2 class="text-3xl font-bold text-center mb-12">Algunos datos sobre nuestros servicios</h2>
                    <div class="grid md:grid-cols-3 gap-8 text-center">                    
                        <div class="p-6">
                            <i class="fas fa-gavel text-4xl mb-4"></i>
                            <div class="text-4xl font-bold mb-2" id="counter1">75</div>
                            <p class="text-lg">Casos resueltos</p>
                        </div>
                        <div class="p-6">                        
                            <i class="fas fa-handshake text-4xl mb-4"></i>
                            <div class="text-4xl font-bold mb-2" id="counter2">80</div>
                            <p class="text-lg">Casos de conciliación</p>
                        </div>
                        <div class="p-6">                        
                            <i class="fas fa-user-tie text-4xl mb-4"></i>
                            <div class="text-4xl font-bold mb-2" id="counter3">12</div>
                            <p class="text-lg">Abogados</p>
                        </div>
                    </div>
                </div>        
            </section>

            <section class="py-16 mb-20">
                <div class="max-w-7xl mx-auto px-4">
                    <div class="grid md:grid-cols-2 gap-12">                    
                        <div class="bg-white p-8 rounded-xl shadow-sm">
                            <i class="fas fa-clock text-3xl text-[#e8241a] mb-4"></i>
                            <h3 class="text-xl font-semibold mb-4">Horario de atención</h3>
                            <p class="text-gray-600">Lunes a Viernes: 9:00 AM - 6:00 PM<br>Sábado: 9:00 AM - 1:00 PM</p>
                        </div>
                        <div class="bg-white p-8 rounded-xl shadow-sm">                        
                            <i class="fas fa-laptop text-3xl text-[#e8241a] mb-4"></i>
                            <h3 class="text-xl font-semibold mb-4">Atención Virtual</h3>
                            <p class="text-gray-600">
                                Documentos y comunicaciones por correo electrónico hasta las 23:59 horas del día del plazo correspondiente.
                            </p>                    
                        </div>
                    </div>
                </div>
            </section>

            <section class="py-16 bg-white rounded-xl shadow-sm mb-20">            
                <div class="max-w-7xl mx-auto px-4">
                    <h2 class="text-3xl font-bold text-center mb-12">Beneficios</h2>                
                    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                        <div class="text-center p-6 hover:shadow-lg transition-all rounded-lg">                        
                            <i class="fas fa-bolt text-3xl text-[#e8241a] mb-4"></i>
                            <h3 class="font-semibold mb-2">Procesos ágiles</h3>
                            <p class="text-gray-600">Resolución rápida y eficiente</p>
                        </div>                    
                        <div class="text-center p-6 hover:shadow-lg transition-all rounded-lg">
                            <i class="fas fa-users text-3xl text-[#e8241a] mb-4"></i>
                            <h3 class="font-semibold mb-2">Profesionales expertos</h3>
                            <p class="text-gray-600">Red de especialistas calificados</p>
                        </div>
                        <div class="text-center p-6 hover:shadow-lg transition-all rounded-lg">                        
                            <i class="fas fa-lock text-3xl text-[#e8241a] mb-4"></i>
                            <h3 class="font-semibold mb-2">Procedimientos privados</h3>
                            <p class="text-gray-600">Confidencialidad garantizada</p>
                        </div>                    
                        <div class="text-center p-6 hover:shadow-lg transition-all rounded-lg">
                            <i class="fas fa-dollar-sign text-3xl text-[#e8241a] mb-4"></i>
                            <h3 class="font-semibold mb-2">Tarifas accesibles</h3>
                            <p class="text-gray-600">Precios competitivos</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-16 bg-white rounded-xl shadow-sm mb-20" id="contact-section">
                <div class="max-w-7xl mx-auto px-4">
                    <div class="grid md:grid-cols-2 gap-12 items-center">
                        <div class="space-y-8">
                            <div class="space-y-4">
                                <h2 class="text-3xl font-extrabold text-[#e8241a]">Contáctanos</h2>
                                <p class="text-lg text-gray-600">
                                    Comuníquese con nosotros y nos comunicaremos con usted a la velocidad de la luz.
                                </p>
                            </div>
                            <!-- start contacto -->
                            <?php
                            include "./includes/templates/contacto.php";
                            ?>
                            <!-- end contacto -->
                        </div>
                        <div class="hidden md:block">
                            <img src="./a6.jpg" alt="Contacto" class="w-full rounded-lg shadow-lg"/>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>    
    <!-- start footer -->
    <?php
    include "./includes/templates/footertail.php";
    ?>
    <!-- end footer -->
    <!-- start icon whatsapp -->
    <?php
    include "./includes/templates/whastapp.php";
    ?>
    <!-- end icon whatsapp -->
    

    <!-- Linking SwiperJS script -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        new Swiper('.celda-carta', {
        
            loop: true,
            spaceBetween: 30,

            // Paginacion bullets
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
            breakpoints: {
                0: {
                    slidesPerView:1
                },
                768: {
                    slidesPerView:2
                },
                1024: {
                    slidesPerView:3
                },
            }
        });
    </script>
    <script>        
        function animateValue(obj, start, end, duration) {
            let startTimestamp = null;
            const step = (timestamp) => {
                if (!startTimestamp) startTimestamp = timestamp;
                const progress = Math.min((timestamp - startTimestamp) / duration, 1);
                obj.innerHTML = Math.floor(progress * (end - start) + start);
                if (progress < 1) {
                    window.requestAnimationFrame(step);
                }
            };
            window.requestAnimationFrame(step);
        }

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateValue(document.getElementById("counter1"), 0, 75, 2000);
                    animateValue(document.getElementById("counter2"), 0, 80, 2000);
                    animateValue(document.getElementById("counter3"), 0, 12, 2000);
                    observer.unobserve(entry.target);
                }
            });
        });

        observer.observe(document.getElementById("counter1"));
    </script>
</body>
</html>