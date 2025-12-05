<?php

    $accion=$_GET["accion"];
    $idProfesor=$_GET["idProfesor"];
    if($accion=="modificar"){
        header("Location: modificar.php?id=".$idProfesor);
    }else{
        header("Location: borrar.php?id=".$idProfesor);
    }

?>