<?php
session_start();
if($_SESSION['autenticado']!="Si"){
    echo "<script>alert('Acceso denegado. No tienes permisos para acceder a esta sección');window.location='../login.php'</script>";
}
if($_SESSION['rol']!="Admin"){
    echo "<script>alert('Acceso denegado. No tienes permisos para acceder a esta sección');window.location='../login.php'</script>";
}

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
    <h1>Bienvenido
    <?php
    echo $_SESSION['nombre'];
    ?>
   </h1>

</body>
</html>

lpacheco081@accitesz.com