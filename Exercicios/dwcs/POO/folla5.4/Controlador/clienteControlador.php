<?php
//ClienteControlador.php
require_once('../Modelo/clienteModelo.php');
require_once('../Vista/vistaCliente.php');
/* PEDIRiAMOS Á PARTE DA VISTA A PÁXINA DE INICIO */
//SE QUERO LISTAR TODOS
if (isset($_GET['todos'])) {
    $clientes = ClienteModelo::devolveTodos(); //UN PDOStatement. O CONTROLADOR PIDE DATOS
    // AO CONTROLADOR
    // CONVIRTO A UN ARRAY E O DEVOLVO
    while ($fila = $clientes->fetch(PDO::FETCH_ASSOC)) {
        $clienteArray[] = $fila;
    }
    mostraTaboaCliente($clienteArray); //CHAMO Á FUNCIÓN NA PARTE DA VISTA, PARA MOSTRAR
}

if (isset($_GET['borrarClientePorMail'])) {
    $mensaxe= 'Borrado CLiente';
    $mail = $_GET['mail'];
    clienteModelo::borrarPorMail($mail);

    mostraMensaxeBorrar($mensaxe);
}

if (isset($_GET['inserirCliente'])) {
    $mensaxe= 'Inserido CLiente';
    $nome = $_GET['nome'];
    $apelidos = $_GET['apelidos'];
    $mail = $_GET['mail'];
    $cliente = new ClienteModelo($nome,$apelidos,$mail);
    
    $cliente->gardar();

    mostraMensaxeBorrar(  $mensaxe);
}

if (isset($_GET['buscar'])) {
    
    $mail = $_GET['mail'];
    $clientes = ClienteModelo::buscarPorMail($mail); //UN PDOStatement. O CONTROLADOR PIDE DATOS
    // AO CONTROLADOR
    // CONVIRTO A UN ARRAY E O DEVOLVO
    while ($fila = $clientes->fetch(PDO::FETCH_ASSOC)) {
        $clienteArray[] = $fila;
    }
    mostraTaboaCliente($clienteArray); //CHAMO Á FUNCIÓN NA PARTE DA VISTA, PARA MOSTRAR
}