<?php

    require_once "model/modeloProfesores.php";

    class ControladorProfesores{
        private $modelo;
        public $vista;

        public function __construct(){
            $this->modelo=new ModeloProfesores();
        }

        public function mostrarProfesores(){
            $profesores=$this->modelo->recogerDatosProfesores();
            $this->vista="vistaListarProfesores.php";
            return $profesores;
        }

        public function modificarProfesores($id, $nombre){
            $profesor=false;
            if(isset($_GET["nombreProfesorNuevo"]) && !empty($_GET["nombreProfesorNuevo"]) && trim($_GET["nombreProfesorNuevo"])){
                $nombre=$_GET["nombreProfesorNuevo"];
                $profesor=true;
                $profesor=$this->modelo->modificarDatosProfesores($id, $nombre);
            }

            $filaProfesorAntiguo=$this->modelo->verProfesor($id);
            $profesorAntiguo=$filaProfesorAntiguo->fetch_assoc();

            if(!$profesor){
                $this->vista="vistaModificar.php";
                return $profesorAntiguo;
            }else{
                header("Location: listarProfesores.php");
            }
        }

        public function seleccionarProfesor($id){
            return $this->modelo->verProfesor($id);
        }

        public function eliminarProfesor($id){
            $this->modelo->borrarProfesor($id);
            $this->vista="vistaBorrar.php";
        }

        public function añadirProfesor($nombre){
            $profesor=false;
            if(isset($_GET["nombreProfesor"]) && !empty($_GET["nombreProfesor"]) && trim($_GET["nombreProfesor"])){
                $nombre=$_GET["nombreProfesor"];
                $profesor=$this->modelo->altaProfesores($nombre);
            }

            if(!$profesor){
                $this->vista="vistaAltaProfesores.php";
            }else{
                header("Location: listarProfesores.php");
            }
        }
    }

?>