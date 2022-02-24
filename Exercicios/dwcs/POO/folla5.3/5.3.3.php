<!-- 3. Engade ao exercicio anterior u formulario web que permita introducir 2 valores, e un select para a
operación. A páxina mostrará debaixo do formulario a operación e o seu resultado. -->

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


?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="5.3.3.php" method="get">
        <label for="">Numero 1</label>
        <input type="number" name="num1" id="">
        <label for="">Numero 2</label>
        <input type="number" name="num2" id="">
        <select name="operacion" id="">
            <option value="Suma">Suma</option>
            <option value="Resta">Resta</option>
            <option value="Multi">Multiplicacion</option>
            <option value="Divi">Division</option>
        </select>

        <button type="submit" name="calcular">Calcular</button>

    </form>
</body>
</html>


<?php

if(isset($_GET['calcular'])){
    $operacion=$_GET['operacion'];
    if(empty($operacion)){
        return;
    }
    $resultado;
    $num1=$_GET['num1'];
    $num2=$_GET['num2'];

    switch ($operacion) {
        case 'Suma':
            $operacion=new Suma($num1,$num2);
            $operacion->calcular();
            $resultado=$operacion->getResultado();
            break;
        
        case 'Resta':
            $operacion=new Resta($num1,$num2);
            $operacion->calcular();
            $resultado=$operacion->getResultado();
            break;
        case 'Multi':
            $operacion=new Multi($num1,$num2);
            $operacion->calcular();
            $resultado=$operacion->getResultado();
            break;
        case 'Divi':
            $operacion=new Divi($num1,$num2);
            $operacion->calcular();
            $resultado=$operacion->getResultado();
            break;
        default:
            break;
    }

    echo "<h1>".$resultado."</h1>";
}