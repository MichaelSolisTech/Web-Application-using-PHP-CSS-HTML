<?php 
// Se graba una cookie con una validez de 24 horas.
setcookie("idiomaUsuario", $_GET["idiomaUsuario"], time() + 2629743); // 2629743 es un mes.

$idiomaUsuario = $_GET["idiomaUsuario"];
// Redirige según la opción de idioma
if ($idiomaUsuario == "en") {
    header("Location: english/index.php");
} else if ($idiomaUsuario == "sp") {
    header("Location: espanol/index.php");
} else if ($idiomaUsuario == "fr") {
    header("Location: french/index.php");
} else {
    // Idioma predeterminado
    header("Location: espanol/index.php");
}
?>
