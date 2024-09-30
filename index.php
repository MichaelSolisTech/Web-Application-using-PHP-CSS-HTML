<?php

session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['usuario']) || !isset($_SESSION['clave'])) {
    // Si el usuario no ha iniciado sesión, redirigir a login.php
    header('Location: login.php');
    exit();
}
// Comprobar si existe la cookie
if (!isset($_COOKIE["idiomaUsuario"])){
    // Si no existe, se determina como página destinada a elegir idioma
    $pagina = "espanol/index.php";
} elseif ($_COOKIE["idiomaUsuario"] == "sp"){
    // si existe la cookie y el valor de la variable es "sp"  
    // se irá a la página en español.
    $pagina = "Espanol/index.php";
} elseif ($_COOKIE["idiomaUsuario"] == "fr"){
    $pagina ="French/index.php";
}
elseif  ($_COOKIE["idiomaUsuario"] == "en"){
    // si el valor no es "sp" se irá a la página en inglés
    $pagina = "English/index.php";
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<script language="javascript" type="text/javascript">
    // Se redirige a la página seleccionada.
    location.href = "<?php echo $pagina; ?>";
</script>
</html>