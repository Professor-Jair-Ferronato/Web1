<?php
/*
 * AULA 5 - Vetores: Ordenação e Contagem
 * ----------------------------------------
 * Funções úteis para arrays indexados:
 *  - print_r($array) : exibe o conteúdo do array de forma legível.
 *  - sort($array)    : ordena os elementos em ordem CRESCENTE (A-Z / 0-9).
 *  - rsort($array)   : ordena os elementos em ordem DECRESCENTE (Z-A / 9-0).
 *  - count($array)   : retorna a quantidade de elementos do array.
 * Observação: sort() e rsort() reindexam o array a partir de 0 após ordenar.
 */
    $frutas = ["maçã","banana","melancia","laranja","pera"];
    echo "Lista de frutas:<BR>";
    print_r($frutas);
    echo "<BR><BR>Lista em ordem crescente de frutas:<BR>";
    //Ordena o vetor em ordem crescente
    sort($frutas);
    print_r($frutas);
    echo "<BR><BR>Lista em ordem decrescente de frutas<br>";
    //Ordena o vetor em ordem descrescente
    rsort($frutas);
    print_r($frutas);
    echo "<BR><BR>";

    echo "O tamanho do vetor é: " . count($frutas);

?>