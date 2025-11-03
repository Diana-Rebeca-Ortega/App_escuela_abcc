<?php

    //var_dump($_GET['nc']);

    //echo "Eliminar alumno"  . $_GET['nc'] ;

    include('alumno_dao.php');
    $alumnoDAO = new AlumnoDAO();
    if($alumnoDAO->eliminarAlumno($_GET['nc'])){
        //echo "Registro ELIMINADO correctamente";
        header("location: ../pages/bajas_cambios.php");
    }else{
        echo "ERROR en la eliminacion";
    }

?>