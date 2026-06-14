<?php
if (isset($_POST['nome']) && isset($_POST['idade'])) {
    $nome = htmlspecialchars(trim($_POST['nome']));
    $idade = intval($_POST['idade']);

    // Estrutura condicional simples para verificar a maioridade
    if ($idade >= 18) {
        echo "<h2>Inscrição confirmada!</h2>";
        echo "<p><strong>$nome</strong>, você tem permissão para acessar o evento.</p>";
    } else {
        echo "<h2>Inscrição recusada!</h2>";
        echo "<p>Desculpe, <strong>$nome</strong>, o acesso ao evento é permitido apenas para maiores de 18 anos.</p>";
    }
} else {
    echo "<p>Por favor, preencha o formulário de inscrição primeiro.</p>";
}

echo '<br><a href="evento.html">Voltar</a>';
?>