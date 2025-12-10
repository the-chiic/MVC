<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Añadir Profesor</title>
    </head>
    <body>
        <main>
            <form action='../altaProfesores.php' method='POST'>
                <label>Nombre Profesor:</label>
                <input type='text' name='nombreProfesor'>
                <input type='submit' value='Enviar'>
            </form>
            <h3><a href='../listarProfesores.php'>VOLVER</a></h3>
        </main>
    </body>
</html>