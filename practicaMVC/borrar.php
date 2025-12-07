<?php

    require_once "controller/controladorProfesores.php";

    $idProfesor=$_GET["id"];

    $objControlador=new ControladorProfesores();

    $objControlador->eliminarProfesor($idProfesor);

?>