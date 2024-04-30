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
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú de Inicio</title>
    <link rel="stylesheet" href="css/dashboard.css"> 
</head>
<body>
    <header>
        <div class="header-content">
            <h1>Bienvenido <?php echo $_SESSION['nombre_usuario']; ?></h1>
            <p id="current-time"></p>
            <button onclick="logout()"><a href="cerrar_sesion.php">Cerrar sesion</a></button>
        </div>
    </header>

    <div class="container">
        <nav class="menu">
            <ul>
                <li><a href="#" onclick="showProjects()">Proyectos</a></li>
                <li><a href="#" onclick="showTickets()">Tickets</a></li>
            </ul>
        </nav>

        <main class="main-content" id="main-content">
        </main>

        <div class="project-details" id="project-details" style="display: none;">
            <h2>Detalles del Proyecto</h2>
            <div class="project-info">
                <p><strong>Nombre del Proyecto:</strong> Proyecto XYZ</p>
                <p><strong>Tiempo en el Proyecto:</strong> 10 días</p>
                <p><strong>Estado del Proyecto:</strong> En Proceso</p>
            </div>
            <div class="project-actions">
                <button onclick="exitProject()">Salir del Proyecto</button>
            </div>
            <div class="project-details" id="project-details" style="display: none;">
                <h2>Detalles del Proyecto</h2>
                <div class="project-info">
                    <p><strong>Nombre del Proyecto:</strong> Proyecto ABC</p>
                    <p><strong>Tiempo en el Proyecto:</strong> 15 días</p>
                    <p><strong>Estado del Proyecto:</strong> Finalizado</p>
                </div>
                <div class="project-actions">
                    <button onclick="exitProject()">Salir del Proyecto</button>
                </div>
            </div>
            
        </div>

        <div class="ticket-details" id="ticket-details" style="display: none;">
            <h2>Detalles del Ticket</h2>
            <div class="ticket-info">
                <p><strong>Nombre del Ticket:</strong> Ticket 1</p>
                <p><strong>Proyecto:</strong> Proyecto XYZ</p>
                <p><strong>Texto del Ticket:</strong></p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus tincidunt mauris id ex efficitur, a consectetur est rhoncus.</p>
                <p><strong>Estado:</strong> <span id="ticket-status">Activo</span></p>
            </div>
            <div class="ticket-actions">
                <button onclick="editTicket()">Editar</button>
                <button onclick="cancelTicket()">Cancelar</button>
            </div>
        </div>
        <div class="ticket-details" id="ticket-details" style="display: none;">
            <h2>Detalles del Ticket</h2>
            <div class="ticket-info">
                <p><strong>Nombre del Ticket:</strong> Ticket 2</p>
                <p><strong>Proyecto:</strong> Proyecto ABC</p>
                <p><strong>Texto del Ticket:</strong></p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus tincidunt mauris id ex efficitur, a consectetur est rhoncus.</p>
                <p><strong>Estado:</strong> <span id="ticket-status">Activo</span></p>
            </div>
            <div class="ticket-actions">
                <button onclick="editTicket()">Editar</button>
                <button onclick="cancelTicket()">Cancelar</button>
            </div>
        </div>
                
    </div>

    <script src="js/dashboard.js"></script> 
</body>
</html>
