<?php
/*
 * AULA 5 - Vetores: Chaves, Valores e Arrays Associativos
 * --------------------------------------------------------
 * Funções úteis para arrays associativos:
 *  - array_keys($array)   : retorna um array contendo apenas as CHAVES.
 *  - array_values($array) : retorna um array contendo apenas os VALORES.
 *  - print_r($array)      : exibe toda a estrutura do array.
 * O foreach percorre os valores de um array associativo diretamente:
 *   foreach($array as $valor){ ... }
 * Para acessar chave e valor juntos:
 *   foreach($array as $chave => $valor){ ... }
 */
    $aluno = [
        "nome" => "Carla",
        "idade" => 25,
        "curso" => "Informática"
    ];

    echo "Campos definidos:<br>";
    print_r($aluno);
    echo "<br>Somente as chaves:<BR>";
    print_r(array_keys($aluno));
    echo "<BR>";
    echo "Somente os valores: <BR>";
    print_r(array_values($aluno));
    echo "<BR>";
    foreach($aluno as $info){
        echo $info . "<BR>";
    }

?>