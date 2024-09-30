<?php
    // contador del numero de accesos a una pagina por session
    session_start();

    if(!isset($_SESSION['contar'])){
        $_SESSION['contar']=0;
    }
    else{
        $_SESSION['contar']++;
    }
?>

<html>
    <head>
        <title>Contador de Accesos</title>
    </head>
    <body>
        <p>
            <?php
            echo ("Hola, has accedido a esta pagina" .$_SESSION['contar']. "veces");
            ?>
        </p>
    </body>
</html>