<!-- 
    Traits. Crea un trait DatosPersoa, que garde nome, apelidos e idade, e os seus métodos de entrada e
saída. Crea agora 2 clases Vendedor e Cliente, e empreguen ese trait, e comproba que podes empregar
eses métodos para gardar e mostrar información nesas clases. Define o método __toString( ), que chama a
mostrar Valores.  

-->

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

class Vendedor{
    use datosPersona;

}
class Cliente{
    use datosPersona;
    
}

$vendedor= new vendedor;
$vendedor->setNome('pedro');
$vendedor->setApelidos('lopez');
$vendedor->setIdade('30');

echo $vendedor;