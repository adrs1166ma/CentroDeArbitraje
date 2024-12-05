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

    <link rel="stylesheet" href="build/css/app.css">

</head>
<body>
    <!-- start header  -->
    <?php 
    include "./includes/templates/header.php";
    ?>
    <!-- end header  -->
    
    <div class="video">
        <div class="overlay">
            <div class="heroSection">
                <div class="heroContent">
                    <h1 class="heroTitle">
                        Centro de Arbitraje
                        <br />
                        CEAR
                    </h1>
                    <p class="heroSubtitle">
                        Brindamos el mejor y eficiente servicio de arbitraje de derecho a cargo de los más destacados profesionales del país.
                    </p>
                    <p class="heroSubtitle">
                        Con una amplia gama de árbitros peruanos quienes desarrollan el arbitraje de forma imparcial, justa
                    </p>
                    <a href="#contacto" class="contactButton">Contáctanos</a>
                    </div>
                </div>
        </div>
        <video autoplay muted loop>
            <source src="video/vp.mp4" type="video/mp4">
            <source src="video/vp.ogv" type="video/ogv">
            <source src="video/vp.webm" type="video/webm">
        </video>
    </div>

    <main>
        <section class="contenedor-carrusel swiper">
            <div class="card-wrapper">
                <ul class="card-list swiper-wrapper">
                    <li class="card-item swiper-slide">
                        <a href="#" class="card-link">
                            <img src="build/img/conciliacion.webp" alt="icono1" class="card-image">
                            <p class="badge asesoria">Centro de conciliación</p>
                            <h2 class="card-title">Facilitamos la resolución de conflictos a través de la conciliación. 
                                Nuestros conciliadores imparciales ayudan a las partes a comunicarse y negociar acuerdos satisfactorios.</h2>
                            <button class="card-button material-symbols-rounded">arrow_forward</button>
                        </a>
                    </li>
                    <li class="card-item swiper-slide">
                        <a href="#" class="card-link">
                            <img src="build/img/asesorialegal.webp" alt="icono1" class="card-image">
                            <p class="badge asesoria">Asesoría Legal</p>
                            <h2 class="card-title">Ofrecemos asesoría legal personalizada para ayudarte a navegar el sistema jurídico con confianza. Nuestros abogados expertos 
                                te brindan orientación en diversas áreas.</h2>
                            <button class="card-button material-symbols-rounded">arrow_forward</button>
                        </a>
                    </li>
                    <li class="card-item swiper-slide">
                        <a href="#" class="card-link">
                            <img src="build/img/consultoria.avif" alt="icono1" class="card-image">
                            <p class="badge asesoria">Consultoría de contratos</p>
                            <h2 class="card-title">Centrados en la redacción y revisión de acuerdos, garantizando la prevención de conflictos futuros. Nuestro equipo elabora contratos y 
                                revisa documentos, identificando ambigüedades y riesgos.</h2>
                            <button class="card-button material-symbols-rounded">arrow_forward</button>
                        </a>
                    </li>
                    <li class="card-item swiper-slide">
                        <a href="#" class="card-link">
                            <img src="build/img/evaluacioncasos.webp" alt="icono1" class="card-image">
                            <p class="badge asesoria">Evaluación de Casos</p>
                            <h2 class="card-title">Análisis exhaustivo de disputas potenciales, ayudando a los clientes a determinar la mejor estrategia de resolución.
                                Nuestro equipo examina los detalles de cada caso..</h2>
                            <button class="card-button material-symbols-rounded">arrow_forward</button>
                        </a>
                    </li>
                    <li class="card-item swiper-slide">
                        <a href="#" class="card-link">
                            <img src="build/img/mediacionfamiliar.webp" alt="icono1" class="card-image">
                            <p class="badge asesoria">Mediación Familiar</p>
                            <h2 class="card-title">Servicios de mediación para resolver conflictos familiares, como temas de custodia, 
                                herencias o divorcios, entre otros; en un ambiente confidencial y neutral.</h2>
                            <button class="card-button material-symbols-rounded">arrow_forward</button>
                        </a>
                    </li>
                </ul>
    
                <div class="swiper-pagination"></div>
                <div class="swiper-slide-button swiper-button-prev"></div>
                <div class="swiper-slide-button swiper-button-next"></div>
            </div>
        </section>
        <section class="info-now" id="info">
            <div class="contenedor-info">
                <div class="fila">
                    <div class="columna-texto">
                        <div class="columna-completa">                            
                            <h3>Compromiso con la Justicia</h3>
                            <p>En el Centro de Arbitraje, trabajamos para garantizar que cada disputa se resuelva de manera justa y equitativa. Nuestro equipo está comprometido con la imparcialidad y la transparencia en cada proceso.</p>
                        </div>
                        <div class="columna-completa">                            
                            <h3>Confianza y Seguridad</h3>
                            <p>Creamos un entorno seguro para que todas las partes se sientan cómodas al presentar sus casos.</p>
                        </div>                        
                    </div>
                    <div class="columna-acordeon">
                        <article class="acordeon">
                            <div class="acordeon-cabeza">
                                <h3><i class="i-clock"></i> Horario de atención</h3>
                            </div>
                            <div class="acordeon-cuerpo">
                                <div class="contenido-info">
                                    <p>Atendemos de Lunes a Viernes de 9am a 6pm y sábado de 9am a 1pm.</p>
                                </div>
                            </div>
                        </article>
                        <article class="acordeon">
                            <div class="acordeon-cabeza">
                                <h3><i class="i-computer"></i> Atención Virtual</h3>
                            </div>
                            <div class="acordeon-cuerpo">
                                <div class="contenido-info">
                                    <p>Todos los escritos, documentos y comunicaciones enviadas exclusivamente por correo electrónico pueden presentarse hasta las 23:59 horas del día en el que se cumple el plazo correspondiente.</p>
                                </div>
                            </div>
                        </article>
                        <article class="acordeon">
                            <div class="acordeon-cabeza">
                                <h3><i class="i-stars"></i> Beneficios</h3>
                            </div>
                            <div class="acordeon-cuerpo">
                                <div class="contenido-info">
                                    <p>Procesos ágiles, contamos con red de profesionales con alta experiencia, todos los procedimientos son privados, tarifas accesibles, entre otros.</p>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>
        <section class="facts-section">
            <div class="facts-container">
                <h2 class="facts-title">Algunos datos sobre nuestros servicios</h2>
                <div class="facts-stats">
                    <div class="stat-card">
                    <div class="fact-stat-number" data-target="75">0</div>
                    <p class="fact-stat-label">Casos resueltos ⚖️</p>
                    </div>
                    <div class="stat-card">
                    <div class="fact-stat-number" data-target="80">0</div>
                    <p class="fact-stat-label">casos de conciliación 🤝</p>
                    </div>
                    <div class="stat-card">
                    <div class="fact-stat-number" data-target="12">0</div>
                    <p class="fact-stat-label">Abogados 👨‍⚖️</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- start contacto -->
        <?php
        include "./includes/templates/contacto.php";
        ?>
        <!-- end contacto -->
    </main>    
    <!-- start footer -->
    <?php
    include "./includes/templates/footer.php";
    ?>
    <!-- end footer -->

    <!-- Linking SwiperJS script -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script src="build/js/bundle.min.js"></script>
</body>
</html>