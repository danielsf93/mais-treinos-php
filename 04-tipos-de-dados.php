<?php
/******escalares */
//string
$nome = "Olá osasco!";
var_dump($nome);
if(is_string($nome)):
    echo "é uma string";
else:
    echo "não é string";
endif;

echo "<hr>";

//int
$idade = 27;
var_dump($idade);
if(is_int($idade)):
    echo "é um inteiro";
else:
    echo "não é um inteiro";
endif;

echo "<hr>";

//float
$altura = 1.75;
var_dump($altura);
if(is_float($altura)):
    echo "é um float";
else:
    echo "não é um float";
endif;

echo "<hr>";

//bolean
$admin = true;
var_dump($admin);
if(is_bool($admin)):
    echo "é um boolean";
else:
    echo "não é um boolean";
endif;

echo "<hr>";

/***********compostos */
$carros = array("ká","uno","ferrari", 10 , 1.2 , true);
var_dump($carros);
if(is_array($carros)):
    echo "é um array";
else:
    echo "não é um array";
endif;

echo "<hr>";

///object
class Cliente {
    public $nome;
    public function atribuirNome($nome){
        $this->$nome = $nome;
    }

}

$cliente = new Cliente();
$cliente->atribuirNome("Daniel");
var_dump($cliente);
if(is_object($cliente)):
    echo "é um objeto";
else:
    echo "não é um objeto";
endif;

echo "<hr>";