<?php
/*
 * AULA 6 - Tópico 3: Parâmetros com Valor Padrão (Default)
 * ---------------------------------------------------------
 * É possível definir um valor PADRÃO para um parâmetro.
 * Se o argumento não for passado na chamada, o valor padrão é usado automaticamente.
 *
 * SINTAXE:
 *   function nomeFuncao($param = "valorPadrao") { ... }
 *
 * Regra importante:
 *   Parâmetros com valor padrão devem vir DEPOIS dos parâmetros obrigatórios.
 *
 * Também veremos como passar argumentos por REFERÊNCIA com &:
 *   - Normalmente, PHP passa o valor (cópia). Alterar dentro da função não afeta o original.
 *   - Com &$param, a função trabalha diretamente com a variável original.
 */

// Parâmetro com valor padrão
function cumprimentar($nome, $saudacao = "Olá") {
    echo "<p>$saudacao, $nome!</p>";
}

cumprimentar("Beatriz");               // usa o padrão "Olá"
cumprimentar("Rafael", "Bom dia");     // sobrescreve o padrão
cumprimentar("Lúcia", "Boa noite");

echo "<hr>";

// ---------------------------------------------------------
// Passagem por VALOR (padrão): a variável original não é alterada
function tentaIncrementar($numero) {
    $numero++;
    echo "<p>Dentro da função (por valor): $numero</p>";
}

$x = 10;
tentaIncrementar($x);
echo "<p>Fora da função (por valor): $x</p>"; // continua 10

echo "<hr>";

// ---------------------------------------------------------
// Passagem por REFERÊNCIA (&): altera a variável original
function incrementaPorReferencia(&$numero) {
    $numero++;
    echo "<p>Dentro da função (por referência): $numero</p>";
}

$y = 10;
incrementaPorReferencia($y);
echo "<p>Fora da função (por referência): $y</p>"; // agora é 11
