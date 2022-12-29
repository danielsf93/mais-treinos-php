<?php
//constante
define("NOME", "José Carlos");
define("IDADE", 24);
define("ALTURA", 1.78);
define("CASADO", true);

define("TIMES", ['vasco', 'flamengo', 'santos']);


//var_dump(IDADE);
echo "Meu nome é ".NOME." e minha idade é ".IDADE." anos. Tenho ".ALTURA." cms de altura.";
echo "<hr>";
echo TIMES[1];
echo "<hr>";
var_dump(TIMES);
echo "<hr>";

function exibeNome(){
    echo NOME;

}
exibeNome();