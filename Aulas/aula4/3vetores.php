<?php
/*
 * AULA 4 - Tópico 3: Vetores (Arrays) Indexados
 * -----------------------------------------------
 * Um ARRAY (vetor) armazena vários valores em uma única variável.
 * No array indexado, cada elemento é acessado por um índice numérico começando em 0.
 *  - $cores[0] retorna o primeiro elemento ("Azul").
 *  - O laço foreach percorre automaticamente todos os elementos:
 *    foreach($vetor as $elemento){ ... }
 */
    $cores = ["Azul","Verde","Laranja","Branco"];
    echo $cores[0] . "<BR><BR>";
    //Percorrer um vetor em todas as posições
    foreach($cores as $cor){
        echo $cor . "<BR>";
    }
?>