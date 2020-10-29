<?php
include_once "ConexionBD.php";

class Numero{
    private $id;
    private $numIng;

    public function setNombre($numIng):void{
        $this->numIng = $numIng;
    }

    public function insertar(){
        try{
            $conexionDB = new ConexionBD();
            $conn = $conexionDB->abrirConexion();
            $sql = "INSERT INTO numIngre(numIng)
                    VALUES(?)";

            $stmt = $conn->prepare($sql);
            $stmt->bindParam(1, $this->numIng, PDO::PARAM_STR);
            $stmt->execute();
            $filas = $stmt->rowCount();

            $conexionDB->cerrarConexion();
            return $filas;
        }catch(PDOException $e){
            return $e->getMessage();
        }
    }

    public function mostrar()
    {
        try {
            $conexionDB = new ConexionBD();
            $conn = $conexionDB->abrirConexion();
            $sql = "SELECT * FROM numIngre";

            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $resultado = $stmt->fetchAll();

            $conexionDB->cerrarConexion();
            return $resultado;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}