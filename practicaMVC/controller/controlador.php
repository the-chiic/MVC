<?php

        require_once "../model/modelo.php";

        class Controlador{
            private $modelo;

            public function __construct(){
                $this->modelo=new Modelo();
            }

            public function mostrarProfesores(){
                return $this->modelo->recogerDatosProfesores();
            }

            public function modificarProfesores($id, $nombre){
                return $this->modelo->modificarDatosProfesores($id, $nombre);
            }

            public function seleccionarProfesor($id){
                return $this->modelo->verProfesor($id);
            }

            public function eliminarProfesor($id){
                return $this->modelo->borrarProfesor($id);
            }

            public function añadirProfesor($nombre){
                return $this->modelo->altaProfesores($nombre);
            }
        }

?>