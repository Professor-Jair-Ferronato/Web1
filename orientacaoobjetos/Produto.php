<?php

class Produto {
    // Construtor Promovido: declara e inicializa os atributos de uma só vez
    public function __construct(
        private string $nome,
        private float $preco,
        private int $estoque
    ) {
        
    }

    // Métodos Getters e Setters
    public function getNome(): string {
        return $this->nome;
    }

    public function setNome(string $nome): void {
        $this->nome = $nome;
    }

    public function getPreco(): float {
        return $this->preco;
    }

    public function setPreco(float $preco): void {
        if ($preco >= 0) {
            $this->preco = $preco;
        }
    }
    public function getEstoque(): int {
        return $this->estoque;
    }

    public function setEstoque(int $estoque): void {
        if ($estoque >= 0) {
            $this->estoque = $estoque;
        }
    }
}
