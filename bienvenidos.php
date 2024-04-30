<?php

    session_start();

    if(!isset($_SESSION['nombre_usuario'])){
        echo'
            <script>
                alert("Por favor iniciar sesion");
                window.location = "index.php";
            </script>
        ';
        session_destroy();
        die(); 
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tickets</title>
</head>
<body>
    <h1>Bienvenido</h1>
</body>
</html>

<a href="cerrar_sesion.php">Cerrar sesion</a>