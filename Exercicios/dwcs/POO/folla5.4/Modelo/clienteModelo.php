<?php
//CLASE CLIENTECONTROLADOR
include_once('conexion.php');
include_once('Cliente.php');
class ClienteModelo extends Cliente
{
    public function __construct($nome, $apelidos, $email)
    {
        parent::__construct($nome, $apelidos, $email);
    }
    /* Insertar un obxecto*/
    public function gardar()
    {
        $conexion = new Conexion();
        try {
            $pdoStmt = $conexion->prepare('INSERT INTO clientes(nome, apelidos, email)
VALUES(:nome, :apelidos, :email)');
            $pdoStmt->bindParam(':nome', $this->nome);
            $pdoStmt->bindParam(':apelidos', $this->apelidos);
            $pdoStmt->bindParam(':email', $this->email);
            $pdoStmt->execute();
        } catch (PDOException $e) {
            die("Houbo un erro coa inserción: " . $e->getMessage());
        }
        $conexion = null;
        return true;
    }
    public function borrar()
    {
        $conexion = new Conexion();
        try {
            $pdoStmt = $conexion->prepare('DELETE from clientes where nome like :nome && apelidos like :apelidos && email like :email');
            $pdoStmt->bindParam(':nome', $this->nome);
            $pdoStmt->bindParam(':apelidos', $this->apelidos);
            $pdoStmt->bindParam(':email', $this->email);
            $pdoStmt->execute();
        } catch (PDOException $e) {
            die("Houbo un erro coa inserción: " . $e->getMessage());
        }
        $conexion = null;
        return true;
    }
    //DEVOLVE un array con todos os clientes da táboa. Método de clase
    public static function devolveTodos(): PDOStatement
    {
        $conexion = new Conexion();
        try {
            $consulta = "select * from clientes";
            $pdoStmt = $conexion->query($consulta);
        } catch (PDOException $e) {
            die("Houbo un erro en devolveTodos" . $e->getMessage());
        }
        return $pdoStmt;
    }
    
    // Actualizar por mail
    public function actualizarPorMail()
    {
        $conexion = new Conexion();
        try {
            $pdoStmt = $conexion->prepare('UPDATE clientes SET nome= :nome,  apelidos = :apelidos where email like :email');
            $pdoStmt->bindParam(':nome', $this->nome);
            $pdoStmt->bindParam(':apelidos', $this->apelidos);
            $pdoStmt->bindParam(':email', $this->email);
            $pdoStmt->execute();
        } catch (PDOException $e) {
            die("Houbo un erro coa modificar: " . $e->getMessage());
        }
        $conexion = null;
        return true;
    }
    public static function borrarPorMail($mail)
    {
        $conexion = new Conexion();
        try {
            $pdoStmt = $conexion->prepare('DELETE FROM clientes where email like :email');
            $pdoStmt->bindParam(':email', $mail);
            $pdoStmt->execute();
        } catch (PDOException $e) {
            die("Houbo un erro o borrar: " . $e->getMessage());
        }
        $conexion = null;
        return true;
    }
    public static function buscarPorMail($mail)
    {
        $conexion = new Conexion();
        try {
            $pdoStmt = $conexion->prepare('SELECT * FROM clientes where email like :email');
            $pdoStmt->bindParam(':email', $mail);
            $pdoStmt->execute();
        } catch (PDOException $e) {
            die("Houbo un erro coa modificar: " . $e->getMessage());
        }
        $conexion = null;
        return $pdoStmt;
    }
}
