<?php

trait datosPersona
{
 private $nome;
 private $apelidos;
 private $idade;

 public function getNome()
 {
     # code...
 }
 public function getApelidos()
 {
     # code...
 }
 public function getIdade()
 {
     # code...
 }
 public function setNome($nome)
 {
    $this->nome=$nome;
 }
 public function setApelidos($apelidos)
 {
    $this->apelidos=$apelidos;
 }
 public function setIdade($idade)
 {
    $this->idade=$idade;
 }

 public function mostrarValores()
 {
     return "datos: ". $this->nome." ".$this->apelidos." ". $this->idade;
 }

 public function __tostring(){
     return $this->mostrarValores();
 }

}