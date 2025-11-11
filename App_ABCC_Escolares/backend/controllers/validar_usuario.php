<?php

    $u = $_POST['usuario'];
    $p = $_POST['password'];

    // 1. Opcional: Comenta o elimina toda la conexión a la base de datos
    // include_once('../../database/conexion_bd_usuarios.php');
    // $con = new ConexionBDUsuarios();
    // $conexion = $con->getConexion();

    // if($conexion){
    //     $u_cifrado = sha1($u);
    //     $p_cifrado = sha1($p);
    //     $sql = "SELECT * FROM usuarios WHERE Usuario='$u_cifrado' AND Password='$p_cifrado'";
    //     $res = mysqli_query($conexion, $sql);
    //
    //     if(mysqli_num_rows($res)==1){
    //         // ... código de éxito
    //     }else
    //         echo "Usuario NO encontrado";
    // }

    // 2. Bloque de Bypass: Simplemente inicia la sesión y redirige
    // La condición de éxito se cumple SIEMPRE.
    if(true){ // La condición siempre será verdadera
        session_start();
        $_SESSION['usuario_autenticado'] = true;
        $_SESSION['nombre_usuario'] = $u; // Usa el nombre ingresado en el formulario

        header('location:../pages/menu_principal.php');
        exit(); // Asegura que el script se detenga después de la redirección
    }
?>