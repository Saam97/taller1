<?php

    try {
        
        //require 'includes/databases.php';//NO FUNCIONA
        require 'databases.php';//funciona

        $idtabla1 = $_POST['idtabla1'];
        $generoTB2 = $_POST['generoTB2'];
        $ciudadTB2 = $_POST['ciudadTB2'];
        $nacimientoTB2 = $_POST['nacimientoTB2'];
        $fecha2TB2 = $_POST['fecha2TB2'];
        $valorTB2 = $_POST['valorTB2'];
        $emailTB2 = $_POST['emailTB2'];

        if($idtabla1 == null || $generoTB2==null || $ciudadTB2==null || $nacimientoTB2==null || $fecha2TB2==null || $valorTB2==null || $emailTB2==null){
            echo "<script> alert('LOS CAMPOS NO DEBEN ESTAR VACIOS');
            location.href = '/taller1/tabla2create.php';
            </script>";
        }else{
            $insertar = "INSERT INTO table2 (idtabla1, genero, ciudad, nacimiento ,fecha2, valor, email) 
            VALUES ('$idtabla1', '$generoTB2', '$ciudadTB2', '$nacimientoTB2', '$fecha2TB2', '$valorTB2', '$emailTB2')";

            $sql = mysqli_query($mdb, $insertar);
            mostrarUltimo();
        }
        
    } catch (\Throwable $th) {
        var_dump(throw $th);
    }



    function mostrarUltimo(){
        require 'databases.php';
        //cuando se guarde, se imprime el ultimo elemento de la tabla
            
            //$sql = "SELECT * FROM table1 WHERE id = (SELECT max(id) FROM id)";
            $sql = "SELECT table2.id, genero,ciudad,nacimiento,fecha2,valor,email,idtabla1,descripcion,nombre,apellido 
            FROM table1, table2 WHERE idtabla1 = table1.id";
            
            $consulta = mysqli_query($mdb,$sql);
            
            $tabla2 = [];

            $idultimo = mysqli_insert_id($mdb);
            $i = $idultimo;
    
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
                    'nombre' => $row ['nombre'],
                    'apellido' => $row ['apellido']
                ];
            }   
                
                echo(json_encode($tabla2));
            
        /*echo "<script> alert('Agregado: ".json_encode($tabla2)."');
        location.href = '/taller1/tabla2create.php';
       </script>";
       */
    }
    


 
?>