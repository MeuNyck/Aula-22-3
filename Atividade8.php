<?php

class Funcionario{
    private string $nome;
    private float $salario;

    public function __construct(string $nome, float $salario = 1000.00){
        $this->nome = $nome;
        $this->salario = $salario;
    }

    public function exibirInformacoes(){
        echo "<h2>Nome: " . $this->nome . " - Salário: " . $this->salario . "</h2>";
    }

    public function aumentarSalario($percentual){
        if ($percentual < 0) {
            echo "Percentual inválido. O aumento não pode ser negativo.";
            return;
        } else {
            $this->salario += $this->salario * ($percentual / 100);
        }
    }
}

$funcionario1 = new Funcionario("Sérgio", 2000);
$funcionario1->aumentarSalario(10);
$funcionario1->exibirInformacoes();