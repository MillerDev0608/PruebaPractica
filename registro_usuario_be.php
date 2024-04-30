<?php

    include 'conexion_be.php';

    $nombre_completo = $_POST['nombre_completo'];
    $correo_electronico = $_POST['correa_electronico'];
    $nombre_usuario = $_POST['nombre_usuario'];
    $contraseña = $_POST['contraseña'];

    $query = "INSERT INTO usuarios(nombre_completo, correa_electronico, nombre_usuario, contraseña)
    VALUES ('$nombre_completo', '$correo_electronico', '$nombre_usuario', '$contraseña')";

    $verificar_usuario = mysqli_query($conexion,"SELECT * FROM usuarios WHERE nombre_usuario = '$nombre_usuario'");

    if(mysqli_num_rows($verificar_usuario) > 0){
        echo'
            <script> 
                alert("Este usuario ya existe, por favor ingresar otro");
                window.location = "registro.php"
            </script>
        ';
        exit();
    }

    $verificar_correo = mysqli_query($conexion,"SELECT * FROM usuarios WHERE correa_electronico = '$correo_electronico'");

    if(mysqli_num_rows($verificar_correo) > 0){
        echo'
            <script> 
                alert("Este correo ya existe, por favor ingresar otro");
                window.location = "registro.php"
            </script>
        ';
        exit();
    }

    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo'
        <script>
            alert("Usuario almacenado exitosamente");
            window.location = "index.php";
            </script>
        ';
    }

?>
