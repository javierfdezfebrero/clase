<!--

1. Métodos máxicos. Crea unha clase Artigo con 2 propiedades (id e nome), non accesibles desde o exterior
a) Define un construtor que estableza o valor das propiedades que reciba
b) Cando se clone un artigo o id increméntase en 1
c) Emprega métodos máxicos para establecer e obter os valores da súas propiedades.
d) Se mostramos o obxecto cun echo, chamarase a un método máxico __toString(), que á súa vez
chamará a un método mostraArtigo() no que mostre os valores das súas propiedades
e) Comproba que funciona todo, creando un articulo ‘pantalla’, clónao, asigna o nome a ‘rato’, e
móstrao

-->
<?php
class Artigo{

    private $id;
    private $nome;

    // a) Define un construtor que estableza o valor das propiedades que reciba
    public function __construct($id,$nome){
        $this->nome = $nome;
        $this->id = $id;

    }
    // b) Cando se clone un artigo o id increméntase en 1
    public function __clone(){
        $this->id += 1 ;
    }
    // c) Emprega métodos máxicos para establecer e obter os valores da súas propiedades.
    public function getId(){
        return $this->id;
    }
    public function getNome(){
        return $this->nome;
    }
    public function setId($id){
        $this->id=$id;
    }
    public function setNome($nome){
        $this->nome=$nome;
    }

    //     d) Se mostramos o obxecto cun echo, chamarase a un método máxico __toString(), que á súa vez
    // chamará a un método mostraArtigo() no que mostre os valores das súas propiedades

    public function __toString(){
        return $this->mostraArtigo();
    }
    private function mostraArtigo(){
        return "Id: ".$this->getId()." Nome: ".$this->getNome();
    }





}


//     e) Comproba que funciona todo, creando un articulo ‘pantalla’, clónao, asigna o nome a ‘rato’, e
// móstrao

    $pantalla = new Artigo(1,"pantalla");
    $rato = clone($pantalla);
    $rato->setNome("rato");
    echo $rato;
    echo "<hr>";
    echo $pantalla;