
# 🧠 POO em PHP: Fundamentos Práticos

<p align="center">
  <img src="https://www.php.net/images/logos/php-logo.svg" alt="Logo PHP" width="240"/>
</p>


<img src="img/pages.png" alt="Diagrama de classes em PHP" style="width:100%;max-width:100px;">

> Repositório educativo sobre Programação Orientada a Objetos em PHP. Contém exemplos práticos dos principais conceitos de POO aplicados em PHP 7.4+.

---

## 🧠 Conceitos Abordados

Este repositório cobre os seguintes fundamentos:

- ✅ **Classes e Objetos** — estrutura básica da POO, onde a classe é um molde e o objeto é a instância desse molde.
- ✅ **Propriedades e Métodos** — atributos (variáveis) e comportamentos (funções) definidos dentro de uma classe.
- ✅ **Visibilidade** — controle de acesso a propriedades e métodos: `public`, `protected` e `private`.
- ✅ **Herança** — permite que uma classe (filha) herde métodos e propriedades de outra (pai).
- ✅ **Polimorfismo** — permite usar o mesmo nome de método com comportamentos diferentes em classes distintas.
- ✅ **Interfaces** — definem contratos que as classes devem seguir, com métodos obrigatórios.
- ✅ **Traits** — recurso para reutilizar código entre classes que não estão na mesma hierarquia.
- ⬜ **Namespaces** — organizam melhor o código e evitam conflitos de nomes.
- ⬜ **Classes Abstratas** — definem uma estrutura base para outras classes, podendo ter métodos implementados e abstratos.

---

## 💻 Pré-requisitos

Para utilizar este material, você precisa:

- PHP 7.4 ou superior
- Composer instalado globalmente
- Conhecimento básico da linguagem PHP

---

## 🚀 Instalação

Clone o repositório e instale as dependências (se houver):

```bash
git clone https://github.com/seu-usuario/poo-php.git
cd poo-php
composer install
```

---

## 📁 Estrutura do Projeto

```
poo-php/
├── exemplos/
│   ├── 01_classes_e_objetos.php
│   ├── 02_heranca.php
│   ├── 03_polimorfismo.php
│   ├── 04_interfaces.php
│   ├── 05_traits.php
│   └── ...
├── src/
│   └── classes/  # Classes reutilizáveis
└── README.md
```

---

## ⚙️ Explicação das Partes
### 1. [`01_classes_e_objetos.php`](poo-php/exemplos/01_classes_e_objetos.php)
Cria uma classe `Pessoa` com propriedades e um método para exibir informações.

### 2. [`02_heranca.php`](poo-php/exemplos/02_heranca.php)
Demonstra como uma classe `Funcionario` pode herdar de `Pessoa` e adicionar novos métodos.

### 3. [`03_polimorfismo.php`](poo-php/exemplos/03_polimorfismo.php)
Mostra como diferentes classes implementam o mesmo método de forma distinta.

### 4. [`04_interfaces.php`](poo-php/exemplos/04_interfaces.php)
Define uma interface `Pagamento` com um método `pagar()`, e duas classes que a implementam.

### 5. [`05_traits.php`](poo-php/exemplos/05_traits.php)
Apresenta como compartilhar métodos comuns entre classes com `trait Log`.

---

## 📚 Referências

- Documentação oficial do PHP: https://www.php.net/manual/pt_BR/
- Padrões de Projeto: https://refactoring.guru/pt-br/design-patterns

---

## 📄 Licença

Este projeto está sob licença MIT. Consulte o arquivo [LICENSE](LICENSE.md) para mais detalhes.
