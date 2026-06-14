<?php
if (isset($_GET['temperatura']) && $_GET['temperatura'] !== '') {
    $temp = intval($_GET['temperatura']);

    echo "<h2>Análise do Clima</h2>";
    echo "<p>Temperatura informada: {$temp}°C</p>";

    // Lógica de decisão baseada na faixa de temperatura
    if ($temp < 15) {
        echo "<p><strong>Dica:</strong> Está frio! É uma boa ideia levar um casaco pesado.</p>";
    } elseif ($temp >= 15 && $temp <= 25) {
        echo "<p><strong>Dica:</strong> O clima está agradável. Uma jaqueta leve ou roupa de meia-estação resolve.</p>";
    } else {
        echo "<p><strong>Dica:</strong> Está calor! Use roupas leves e não se esqueça de se hidratar.</p>";
    }
} else {
    echo "<p>Por favor, informe a temperatura.</p>";
}

echo '<br><a href="q12.html">Voltar</a>';
?>