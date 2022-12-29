<?php

//arrays numéricos
$carros = array("BMW", "Veloster", "Hilux");
print_r($carros);
echo "<hr>";
echo $carros[1];
echo "<hr>";

$cores = array(1=>"amarelo", 2=>"vermelho", 3=>"azul");
$cores[] = "preto";
$cores[12] = "cinza";
echo $cores[3];
echo "<hr>";
print_r($cores);
echo "<hr>";
echo $cores[12];
echo "<hr>";

//outra forma de array
$motos = array();
$motos[] = "Yamaha";
$motos[] = "Honda";
$motos[5] = "Pop 100";
$motos[4] = "Suzuki";
print_r($motos);
echo "<hr>";
echo $motos[5];
echo "<hr>";

$clientes = ["rodrigo", "Pedro", "Bia"];
print_r($clientes);
echo "<hr>";
////função count
echo count($carros);
echo "<hr>";
echo count($cores);
echo "<hr>";
echo count($clientes);
echo "<hr>";
$totalClientes = count($clientes);
echo $totalClientes;
echo "<hr>";
///loop para arrays com foreach

foreach($cores as $quantidade){
    echo $quantidade . "<br>";
}
echo "<hr>";

foreach($carros as $modelos){
    echo $modelos . "<br>";
}
echo "<hr>";

foreach($clientes as $nome){
    echo $nome . " faz parte da clientela."."<br>";
}
echo "<hr>";

foreach($motos as $marca){
    echo "Temos a moto de modelo ". $marca  ."<br>"; 
}
echo "<hr>";
/// Arrays associativos
//as chaves são strings
$cachorro =array("nome"=> "Filó", "idade"=> 03, "cor"=> "creme");
echo $cachorro["cor"];
echo "<hr>";
echo $cachorro["nome"];
echo "<hr>";
$cachorro["comida favorita"] = "carne";
print_r($cachorro);
echo "<hr>";

foreach($cachorro as $dog => $caracteristica) {
    echo $dog.": ".$caracteristica."."."<br>";
}
echo "<hr>";


///arrays multidimensionais
$times = array(
    "cariocas"=> array("vasco", "flamengo", "botafogo"),
    "paulistas"=> array("corinthians", "palmeiras", "marola"),
    "baianos"=> array("bahia", "vitoria", "itabuna")
                );
echo $times["cariocas"][0];
echo "<br>";
echo $times["paulistas"][1];
echo "<br>";
echo $times["baianos"][2];
echo "<hr>";

$classificacao = array(
    "cariocas"=> array("campeão"=>"vasco", "vice"=>"flamengo", "terceiro lugar"=>"botafogo"),
    "paulistas"=> array("primeiro lugar"=>"corinthians", "segundo lugar"=>"palmeiras", "terceiro lugar"=>"marola"),
    "baianos"=> array("ouro"=>"bahia", "prata"=>"vitoria", "bronze"=>"itabuna")
                );
foreach($classificacao["cariocas"] as $indice => $valor){
    echo $indice. ": ".$valor . "<br>";
}
echo "<hr>";

foreach($classificacao["paulistas"] as $indice => $valor){
    echo $indice. ": ".$valor . "<br>";
}
echo "<hr>";

foreach($classificacao["baianos"] as $indice => $valor){
    echo $indice. ": ".$valor . "<br>";
}
echo "<hr>";