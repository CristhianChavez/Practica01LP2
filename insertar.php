<form method="post" action="<?=$_SERVER["PHP_SELF"]?>">
    <input type="text" name="nombre" placeholder="Numero">
    <input type="submit" name="submit" value="Guardar">
</form>
<?php
    if(!empty($_POST)){
        $nombre = $_POST["nombre"];

        include_once "numero.php";
        $num = new Numero();
        $num->setNombre($nombre);
        $filas = $num->insertar();

        if($filas!=0){
            echo "Numero guardada";
        }else{
            echo "Error: Informarcion no guardada";
        }
    }
