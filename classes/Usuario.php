<?php

class Usuario
{
    public $login;
    public $senha;
    public $idade;
    public $altura;
    public $peso;

    function __construct($login, $senha, $idade, $altura, $peso)
    {
        $this->login = $login;
        $this->senha = $senha;
        $this->idade = $idade;
        $this->altura = $altura;
        $this->peso = $peso;
    }

}

?>