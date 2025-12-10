<?php

    require_once "conectar.php";

    class MProfesores extends Conectar{

        function __construct(){
            parent::__construct();
        }

        function recogerDatosProfesores(){
            $sql="SELECT idProfesor, nombre FROM profesores;";
            //echo $sql;

            try{
                $resultado=$this->conexion->query($sql);

                $profesores=[];
                while($fila=$resultado->fetch_assoc()){
                    $profesores[]=$fila;
                }

                return $profesores;
            }catch(mysqli_sql_exception $e){
                return false;
            }
        }

        function altaProfesores($nombre){
            $sql="INSERT INTO profesores(nombre) VALUES ('".$nombre."');";
            //echo $sql;

            try{
                $resultado=$this->conexion->query($sql);

                return $resultado;
            }catch(mysqli_sql_exception $e){
                return false;
            }
        }

        function modificarDatosProfesores($id, $nombre){
            $sql="UPDATE profesores SET nombre='".$nombre."' WHERE idProfesor=".$id.";";
            //echo $sql;

            try{
                $resultado=$this->conexion->query($sql);

                return $resultado;
            }catch(mysqli_sql_exception $e){
                return false;
            }
        }

        function verProfesor($id){
            $sql="SELECT idProfesor, nombre FROM profesores WHERE idProfesor=".$id.";";
            //echo $sql;

            try{
                $resultado=$this->conexion->query($sql);

                if($resultado->num_rows>0){
                    return $resultado->fetch_assoc();
                }else{
                    return $resultado;
                }
            }catch(mysqli_sql_exception $e){
                return false;
            }
        }

        function borrarProfesor($id){
            $sql="DELETE FROM profesores WHERE idProfesor=".$id.";";
            //echo $sql;

            try{
                $resultado=$this->conexion->query($sql);

                return $resultado;
            }catch(mysqli_sql_exception $e){
                return false;
            }
        }
    }

?>