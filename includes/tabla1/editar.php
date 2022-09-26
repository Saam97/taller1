<?php


    function modificar(){
        require 'databases.php';

        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $descripcion = $_POST['descripcion'];
    
        $modificar = "UPDATE table1 SET nombre='$nombre', apellido='$apellido', descripcion='$descripcion' WHERE id='$id'";
        $consulta = mysqli_query($mdb,$modificar);

        if($id == null || $nombre == null || $apellido==null || $descripcion ==null){
            //echo 'NO PUEDE DEJAR EL CAMPO VACIO - TIENE QUE INGRESAR DATO VALIDO, ';
                echo "<script> alert('NO PUEDEN DEJAR LOS CAMPOS VACIOS- TIENE QUE INGRESAR DATOS VALIDO');
                location.href = '/taller1/tabla1update.php';
                </script>";
        }else{
            buscar($id);
        }
    }

    modificar();

function buscar($id){
    include 'databases.php';       
        $sql = "SELECT * FROM table1 WHERE id = '$id'";
        $consulta = mysqli_query($mdb,$sql);                  
        $tabla1 = [];                   
        $i = $id;//contador 
        while ($row = mysqli_fetch_assoc($consulta)) {
                    $tabla1[$i]['id'] = $row ['id'];
                    $tabla1[$i]['nombre'] = $row ['nombre'];
                    $tabla1[$i]['apellido'] = $row ['apellido'];
                    $tabla1[$i]['descripcion'] = $row ['descripcion'];

                }                  
        echo ( json_encode($tabla1));
        /*echo "<script> alert('MODIFICADO: ".json_encode($tabla1)."');
        location.href = '/taller1/tabla1update.php';
       </script>";*/

    }