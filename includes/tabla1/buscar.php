<?php



function buscar(){
        include 'databases.php';
        $idbuscar = $_GET['idbuscar'];

        
        if($idbuscar == null){
            echo "<script> alert('DEBE INGRESAR UNA ID VALIDA');
            location.href = '/taller1/tabla1read.php';
            </script>";
        }else{

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
            
        }


        
}
buscar();

