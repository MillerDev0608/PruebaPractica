<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <link rel="preload" href="css/normalize.css" as="style">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="preload" href="css/registro.css" as="style">
    <link rel="stylesheet" href="css/registro.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
                <!--titulo principal-->
        <h1 class="titulo-registro">Registro de Usuario</h1>
    </header>
    <main>
        <!--formulario de registro-->
        <section>
            <form action="registro_usuario_be.php" method="POST">
            <h2 class="titulo-registro">Formulario de Registro</h2>
            <div class="registro">
                <label class="indicadores" for="fullname">Nombre Completo:</label>
                <input class="entradas" type="text" id="fullname" name="nombre_completo" placeholder="Nombre Completo" required>
                <label class="indicadores" for="email">Correo Electrónico:</label>
                <input class="entradas" type="email" id="email" name="correa_electronico" placeholder="Correo Electrónico" required>
                <label class="indicadores" for="new-username">Nombre de Usuario:</label>
                <input class="entradas" type="text" id="new-username" name="nombre_usuario" placeholder="Nombre de Usuario" required>
                <label class="indicadores" for="new-password">Contraseña:</label>
                <input class="entradas" type="password" id="new-password" name="contraseña" placeholder="Contraseña" required>
                <div class="contenedor">
                    <button class="boton-registro" type="submit">Registrarse</button>
                </div>
            </form>
                <div class="volver">
                    <a href="index.html">Volver</a>
                </div>
                 
            </div>
        </section>
       
    </main>
    <footer>
        <p>&copy; 2024 Gestión de Proyectos</p>
    </footer>
    
</body>
</html>
