<?php

    require_once "conectar.php";

    class ModeloProfesores extends Conectar{

        function __construct(){
            parent::__construct();
        }

        function recogerDatosProfesores(){
            $sql="SELECT idProfesor, nombre FROM profesores;";
            //echo $sql;

            $resultado=$this->conexion->query($sql);

            $profesores=[];
            while($fila=$resultado->fetch_assoc()){
                $profesores[]=$fila;
            }

            return $profesores;
        }

        function altaProfesores($nombre){
            $sql="INSERT INTO profesores(nombre) VALUES ('".$nombre."');";
            //echo $sql;

            $resultado=$this->conexion->query($sql);

            return $resultado;
        }

        function modificarDatosProfesores($id, $nombre){
            $sql="UPDATE profesores SET nombre='".$nombre."' WHERE idProfesor=".$id.";";
            //echo $sql;

            $resultado=$this->conexion->query($sql);

            return $resultado;
        }

        function verProfesor($id){
            $sql="SELECT idProfesor, nombre FROM profesores WHERE idProfesor=".$id.";";
            //echo $sql;

            $resultado=$this->conexion->query($sql);

            if($resultado->num_rows>0){
                return $resultado->fetch_assoc();
            }else{
                return $resultado;
            }
        }

        function borrarProfesor($id){
            $sql="DELETE FROM profesores WHERE idProfesor=".$id.";";
            //echo $sql;

            $resultado=$this->conexion->query($sql);

            return $resultado;
        }
    }

?>