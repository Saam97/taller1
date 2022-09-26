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
        <h3 class="info"> Ingresar Informacion TABLA 2</h3>

        <form class="formulario" method="POST" action="includes/tabla2/create.php">

            <div class="campo">
                <label class="campo_label" for="idtabla1"> fk_id: </label>
                <input class="campo_field" name="idtabla1" type="text" placeholder="ID Tabla1" id="idtabla1">
            </div>
            

            <div class="campo">
                <label class="campo_label" for="generoTB2"> Genero: </label>
                <input class="campo_field" name="generoTB2" type="text" placeholder="Genero del usuario" id="generoTB2">
            </div>

            <div class="campo">
                <label class="campo_label" for="ciudadTB2"> Ciudad: </label>
                <input class="campo_field" name="ciudadTB2" type="text" placeholder="Ciudad del Usuario" id="ciudadTB2">
            </div>

            <div class="campo">
                <label class="campo_label" for="nacimientoTB2"> Datetime: </label>
                <input class="campo_field" name="nacimientoTB2" type="datetime-local" placeholder="descripcions" id="nacimientoTB2">
            </div>

            <div class="campo">
                <label class="campo_label" for="fecha2TB2"> Date: </label>
                <input class="campo_field" name="fecha2TB2" type="date" placeholder="descripcions" id="fecha2TB2">
            </div>

            <div class="campo">
                <label class="campo_label" for="valorTB2"> Valor: </label>
                <input class="campo_field" name="valorTB2" type="number" step="0.01" placeholder="Valor " id="valorTB2">
            </div>

            <div class="campo">
                <label class="campo_label" for="emailTB2"> Email: </label>
                <input class="campo_field" name="emailTB2" type="text" placeholder="Email del Usuario" id="emailTB2">
            </div>

            <div class="campo centrarbtn" >
                <input type="submit" name="boton_registrar" value="enviar" class="boton"> 
            </div>


        </form>


    </div>

</body>
</html>