# Centro de Arbitraje CEAR - Cámara Nacional de Comercio del Perú

Este proyecto es la página web oficial del **Centro de Arbitraje CEAR** de la **Cámara Nacional de Comercio del Perú**. El sitio tiene como objetivo ofrecer soluciones especializadas en arbitraje comercial y estatal, garantizando imparcialidad, eficiencia y transparencia.

## Descripción

La página web del Centro de Arbitraje CEAR está diseñada para proporcionar información sobre los servicios de arbitraje ofrecidos, así como para facilitar el acceso a la información de contacto y a los procedimientos de arbitraje. El proyecto utiliza **Node.js** y **Sass** en su desarrollo, y el flujo de trabajo de desarrollo está gestionado con **Gulp**.

## Características

- Soluciones especializadas en controversias contractuales y comerciales
- Implementación de altos estándares de probidad y transparencia
- Optimización de imágenes y recursos CSS
- Compilación de Sass y automatización de tareas con Gulp

## Requisitos previos

Asegúrate de tener instalados los siguientes programas:

[![NodeJS](https://img.shields.io/badge/node.js-6DA55F?style=for-the-badge&logo=node.js&logoColor=white)](https://nodejs.org/) **(versión recomendada: 14.x o superior)**

[![Gulp](https://img.shields.io/badge/GULP-%23CF4647.svg?style=for-the-badge&logo=gulp&logoColor=white)](https://gulpjs.com/) **Si no lo tienes instalado globalmente, puedes instalarlo ejecutando:**

  ```bash
  npm install --global gulp-cli
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


## Autor

- **Renzo Felix** - *Product Owner*
- **Anderson Mancilla** - *Scrum Master*
- **Jhean Ventocilla** - *Developer*


