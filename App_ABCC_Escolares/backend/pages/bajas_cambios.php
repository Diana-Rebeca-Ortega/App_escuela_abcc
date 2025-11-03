<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar/Eliminar </title>



</head>

<body>

    <?php require_once('menu_principal.php');  ?>

    <h3>Modificar/Eliminar Alumnos </h3>

    <?php
        include('../controllers/alumno_dao.php');
        $alumnoDAO = new AlumnoDAO();
        $datos = $alumnoDAO->mostrarAlumnos('x');
        //var_dump($datos);

        if(mysqli_num_rows($datos)==0){
            echo "No se encontraron registros";
        }else{
            echo '<div class="container">';
            echo '<table class="table">';
            echo '<thead>';
                echo '<tr>';
                    echo '<th scope="col">#</th>';
                    echo '<th scope="col">Num. Control</th>';
                   echo ' <th scope="col">Nombre</th>';
                   echo '<th scope="col">Primer Ap.</th>';
                    echo '<th scope="col">Segundo Ap.</th>';
                    echo '<th scope="col">ACCIONES</th>';
            echo ' </tr>';
            echo '</thead>';
            echo '<tbody>';

            while($fila = mysqli_fetch_assoc($datos)){
                printf("<tr> <td> 0 </td>
                            <td>".$fila['Num_Control']."</td>
                            <td>".$fila['Nombre']."</td>
                            <td>".$fila['Primer_Ap']."</td>
                            <td>".$fila['Segundo_Ap']."</td>

                            <td> 
                                <a href=\"procesar_detalle.php\" > Detalle </a>  
                                <a href=\"procesar_cambio.php\" > Editar </a> 
                                <a href=\"../controllers/procesar_baja.php?nc=%s\" > Eliminar </a>   
                            </td>
                ", $fila['Num_Control']);
            }

            echo '</tbody>';
            echo '</table>';
            echo '</div>';
        }

    ?>

    
    

</body>

</html>