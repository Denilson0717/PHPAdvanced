<?php 
    include ("pelicula.php"); 

class ApiPeliculas {

    function obtenerPeliculas(){
        $pelicula = new Pelicula();
        $peliculas = [];
        $peliculas["items"] = array();

        $resultado = $pelicula->obtenerPeliculas();

        if ($resultado->rowCount()){
            while($row = $resultado->fetch(PDO::FETCH_ASSOC)){
                $item = array(
                    'id' => $row['id'],
                    'nombre' => $row['nombre'],
                    'imagen' => $row['imagen']
                );
                array_push($peliculas["items"], $item);
            }

            echo json_encode($peliculas);
        }else{
            echo json_encode(array('mensaje' => 'no hay elementos en la tabla'));
        }
    }
}


?>

