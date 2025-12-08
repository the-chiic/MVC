<?php

    require_once "model/modeloProfesores.php";

    class ControladorProfesores{
        private $modelo;

        public function __construct(){
            $this->modelo=new ModeloProfesores();
        }

        public function mostrarProfesores(){
            $profesores=$this->modelo->recogerDatosProfesores();
            return $profesores;
        }

        public function modificarProfesores($id, $nombre){
            if(!$nombre || trim($nombre)===""){
                return $this->modelo->verProfesor($id);
            }
            return $this->modelo->modificarDatosProfesores($id, $nombre);
        }

        public function eliminarProfesor($id){
            $this->modelo->borrarProfesor($id);
        }

        public function añadirProfesor($nombre){
            if(!$nombre || trim($nombre)===""){
                return false;
            }
            return $this->modelo->altaProfesores($nombre);
        }
    }

?>