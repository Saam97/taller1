<?php

    try {
        
        //require 'includes/databases.php';//NO FUNCIONA
        require 'databases.php';//funciona

        $nombre1 = $_POST['nombretb1'];
        $apellido1 = $_POST['apellidotb1'];
        $descripcion1 = $_POST['descripciontb1'];

        $insertar = "INSERT INTO table1(nombre, apellido, descripcion) VALUES ('$nombre1','$apellido1','$descripcion1')";

        $sql = mysqli_query($mdb, $insertar);

        
        if (!$nombre1 == null || !$$apellido1 == null) {//cuando se guarde, se imprime el ultimo elemento de la tabla
            
                //$sql = "SELECT * FROM table1 WHERE id = (SELECT max(id) FROM id)";
                $sql = "SELECT * FROM table1";
                $consulta = mysqli_query($mdb,$sql);
                
                $tabla1 = [];
                
                $idultimo = mysqli_insert_id($mdb);
                $i = $idultimo;//contador

                while ($row = mysqli_fetch_assoc($consulta)) {
                    $tabla1[$i]['id'] = $row ['id'];
                    $tabla1[$i]['nombre'] = $row ['nombre'];
                    $tabla1[$i]['apellido'] = $row ['apellido'];
                    $tabla1[$i]['descripcion'] = $row ['descripcion'];

                }
                

                
                echo ( json_encode($tabla1));
                
            /*echo "<script> alert('Agregado: ".json_encode($tabla1)."');
            location.href = '/taller1/tabla1create.php';
           </script>";*/
           
        }else{
            echo "<script> alert('incorrecto');
            location.href = '/taller1/tabla1create.php';
            </script>";
        }
        

    } catch (\Throwable $th) {
        var_dump(throw $th);
    }


 
?>