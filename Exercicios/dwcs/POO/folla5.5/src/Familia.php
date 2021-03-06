<?php

namespace Clases;

use PDO;
use PDOException;

class Familia extends Conexion
{

    public function __construct()
    {
        parent::__construct();
    }
    function recuperarProductos()
    {
        $consulta = "select * from familias order by nombre";
        $stmt = $this->conexion->prepare($consulta);
        try {
            $stmt->execute();
        } catch (PDOException $ex) {
            die("Error al recuperar productos: " . $ex->getMessage());
        }
        $this->conexion = null;
        return $stmt->fetchAll(PDO::FETCH_OBJ); //DEVOLVE un array de obxectos
    }

    function recuperarFamiliasPorNome($nome)
    {
        $consulta = "select * from familias where cod like :cod order by nombre";
        $stmt = $this->conexion->prepare($consulta);
        $stmt->bindParam(':cod', $nome);
        try {
            $stmt->execute();
        } catch (PDOException $ex) {
            die("Error al recuperar productos: " . $ex->getMessage());
        }
        $this->conexion = null;
        return $stmt->fetchAll(PDO::FETCH_OBJ); //DEVOLVE un array de obxectos
    }
}
