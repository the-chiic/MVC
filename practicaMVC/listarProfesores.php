<?php

    require_once "controller/controladorProfesores.php";

    $objControlador= new ControladorProfesores();
    $profesores=$objControlador->mostrarProfesores();

    if($profesores){
        require_once "views/vistaListarProfesores.php";
        exit();
    }

?>