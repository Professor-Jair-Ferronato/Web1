<?php
// Verifica se o parâmetro 'categoria' foi enviado via GET e não está vazio
if (isset($_GET['categoria']) && !empty($_GET['categoria'])) {
    $categoria = $_GET['categoria'];

    echo "<h2>Produtos da categoria: " . htmlspecialchars($categoria) . "</h2>";
    echo "<ul>";

    // Estrutura condicional para exibir os produtos com base na escolha
    switch ($categoria) {
        case "Eletrônicos":
            echo "<li>Smartphone Samsung Galaxy</li>";
            echo "<li>Notebook Dell Inspiron</li>";
            echo "<li>Fone de Ouvido Bluetooth</li>";
            break;
        case "Roupas":
            echo "<li>Camiseta Algodão Básica</li>";
            echo "<li>Calça Jeans Slim</li>";
            echo "<li>Jaqueta Corta-Vento</li>";
            break;
        case "Livros":
            echo "<li>O Senhor dos Anéis</li>";
            echo "<li>Pai Rico, Pai Pobre</li>";
            echo "<li>Código Limpo (Clean Code)</li>";
            break;
        default:
            echo "<li>Categoria não encontrada.</li>";
            break;
    }
    
    echo "</ul>";
} else {
    echo "<p>Por favor, selecione uma categoria.</p>";
}

echo '<br><a href="produtos.html">Voltar</a>';
?>