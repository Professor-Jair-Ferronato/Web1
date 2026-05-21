<?php
/*
 * AULA 4 - Tópico 1: Constantes e Operador Ternário
 * ---------------------------------------------------
 * CONSTANTE: valor fixo que não muda durante a execução do script.
 *  - Definida com define("NOME", valor); e usada sem o $.
 *  - Por convenção, constantes são escritas em LETRAS_MAIÚsCULAS.
 *
 * OPERADOR TERNÁRIO: forma abreviada do if/else.
 *  - Sintaxe: (condição) ? "se verdadeiro" : "se falso"
 *
 * ESTRUTURA if/elseif/else: permite testar múltiplas condições em sequência.
 */
   
    define("ESCOLA","Instituto Federal do Paraná<BR>"); //declaração constante
    echo ESCOLA;

    $nota = 5;
    echo ($nota >= 6) ? "Aprovado" : "Reprovado";
    echo "<BR>";

    $idade = 11;
    if($idade < 12){
        echo "Criança";
    } elseif ($idade < 18){
        echo "Adolescente";
    } else {
        echo "Adulto";
    }

?>