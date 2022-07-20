<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Alta</title>
</head>
<body>

<h1>Formulario Alta</h1>
<form action="registro.php" method="POST">
<label for="">idUsuario</label>
<input type="text" name="txt_idUsuario" placeholder="Por ejemplo: 18010378" required maxlength="10">

<label for="">Nombre</label>
<input type="text" name="txt_nombre" required maxlength="50">

<label for="">Apellido Paterno</label>
<input type="text" name="txt_apellidoPaterno"required maxlength="50">

<label for="">Apellido Materno</label>
<input type="text" name="txt_apellidoMaterno" required maxlength="50">

<label for="">Sexo</label>
<select required name="cmb_sexo" id="">
    <option dissabled value="Selecciona"></option>
    <option value="H">Hombre</option>
    <option value="M">Mujer</option>
</select>

<label for="">Email</label>
<input type="email"  required name="txt_email" maxlength="100">

<label for="">Teléfono</label>
<input type="tel" required name="txt_telefono" maxlength="12" >

<label for="">Contraseña</label>
<input type="password" required name="txt_contrasena" maxlength="20">

<button type="submit">Guardar</button>
<button type="reset">Limpiar</button>


</form>    


</body>
</html>