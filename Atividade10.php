<?php

class Carro{
    private string $modelo;
    private int $consumo;
    private float $tanque;

    public function __construct(string $modelo, int $consumo = 10, float $tanqueInicial = 0){
        $this->modelo = $modelo;
        $this->consumo = $consumo;
        $this->tanque = $tanqueInicial;
    }

    public function exibirInfo(){
        echo "<h2>Modelo: " . $this->modelo . " | Consumo: " . $this->consumo . " Km/L | Tanque: " . number_format($this->tanque, 2, ",", ".") . " L</h2>";
    }

    public function abastecer($litros){
        if($litros > 0){
            $this->tanque += $litros;
            echo "Foram abastecidos " . $litros . " litros no carro " . $this->modelo . "<br>";
        } else {
            echo "Erro: Não é possível abastecer!<br>";
        }
    }

    public function dirigir($km){
        if($km <= 0){
            echo "Erro: A distância deve ser positiva!<br>";
            return;
        }

        $combustivel = $km / $this->consumo;

        if($this->tanque >= $combustivel){
            $this->tanque -= $combustivel;
            echo "O carro " . $this->modelo . " percorreu: <b>" . $km . " Km</b><br>";
            echo "Combustível utilizado: " . number_format($combustivel, 2, ",", ".") . " L<br>";
        } else {
            echo "Não tem
             combustível para percerrer " . $km . " Km!<br>";
        }
    }
}

$carro = new Carro("Honda Civic", 12, 20);
$carro->exibirInfo();
$carro->dirigir(60);
$carro->abastecer(10);
$carro->exibirInfo();