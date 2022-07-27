<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta General Usuarios</title>
</head>
<body>

<h1>Consulta General Usuarios</h1>
<table>
    <tr>
        <th>Nombre completo</th>
        <th>Telefono</th>
        <th>Correo</th>
        <th>Editar</th>
        <th>Eliminar</th>
    </tr>
    <?php

    require_once('conexion.php');

    
    $sql="SELECT * FROM `usuario`";
    $res=$conexion->query($sql);
    $tam=$res->num_rows;

    if($tam>0){
        while ($row=$res->fetch_array()) {
            echo "<tr><td>".$row['apellidoPaterno']." ".$row['apellidoMaterno']." ".$row['nombre']."</td>";
            echo "<td>".$row['telefono']."</td>";
            echo "<td>".$row['email']."</td>";
            echo "<td><a href='editar.php?idU=".$row['idUsuario']."'>editar</a></td>";
            echo "<td><a href='eliminar.php?idU=".$row['idUsuario']."'>eliminar</a></td></tr>";
        
        }
    }


?>
</table>

</body>
</html>
