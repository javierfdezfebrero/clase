<?php

namespace Clases;

use PDO;
use PDOException;

class Producto extends Conexion
{
    private $id;
    private $nombre;
    private $nombre_corto;
    private $pvp;
    private $familia;
    private $descripcion;
    public function __construct()
    {
        parent::__construct();
    }
    function recuperarProductos()
    {
        $consulta = "select * from productos order by nombre";
        $stmt = $this->conexion->prepare($consulta);
        try {
            $stmt->execute();
        } catch (PDOException $ex) {
            die("Error al recuperar productos: " . $ex->getMessage());
        }
        $this->conexion = null;
        return $stmt->fetchAll(PDO::FETCH_OBJ); //DEVOLVE un array de obxectos
    }

    function recuperarProductosPorNome($nome)
    {
        $consulta = "select * from productos where nombre like :nombre order by nombre";
        $stmt = $this->conexion->prepare($consulta);
        $stmt->bindParam(':nombre', $nome);
        try {
            $stmt->execute();
        } catch (PDOException $ex) {
            die("Error al recuperar productos: " . $ex->getMessage());
        }
        $this->conexion = null;
        return $stmt->fetchAll(PDO::FETCH_OBJ); //DEVOLVE un array de obxectos
    }
}
