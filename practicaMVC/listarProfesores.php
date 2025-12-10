<?php

    require_once "controller/cProfesores.php";

    $objControlador= new CProfesores();
    $profesores=$objControlador->mostrarProfesores();

    require_once "views/vListarProfesores.php";

?>