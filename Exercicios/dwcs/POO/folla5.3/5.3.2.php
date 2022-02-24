<!-- 2. Métodos e clases abstractas. Define unha clase abstracta de nome Calculo que teña como atributos
$operando1 $operando2 e $resultado e que defina os métodos setOperando1, setOperando2, getResultado
e un método abstracto calcular. A continuación define tres subclases desta clase que teñen como obxectivo
realizar as operacións de suma, resta e multiplicación. Para isto:
a) Antes de realizar a operación debes comprobar que os operandos teñen algún valor.
b) As clases Calculo e subclases Suma, Resta e Multiplica que crees deben estar nunha carpeta de
nome clases.
c) No script onde comprobes o funcionamento destes cálculos debes facer que se carguen
automaticamente todas as clases que se atopen nesa carpeta:
...
$operacion=new Suma( );
$operacion->setOperando1(5);
$operacion->setOperando2(7);
$operacion->calcular( );
...
d) Engade un construtor a Calculo para que reciba os valores cando se defina o obxecto. -->
<?php
abstract class Calculo{

    protected $operando1;
    protected $operando2;
    protected $resultado;

    public function setOperando1($n){
        $this->operando1=$n;
    }
    public function setOperando2($n){
        $this->operando2=$n;
    }
    public function getResultado(){
        return "Resultado: ".$this->resultado;
    }
    public abstract function calcular();

    public function __construct($n1,$n2)
    {
        $this->operando1=$n1;
        $this->operando2=$n2;
    }

    public function __toString()
    {
        return $this->getResultado();
        
    }


}

class Suma extends Calculo{

    public function calcular(){
        if (isset($this->operando1) && isset($this->operando2)){
            $this->resultado= $this->operando1 + $this->operando2;
        }
        return;
    }

}
class Resta extends Calculo{

    public function calcular(){
        if (isset($this->operando1) && isset($this->operando2)){
            $this->resultado= $this->operando1 - $this->operando2;
        }
        return;
    }

}
class Multi extends Calculo{

    public function calcular(){
        if (isset($this->operando1) && isset($this->operando2)){
            $this->resultado= $this->operando1 * $this->operando2;
        }
        return;
    }

}
class Divi extends Calculo{

    public function calcular(){
        if (isset($this->operando1) && isset($this->operando2)){
            $this->resultado= $this->operando1 / $this->operando2;
        }
        return;
    }

}


$operacion=new Suma(1,1);
$operacion->setOperando1(5);
$operacion->setOperando2(7);
$operacion->calcular();

echo $operacion;
