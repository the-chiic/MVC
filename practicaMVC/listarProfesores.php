<?php

    require_once "controller/controladorProfesores.php";

    $objControlador= new ControladorProfesores();

    $profesores=$objControlador->mostrarProfesores();

    require_once "views/".$objControlador->vista;
?>