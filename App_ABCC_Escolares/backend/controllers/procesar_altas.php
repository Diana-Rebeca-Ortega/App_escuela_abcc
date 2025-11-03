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
    $datos_correctos = true;
    //  var_dump($nc);
    //  var_dump($n);
    //  var_dump($pa);
    //  var_dump($sa);
    //  var_dump($fc);
    //  var_dump($s);
    //  var_dump($c);

    if($datos_correctos){
        $res = $alumnoDAO->agregarAlumno($nc, $n, $pa, $sa, $fc, $s, $c);

        if($res){
            //echo "ISC casi inmortal";
            header('location:../pages/formulario_altas.php');
        }else
            echo "Mejor me dedico a las redes";

    }else{
        //depuracion 
        echo "Error en la validacion de datos";
    }
?>