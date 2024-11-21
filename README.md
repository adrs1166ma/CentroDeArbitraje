# Centro de Arbitraje CEAR - Cámara Nacional de Comercio del Perú

Este proyecto es la página web oficial del **Centro de Arbitraje CEAR** de la **Cámara Nacional de Comercio del Perú**. El sitio tiene como objetivo ofrecer soluciones especializadas en arbitraje comercial y estatal, garantizando imparcialidad, eficiencia y transparencia.

## Descripción del Proyecto

La página web del **Centro de Arbitraje CEAR** está diseñada para proporcionar información sobre los servicios de arbitraje ofrecidos, facilitar el acceso a la información de contacto, y brindar a los usuarios una plataforma para conocer los procedimientos de arbitraje.

## Descripción Técnica

El proyecto utiliza **Node.js** como entorno de ejecución del servidor y **Sass** para la gestión de estilos. Además, el flujo de trabajo de desarrollo está automatizado con **Gulp**, que se encarga de tareas como la compilación de **SCSS** a **CSS**, optimización de imágenes y minificación de archivos.

## Características del Servicio

✅ Soluciones especializadas en controversias contractuales y comerciales.

✅ Implementación de altos estándares de probidad y transparencia en los procesos de arbitraje.

✅ Acceso fácil a información sobre procedimientos y contacto directo con expertos en arbitraje.

## Características Técnicas del Proyecto

✅ Optimización de imágenes para mejorar el rendimiento del sitio.

✅ Compilación de **Sass a CSS** para la gestión eficiente de estilos.

✅ Automatización de tareas de desarrollo mediante **Gulp**, como la minificación de archivos y la conversión de imágenes a **formato WebP**.

## Requisitos previos

Asegúrate de tener instalados los siguientes programas:

[![NodeJS](https://img.shields.io/badge/node.js-6DA55F?style=for-the-badge&logo=node.js&logoColor=white)](https://nodejs.org/) 

**(versión recomendada: 14.x o superior)**

[![Gulp](https://img.shields.io/badge/GULP-%23CF4647.svg?style=for-the-badge&logo=gulp&logoColor=white)](https://gulpjs.com/) 

**Si no lo tienes instalado globalmente, puedes instalarlo ejecutando:**

  ```bash
  npm install --save-dev gulp
  ```

## Instalación

Sigue estos pasos para configurar el proyecto localmente:

1. Clona este repositorio:

    ```bash
    git clone https://github.com/adrs1166ma/centro-arbitraje-peru.git
    ```

2. Navega a la carpeta del proyecto:

    ```bash
    cd centro-arbitraje-peru
    ```

3. Instala las dependencias necesarias:

    `npm install` o `npm i`

## Scripts disponibles

- **`npm run dev`**: Ejecuta Gulp para compilar Sass, optimizar imágenes, minificar CSS y JS, y observar cambios en los archivos.

## Dependencias de desarrollo

El proyecto utiliza las siguientes dependencias para el entorno de desarrollo:

- **gulp**: Sistema de automatización de tareas.
- **gulp-sass**: Compilador de Sass.
- **gulp-autoprefixer**: Añade prefijos automáticamente a las propiedades CSS para soporte cross-browser.
- **gulp-concat**: Une múltiples archivos en uno solo.
- **gulp-imagemin**: Optimiza las imágenes.
- **gulp-webp**: Convierte imágenes a formato WebP.
- **gulp-cache**: Cachea tareas optimizadas para acelerar el proceso.
- **gulp-clean**: Elimina archivos generados previamente.
- **gulp-sourcemaps**: Genera mapas de fuente para la depuración.
- **gulp-terser-js**: Minifica archivos JavaScript.
- **cssnano**: Minifica el CSS.

## Licencia

Este proyecto está bajo la licencia **ISC**.

## Automatización con Gulp

El proyecto utiliza Gulp para automatizar tareas como la compilación de Sass, minificación de archivos JavaScript, optimización de imágenes, y conversión de imágenes a WebP. Estas tareas están definidas en el archivo `gulpfile.js`.

### Tareas principales de Gulp:

- **`css`**: Compila archivos SCSS a CSS, añade prefijos automáticos y minifica el CSS resultante.
- **`javascript`**: Combina y minifica archivos JavaScript.
- **`imagenes`**: Optimiza imágenes y las guarda en la carpeta `build/img`.
- **`versionWebp`**: Convierte las imágenes a formato WebP.
- **`watchArchivos`**: Observa cambios en archivos SCSS, JS e imágenes y ejecuta las tareas correspondientes automáticamente.

### Comando para iniciar Gulp:

```bash
npm run dev
```

## Instrucciones para edicion de estilos SCSS
- Dentro de la carpeta `scr` / `scss` / ..
- Estaran todos los archivos scss listos para ser modificados
- `base`, para los estilos globales o mixins
- `internas`, para los que estan fuera del index
- `layout`, para cada seccion 
- Recordar que cada archivo `.scss` agregado se debe agregar en el app.scss
- por ejemplo: @import 'layout/nuevoArchivo'; 

## Autor

- **Renzo Felix** - *Product Owner*
- **Anderson Mancilla** - *Scrum Master*
- **Jhean Ventocilla** - *Developer*


