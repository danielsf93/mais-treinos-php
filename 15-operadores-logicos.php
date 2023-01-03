<?php

//operadores lógicos para comparações entre expressoes
//e (&& - and)
//ou (|| -or)
//ou exclusivo (xor)
//negacao (!)


//e (&& - and)
echo "&& - and" . "\n";
$idade = 25;
$nome = "rodrigo";
if(($idade == 25) and ($nome =="rodrigo")):
        echo "É verdadeiro";
    else:
        echo "É falso";
    endif;
    
    echo "\n";
    
if(($idade == 25) && ($nome =="radrigo")):
        echo "É verdadeiro";
    else:
        echo "É falso";
    endif;    



   echo "\n" . "--------------------------------------------" . "\n";
//ou (|| -or)
echo "|| - or - quando pelomenos uma é verdadeira" . "\n";
$idade = 25;
$nome = "rodrigo";
if(($idade == 25) or ($nome =="rodrigo")):
        echo "É verdadeiro";
    else:
        echo "É falso";
    endif;
    
    echo "\n";
    
if(($idade == 24) || ($nome =="rodrigo")):
        echo "É verdadeiro";
    else:
        echo "É falso";
    endif;    





   echo "\n" . "--------------------------------------------" . "\n";
//ou exclusivo (xor)
echo "xor - quando somente uma expressao é verdadeira, se os dois forem verdadeiros retorna como falso" . "\n";
// nao faz sentido! matematica chora
$idade = 25;
$nome = "rodrigo";
if(($idade == 25) xor ($nome =="rodrigo")):
        echo "É verdadeiro";
    else:
        echo "É falso";
    endif;
    
    echo "\n";
    
if(($idade == 24) xor ($nome =="rodrigo")):
        echo "É verdadeiro";
    else:
        echo "É falso";
    endif;    




   echo "\n" . "--------------------------------------------" . "\n";
//negacao (!)
echo "! negação" . "\n";
$idade = 25;
$nome = "rodrigo";
if(!($idade == 25) and ($nome =="rodrigo")):
        echo "É verdadeiro";
    else:
        echo "É falso";
    endif;
    
    echo "\n";
    
if(!($idade == 24) and ($nome =="rodrigo")):
        echo "É verdadeiro";
    else:
        echo "É falso";
    endif;




   echo "\n" . "--------------------------------------------" . "\n";
   
   
   
   
   
   
   
   
    
?>
