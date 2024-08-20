<?php

class Funcionario {

    //atributos
    public $nome='Isabelli';
    public $telefone='43123456';
    public $numFilhos=0;


    //funções e metodos
    function resumirCardFunc () {
        return "$this->nome e ela possui $this->numFilhos filho(s)";
    }

    function modificarNumFilhos ($numFilhos) {
      return $this->numFilhos = $numFilhos;
    }
}

//instaciei um metodo, porq qro q retorne uma string
$y=new Funcionario();
$y= modificarNumFilhos(3) . '<br/>';
//echo $y->modificarNumFilhos(3) . '<br/>';

echo $y->resumirCardFunc();

?>