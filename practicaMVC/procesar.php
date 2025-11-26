<?php

    $accion=$_GET["accion"];
    $idProfesor=$_GET["idProfesor"];
    if($accion=="modificar"){
        header("Location: views/modificar.php?id=".$idProfesor);
    }else{
        header("Location: views/borrar.php?id=".$idProfesor);
    }

?>