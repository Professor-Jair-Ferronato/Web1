<?php
/*
 * AULA 3 - Tópico 3: Escopo de Variáveis
 * ----------------------------------------
 * O escopo define em qual parte do código uma variável pode ser acessada.
 *  - Escopo GLOBAL: variável declarada fora de funções; acessível em todo o script.
 *  - Escopo LOCAL : variável declarada dentro de uma função; existe apenas nela.
 * Em PHP, uma função NÃO acessa automaticamente variáveis globais.
 * Para compartilhar um valor com a função, passamos como PARÂMETRO (argumento).
 * Neste exemplo, $x é global e seu valor é passado para minhaFuncao() via parâmetro $v.
 */
    $x = 10;  //escopo global

    function minhaFuncao($v){
    //escopo local
        // $x = 12;
        echo "Valor dentro da função: $v";
    }

    minhaFuncao($x);
    echo "<BR>Valor fora da função: $x";

?>