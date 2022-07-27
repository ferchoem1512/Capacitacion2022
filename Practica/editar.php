<?php
    $idU=$_GET['idU'];
    require_once('conexion.php');

    
    $sql="SELECT * FROM `usuario` WHERE idUsuario LIKE $idU";
    $res=$conexion->query($sql);
    //$tam=$res->num_rows;
    $row=$res->fetch_array();
    echo $row['nombre'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Edición</title>
</head>
<body>

<h1>Formulario Edición</h1>
<form action="update.php" method="POST">
<label for="">idUsuario</label>
<input type="text" name="txt_idUsuario" value="<?php echo $row['idUsuario'] ?>"  required maxlength="10">

<label for="">Nombre</label>
<input type="text" name="txt_nombre" value="<?php echo $row['nombre'] ?>" required maxlength="50">

<label for="">Apellido Paterno</label>
<input type="text" name="txt_apellidoPaterno" value="<?php echo $row['apellidoPaterno'] ?>"required maxlength="50">

<label for="">Apellido Materno</label>
<input type="text" name="txt_apellidoMaterno" value="<?php echo $row['apellidoMaterno'] ?>" required maxlength="50">

<label for="">Sexo</label>
<select required name="cmb_sexo" id="">
    <option dissabled value="Selecciona"></option>
    <option value="H"<?php if($row['sexo']=='H') echo 'selected';?>>Hombre</option>
    <option value="M" <?php if($row['sexo']=='M') echo 'selected';?>>Mujer</option>
</select>

<label for="">Email</label>
<input type="email"  required name="txt_email" value="<?php echo $row['email'] ?>" maxlength="100">

<label for="">Teléfono</label>
<input type="tel" required name="txt_telefono" value="<?php echo $row['telefono'] ?>" maxlength="12" >

<label for="">Contraseña</label>
<input type="password" required name="txt_contrasena" value="<?php echo $row['contrasena'] ?>" maxlength="20">

<button type="submit">Guardar</button>
<button type="reset">Restablecer</button>


</form>    


</body>
</html>
