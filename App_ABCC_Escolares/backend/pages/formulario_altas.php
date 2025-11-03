<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Formulario ALTAS
    </title>
</head>

<body>

    <?php require_once('menu_principal.php');  ?>

    <div class="container">
        <form action="../controllers/procesar_altas.php" method="POST" >
            <div class="mb-3">
                <label for="caja_num_control" class="form-label">Num. Control: </label>
                <input type="text" class="form-control" id="caja_num_control" name="caja_num_control">
            </div>
            <div class="mb-3">
                <label for="caja_nombre" class="form-label">Nombre: </label>
                <input type="text" class="form-control" id="caja_nombre"
                    name="caja_nombre">
            </div>
            <div class="mb-3">
                <label for="caja_primer_ap" class="form-label">Primer Ap: </label>
                <input type="text" class="form-control" id="caja_primer_ap" name="caja_primer_ap">
            </div>
            <div class="mb-3">
                <label for="caja_segundo_ap" class="form-label">Segundo Ap: </label>
                <input type="text" class="form-control" id="caja_segundo_ap" name="caja_segundo_ap">
            </div>
            <div class="mb-3">
                <label for="caja_fecha_nac" class="form-label">Fecha Nac: </label>
                <input type="text" class="form-control" id="caja_fecha_nac" name="caja_fecha_nac" value="2025/01/01">
            </div>
            <div class="mb-3">
                <label for="caja_semestre" class="form-label">Semestre: </label>
                <input type="text" class="form-control" id="caja_semestre"
                    name="caja_semestre">
            </div>
            <div class="mb-3">
                <label for="caja_carrera" class="form-label">Carrera: </label>
                <input type="text" class="form-control" id="caja_carrera"
                    name="caja_carrera">
            </div>


            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">AGREGAR ALUMNO</button>
        </form>
    </div>
</body>

</html>