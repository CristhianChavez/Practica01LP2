<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TABLA</title>
</head>
<body>
    // Este es lo que muestra
       
            <?php
function generartabla($n,$m){ ?>
    <table width="275" border="1">
    <tbody>
               <?php $i = 0; $j =1;
                for($i = 0; $i < $n; $i++){
            ?>
            <tr>
                    <?php
                        for($j = 1; $j <= $m; $j++){
                    ?>
                        <td>  <?php echo $j+($i*10); ?>  </td>
                        <?php
                        }
                        ?>
            </tr>
                <?php
                }
}
                 ?>
        </tbody>
        </table>  
</body>
</html>

<form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
    <input type="submit" name="submit" value="Enviar"/>
</form>

<?php
if (isset($_POST["submit"])) {
    $n =  66;
    $m =  20;
    generarTabla($n, $m);
}
?>