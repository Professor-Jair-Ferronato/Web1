<?php
    $itens = ["Espada de Ferro", "Cajado Mágico", "Poção de Cura", "Escudo
    Quebrado"];
    $sorteado = $itens[array_rand($itens)];
    echo "Você abriu o baú e ganhou: " . $sorteado;

    echo '<br><br><a href="Q7.html">Voltar</a>';
?>