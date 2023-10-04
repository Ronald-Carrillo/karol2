<?php
$usuario_correcto = "daniela";
$palabra_secreta_correcta = "123";

$usuario = $_POST["usuario"];
$palabra_secreta = $_POST["palabra_secreta"];

if ($usuario === $usuario_correcto && $palabra_secreta === $palabra_secreta_correcta) {
    session_start();
    $_SESSION["usuario"] = $usuario;
    header("Location: secreta.php");
} else {
    $mensaje_error = "El usuario o la contraseña son incorrectos";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Respuesta de Inicio de Sesión</title>
    <link rel="stylesheet" href="css1/est.css">
</head>
<body>
    <div class="mensaje">
        <?php
        if (isset($mensaje_error)) {
            echo $mensaje_error;
        }
        ?>
    </div>
</body>
</html>
