<?php
require_once 'Produto.php';
require_once 'ProdutoEletronico.php';

// Instanciando um objeto (repare no uso do new)
$meuProduto = new Produto("Notebook Gamer", 4500.00, 15);

// Exibindo dados através do método Getter
echo "Produto: " . $meuProduto->getNome() . "<BR>";
echo "Preço Original: R$ " . $meuProduto->getPreco() . "<BR>";

// Alterando valores via Setter
$meuProduto->setPreco(4200.00);
echo "Preço com Desconto: R$ " . $meuProduto->getPreco() . "<BR>";
echo "Estoque: " . $meuProduto->getEstoque() . " unidades<BR>";

// Criando um produto eletrônico
$celular = new ProdutoEletronico("Smartphone XYZ", 2500.00, 30, 24);
echo "<BR>Produto Eletrônico: " . $celular->getNome() . "<BR>";
echo "Preço: R$ " . $celular->getPreco() . "<BR>";
echo "Garantia: " . $celular->getGarantiaMeses() . " meses<BR>";
// Criando o array de objetos (Coleção)
$catalogo = [
    $meuProduto,
    $celular
];
?>


    <h3>Catálogo de Produtos</h3>
<ul>
    <?php foreach ($catalogo as $produto): ?>
        <li>Produto: <?php echo $produto->getNome(); ?> - Preço: R$ <?php echo number_format($produto->getPreco(), 2, ',', '.'); ?></li>
    <?php endforeach; ?>
</ul>

<table border="1" cellpadding="5">
    <tr>
        <th>Produto</th>
        <th>Preço</th>
        <th>Estoque</th>
          <th>Garantia</th>
    </tr>
    <?php foreach ($catalogo as $produto): ?>
    <tr>
        <td><?php echo $produto->getNome(); ?></td>
        <td>R$ <?php echo number_format($produto->getPreco(), 2, ',', '.'); ?></td>
        <td><?php echo $produto->getEstoque(); ?> unidades</td>
        <td>
            <?php 
            // Verifica se o produto atual pertence à classe ProdutoEletronico
            if ($produto instanceof ProdutoEletronico) {
                echo $produto->getGarantiaMeses() . " meses";
            } else {
                echo "-"; // Ou deixe em branco: echo "";
            }
            ?>
        </td>
    </tr>
    <?php endforeach; ?>