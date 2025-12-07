<?php

    require_once "model/modeloProfesores.php";

    class ControladorProfesores{
        private $modelo;

        public function __construct(){
            $this->modelo=new ModeloProfesores();
        }

        public function mostrarProfesores(){
            try{
                $profesores=$this->modelo->recogerDatosProfesores();
                require_once "views/vistaListarProfesores.php";
                return $profesores;
            }catch(mysqli_sql_exception $e){
                //Llamamos a una vista de error
                $mensajeError="ERROR AL RECOGER DATOS DE LOS PROFESORES: ".$e->getMessage();
                require_once "views/vistaError.php";
                exit(); //Para que deje de ejecutarse el codigo
            }
        }

        public function modificarProfesores($id, $nombre){
            try{
                $profesor=false;
                if(isset($_POST["nombreProfesorNuevo"]) && !empty($_POST["nombreProfesorNuevo"]) && trim($_POST["nombreProfesorNuevo"])){
                    $nombre=$_POST["nombreProfesorNuevo"];
                    $profesor=true;
                    $profesor=$this->modelo->modificarDatosProfesores($id, $nombre);
                }

                $profesorAntiguo=$this->seleccionarProfesor($id);

                if(!$profesor){
                    $profesor=$profesorAntiguo;
                    require_once "views/vistaModificar.php";
                    return $profesor;
                }else{
                    header("Location: listarProfesores.php");
                }
            }catch(mysqli_sql_exception $e){
                $mensajeError="ERROR AL MODIFICAR PROFESORES: ".$e->getMessage();
                require_once "views/vistaError.php";
                exit(); //Para que deje de ejecutarse el codigo
            }
        }

        public function seleccionarProfesor($id){
            try{
                return $this->modelo->verProfesor($id);
            }catch(mysqli_sql_exception $e){
                $mensajeError="ERROR AL VER UN PROFESOR: ".$e->getMessage();
                require_once "views/vistaError.php";
                exit(); //Para que deje de ejecutarse el codigo
            }
        }

        public function eliminarProfesor($id){
            try{
                $this->modelo->borrarProfesor($id);
                require_once "views/vistaBorrar.php";
            }catch(mysqli_sql_exception $e){
                $mensajeError="ERROR AL BORRAR PROFESORES: ".$e->getMessage();
                require_once "views/vistaError.php";
                exit(); //Para que deje de ejecutarse el codigo
            }
        }

        public function añadirProfesor($nombre){
            try{
                $profesor=false;
                if(isset($_POST["nombreProfesor"]) && !empty($_POST["nombreProfesor"]) && trim($_POST["nombreProfesor"])){
                    $nombre=$_POST["nombreProfesor"];
                    $profesor=$this->modelo->altaProfesores($nombre);
                }

                if(!$profesor){
                    require_once "views/vistaAltaProfesores.php";
                }else{
                    header("Location: listarProfesores.php");
                }
            }catch(mysqli_sql_exception $e){
                $mensajeError="ERROR AL INSERTAR PROFESORES: ".$e->getMessage();
                require_once "views/vistaError.php";
                exit(); //Para que deje de ejecutarse el codigo
            }
        }
    }

?>