<?php
// 1. Validação de envio: Se os dados não forem enviados, exibe alerta JS e volta
if (!isset($_POST['valor_saque']) || $_POST['valor_saque'] === '') {
    echo "<script>
            alert('Erro: Nenhum dado foi enviado. Por favor, preencha o formulário.');
            window.location.href = 'q13.html';
          </script>";
    exit; // Interrompe a execução do script para não renderizar o restante do HTML
}

$saque = intval($_POST['valor_saque']);

// 2. Validação de Regras de Negócio: Se falhar, exibe alerta JS correspondente e volta
if ($saque < 20) {
    $mensagem = "Erro: O valor solicitado é inferior ao mínimo permitido de R$ 20,00.";
    echo "<script>
            alert('$mensagem');
            window.history.back();
          </script>";
    exit;
} 
elseif ($saque % 10 !== 0) {
    echo "<script>
            alert('Erro: O valor solicitado deve ser múltiplo de R$ 10,00 (Notas disponíveis: 10, 20 e 50).');
            window.history.back();
          </script>";
    exit;
}

// 3. Sucesso: Se passar por todas as validações acima, usa estilos CSS para exibir o resultado
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Saque Autorizado</title>
   
</head>
<body>

    <div class="alerta-sucesso">
        <h2>Operação Concluída!</h2>
        <p>Saque de <strong>R$ <?php echo number_format($saque, 2, ',', '.'); ?></strong> autorizado com sucesso.</p>
        <p>Por favor, retire o seu dinheiro na boca do caixa.</p>
        <a class="botao-voltar" href="q13.html">« Efetuar outro saque</a>
    </div>

</body>
</html>