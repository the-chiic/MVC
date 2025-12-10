<?php

    require_once "controller/controladorProfesores.php";

    $objControlador=new ControladorProfesores();
    $profesor=$objControlador->añadirProfesor();

    require_once "views/vistaAñadido.php";

?>