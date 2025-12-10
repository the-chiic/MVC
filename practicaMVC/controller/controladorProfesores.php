<?php

    require_once "model/modeloProfesores.php";

    class ControladorProfesores{
        private $modelo;

        public function __construct(){
            $this->modelo=new ModeloProfesores();
        }

        public function mostrarProfesores(){
            $profesores=$this->modelo->recogerDatosProfesores();
            if($profesores){
                return $profesores;
            }else{
                //Llamamos a una vista de error
                $mensajeError="ERROR AL RECOGER DATOS DE LOS PROFESORES";
                header("Location: error.php?mensaje=".$mensajeError);
                exit();
            }
        }

        public function modificarProfesores(){
            $idProfesor=empty($_GET["id"]) ? $_POST["id"] : $_GET["id"];
            $nombreNuevo=isset($_POST["nombreProfesorNuevo"]) ? $_POST["nombreProfesorNuevo"] : null;

            $profesores=$this->modelo->modificarDatosProfesores($idProfesor, $nombreNuevo);

            if($profesores){
                return $profesores;
            }else{
                //Llamamos a una vista de error
                $mensajeError="ERROR AL MODIFICAR EL PROFESOR";
                header("Location: error.php?mensaje=".$mensajeError);
                exit();
            }
        }

        public function cargarProfesores(){
            $idProfesor=empty($_GET["id"]) ? $_POST["id"] : $_GET["id"];

            $profesores=$this->modelo->verProfesor($idProfesor);

            if($profesores){
                return $profesores;
            }else{
                //Llamamos a una vista de error
                $mensajeError="ERROR AL VER PROFESOR";
                header("Location: error.php?mensaje=".$mensajeError);
                exit();
            }
        }

        public function eliminarProfesor(){
            $idProfesor=$_GET["id"];

            $profesores=$this->modelo->borrarProfesor($idProfesor);

            if($profesores){
                return $profesores;
            }else{
                //Llamamos a una vista de error
                $mensajeError="ERROR AL ELIMINAR PROFESOR";
                header("Location: error.php?mensaje=".$mensajeError);
                exit();
            }
        }

        public function añadirProfesor(){
            $nombre=isset($_POST["nombreProfesor"]) ? $_POST["nombreProfesor"] : null;

            $profesores=$this->modelo->altaProfesores($nombre);

            if($profesores){
                return $profesores;
            }else{
                //Llamamos a una vista de error
                $mensajeError="ERROR AL AÑADIR PROFESOR";
                header("Location: error.php?mensaje=".$mensajeError);
                exit();
            }
        }
    }

?>