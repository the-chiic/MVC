<?php

    require_once "controller/cProfesores.php";

    $objControlador=new CProfesores();
    $profesor=$objControlador->eliminarProfesor();

    require_once "views/vBorrar.php";

?>