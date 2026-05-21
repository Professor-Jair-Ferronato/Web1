<?php

function gerarLoot()
{
    $itens = ["Espada de Ferro", "Cajado Mágico", "Poção de Cura", "Escudo Quebrado"];
    return $itens[array_rand($itens)];
}
// Teste
echo gerarLoot();
