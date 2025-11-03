<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Formulario ALTAS
    </title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<style>
        .alert {
            animation: fadeOut 2s forwards;
            animation-delay: 3s;
            background: red;
            color: white;
            padding: 100px;
            text-align: center;
        }

        @keyframes fadeOut {
            from {opacity: 1;}
            to {opacity: 0;}
        }
    </style>

</head>

<body>

     <?php require_once('menu_principal.php');  ?>

    <div class="container fade show" 
        style="display: <?php echo isset(($_SESSION['insercion_correcta'])) ? 'content' : 'none'  ?> ;">
        <div class="alert alert-success" role="alert">
           Alumno <u>agregado</u> con EXITO!
           <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
    

    <div class="container">
        <form action="../controllers/procesar_altas.php" method="POST" >
            <div class="mb-3">

                <label for="caja_num_control" class="form-label">Num. Control: </label>
                <input type="text" class="form-control" 
                id="caja_num_control" name="caja_num_control"
                placeholder="Solo numeros"

                value="<?php echo isset($_SESSION['nc'])? 
                $_SESSION['nc']:'' ?>";
                />
                <div style="color: <?php echo isset($_SESSION['nc'])? 
                'red':'black'
                $_SESSION['nc']:'' ?>">
                    <?php echo isset($_SESSION['nc'])?  'Debes ingesar solo numeros'.
                $_SESSION['nc']:'' ?>";
                   
                </div>
            </div>
            <div class="mb-3">
                <label for="caja_nombre" class="form-label">Nombre: </label>
                <input type="text" class="form-control" id="caja_nombre"
                    name="caja_nombre"
                    value="<?php echo isset($_SESSION['n'])? 
                $_SESSION['n']:'' ?>";
                >
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


<style>
        .alert {
            animation: fadeOut 2s forwards;
            animation-delay: 3s;
            background: red;
            color: white;
            padding: 100px;
            text-align: center;
        }

        @keyframes fadeOut {
            from {opacity: 1;}
            to {opacity: 0;}
        }
    </style>

</body>

</html>

<?php

 unset($_SESSION['inserccion correcta']);
unset($_SESSION['nc']);
unset($_SESSION['nc']);
unset($_SESSION['nc']);
?>