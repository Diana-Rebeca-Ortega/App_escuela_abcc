<?php

include_once('../database/conexion_bd_escuela.php')
 
$con = new ConexioBDEscuela();
$conexion = $con->getConexion();

if($_SERVER['REQUEST_METHOD']=='GET'){
    $cadenaJSON = file_get_contents('php://input');
    if(!$cadenaJSON ==false){
        echo "No hay contenido JSON ";
    }
    else{
        $consulta_filtros = json_decode($cadenaJSON, true);
        $filtro_pa = $consulta_filtros['pa'];
        $sql = 'SELECT * FROM alumnos ';
        $res = mysqli_query($conexion, $sql);
        $respuesta ['alumnos'] = array ();  

        if ($res){
            while($fila = mysqli_fetch_assoc($res)){
                $alumno = array ();
                $alumno['nc'] = $fila['Num_Control'];
                $alumno['n'] = $fila['Nombre'];
                $alumno['pa'] = $fila['Primer_Ap'];
                $alumno['sa'] = $fila['Segundo_Ap'];
                $alumno['f'] = $fila['Fecha_Nac'];
                $alumno['s'] = $fila['Semestre'];
                $alumno['c'] = $fila['Carrera'];

                array_push($respuesta['alumnos', $alumno]);
        }
        $respuesta['consulta']= "exito";
        else
            $respuesta['consulta']= "error en la insrecion";

        $respuestaJSON = json_encode($respuesta);
        echo $respuestaJSON;
        
    }
}

?>