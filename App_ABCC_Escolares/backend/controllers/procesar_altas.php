<?php
// 1. CORRECCIÓN: session_start() siempre debe ir al inicio
session_start();

include_once('alumno_dao.php');

$alumnoDAO = new AlumnoDAO();

// Las claves del POST deben coincidir exactamente con el formulario
$nc = $_POST['caja_num_control'];
$n = $_POST['caja_nombre'];
$pa = $_POST['caja_primer_ap'];
$sa = $_POST['caja_segundo_ap'];
$fc = $_POST['caja_fecha_nac'];
$s = $_POST['caja_semestre'];
$c = $_POST['caja_carrera'];


// 2. CORRECCIÓN CRÍTICA: VALIDACIONES INDIVIDUALES

// Inicializamos banderas de error
$error_nc = false;
$error_n = false;
// ... (puedes agregar más para pa, sa, etc.)

// Validar Número de Control (NC)
if (!isset($nc) || empty($nc) || !is_numeric($nc)) {
    $error_nc = true;
    $_SESSION['error_nc'] = "Debes ingresar solo números"; // Nuevo mensaje de error específico
}

// Validar Nombre (N)
if (!isset($n) || empty($n) || !ctype_alpha($n)) {
    $error_n = true;
    $_SESSION['error_n'] = "Debes ingresar solo letras"; // Nuevo mensaje de error específico
}

// 3. Evaluar si hubo CUALQUIER error de validación
$hay_errores = $error_nc || $error_n; // Si alguna bandera de error es TRUE

if (!$hay_errores) {
    // Si NO hay errores, procede a la inserción en BD
    $res = $alumnoDAO->agregarAlumno($nc, $n, $pa, $sa, $fc, $s, $c);

    if($res){
        // Inserción exitosa
        $_SESSION['insercion_correcta'] = true; // El nombre de la clave estaba mal escrito en tu formulario (insercion_correcta vs inserccion correcta)
        header('location:../pages/formulario_altas.php');
        exit(); // Siempre usar exit() después de un header location
    } else {
        // Error de BD (duplicado, conexión, etc.)
        $_SESSION['insercion_correcta'] = false;
        $_SESSION['mensaje_error_bd'] = "Mejor me dedico a las redes (Error de base de datos).";
        header('location:../pages/formulario_altas.php'); 
        exit();
    }
} else {
    // Si HAY errores, guardar los valores válidos y redireccionar
    
    // Guardamos los datos que no tuvieron errores para que el usuario no los pierda
    if (!$error_nc) $_SESSION['nc'] = $nc;
    if (!$error_n) $_SESSION['n'] = $n;
    
    // Guardamos las variables de error (ya definidas arriba)
    
    header('location:../pages/formulario_altas.php');
    exit();
}
?>