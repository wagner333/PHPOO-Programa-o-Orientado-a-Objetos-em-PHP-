
# 🧠 POO em PHP: Fundamentos Práticos

![GitHub repo size](https://img.shields.io/github/repo-size/seu-usuario/poo-php?style=for-the-badge)
![PHP Version](https://img.shields.io/badge/PHP-7.4%2B-blue?style=for-the-badge)
![GitHub license](https://img.shields.io/github/license/seu-usuario/poo-php?style=for-the-badge)

<img src="php-oop.png" alt="Diagrama de classes em PHP" style="width:100%;max-width:600px;">

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

### 1. `classes_e_objetos.php`
Cria uma classe `Pessoa` com propriedades e um método para exibir informações.

### 2. `heranca.php`
Demonstra como uma classe `Funcionario` pode herdar de `Pessoa` e adicionar novos métodos.

### 3. `polimorfismo.php`
Mostra como diferentes classes implementam o mesmo método de forma distinta.

### 4. `interfaces.php`
Define uma interface `Pagamento` com um método `pagar()`, e duas classes que a implementam.

### 5. `traits.php`
Apresenta como compartilhar métodos comuns entre classes com `trait Log`.

---

## 📚 Referências

- Documentação oficial do PHP: https://www.php.net/manual/pt_BR/
- Padrões de Projeto: https://refactoring.guru/pt-br/design-patterns

---

## 📄 Licença

Este projeto está sob licença MIT. Consulte o arquivo [LICENSE](LICENSE.md) para mais detalhes.
