<?php

    $u = $_POST['usuario'];
    $p = $_POST['password'];


    //verificar si existen en la BD de usuarios
    include_once('../../database/conexion_bd_usuarios.php');
    $con = new ConexionBDUsuarios();
    $conexion = $con->getConexion();

    if($conexion){

        //CIFRADO !!!!!

        $u_cifrado = sha1($u);
        $p_cifrado = sha1($p);

        //$sql = "SELECT * FROM usuarios WHERE Usuario='$u' AND Password='$p'";
        $sql = "SELECT * FROM usuarios WHERE Usuario='$u_cifrado' AND Password='$p_cifrado'";
        $res = mysqli_query($conexion, $sql);

        if(mysqli_num_rows($res)==1){
            session_start();
            $_SESSION['usuario_autenticado'] = true;
            $_SESSION['nombre_usuario'] = $u; //Luke

            header('location:../pages/menu_principal.php');
        }else
            echo "Usuario NO encontrado";

    }


?>