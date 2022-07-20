<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        $numero1=$_GET['txt1'];
        $numero2=$_GET['txt2'];
        $oper=$_GET['cmbOperaciones'];

        switch($oper){
            case "Suma":
                $res=$numero1+$numero2;
            break;

            case "Resta":
                $res=$numero1-$numero2;
            break;

            case "Multiplicacion":
                $res=$numero1*$numero2;
            break;

            case "Division":
                $res=$numero1/$numero2;
            break;
        }
    ?>

    <h1>Hola mundo</h1>
    <form action="index.php" method="GET">
        <label for="">Numero 1</label>
        <input type="number" name="txt1" value="<?php echo $numero1?>">
      
        <select name="cmbOperaciones">
            <option>Suma</option>
            <option>Resta</option>
            <option>Multiplicacion</option>
            <option>Division</option>
        </select>
        <label for="">Numero 2</label>
        <input type="number" name="txt2" value="<?php echo $numero2?>" >
       
        <label for="">Resultado</label>
        <input type="number" name="txtResultado" value="<?php echo $res?>">

        <button type="submit">Calcular</button>
    </form>

    <br>
    <table border="1">
        <?php
        $numero=7;
      
        for($i=0; $i<=10; $i++){
            if($i%2==0){
                $color="#ffffff";
            }else{
                $color= "#aaaaaa";
            }
            echo "
            <tr>   
            <td bgcolor=$color>$numero</td>
            <td>*</td>
            <td>$i</td>
            <td>=</td>
            <td>".$numero*$i."</td>
            </tr>
            ";
             
        } 
        ?>
    </table>
    <br>


    <table border="1">
        <tr>
        <?php
        for($i=1; $i<=1000; $i++){
            echo "<td bgcolor=#$i>$i</td>";
            if($i%10==0){
                echo "</tr>";
                echo "<tr>";
            // echo $i. " ";
            // if($i%10==0){
            //     echo "<br>";
            // }
           
        }
    }
        
        ?>
        </tr>
    </table>
</body>
</html>