<?php
//escopo global
$nome = "Daniel Silva Ferreira";
$a = 1;
$b = 2;
$c = 3;



function exibeNome() {
    global $nome;
    echo $nome;
}
exibeNome();

echo "<hr>";
//////////////////////

function exibeCidade() {
//escopo local
    global $cidade;
    $cidade = "osasco";
}
exibeCidade();
echo $cidade;
echo "<hr>";

///////////////////////
function soma() {
    echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];
}

soma();