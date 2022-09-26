<?php



function buscar(){
        include 'databases.php';
        $idbuscar = $_GET['idbuscar2'];

        
        if($idbuscar == null){
            echo "<script> alert('DEBE INGRESAR UNA ID VALIDA');
            location.href = '/taller1/tabla2read.php';
            </script>";
        }else{

            //importamos la conexion
            require 'databases.php';

            //consulta o trayendo los datos que tengan id de la TB1 y TB2, si no existe cod TB1 en la TB2 no lo trae
            $sql = "SELECT table2.id, genero,ciudad,nacimiento,fecha2,valor,email,idtabla1,descripcion,nombre,apellido 
            FROM table1, table2 WHERE table2.id=$idbuscar and table2.id = table1.id";
    
            $consulta = mysqli_query($mdb,$sql);
    
            $tabla1 = [];
    
            $i =$idbuscar;//contador
    
            while ($row = mysqli_fetch_assoc($consulta)) {
                $tabla1[$i]['id'] = $row ['id'];
                $tabla1[$i]['genero'] = $row ['genero'];
                $tabla1[$i]['ciudad'] = $row ['ciudad'];
                $tabla1[$i]['nacimiento'] = $row ['nacimiento'];
                $tabla1[$i]['fecha2'] = $row ['fecha2'];
                $tabla1[$i]['valor'] = $row ['valor'];
                $tabla1[$i]['email'] = $row ['email'];
                $tabla1[$i]['data_fk'] = [
                    'id' => $row ['idtabla1'],
                    'descripcion' => $row ['descripcion'],
                ];
                $i++;
            }   
                
                echo(json_encode($tabla1));
    
               
            
        }


        
}
buscar();
