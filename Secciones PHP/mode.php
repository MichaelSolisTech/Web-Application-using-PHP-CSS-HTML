<?php
session_start();

if ($_GET['mode'] == 'dark') {
    // Modo oscuro
    $_SESSION['colorfondo'] = 'black';
    $_SESSION['colortexto'] = 'white';
} else {
    // Modo claro
    $_SESSION['colorfondo'] = 'white';
    $_SESSION['colortexto'] = 'black';
}

// Redirigir al usuario a la página de donde vino
header('Location: ' . $_SERVER['HTTP_REFERER']);
exit();
?>
