<?php
   

    function eliminar(){
            require 'databases.php';//funciona  
            $idTB1 =$_POST['idTB1'];//mismo nombre que el  name del php vista html 
            buscar($idTB1);

            $consulta = "DELETE FROM table1 where id = '$idTB1'";
            $borrar = mysqli_query($mdb, $consulta);
        
                if($idTB1 == null){
                        //echo 'NO PUEDE DEJAR EL CAMPO VACIO - TIENE QUE INGRESAR DATO VALIDO, ';
                    echo "<script> alert('NO PUEDE DEJAR EL CAMPO VACIO - TIENE QUE INGRESAR DATO VALIDO');
                    location.href = '/taller1/tabla1delete.php';
                    </script>";
                }
        }





function buscar($idbuscar){
        include 'databases.php';       
            $sql = "SELECT * FROM table1 WHERE id = '$idbuscar'";

            $consulta = mysqli_query($mdb,$sql);                  
            $tabla1 = [];                   
            $i = $idbuscar;//contador 
            while ($row = mysqli_fetch_assoc($consulta)) {
                        $tabla1[$i]['id'] = $row ['id'];
                        $tabla1[$i]['nombre'] = $row ['nombre'];
                        $tabla1[$i]['apellido'] = $row ['apellido'];
                        $tabla1[$i]['descripcion'] = $row ['descripcion'];
    
                    }                  
            echo ( json_encode($tabla1));
            /*echo "<script> alert('ELIMINADO: ".json_encode($tabla1)."');
            location.href = '/taller1/tabla1delete.php';
           </script>";*/

        }





    eliminar();




