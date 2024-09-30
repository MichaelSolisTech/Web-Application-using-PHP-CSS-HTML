<?php
session_start();
if(!empty($_SESSION['usuario'])){
    session_unset();
    session_destroy();
    // echo 'Sesion finalizada';
    header('Location: ../login.php');
}
?>