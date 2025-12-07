<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Modificar Profesor</title>
    </head>
    <body>
        <main>
            <form action='modificar.php' method='POST'>
                <label>Profesor Antiguo:</label>
                <input type='text' value="<?php echo $profesor['nombre']; ?>" readonly>
                <br/><br/>
                <label>Nombre Profesor Nuevo:</label>
                <input type='text' name='nombreProfesorNuevo'>
                <input type='hidden' name='id' value="<?php echo $profesor['idProfesor']; ?>">
                <input type='submit' value='Enviar'>
            </form>
            <h3><a href='listarProfesores.php'>VOLVER</a></h3>
        </main>
    </body>
</html>