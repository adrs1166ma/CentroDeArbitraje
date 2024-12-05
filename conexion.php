<?php
$host = 'localhost'; // Cambia esto si tu base de datos está en otro servidor
$user = 'arbitrajecncporg_admin';
$password = 'admin12387$234';
$database = 'arbitrajecncporg_reclamaciones';

$connection = mysqli_connect($host, $user, $password, $database);

if (!$connection) {
    die("Conexión fallida: " . mysqli_connect_error());
}
?>