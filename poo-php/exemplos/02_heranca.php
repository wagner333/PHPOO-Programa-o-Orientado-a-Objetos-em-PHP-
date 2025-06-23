<?php
/**
 * Exemplo de Herança
 */

class Pessoa {
    protected string $nome;

    public function __construct(string $nome) {
        $this->nome = $nome;
    }

    public function getNome(): string {
        return $this->nome;
    }
}

class Funcionario extends Pessoa {
    private string $cargo;

    public function __construct(string $nome, string $cargo) {
        parent::__construct($nome);
        $this->cargo = $cargo;
    }

    public function apresentar(): void {
        echo "{$this->getNome()} trabalha como {$this->cargo}.\n";
    }
}

$func = new Funcionario("Clara", "Engenheira");
$func->apresentar();
