<?php
// Elimina la cookie "idiomaUsuario"
setcookie("idiomaUsuario", '', time() - 3600, "/"); // Establece la fecha de expiración en el pasado

// Redirigir al usuario a 'index.php'
header('Location: espanol/index.php');
?>
