<?php

    session_start();

    if(isset($_SESSION['nombre_usuario'])){
        header("location: dashboard.php");
    }

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Proyectos</title>
    <link rel="preload" href="css/normalize.css" as="style">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="preload" href="css/style.css" as="style">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100..700;1,100..700&family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
</head>

<body>
    
    <main>
        <!--titulo principal-->
        <section>
            <h2 class="titulo-secuandario">Plataforma de Gestión de Proyectos</h2>
            <p class="titulo-secuandario">Inicia sesión para empezar a gestionar tus proyectos.</p>
            <!-- formulario de inicio de sesión -->
            <div class="usuario">
                <form action="login_usuario_be.php" method="POST">
                <h3 class="titulo-usuario">Iniciar Sesión</h3>
                    <label class="indicadores" for="username">Nombre de Usuario:</label>
                    <input class="entradas" type="text" id="username" name="nombre_usuario" placeholder="Usuario" required>
                    <label class="indicadores" for="password">Contraseña:</label>
                    <input class="entradas" type="password" id="password" name="contraseña" placeholder="Contraseña" required>
                    <div class="contenedor">
                        <button class="boton" type="submit">Iniciar Sesión</button>

                    </div>
                    
                </form>
                <div class="registrarse">
                    <a href="registro.php" >Registrarse</a>
                </div>
                

            </div>
        
            
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Gestión de Proyectos</p>
    </footer>
  
</body>
</html>
