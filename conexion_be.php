<?php

    $conexion = mysqli_connect("localhost", "root", "JDK_", "logi_register_db");

    if($conexion){
        echo 'conectado exitosamente';
    }else{
        echo 'no se ha podido conectar a la base de datos';
    }

?>