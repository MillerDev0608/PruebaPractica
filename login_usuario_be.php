<?php

    session_start();

    include 'conexion_be.php';

    $nombre_usuario = $_POST['nombre_usuario'];
    $contraseña = $_POST['contraseña'];

    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE nombre_usuario = '$nombre_usuario' and contraseña = '$contraseña'");

    if(mysqli_num_rows($validar_login) > 0){
        $_SESSION['nombre_usuario'] = $nombre_usuario;
        header("location: dashboard.php");
    }else{
        echo '
        <script>
            alert("El usuario no existe");
            window.location = "index.php";
        </script>
        ';
        exit;
    }

?>