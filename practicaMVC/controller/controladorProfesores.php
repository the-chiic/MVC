<?php

    require_once "model/modeloProfesores.php";

    class ControladorProfesores{
        private $modelo;

        public function __construct(){
            $this->modelo=new ModeloProfesores();
        }

        public function mostrarProfesores(){
            return $this->modelo->recogerDatosProfesores();
        }

        public function modificarProfesores($id, $nombre){
            if(!isset($nombre) || trim($nombre)===""){
                return $this->modelo->verProfesor($id);
            }
            return $this->modelo->modificarDatosProfesores($id, $nombre);
        }

        public function eliminarProfesor($id){
            return $this->modelo->borrarProfesor($id);
        }

        public function añadirProfesor($nombre){
            if(!isset($nombre) || trim($nombre)===""){
                return false;
            }
            return $this->modelo->altaProfesores($nombre);
        }
    }

?>