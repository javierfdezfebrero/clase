<!-- 6. Lanzamento de excepcións. Interface. Modifica o exercicio 1 para que empregue a seguinte interface:
interface Comparar {
 public function comparar($value);
}
Engade nos artigos unha propiedade prezo, que será o que comparemos. Cando mostramos un artigo
queremos ver tamén este valor. O método comparar( ) comprobará que o obxecto recibido é de tipo Artigo,
se non lanzará unha excepción cunha mensaxe
Fai un exemplo que compare 2 artigos con este método comparar( ) -->

<?php

interface Comparar {
 public function comparar($value);
}


class Artigo implements Comparar{

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

    public function comparar($value){

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