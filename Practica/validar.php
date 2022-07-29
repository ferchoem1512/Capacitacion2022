<?php
    session_start();

    require_once('conexion.php');

    $idUsuario=$_POST['txt_idUsuario'];
    $contrasena=$_POST['txt_contrasena'];



    $sql="SELECT * FROM `usuario` WHERE `idUsuario` LIKE '$idUsuario'";
    $res=$conexion->query($sql);
    $tam=$res->num_rows;

    if($tam>0){
        $row=$res->fetch_array();
        //echo "El usuario es:". $row['contrasena'];

        if(password_verify($contrasena, $row['contrasena'])){
            //echo "Bienvenido:". $row['nombre'];
            $_SESSION['usuario']=$idUsuario;
            $_SESSION['rol']=$row['rol'];
            $_SESSION['autenticado']="Si";
            $_SESSION['nombre']=$row['apellidoPaterno']." ".$row['nombre'];
            switch($row['rol']){
                case "Recepcion": 
                    header('location:Recepcion/');
                    break;
                case "Insumos":
                    header('location:Insumos/');
                    break;
                case "Embarques":
                    header('location:Embarque/');
                    break;
                case "Admin":

                    header('location:Admin/');
                    break;

            }
                
            echo "<script>;window.location='otra.php'</script>";
        }

    }

    echo "<script>alert('Usuario o contraseña incorrecto');window.location='login.php'</script>";


?>