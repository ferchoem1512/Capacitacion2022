<?php

    require_once('conexion.php');

    $idUsuario=$_POST['txt_idUsuario'];
    $nombre=$_POST['txt_nombre'];
    $apellidoPaterno=$_POST['txt_apellidoPaterno'];
    $apellidoMaterno=$_POST['txt_apellidoMaterno'];
    $sexo=$_POST['cmb_sexo'];
    $email=$_POST['txt_email'];
    $telefono=$_POST['txt_telefono'];
    $contrasena=$_POST['txt_contrasena'];
    $contrasenaFuerte=password_hash($contrasena,PASSWORD_DEFAULT);

    $sql="UPDATE `usuario` SET `nombre` = 'Jesús Fernando6', `apellidoPaterno` = 'Espinosa6', `apellidoMaterno` = 'Mondragón6', `sexo` = '6', `email` = 'jespinosa378@accitesz.com6', `telefono` = '351-158-51446', `contrasena` = 'Hola.1236' WHERE `usuario`.`idUsuario` = '18010378';";
    echo $res=$conexion->query($sql);


?>
