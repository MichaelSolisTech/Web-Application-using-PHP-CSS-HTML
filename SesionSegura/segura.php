<?php
    session_start();

    if(!empty($_SESSION['usuario'])) {
        echo 'Has iniciado sesión como: '.$_SESSION['usuario'].'<br>';
        echo 'Haz logrado el acceso a una página segura';
        echo '<br><br><a href="logout.php">CERRAR SESION</a>';
    }
    else {
        echo 'No estas logueado <br>';
        echo 'Esta página es restringida!';
    }
?>