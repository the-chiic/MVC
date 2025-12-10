<?php

    require_once "controller/controladorProfesores.php";

    $idProfesor=$_GET["id"];

    $objControlador=new ControladorProfesores();
    $profesor=$objControlador->eliminarProfesor($idProfesor);

    if($profesor){
        require_once "views/vistaBorrar.php";
    }

?>