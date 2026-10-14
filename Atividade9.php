<?php

class Produto{
    private string $nome;
    private float $preco;
    private int $estoque;

    public function __construct(string $nome, float $preco, int $estoque){
        $this->nome = $nome;
        $this->preco = $preco;
        $this->estoque = $estoque;
    }

    public function exibirInfo(){
        echo "<h2>Nome: " . $this->nome . " - Preço: " . $this->preco . " - Estoque: " . $this->estoque . "</h2>";
    }

    public function vender($quantidade){
        if($quantidade <= $this->estoque){
            $this->estoque -=$quantidade;
            echo "Você vendeu " . $this->estoque . " Com sucesso!";
        } else {
            echo "Quantidade insuficiente";
        }
    }

    public function reajustarPreco($percentual){
        $this->preco += $percentual;
    }
}

$produto = new Produto("Teclado Gamer", 250, 10);
$produto->vender(2);
$produto->reajustarPreco(10);
$produto->exibirInfo();