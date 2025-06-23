<?php
/**
 * Exemplo de Trait
 */

trait Log {
    public function registrar(string $mensagem): void {
        echo "[LOG] " . date('Y-m-d H:i:s') . " - {$mensagem}\n";
    }
}

class Usuario {
    use Log;

    public function login(string $usuario): void {
        $this->registrar("Usuário '{$usuario}' fez login.");
    }
}

$user = new Usuario();
$user->login("admin");
