<?php 
    include ("conexion.php"); 

    $query = "SELECT * FROM usuario ORDER BY id";
    $users = mysqli_query($conection, $query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <h1>Conexion MySQL</h1>
            <table>
                <thead>
                    <th>ID</th>
                    <th>CEDULA</th>
                    <th>NOMBRE</th>
                    <th>APELLIDO</th>
                    <th>EDAD</th>
                </thead>
                <tbody>
                    <?php while($user = mysqli_fetch_assoc($users)): ?>
                        <tr>
                            <td><?php echo $user['id'] ?></td>
                            <td><?php echo $user['cedula'] ?></td>
                            <td><?php echo $user['nombre'] ?></td>
                            <td><?php echo $user['apellido'] ?></td>
                            <td><?php echo $user['edad'] ?></td>
                        </tr> 
                    <?php endwhile ; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html> 