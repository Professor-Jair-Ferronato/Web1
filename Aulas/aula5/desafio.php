<?php
/*
 * AULA 5 - Desafio: Array Multidimensional com Cálculo de Média
 * ---------------------------------------------------------------
 * Neste desafio trabalhamos com um array multidimensional onde cada aluno
 * possui um nome e um sub-array de notas.
 * O objetivo é percorrer todos os alunos, somar suas notas e calcular a média.
 * Conceitos aplicados:
 *  - Array multidimensional (array dentro de array)
 *  - foreach aninhado para percorrer linhas e notas
 *  - Acumulador ($soma) para somar os valores de cada iteração
 *  - Cálculo de média aritmética: soma dividida pela quantidade de notas
 */
    $alunos = [
        ["nome" => "Ana", "notas" => 
        [8,6,8,5]],
        ["nome" => "Pedro", "notas" => [4,8,2,5]],
        ["nome" => "Carlos", "notas" => [7,9,4,5]]
    ];

    foreach($alunos as $aluno){
        echo "Aluno: " . $aluno["nome"] . "<BR>";
        $soma = 0;
        foreach($aluno["notas"] as $nota){
            echo "Nota: $nota <BR>";
            $soma += $nota;
        }
        $media = $soma / 4;
        echo "Média: " . $media . "<BR><BR>";
    }
?>