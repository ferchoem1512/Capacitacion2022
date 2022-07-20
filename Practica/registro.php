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

    $sql="insert into Usuario values ('$idUsuario','$nombre', '$apellidoPaterno', '$apellidoMaterno', '$sexo','$email','$telefono','$contrasenaFuerte' );";
    echo $res=$conexion->query($sql);


?>