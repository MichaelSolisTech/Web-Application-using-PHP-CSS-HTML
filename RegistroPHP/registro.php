<?php
session_start();

if (isset($_POST['usuario']) && !empty($_POST['usuario']) && isset($_POST['clave']) && !empty($_POST['clave'])) {
    
    // Variables que contienen los valores introducidos y captados mediante el método POST
    $usuarioReg = $_POST['usuario'];
    $claveReg = $_POST['clave']; // Deberías cifrar la contraseña aquí

    // Declaración de las variables para la conexión con la BD
    $db = "Registros"; // Nombre de la BD
    $host = "localhost"; // Nombre del servidor
    $pw = ""; // Contraseña
    $user = "root"; // Usuario

    // Conexión con la BD
    $con = mysqli_connect($host, $user, $pw, $db) or die("No se pudo autenticar con la BD");

    // Prepara la llamada al procedimiento almacenado
    if ($stmt = $con->prepare("CALL RegisterUser(?, ?)")) {
        // Pasa los parámetros a la sentencia preparada
        $stmt->bind_param('ss', $usuarioReg, $claveReg);

        // Ejecuta la sentencia preparada
        if ($stmt->execute()) {
            $_SESSION['mensaje'] = "Los datos han sido registrados, por favor ingrésalos para logearte";
            header("Location: ../login.php");
            exit();
        } else {
            echo "Error: " . $stmt->error;
        }
    } else {
        echo "Error: " . $con->error;
    }

    $con->close();
} else {
    echo "Debe llenar todos los campos";
}
?>
