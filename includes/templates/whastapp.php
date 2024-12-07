<?php
// Datos
$telefono = '?'; //falta NUMERO ❗❗❗
$mensaje = 'Hola! Quisiera más información sobre Centro de Abitraje.';

// Codificar URL
$encodedTelefono = urlencode($telefono);
$encodedMensaje = urlencode($mensaje);

// Construir el enlace
$whatsappLink = "https://api.whatsapp.com/send?phone=$encodedTelefono&text=$encodedMensaje";

// Imprimir o utilizar el enlace

?>

<a href="<?php echo $whatsappLink ?>" 
target="_blank" rel="noopener noreferrer"
class="fixed bottom-6 right-6 bg-[#25D366] text-white w-14 h-14 rounded-full flex items-center justify-center shadow-lg hover:bg-opacity-90 z-50">        
    <i class="fab fa-whatsapp text-2xl"></i>
</a>
