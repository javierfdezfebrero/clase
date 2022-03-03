<?php
//Clase CLIENTE
class Cliente
{
    protected $nome;
    protected $apelidos;
    protected $email;
    public function __construct($nom, $apel, $mail)
    {
        $this->nome = $nom;
        $this->apelidos = $apel;
        $this->email = $mail;
    }
    // ...
    public function mostra()
    {
        echo "Nome:{$this->nome}, apelidos:{$this->apelidos}, email:{$this->email} <br>";
    }

    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome=$nome;
    }
    public function getApelidos(){
        return $this->apelidos;
    }
    public function setApelidos($apelidos){
        $this->apelidos=$apelidos;
    }    
    public function getMail(){
        return $this->email;
    }
    public function setMail($mail){
        $this->email=$mail;
    }
}
