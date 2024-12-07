<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <title>Formulario de Reclamación</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://ai-public.creatie.ai/gen_page/tailwind-custom.css" rel="stylesheet">    
    <script src="https://cdn.tailwindcss.com/3.4.5?plugins=forms@0.5.7,typography@0.5.13,aspect-ratio@0.4.2,container-queries@0.1.1"></script>
    <script src="https://ai-public.creatie.ai/gen_page/tailwind-config.min.js" data-color="#000000" data-border-radius="medium"></script>
</head>
<body class="bg-gray-50 min-h-screen">

    <?php 
    include "./includes/templates/headertail.php";
    ?>

    <nav class="bg-[#A31A13] shadow-sm border-b-4 border-[#910000]">
        <div class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8">            
            <div class="flex justify-between h-16">
                
            </div>
        </div>
    </nav>

    <div class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="max-w-3xl mx-auto">            
            <div class="text-center mb-12">
                <h1 class="text-4xl font-bold text-gray-900 mb-4">Formulario de Reclamación</h1>                
                <p class="text-lg text-gray-600">Por favor, complete todos los campos requeridos para procesar su reclamación</p>            
            </div>
            <form 
            class="bg-white shadow-sm rounded-lg p-8"
            action="procesar_reclamo.php" method="POST"
            autocomplete="off" enctype="multipart/form-data"
            >
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                    <!-- start Nombre =================================== -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2" for="nombre">Nombre *</label>                        
                        <div class="relative">
                            <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-500">                                
                                <i class="fas fa-user"></i>
                            </span>
                            <input type="text" id="nombre" name="nombre" required
                                class="!rounded-button block w-full pl-10 py-3 border-gray-300 focus:ring-custom focus:border-custom"
                                placeholder="Ingrese su nombre"
                                maxlength="25" onkeypress="return sololetras(event)" onpaste="return false">                        
                            </div>
                    </div>
                    <!-- start Nombre =================================== -->

                    <!-- start Apellido =================================== -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2" for="apellido">Apellido *</label>
                        <div class="relative">
                            <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-500">                                
                                <i class="fas fa-user"></i>
                            </span>
                            <input type="text" id="apellido" name="apellido" required
                                class="!rounded-button block w-full pl-10 py-3 border-gray-300 focus:ring-custom focus:border-custom"
                                placeholder="Ingrese su apellido"
                                maxlength="25" onkeypress="return sololetras(event)" onpaste="return false">                        
                            </div>
                    </div>
                    <!-- end Apellido =================================== -->

                    <!-- start Documento de identidad =================================== -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2" for="dni">Documento de Identidad *</label>
                        <div class="relative">
                            <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-500">                                
                                <i class="fas fa-id-card"></i>
                            </span>
                            <input type="text" id="dni" name="dni" required
                                class="!rounded-button block w-full pl-10 py-3 border-gray-300 focus:ring-custom focus:border-custom"
                                placeholder="Ingrese su número de documento"
                                maxlength="8" onkeypress="return solonumeros(event)" onpaste="return false">                        
                            </div>
                    </div>
                    <!-- end Documento de identidad =================================== -->
                    
                    <!-- start Domicilio =================================== -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2" for="domicilio">Domicilio *</label>
                        <div class="relative">
                            <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-500">                                
                                <i class="fas fa-home"></i>
                            </span>
                            <input type="text" id="domicilio" name="domicilio" required
                            class="!rounded-button block w-full pl-10 py-3 border-gray-300 focus:ring-custom focus:border-custom"
                            placeholder="Ingrese su dirección"
                            maxlength="50">                        
                        </div>
                    </div>
                    <!-- end Domicilio =================================== -->
                    
                    <!-- start Correo =================================== -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2" for="email">Correo Electrónico *</label>
                        <div class="relative">
                            <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-500">                                
                                <i class="fas fa-envelope"></i>
                            </span>
                            <input type="email" id="email" name="email" required
                            class="!rounded-button block w-full pl-10 py-3 border-gray-300 focus:ring-custom focus:border-custom"
                            placeholder="ejemplo@correo.com"
                            maxlength="50">                        
                        </div>
                    </div>
                    <!-- end Correo =================================== -->
                    
                    <!-- start Num =================================== -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2" for="telefono">Número de Teléfono *</label>
                        <div class="relative">
                            <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-500">                                
                                <i class="fas fa-phone"></i>
                            </span>
                            <input type="tel" id="telefono" name="telefono" required
                            class="!rounded-button block w-full pl-10 py-3 border-gray-300 focus:ring-custom focus:border-custom"
                            placeholder="+51 XXX XXX XXX"
                            maxlength="9" onkeypress="return solonumeros(event)" onpaste="return false">                        
                        </div>
                    </div>
                </div>
                <!-- end Num =================================== -->
                
                <!-- start descripcion =================================== -->
                <div class="mb-8">
                    <label class="block text-sm font-medium text-gray-700 mb-2" for="reclamo">                        
                        Descripción de la Reclamación *
                    </label>
                    <div class="relative">                        
                        <textarea id="reclamo" name="reclamo" rows="6" required
                        class="!rounded-button block w-full py-3 px-4 border-gray-300 focus:ring-custom focus:border-custom"
                        placeholder="Describa detalladamente su reclamación..."
                        maxlength="200"></textarea>
                        <div class="absolute bottom-3 right-3 text-sm text-gray-500">
                            <span id="charCount">0</span>/1000
                        </div>
                    </div>
                </div>
                <!-- end descripcion =================================== -->

                <div class="mb-8">                    
                    <label class="block text-sm font-medium text-gray-700 mb-2" for="file_1">Adjuntar Imágenes</label>
                    <div class="mt-2 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed !rounded-button">                        
                        <div class="space-y-1 text-center">
                            <i class="fas fa-cloud-upload-alt text-4xl text-gray-400 mb-4"></i>
                            <div class="flex text-sm text-gray-600">
                                <label for="file-upload"                                    
                                    class="relative cursor-pointer bg-white !rounded-button font-medium text-custom hover:text-custom focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-custom">                                    
                                    <span>Cargar archivos</span>
                                    <input id="file_1" name="filename" type="file" class="sr-only" onchange="updateFileName()" multiple accept="image/*,.pdf">                                
                                </label>
                                <p class="pl-1">o arrastre y suelte</p>
                            </div>                            
                            <p class="text-xs text-gray-500">PNG, JPG, PDF hasta 10MB</p>
                        </div>
                    </div>                
                </div>

                <div class="flex justify-end space-x-4">
                    <button type="reset"
                        class="!rounded-button px-6 py-3 bg-gray-100 text-gray-700 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">                        
                        <i class="fas fa-times mr-2"></i>
                        Borrar Formulario
                    </button>                    <button type="submit"
                        class="!rounded-button px-6 py-3 bg-custom text-white hover:bg-custom/90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-custom">                        
                        <i class="fas fa-paper-plane mr-2"></i>
                        Enviar Reclamación
                    </button>                
                </div>
            </form>
        </div>
    </div>
    <!-- start icon whatsapp -->
    <?php
    include "./includes/templates/whastapp.php";
    ?>
    <!-- end icon whatsapp -->

    <script>
        const textarea = document.getElementById('reclamo');
        const charCount = document.getElementById('charCount');
        
        textarea.addEventListener('input', function() {
            const count = this.value.length;
            charCount.textContent = count;
            if (count > 1000) {
                this.value = this.value.substring(0, 1000);
                charCount.textContent = 1000;
            }
        });

        const fileUpload = document.getElementById('file_1');
        const dropZone = document.querySelector('.border-dashed');

        ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
            dropZone.addEventListener(eventName, preventDefaults, false);
        });

        function preventDefaults (e) {
            e.preventDefault();
            e.stopPropagation();
        }

        ['dragenter', 'dragover'].forEach(eventName => {
            dropZone.addEventListener(eventName, highlight, false);
        });

        ['dragleave', 'drop'].forEach(eventName => {
            dropZone.addEventListener(eventName, unhighlight, false);
        });

        function highlight(e) {
            dropZone.classList.add('border-custom');
        }

        function unhighlight(e) {
            dropZone.classList.remove('border-custom');
        }

        dropZone.addEventListener('drop', handleDrop, false);

        function handleDrop(e) {
            const dt = e.dataTransfer;
            const files = dt.files;
            handleFiles(files);
        }

        function handleFiles(files) {
            files = [...files];
            files.forEach(uploadFile);
        }

        function uploadFile(file) {
            if (!file.type.match('image.*') && file.type !== 'application/pdf') {
                alert('Solo se permiten archivos de imagen y PDF');
                return;
            }
            if (file.size > 10 * 1024 * 1024) {
                alert('El archivo es demasiado grande. El tamaño máximo es 10MB');
                return;
            }
            // Aquí iría la lógica para subir el archivo
            console.log('Archivo listo para subir:', file.name);
        }
    </script></body>
</html>