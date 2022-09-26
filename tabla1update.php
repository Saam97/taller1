<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=PT+Sans:wght@400;700&display=swap"
    rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>Prueba base de datos</title>
</head>
<body>

    <header class="header">
        <h2>Obtener e insertar informacion de la base de datos con Mysqli</h2>
    </header>

    <div class="contenedor">
        <h3 class="info"> EDITAR O MODIFICAR LOS DATOS DE UNA ID</h3>

        <form class="formulario" method="POST" action="includes/tabla1/editar.php">

        <div class="campo">
                <label class="campo_label" for="nombres"> ID: </label>
                <input class="campo_field" name="id" type="number" placeholder="ID A MODIFICAR" id="id">
            </div>

            <div class="campo">
                <label class="campo_label" for="nombres"> Nombre: </label>
                <input class="campo_field" name="nombre" type="text" placeholder="Tu nombres" id="nombre">
            </div>

            <div class="campo">
                <label class="campo_label" for="apellidos"> Apellido: </label>
                <input class="campo_field" name="apellido" type="text" placeholder="Tu apellidos" id="apellido">
            </div>

            <div class="campo">
                <label class="campo_label" for="descripcions"> descripcion: </label>
                <input class="campo_field" name="descripcion" type="text" placeholder="descripcions" id="descripcion">
            </div>

            <div class="campo centrarbtn" >
                <input type="submit" name="boton_registrar" value="enviar" class="boton"> 
            </div>


        </form>


    </div>

</body>
</html>