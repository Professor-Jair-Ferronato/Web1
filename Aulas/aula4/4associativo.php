<?php
/*
 * AULA 4 - Tópico 4: Arrays Associativos e Multidimensionais
 * ------------------------------------------------------------
 * ARRAY ASSOCIATIVO: usa chaves nomeadas (strings) em vez de índices numéricos.
 *  - Sintaxe: ["chave" => "valor", ...]
 *  - Acesso: $pessoa1['nome']
 *
 * ARRAY MULTIDIMENSIONAL: array que contém outros arrays como elementos.
 *  - Permite representar tabelas de dados (linhas e colunas).
 *  - Para percorrer, usamos foreach aninhado: um para as linhas e outro para as colunas.
 */
    $pessoa1 = ["nome" => "Maria","idade" => 28];
    echo "Nome: " . $pessoa1['nome'] ."<BR>" . "Idade: " . $pessoa1['idade'] . "<BR>";

    echo "<BR><BR>";
    $pessoas = [
        ["nome" => "João","idade" =>18, "cidade" => "Curitiba"],
        ["nome" => "Ana", "idade" => 92, "cidade" => "São Paulo"]
    ];

    foreach($pessoas as $pessoa){
        foreach($pessoa as $chave => $valor){
            echo $chave . ":" . $valor . "<BR>";
        }
        echo "<BR>";
    }
    echo "<BR>";

?>