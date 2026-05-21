<?php

/* function contarVogais($str)
{
    $str = strtolower($str);
    preg_match_all('/[aeiou]/', $str, $matches);
    return count($matches[0]);
}
// Teste
echo contarVogais("PHP é Incrível");
*/

function contarVogais($str)
{
    // Converte para minúsculas respeitando acentos do português
    $str = mb_strtolower($str, 'UTF-8');
    
    // Expressão regular incluindo as principais vogais acentuadas e o modificador /u
    preg_match_all('/[aeiouáéíóúâêîôûãõ]/u', $str, $matches);
    
    return count($matches[0]);
}

// Teste
echo contarVogais("PHP é Incrível"); // Agora o resultado será 4! (é, i, í, e)
