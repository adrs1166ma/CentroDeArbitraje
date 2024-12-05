<?php
include "conexion.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validar y sanitizar datos
    $nombre = mysqli_real_escape_string($connection, $_POST['nombre']);
    $apellido = mysqli_real_escape_string($connection, $_POST['apellido']);
    $dni = mysqli_real_escape_string($connection, $_POST['dni']);
    $domicilio = mysqli_real_escape_string($connection, $_POST['domicilio']);
    $telefono = mysqli_real_escape_string($connection, $_POST['telefono']);
    $correo = mysqli_real_escape_string($connection, $_POST['email']);
    $reclamo = mysqli_real_escape_string($connection, $_POST['reclamo']);
    
    // Manejo de archivo
    $foto = $_FILES['filename']['name'];
    $destino = "Sin archivo";
    if (!empty($foto)) {
        $ruta = $_FILES['filename']['tmp_name'];
        $destino = "imagenes_documentos/" . basename($foto);
        
        $tipoArchivoPermitido = ['jpg', 'jpeg', 'png', 'pdf'];
        $tamañoMaximo = 2 * 1024 * 1024; // 2 MB
        $tipoArchivo = strtolower(pathinfo($destino, PATHINFO_EXTENSION));
        $tamañoArchivo = $_FILES['filename']['size'];

        if (in_array($tipoArchivo, $tipoArchivoPermitido) && $tamañoArchivo <= $tamañoMaximo) {
            if (!move_uploaded_file($ruta, $destino)) {
                $mensaje = "ERROR: No se pudo subir el archivo.";
                header("Location: index.html?mensaje=" . urlencode($mensaje));
                exit;
            }
        } else {
            $mensaje = "ERROR: Tipo de archivo no permitido o tamaño excedido.";
            header("Location: index.html?mensaje=" . urlencode($mensaje));
            exit;
        }
    }

    // Generar número aleatorio para la solicitud
    do {
        $aleatorio = rand(1, 99999999);
        $query = mysqli_query($connection, "SELECT * FROM arbitrajecncporg_reclamaciones WHERE solicitud ='$aleatorio'");
    } while (mysqli_num_rows($query) > 0);

    // Insertar en la base de datos
    $query_insert = mysqli_query($connection, "INSERT INTO arbitrajecncporg_reclamaciones(dni, nombres_completos, domicilio, telefono, correo, reclamo, solicitud, archivo) VALUES('$dni', '$nombre $apellido', '$domicilio', '$telefono', '$correo', '$reclamo', '$aleatorio', '$destino')");
    
    if ($query_insert) {
        $mensaje = "CORRECTO: Reclamo registrado.";
    } else {
        $mensaje = "ERROR: Reclamo no registrado.";
    }

    // Redirigir a index.html con el mensaje
    header("Location: index.html?mensaje=" . urlencode($mensaje));
    exit;
}
?>