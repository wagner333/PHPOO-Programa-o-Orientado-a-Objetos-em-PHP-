<?php
/**
 * Exemplo de Classe e Objeto
 */

class Pessoa {
    public string $nome;
    public int $idade;

    public function __construct(string $nome, int $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function apresentar(): void {
        echo "Olá, meu nome é {$this->nome} e tenho {$this->idade} anos.\n";
    }
}

// Instanciando objeto
$pessoa = new Pessoa("Wagner", 25);
$pessoa->apresentar();
