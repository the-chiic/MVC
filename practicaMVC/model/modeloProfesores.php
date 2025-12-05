<?php

    require_once "conectar.php";

    class ModeloProfesores extends Conectar{

        function __construct(){
            parent::__construct();
        }

        function recogerDatosProfesores(){
            try{
                $sql="SELECT idProfesor, nombre FROM profesores;";
                //echo $sql;

                $resultado=$this->conexion->query($sql);

                $profesores=[];
                while($fila=$resultado->fetch_assoc()){
                    $profesores[]=$fila;
                }

                return $profesores;
            }catch(mysqli_sql_exception $e){
                echo "<h3>ERROR AL RECOGER DATOS DE LOS PROFESORES</h3>";
				echo "<h3>".$e->getMessage()."</h3>";
				$numError=$this->conexion->errno;
				$textoError=$this->conexion->error;
				echo "<h3>".$numError." --- ".$textoError."</h3>";
				echo "<h3><a href='listarProfesores.php'>VOLVER</a></h3>";
            }
        }

        function altaProfesores($nombre){
            try{
                $sql="INSERT INTO profesores(nombre) VALUES ('".$nombre."');";
                //echo $sql;

                return $this->conexion->query($sql);
            }catch(mysqli_sql_exception $e){
                echo "<h3>ERROR AL INSERTAR PROFESORES</h3>";
				echo "<h3>".$e->getMessage()."</h3>";
				$numError=$this->conexion->errno;
				$textoError=$this->conexion->error;
				echo "<h3>".$numError." --- ".$textoError."</h3>";
				echo "<h3><a href='listarProfesores.php'>VOLVER</a></h3>";
            }
        }

        function modificarDatosProfesores($id, $nombre){
            try{
                $sql="UPDATE profesores SET nombre='".$nombre."' WHERE idProfesor=".$id.";";
                //echo $sql;

                return $this->conexion->query($sql);
            }catch(mysqli_sql_exception $e){
                echo "<h3>ERROR AL MODIFICAR PROFESORES</h3>";
				echo "<h3>".$e->getMessage()."</h3>";
				$numError=$this->conexion->errno;
				$textoError=$this->conexion->error;
				echo "<h3>".$numError." --- ".$textoError."</h3>";
				echo "<h3><a href='listarProfesores.php'>VOLVER</a></h3>";
            }
        }

        function verProfesor($id){
            try{
                $sql="SELECT idProfesor, nombre FROM profesores WHERE idProfesor=".$id.";";
                //echo $sql;

                return $this->conexion->query($sql);
            }catch(mysqli_sql_exception $e){
                echo "<h3>ERROR AL VER UN PROFESOR</h3>";
				echo "<h3>".$e->getMessage()."</h3>";
				$numError=$this->conexion->errno;
				$textoError=$this->conexion->error;
				echo "<h3>".$numError." --- ".$textoError."</h3>";
				echo "<h3><a href='listarProfesores.php'>VOLVER</a></h3>";
            }
        }

        function borrarProfesor($id){
            try{
                $sql="DELETE FROM profesores WHERE idProfesor=".$id.";";
                //echo $sql;

                return $this->conexion->query($sql);
            }catch(mysqli_sql_exception $e){
                echo "<h3>ERROR AL BORRAR PROFESORES</h3>";
				echo "<h3>".$e->getMessage()."</h3>";
				$numError=$this->conexion->errno;
				$textoError=$this->conexion->error;
				echo "<h3>".$numError." --- ".$textoError."</h3>";
				echo "<h3><a href='listarProfesores.php'>VOLVER</a></h3>";
            }
        }
    }

?>