<?php

    include_once('../../database/conexion_bd_escuela.php');

    class AlumnoDAO{
        private $conexion;

        public function __construct(){
            $this->conexion = new ConexionBDEscuela();
        }

        //============== METODOS ABCC (CRUD) =======================

        //------- ALTAS ---------
        public function agregarAlumno($nc, $nombre, $primerAp, $segundoAp, $fechaNac, $semestre, $carrera){
            $sql = "INSERT INTO alumnos VALUES('$nc','$nombre','$primerAp','$segundoAp', '$fechaNac', $semestre, '$carrera')";

            $res =  mysqli_query($this->conexion->getConexion(), $sql);

            return $res;
        }

        //------- BAJAS ---------
        public function eliminarAlumno($nc){
            $sql = "DELETE FROM alumnos WHERE Num_Control='$nc'";
            return mysqli_query($this->conexion->getConexion(), $sql);
        }

        //------- CAMBIOS ---------

        //------- CONSULTAS ---------
        public function mostrarAlumnos($filtro){
            //$sql = "SELECT * FROM alumnos";
            $sql = "SELECT Num_Control, Nombre, Primer_Ap, Segundo_Ap FROM alumnos";
            
            return mysqli_query($this->conexion->getConexion(), $sql);
        }

    }

?>