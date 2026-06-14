<?php
if (isset($_POST['valor_da_compra']) && isset($_POST['cupom'])) {
    // Captura os valores enviados via POST
    $valor_original = floatval($_POST['valor_da_compra']);
    // Trim remove espaços em branco acidentais e strtoupper deixa tudo em maiúsculo
    $cupom = strtoupper(trim($_POST['cupom'])); 

    // Validação lógica do cupom
    if ($cupom === "VALE10") {
        $desconto = 10.00;
        // Garante que o valor da compra não fique negativo caso seja menor que R$ 10
        $valor_final = max(0, $valor_original - $desconto); 
        
        echo "<h2>Cupom válido!</h2>";
        echo "<p>Valor original: R$ " . number_format($valor_original, 2, ',', '.') . "</p>";
        echo "<p>Valor com desconto: <strong>R$ " . number_format($valor_final, 2, ',', '.') . "</strong></p>";
    } else {
        echo "<h2>Cupom inválido ou não informado.</h2>";
        echo "<p>Valor total: <strong>R$ " . number_format($valor_original, 2, ',', '.') . "</strong></p>";
    }
} else {
    echo "<p>Dados do formulário não foram recebidos corretamente.</p>";
}

echo '<br><a href="cupom.html">Voltar</a>';
?>