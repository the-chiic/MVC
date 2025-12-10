<?php

    require_once "controller/cProfesores.php";

    $objControlador=new CProfesores();
    $profesor=$objControlador->añadirProfesor();

    require_once "views/vAñadido.php";

?>