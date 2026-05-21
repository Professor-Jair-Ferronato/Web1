<?php
/*
 * AULA 6 - Tópico 4: Funções e Arrays
 * -------------------------------------
 * Funções podem receber e retornar arrays, tornando o código muito mais poderoso.
 * Neste exemplo praticamos:
 *  - Passar um array como argumento
 *  - Retornar um array a partir de uma função
 *  - Usar funções para processar listas de dados
 *
 * Também exploramos variáveis do tipo STATIC dentro de funções:
 *  - Uma variável static mantém seu valor entre chamadas consecutivas da função.
 *  - Diferente de variáveis normais que são reiniciadas a cada chamada.
 */

// Função que recebe um array e exibe seus elementos
function listarItens($itens, $titulo = "Lista") {
    echo "<h4>$titulo</h4><ul>";
    foreach ($itens as $item) {
        echo "<li>$item</li>";
    }
    echo "</ul>";
}

$materias = ["Matemática", "Português", "Física", "Programação Web"];
listarItens($materias, "Matérias do semestre");

// ---------------------------------------------------------
// Função que retorna um array filtrado (somente aprovados)
function filtrarAprovados($alunos) {
    $aprovados = [];
    foreach ($alunos as $aluno) {
        if ($aluno["media"] >= 6) {
            $aprovados[] = $aluno["nome"];
        }
    }
    return $aprovados;
}

$turma = [
    ["nome" => "Ana",    "media" => 8.5],
    ["nome" => "Bruno",  "media" => 4.0],
    ["nome" => "Carla",  "media" => 7.0],
    ["nome" => "Diego",  "media" => 5.5],
    ["nome" => "Elena",  "media" => 9.0],
];

$aprovados = filtrarAprovados($turma);
listarItens($aprovados, "Alunos Aprovados");

echo "<hr>";

// ---------------------------------------------------------
// Variável STATIC: mantém o valor entre chamadas
function contarChamadas() {
    static $contador = 0; // inicializada apenas na primeira vez
    $contador++;
    echo "<p>Esta função foi chamada $contador vez(es).</p>";
}

contarChamadas();
contarChamadas();
contarChamadas();
