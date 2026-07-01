<?php

class ProdutoEletronico extends Produto {
    public function __construct(
        string $nome,
        float $preco,
        int $estoque,
        private int $garantiaMeses
    ) {
        // Equivale ao super(nome, preco, estoque) do Java
        parent::__construct($nome, $preco, $estoque);
    }

    public function getGarantiaMeses(): int {
        return $this->garantiaMeses;
    }

    public function setGarantiaMeses(int $garantiaMeses): void {
        if ($garantiaMeses >= 0) {
            $this->garantiaMeses = $garantiaMeses;
        }
    }
}
