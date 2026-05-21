<?php
/*
 * AULA 4 - Tópico 2: Estruturas de Controle - Switch e Laços de Repetição
 * -------------------------------------------------------------------------
 * SWITCH: alternativa ao if/elseif quando comparamos uma variável a vários valores.
 *  - Cada caso usa case; o break impede a execução dos casos seguintes.
 *  - O default é executado quando nenhum case for satisfeito.
 *
 * LAÇOS DE REPETIÇÃO:
 *  - for      : usado quando se sabe o número de repetições (inicio; condição; incremento).
 *  - while    : repete enquanto a condição for verdadeira; verifica ANTES de executar.
 *  - do/while : garante ao menos UMA execução; verifica a condição DEPOIS.
 */
    $dia = 9;
    switch($dia){
        case 1:
            echo "Domingo";
            break;
        case 2:
            echo "Segunda-feira";
            break;
        default:
            echo "Outro dia";
            break;
    }
    echo "<BR>for<BR>";

    for($i = 1;$i <= 5; $i++){
            echo $i . "<br>";
    }

    echo "while<BR>";
    $contador = 1;
    while($contador <= 5){
            echo $contador . "<BR>";
            $contador++;
    }

     echo "do while<BR>";
     $cont = 1;
    do{
        echo $cont . "<BR>";
        $cont++;
    } while($cont <= 7);
?>