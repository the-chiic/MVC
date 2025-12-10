<?php

    require_once "controller/controladorProfesores.php";

    $objControlador=new ControladorProfesores();
    $profesor=$objControlador->eliminarProfesor();

    require_once "views/vistaBorrar.php";

?>