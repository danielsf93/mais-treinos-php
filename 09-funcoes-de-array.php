<?php
/*
//is_array($array) verifica se uma função é array
$nomes = array("Filó", "Mel", "Faísca", "Tóba");
if (is_array($nomes)):
    echo "é um array";
else:
    echo "não é um array";
endif;
echo "<hr>";

//in_array($valor, $array) verifica se um determinado valor existe em alguma posição
echo in_array("Filó", $nomes);
echo "<hr>";
if (in_array("Faísca",$nomes)):
    echo "está no array";
else:
    echo "não está no array";
endif;
echo "<hr>";
if (in_array("Ronaldinho Gaúcho",$nomes)):
    echo "está no array";
else:
    echo "não está no array";
endif;
echo "<hr>";

//array_key ($array) retorna um novo array com as chaves do array passado como parametro
$bixos = array("cachorrona"=>"Filó", "cachorrinha"=>"Mel", "gato"=>"Faísca", "cachorrão"=>"Tóba");
$keys = array_keys($bixos);
print_r($keys); 
echo "<hr>";

//array_values($array) retorna um novo array com os valores do array passado como parâmetro
$values = array_values($bixos);
print_r($values);
echo "<hr>";

//array_merge($array1, $array2) agrega o conteudo dos dois arrays
$carros = array("Camaro", "Uno", "Gol");
$motos = array("Pop100", "50cc", "Cb1000");

$veiculos = array_merge($carros, $motos);
print_r($veiculos);
echo "<hr>";


//array_pop($array) exclui a ultima posição do array
print_r($carros);
echo "<br>";
array_pop($carros);
print_r($carros);
echo "<br>";
echo array_pop($carros);
echo "<hr>";


//array_shift($array) exclui a primeira posição do array (excluiu o [1], nao o [0])
$bikes = array("aro 20", "aro 26", "aro 700");
print_r($bikes);
echo "<br>";
array_shift($bikes);
print_r($bikes);
echo "<br>";
echo array_shift($bikes);
echo "<hr>";
*/

//array_unshift($array, "valor") adiciona um ou mais valores no inicio do array

$frutas = array("Uva", "laranja", "maçã");
print_r($frutas);
echo "<br>";
array_unshift($frutas, "manga", "acerola", "morango");
print_r($frutas);
echo "<hr>";

//array_push($array,"valor") adiciona item no final do array

$frutas = array("Uva", "laranja", "maçã");
print_r($frutas);
echo "<br>";
array_push($frutas, "manga", "acerola", "morango");
print_r($frutas);
echo "<hr>";

//array_combine($keys, $values) mescla dois arrays
$keys = array("campeão", "vice", "terceiro");
$values = array("vasco", "flamengo", "botafogo");

$times = array_combine($keys, $values);
print_r($times);
echo "<hr>";

//array_sum () calcula a soma dos elementos de array
$soma = array(5, 6, 10, 8);
echo array_sum($soma);
echo "<br>";
$soma2 = array(6, 6, 10, 8);
$total = array_sum($soma2);
echo $total;
echo "<hr>";


//explode("/", "20/01/2021") transforma string em array

$data = "30/02/2018";
$novaData = explode('/', $data);
print_r($novaData);
echo "<hr>";

$frase ="meu nome não é johny";
$separa = explode(' ', $frase);
print_r($separa);
echo "<hr>";

//implode("-", $array) transforma array em string

$pessoas = array("Carlos", "augusto", "talita", "john");
$string = implode(", ", $pessoas);
print_r($string);








