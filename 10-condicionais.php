
<?php
/*condicionais if else elseif*/
$numero = 13;

    if ($numero == 10):
        echo "É igual a 10";
    elseif($numero <= 9):
        echo "É menor ou igual a 9";
    elseif($numero >= 11):
        echo "É maior ou igual a 11";    
    else:
        echo "É diferente de 10";
    endif;
    
    echo "\n" . "--------------------------------------------" . "\n";
    
    $media = 7;
    echo ($media >=7) ? "Aprovado" : "Reprovado!";
    echo "\n";
    
    $media = 6;
    echo ($media >=7) ? "Aprovado" : "Reprovado!"; 
    
    
      echo "\n" . "--------------------------------------------" . "\n";
//condicionais, switch e case
    $cor = "cinza";
    switch ($cor):
        case "vermelho": 
        echo "sua cor preferida é vermelho";
        break;
        case "verde":
        echo "sua cor preferida é o verde";
        breake;
        case "azul":
        echo "sua cor preferida é azul";
        break;
        default:
            echo "Sua cor preferida não é vermelho, ou verde, nem azul e talvez nem exista!";
    endswitch;
    
    
    
    
?>
