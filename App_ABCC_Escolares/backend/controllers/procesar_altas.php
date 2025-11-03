<?php

   include_once('alumno_dao.php');

   $alumnoDAO = new AlumnoDAO();

    $nc = $_POST['caja_num_control'];
    $n = $_POST['caja_nombre'];
    $pa = $_POST['caja_primer_ap'];
    $sa = $_POST['caja_segundo_ap'];
    $fc = $_POST['caja_fecha_nac'];
    $s = $_POST['caja_semestre'];
    $c = $_POST['caja_carrera'];


    //---------------VALIDACIONES DE DATOS
    $datos_correctos = false;
    /*  var_dump($nc);
    no vacios
    solo numeros
    */
    if(isset($nc)&& !empty($nc) && is_numeric($nc))
        $datos_correctos=true;

    //  var_dump($n);

    if(isset($n)&& !empty($n) && ctype_alpha($n))
        $datos_correctos=true;
    //  var_dump($pa);
    //  var_dump($sa);
    //  var_dump($fc);
    //  var_dump($s);
    //  var_dump($c);
session_start();
    if($datos_correctos){
        $res = $alumnoDAO->agregarAlumno($nc, $n, $pa, $sa, $fc, $s, $c);

        if($res){
            //echo "ISC casi inmortal";
            //el mensaje sale verde o rojo... no olvidar 
            $_SESSION['inserccion correcta']=true;
            header('location:../pages/formulario_altas.php');
        }else{

            
      $_SESSION['inserccion correcta']=false;
            echo "Mejor me dedico a las redes";
        }
        

    }else{
        $_SESSION['error_validacion']=true;
        $_SESSION['nc']=$nc;
        $_SESSION['n']=$n;
        header('location:../pages/formulario_altas.php');
        echo "Error en la validacion de datos";
    }
?>