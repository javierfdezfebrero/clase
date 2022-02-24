<?php
class bombilla{
    private $potencia;

    public function __construct(){
        $this->potencia =  10;
    }

    public function getPotencia(){
        return $this->potencia;
    }
    public function setPotencia($potencia){
        $this->potencia= $potencia;
    }

    public function aumentaPotencia($val){
        $this->potencia += $val;
        $this->comprobarPotencia($this->potencia);
    }
    public function baixaPotencia($val){
        $this->potencia -= $val;
        $this->comprobarPotencia($this->potencia);
    }

    function comprobarPotencia($potencia){
        if($potencia>35){
            return;
        }
        if ($potencia<2){
            return;
        }
    }
}
