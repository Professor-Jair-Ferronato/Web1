<?php
/*
 * AULA 6 - Tópico 2: Funções com Retorno (return)
 * ------------------------------------------------
 * Uma função pode PROCESSAR dados e DEVOLVER (retornar) um resultado
 * para quem a chamou usando a instrução return.
 *
 * Diferença:
 *  - Sem return: a função exibe algo na tela, mas não devolve valor.
 *  - Com return: a função devolve um valor que pode ser armazenado em
 *                uma variável ou usado em uma expressão.
 *
 * Boas práticas:
 *  - Funções com return são mais flexíveis: o código que chamou decide o que fazer com o resultado.
 *  - Após o return, a execução da função é encerrada imediatamente.
 */

// Função que retorna a soma de dois números
function somar($a, $b) {
    return $a + $b;
}

$resultado = somar(10, 5);
echo "<p>10 + 5 = $resultado</p>";

// ---------------------------------------------------------
// Função que retorna o maior de dois números
function maior($a, $b) {
    if ($a > $b) {
        return $a;
    } else {
        return $b;
    }
}

echo "<p>O maior entre 8 e 13 é: " . maior(8, 13) . "</p>";

// ---------------------------------------------------------
// Função que retorna uma string formatada
function formatarNome($nome, $sobrenome) {
    return strtoupper($sobrenome) . ", " . ucfirst(strtolower($nome));
}

$nomeFormatado = formatarNome("ana", "souza");
echo "<p>Nome formatado: $nomeFormatado</p>";

// ---------------------------------------------------------
// Função que calcula a média de notas
function calcularMedia($n1, $n2, $n3, $n4) {
    $media = ($n1 + $n2 + $n3 + $n4) / 4;
    return $media;
}

$media = calcularMedia(7, 8, 6, 9);
echo "<p>Média das notas: $media</p>";
echo "<p>Situação: " . ($media >= 6 ? "Aprovado" : "Reprovado") . "</p>";
