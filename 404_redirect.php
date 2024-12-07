<!DOCTYPE html><html lang="es"><head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Centro de Arbitraje</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet"/>
    <link href="https://ai-public.creatie.ai/gen_page/tailwind-custom.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/echarts/5.5.0/echarts.min.js"></script>
    <script src="https://cdn.tailwindcss.com/3.4.5?plugins=forms@0.5.7,typography@0.5.13,aspect-ratio@0.4.2,container-queries@0.1.1"></script>
    <script src="https://ai-public.creatie.ai/gen_page/tailwind-config.min.js" data-color="#000000" data-border-radius="medium"></script>
</head>
<body class="bg-gray-50 min-h-screen">
    <div class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="min-h-screen flex items-center justify-center px-4">
            <div class="text-center">
                <div class="mb-8">
                    <i class="fas fa-balance-scale text-8xl text-custom animate-bounce">

                    </i>
                </div>
                <h1 class="text-6xl font-bold text-gray-900 mb-4">404</h1>
                <h2 class="text-2xl font-semibold text-gray-700 mb-4">Página no encontrada</h2>
                <p class="text-gray-600 mb-8">Lo sentimos, la página que está buscando no existe o ha sido movida.</p>
                <div class="space-y-4">
                    <p class="text-gray-600">Puede intentar:</p>
                    <ul class="text-gray-600 mb-8">
                        <li>• Verificar la URL</li>
                        <li>• Regresar a la página anterior</li>
                        <li>• Ir a la página principal</li>
                    </ul>
                </div>
                <a href="/" class="inline-block bg-custom text-white px-8 py-3 rounded-lg font-semibold hover:bg-custom/90 transition-all"
                >
                    Volver al inicio
                </a>
            </div>
        </div>
    </div>
    
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
