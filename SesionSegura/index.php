<?php
    session_start();

    if(isset($_POST['enviar'])){
        if(empty($_POST['usuario']) || empty($_POST['clave'])) {
            $mensaje = 'Debes llenar todos los campos';
        }
        elseif ($_POST['usuario'] == "test" && $_POST['clave'] == "test") {
            $_SESSION['usuario'] = $_POST['usuario'];
            $_SESSION['clave'] = $_POST['clave'];
            header('Location: segura.php');
            exit();
        } else {
            $mensaje = 'Usuario o contraseña incorrectos';
        }
    }
?>

<html>
    <head>
        <title>Sesiones en PHP</title>
        <meta http-equiv="Content-Type" content="text/html; charset-iso-8859">
    </head>
    <body>
        <table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
                <td><?php if(isset($mensaje)) { echo $mensaje; } ?></td>
                <td rowspan="2">
                    <form name="login" method="post" action="index.php">
                        <table width="250" border="0" align="center" cellpadding="0" cellspacing="0">
                            <tr> 
                                <td>Usuario:</td>
                                <td><input name="usuario" type="text" id="usuario"></td>
                            </tr>
                            <tr> 
                                <td>Contraseña:</td>
                                <td><input name="clave" type="password" id="clave"></td>
                            </tr>   
                            <tr align="center">
                                <td colspan="2"><input name="enviar" type="submit" id="enviar" value="Enviar"></td>
                            </tr>
                        </table>
                    </form>
                </td>
            </tr>
            <tr>
                <td><a href="segura.php">Página Segura</a></td>
            </tr>
        </table>
    </body> 
</html>
