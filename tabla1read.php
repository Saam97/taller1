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
        <h3 class="info"> INGRESE LA ID A BUSCAR</h3>

        <form class="formulario" method="GET" action="includes/tabla1/buscar.php">

            <div class="campo">
                <label class="campo_label" for="IDeliminar">ID:  </label>
                <input class="campo_field" name="idbuscar" type="number" placeholder="Id a buscar" id="idbuscar">
            </div>

            <div class="campo centrarbtn" >
                <input type="submit" name="boton_registrar" value="BUSCAR" class="boton"> 
            </div>


        </form>


    </div>

</body>
</html>