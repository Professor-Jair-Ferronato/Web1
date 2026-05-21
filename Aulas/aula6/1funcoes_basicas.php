<?php
/*
 * AULA 6 - Tópico 1: Funções - Declaração e Chamada
 * --------------------------------------------------
 * Uma FUNÇÃO é um bloco de código reutilizável que executa uma tarefa específica.
 * Vantagens de usar funções:
 *  - Evitar repetição de código (princípio DRY: Don't Repeat Yourself)
 *  - Organizar o código em partes menores e mais fáceis de entender
 *  - Facilitar a manutenção: basta alterar a função em um único lugar
 *
 * SINTAXE:
 *   function nomeDaFuncao() {
 *       // código a executar
 *   }
 *   nomeDaFuncao(); // chamada da função
 *
 * Neste exemplo criamos funções simples sem parâmetros e com parâmetros.
 */

// Função sem parâmetros
function saudacao() {
    echo "<h3>Olá, bem-vindo ao IFPR!</h3>";
}

// Chamando a função
saudacao();

// ---------------------------------------------------------
// Função COM parâmetro: recebe um valor ao ser chamada
function saudacaoPersonalizada($nome) {
    echo "<p>Olá, <strong>$nome</strong>! Seja bem-vindo(a).</p>";
}

saudacaoPersonalizada("Maria");
saudacaoPersonalizada("João");
saudacaoPersonalizada("Carlos");

// ---------------------------------------------------------
// Função com MÚLTIPLOS parâmetros
function apresentar($nome, $idade, $curso) {
    echo "<p>Nome: $nome | Idade: $idade anos | Curso: $curso</p>";
}

apresentar("Ana", 17, "Informática");
apresentar("Pedro", 18, "Administração");
