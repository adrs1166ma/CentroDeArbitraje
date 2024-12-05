<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    <title>Registro de Árbitros - Centro de Arbitraje</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://ai-public.creatie.ai/gen_page/tailwind-custom.css" rel="stylesheet">    <script src="https://cdn.tailwindcss.com/3.4.5?plugins=forms@0.5.7,typography@0.5.13,aspect-ratio@0.4.2,container-queries@0.1.1"></script>
    <script src="https://ai-public.creatie.ai/gen_page/tailwind-config.min.js" data-color="#000000" data-border-radius="medium"></script>
</head>
<body class="bg-gray-50 font-[Inter]">
    <div class="min-h-screen flex flex-col">
    <nav class="bg-[#A31A13] shadow-sm border-b-4 border-[#910000]">
                    <div class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8">            
                        <div class="flex justify-between h-16">
                            
                        </div>
                    </div>
                </nav>
        <?php 
        include "./includes/templates/headertail.php";
        ?>  

        <main class="flex-grow">            
            <div class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
                <div class="bg-white rounded-lg shadow-sm overflow-hidden">                    
                    <div class="relative h-64 bg-custom">
                        <div class="absolute inset-0 bg-gradient-to-r from-custom/90 to-custom/70">
                        </div>
                        <div class="absolute inset-0 flex items-center px-8">
                            <div class="text-white max-w-3xl">                                
                                <h1 class="text-4xl font-bold mb-4">Registro de Árbitros</h1>
                                <p class="text-xl opacity-90">Centro de Arbitraje de la Cámara Nacional de Comercio del Perú</p>
                            </div>
                        </div>                    
                    </div>
                    <div class="p-8">
                        <div class="max-w-4xl mx-auto space-y-12">                            
                            <section>
                                <h2 class="text-3xl font-bold text-gray-900 mb-6">ÚNETE a la nómina de árbitros de derecho más prestigiosa del país</h2>                                
                                <p class="text-gray-600 leading-relaxed">El Centro de Arbitraje de la Cámara Nacional de Comercio del Perú se encuentra realizando la convocatoria a profesionales quienes deseen formar parte de la nómina de árbitros especializados.</p>                            
                            </section>
                            <section class="bg-gray-50 rounded-lg p-8">
                                <h3 class="text-xl font-semibold text-gray-900 mb-6">Documentación Requerida</h3>
                                <ul class="space-y-4">
                                    <li class="flex items-start">                                        
                                        <i class="fas fa-file-pdf text-custom mt-1 mr-3"></i>
                                        <span>CV documentado (formato PDF)</span>
                                    </li>
                                    <li class="flex items-start">                                        
                                        <i class="fas fa-file-signature text-custom mt-1 mr-3"></i>
                                        <span>Declaración jurada de contar con conducta intachable y no contar con antecedentes penales</span>
                                    </li>                                
                                </ul>
                            </section>
                            <section class="border border-gray-200 rounded-lg p-8">                                
                                <h3 class="text-xl font-semibold text-gray-900 mb-6">Derechos de Registro</h3>
                                <div class="bg-custom/5 rounded-lg p-6 flex items-center justify-between">                                    
                                    <div>
                                        <p class="text-gray-600">Monto a pagar</p>
                                        <p class="text-2xl font-bold text-custom mt-1">S/ 490.00</p>
                                    </div>
                                    <div class="text-sm text-gray-500">
                                        (Cuatrocientos noventa soles)
                                    </div>                                
                                </div>
                            </section>
                            <section>
                                <h3 class="text-xl font-semibold text-gray-900 mb-6">Información de Contacto</h3>
                                <div class="space-y-4">
                                    <div class="flex items-start">                                        
                                        <i class="fas fa-envelope text-custom mt-1 mr-3"></i>
                                        <div>                                            
                                            <p class="font-medium">Correo Electrónico</p>
                                            <a href="mailto:direccionejecutiva@camaranacional.org.pe" class="text-custom hover:underline">direccionejecutiva@camaranacional.org.pe</a>
                                        </div>
                                    </div>                                    
                                    <div class="flex items-start">
                                        <i class="fas fa-location-dot text-custom mt-1 mr-3"></i>
                                        <div>
                                            <p class="font-medium">Dirección</p>                                            
                                            <p class="text-gray-600">Calle Luis Felipe Villarán<br>San Isidro, Lima - Perú</p>                                        
                                        </div>
                                    </div>
                                </div>                            
                            </section>
                            <section class="text-center">
                                <a href="Ficha_Inscripcion_arbitros_CEAR_CNCP.pdf" download="Ficha_Inscripcion_arbitros_CEAR_CNCP.pdf" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-button text-white bg-custom hover:bg-custom/90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-custom mb-4">
                                    <i class="fas fa-download mr-2"></i>
                                    Descargar Ficha de Inscripción
                                </a>
                                <div class="mt-6 max-w-2xl mx-auto border rounded-lg overflow-hidden shadow-sm">
                                    <iframe src="Ficha_Inscripcion_arbitros_CEAR_CNCP.pdf" class="w-full h-[600px]" title="Previsualización de Ficha de Inscripción" id="preview-frame">
                                    </iframe>
                                    <p class="text-sm text-gray-500 mt-2 text-center">Vista previa del documento. Para una mejor visualización, descargue el archivo.</p>
                                </div>
                            </section>    
                        </div>
                    </div>
                </div>
            </div>        
        </main>

        <?php
        include "./includes/templates/footertail.php";
        ?>
    </div>
</body>
</html>