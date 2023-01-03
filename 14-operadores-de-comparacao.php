<?php

//oh parte mais chata, não faz sentido nenhum, principalmente quando a funcao serve para negacao e volta um "positivo", a matemática chora!!!
//operadores de comparacao
//== igual
//!= diferente
//=== identico
//!===
//<>
//< menor q
//> maior q
//<= menor ou igual
//>= maior ou igual
//<=>

   echo "\n" . "--------------------------------------------" . "\n";
//== igual
//comparacao == nunca somente um =, sempre dois ==
    if (10 == 10):
        echo "positivo";
    else:
        echo "negativo";
    endif;
    echo "\n";
        if (10 == "10"):
        echo "positivo";
    else:
        echo "negativo";
    endif;


echo "\n" . "--------------------------------------------" . "\n";

//!= diferente (nao faz sentido, a matematica chora aqui)
        if (10 != 11): //se for nao-igual a 
        echo "positivo";//se for nao-igual a 
    else:
        echo "negativo"; //se for igual
    endif;
    echo "\n";
        if (10 != 10):
        echo "positivo";
    else:
        echo "negativo";
    endif;


echo "\n" . "--------------------------------------------" . "\n";
//=== identico
    echo "funcao de identico" . "\n";
     if (10 === 11): // 
        echo "positivo";// 
    else:
        echo "negativo"; //
    endif;
    echo "\n";
        if (10 === 10):
        echo "positivo";
    else:
        echo "negativo";
    endif;
    
    //string para identico
    echo "\n";
        if (10 === "10"):
        echo "positivo";
    else:
        echo "negativo";
    endif;

echo "\n" . "--------------------------------------------" . "\n";
//!== (nao faz sentido, a matematica chora aqui)
 echo "funcao de NAO identico" . "\n";
     if (10 !== 11): // 
        echo "positivo";// 
    else:
        echo "negativo"; //
    endif;
    echo "\n";
        if (10 !== 10):
        echo "positivo";
    else:
        echo "negativo";
    endif;




echo "\n" . "--------------------------------------------" . "\n";
//<> sinal de diferente

 echo "funcao diferente" . "\n";
     if (10 <> 11):
        echo "positivo"; 
    else:
        echo "negativo";
    endif;
    echo "\n";
        if (10 <> 10):
        echo "positivo";
    else:
        echo "negativo";
    endif;



echo "\n" . "--------------------------------------------" . "\n";
//< menor q

 echo "funcao menor que" . "\n";
     if (10 < 11):
        echo "positivo"; 
    else:
        echo "negativo";
    endif;
    echo "\n";
        if (10 < 8):
        echo "positivo";
    else:
        echo "negativo";
    endif;




echo "\n" . "--------------------------------------------" . "\n";
//> maior q
 echo "funcao maior que" . "\n";
     if (10 > 11):
        echo "positivo"; 
    else:
        echo "negativo";
    endif;
    echo "\n";
        if (10 > 8):
        echo "positivo";
    else:
        echo "negativo";
    endif;




echo "\n" . "--------------------------------------------" . "\n";
//<= menor ou igual
 echo "funcao menor ou igual" . "\n";
     if (10 <= 11):
        echo "positivo"; 
    else:
        echo "negativo";
    endif;
    echo "\n";
        if (10 <= 8):
        echo "positivo";
    else:
        echo "negativo";
    endif;




echo "\n" . "--------------------------------------------" . "\n";
//>= maior ou igual

 echo "funcao maior ou igual" . "\n"; 
     if (10 >= 11):
        echo "positivo"; 
    else:
        echo "negativo";
    endif;
    echo "\n";
        if (10 >= 8):
        echo "positivo";
    else:
        echo "negativo";
    endif;


echo "\n" . "--------------------------------------------" . "\n";
//<=> space cheap comparacao

var_dump(20<=>30);
echo "\n";
var_dump(20<=>20);
echo "\n";var_dump(30<=>20);
echo "\n";
   
 
    
?>
