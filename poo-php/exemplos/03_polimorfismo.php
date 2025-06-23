<?php
/**
 * Exemplo de Polimorfismo
 */

interface Animal {
    public function emitirSom(): void;
}

class Cachorro implements Animal {
    public function emitirSom(): void {
        echo "O cachorro late: Au Au\n";
    }
}

class Gato implements Animal {
    public function emitirSom(): void {
        echo "O gato mia: Miau\n";
    }
}

$animais = [new Cachorro(), new Gato()];

foreach ($animais as $animal) {
    $animal->emitirSom();
}
