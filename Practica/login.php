


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

<h1>Login</h1>
<form action="validar.php" method="POST">
<label for="">idUsuario</label>
<input type="text" name="txt_idUsuario" placeholder="Por ejemplo: 18010378" required maxlength="10">
<label for="">Contraseña</label>
<input type="password" required name="txt_contrasena" maxlength="20">

<button type="submit">Guardar</button>
<button type="reset">Limpiar</button>


</form>    


</body>
</html>