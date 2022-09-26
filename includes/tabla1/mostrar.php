<?php

function mostrarTB1() : array{
    try {
        //importamos la conexion
        require 'databases.php';


        //consulta o codigo mysql
        $sql = "SELECT * FROM table1";

        $consulta = mysqli_query($mdb,$sql);


        //array donde se guardará la informacion
        $tabla1 = [];
        $i =0;//contador

        while ($row = mysqli_fetch_assoc($consulta)) {
            $tabla1[$i]['id'] = $row ['id'];
            $tabla1[$i]['nombre'] = $row ['nombre'];
            $tabla1[$i]['apellido'] = $row ['apellido'];
            $tabla1[$i]['descripcion'] = $row ['descripcion'];

            $i++;
        }


            return $tabla1;
           
    } catch (\Throwable $th) {
          var_dump(throw $th);
    }
}

mostrarTB1();