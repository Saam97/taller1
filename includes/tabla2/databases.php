<?php
//testear si se conecta a la base de datos

$mdb = mysqli_connect('localhost', 'root', 'root', 'taller1');

if(!$mdb){
    echo 'error, no se pudo conectar a la base de datos: ';
    echo "error:   " . mysqli_connect_errno();
}else{
    //echo 'conexion establecida....';
}

?>