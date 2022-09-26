<?php


function eliminar(){
    require 'databases.php';//funciona  
    $idTB2 =$_POST['idTB2'];//mismo nombre que el  name del php vista html 
    mostrarUltimo($idTB2);

    $consulta = "DELETE FROM table2 where id = '$idTB2'";
    $borrar = mysqli_query($mdb, $consulta);

        if($idTB2 == null){
                //echo 'NO PUEDE DEJAR EL CAMPO VACIO - TIENE QUE INGRESAR DATO VALIDO, ';
            echo "<script> alert('NO PUEDE DEJAR EL CAMPO VACIO - TIENE QUE INGRESAR DATO VALIDO');
            location.href = '/taller1/tabla2delete.php';
            </script>";
        }
}


function mostrarUltimo($eliminado){
    require 'databases.php';
    //cuando se guarde, se imprime el ultimo elemento de la tabla
        
        //$sql = "SELECT * FROM table1 WHERE id = (SELECT max(id) FROM id)";
        $sql = "SELECT table2.id, genero,ciudad,nacimiento,fecha2,valor,email,idtabla1,descripcion,nombre,apellido 
        FROM table1, table2 WHERE table2.id=$eliminado and table2.id = table1.id";
        
        $consulta = mysqli_query($mdb,$sql);
        
        $tabla2 = [];

        $i = $eliminado;

        while ($row = mysqli_fetch_assoc($consulta)) {
            $tabla2[$i]['id'] = $row ['id'];
            $tabla2[$i]['genero'] = $row ['genero'];
            $tabla2[$i]['ciudad'] = $row ['ciudad'];
            $tabla2[$i]['nacimiento'] = $row ['nacimiento'];
            $tabla2[$i]['fecha2'] = $row ['fecha2'];
            $tabla2[$i]['valor'] = $row ['valor'];
            $tabla2[$i]['email'] = $row ['email'];
            $tabla2[$i]['data_fk'] = [
                'id' => $row ['idtabla1'],
                'descripcion' => $row ['descripcion'],
                // 'nombre' => $row ['nombre'],
                // 'apellido' => $row ['apellido']
            ];
        }   
            
            echo(json_encode($tabla2));
        
    /*echo "<script> alert('Agregado: ".json_encode($tabla2)."');
    location.href = '/taller1/tabla2create.php';
   </script>";
   */
}
eliminar();