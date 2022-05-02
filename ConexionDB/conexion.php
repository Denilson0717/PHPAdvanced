<?php

    $server = "localhost"; // El servidor que utilizaremos, en este caso será el localhost 
    $user = "root"; // El usuario que acabamos de crear en la base de datos 
    $password = "1234"; // La contraseña del usuario que utilizaremos 
    $dataBase = "advancedphp"; // El nombre de la base de datos
    
    $conection = mysqli_connect($server, $user, $password, $dataBase); 
        
    if (!$conection) { 
        die('<strong>No pudo conectarse:</strong> ' . mysql_error()); 
    }else{ 
        // La siguiente linea no es necesaria, simplemente la pondremos ahora para poder observar que la conexión ha sido realizada 
        echo 'Conectado  satisfactoriamente al servidor <br />'; 
    } 
    
?>