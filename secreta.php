<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css1/secreta.css"> <!-- Agregamos el archivo CSS -->
    <title>Página Protegida</title>
    <script src="https://kit.fontawesome.com/283335a286.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400&display=swap" rel="stylesheet">
</head>
<body>
<?php
session_start();

if (empty($_SESSION["usuario"])) {
    header("Location: formulario.html");
    exit();
}
?>

<div class="container">
    <div class="message">
        <?php echo "BIENVENIDO A NUESTRA WEB"; ?>
    </div>

    <p class="loggedin-message">
        Hola, solo pueden acceder los usuarios logueados.
    </p>
    
    <a href="index1.php"><button class="btn">Subir imagenes</button></a>
    <a href="logout.php" class="logout-link"><button class="btn1">Cerrar sesión</button></a>
</div>

<div class="container">
    <div class="message">
        <?php echo "BIENVENIDO A NUESTRA WEB"; ?>
    </div>

    <p class="loggedin-message">
        Hola, solo pueden acceder los usuarios logueados.
    </p>
    
    <a href="videos/index.php"><button class="btn">Subir videos</button></a>
    <a href="logout.php" class="logout-link"><button class="btn1">Cerrar sesión</button></a>
</div>

<div class="pie-pagina ">
    <div class="contenedor-piepagina contenedor">
        <div class="info">
            <h3>Dirección</h3>
            <p>23. Funza, Cundinamarca 75012</p>
        </div>
        <div class="info">
            <h3>Días especiales</h3>
            <p>Sabados y Jueves 7am - 11pm</p>
            <p>+3123410921</p>
        </div>
        <div class="info">
            <h3>Horarios</h3>
            <p>Lunes - Domingo 7am - 11pm</p>
            <div class="redes-sociales redes-pie">
                <a href="https://www.facebook.com/?locale=es_LA"><i class="fab fa-facebook-square"></i></a>
                <a href="https://twitter.com/?lang=es"><i class="fab fa-twitter-square"></i></a>
                <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <div class="info">
            <h3>Noticias</h3>
            <p>Suscribete para recibir más noticias</p>
            <form action="https://formsubmit.co/danielagalan1517@gmail.com" method="POST">
            <input type="email" name="email" id="phone" placeholder="Tu correo">
            <input type="submit" class="btn btn-verde" value="Suscribirse">
            <div class="image3">
                <img data-src="/assets/img/1deedb33-a150-419d-9bb1-c2b8e307f573-removebg-preview.png" alt="">
            </div>
        </form>
        </div>
    </div>
 </div>
    <footer class="footer">
        <p>Todos los derechos reservados &copy; 2023 Academia de porteros funza</p>

    </footer>

</body>
</html>


