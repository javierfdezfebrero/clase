<?php

class contacto
{

    private $nome;
    private $apelidos;
    private $tfno;

    private $regExpress =  '/[0-9]{9}/';

    public function __construct($nome, $apelidos, $tfno)
    {
        $this->$nome = $this->pasarMaiusculas($nome);
        $this->$apelidos = $apelidos;
        if ($this->comprobarTfno($tfno)) {
            $this->$tfno = $tfno;
        } else {
            echo "Número de tfno incorrecto";
        }
    }

    public function setNome($nome)
    {
        $this->$nome = $this->pasarMaiusculas($nome);
    }
    public function getNome()
    {

        return  $this->nome;
    }
    public function getApelidos()
    {
        return  $this->apelidos;
    }
    public function setApelidos($apelidos)
    {
        $this->$apelidos = $apelidos;
    }
    public function leTfno()
    {
        return  $this->tfno;
    }
    public function comprobarTfno($tfno)
    {
        if (strlen($tfno) >= 9) {
            return true;
        }
        return false;
        // if (preg_match($this->regExpress, $tfno)) {
        //     return true;
        // }
        // return false;
    }
    public function asignaTfno($tfno)
    {
        if ($this->comprobarTfno($tfno)) {
            $this->$tfno = $tfno;
        } else {
            echo "Número de tfno incorrecto";
        }
    }
    public function mostraInformacion()
    {
        $info = $this->nome;
        $info .= ' ' . $this->apelidos;
        $info .= ' ' . $this->tfno;
        return  $info;
    }
    public function pasarMaiusculas($nome)
    {

        return   ucfirst($nome);
    }
    public function __destruct()
    {
        echo "<br>obxecto de nome " . $this->nome . " foi destruído<br>";
    }
}
