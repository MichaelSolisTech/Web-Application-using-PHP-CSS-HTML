<?php
if(session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

if(isset($_SESSION['contador'])){
    // Incrementar el contador
    $_SESSION['contador']++;
    $mensaje = 'Número de visitas: ' . $_SESSION['contador'];
} else {
    // Establecer el contador inicial en 1
    $_SESSION['contador'] = 1;
    $mensaje = 'Bienvenido, Usted es la visita número: 1';
}
?>
