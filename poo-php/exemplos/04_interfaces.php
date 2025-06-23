<?php
/**
 * Exemplo de Interface
 */

interface Pagamento {
    public function pagar(float $valor): void;
}

class Boleto implements Pagamento {
    public function pagar(float $valor): void {
        echo "Pagamento de R$ {$valor} realizado via Boleto.\n";
    }
}

class Cartao implements Pagamento {
    public function pagar(float $valor): void {
        echo "Pagamento de R$ {$valor} realizado via Cartão.\n";
    }
}

$metodo = new Cartao();
$metodo->pagar(150.75);
