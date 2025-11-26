<div align="center">

# 📚 Books API

[![Laravel](https://img.shields.io/badge/Laravel-12.0-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)](https://laravel.com)
[![PHP](https://img.shields.io/badge/PHP-8.2-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://www.php.net)
[![PostgreSQL](https://img.shields.io/badge/PostgreSQL-316192?style=for-the-badge&logo=postgresql&logoColor=white)](https://www.postgresql.org)
[![License](https://img.shields.io/badge/License-MIT-green?style=for-the-badge)](./LICENSE)

**Uma API RESTful robusta e moderna para gerenciar uma biblioteca digital de livros, autores e gêneros.**

[Funcionalidades](#-funcionalidades) • [Tech Stack](#-tech-stack) • [Instalação](#-instalação) • [Documentação da API](#-documentação-da-api) • [Contato](#-contato)

</div>

---

## 📖 Sobre o Projeto

**Books API** é uma aplicação backend construída com **Laravel 12**, projetada para servir como a infraestrutura central para um sistema de gerenciamento de biblioteca ou uma livraria online. Ela fornece um conjunto abrangente de endpoints para gerenciar livros, seus autores e gêneros associados, garantindo a integridade dos dados e facilidade de uso.

Este projeto demonstra práticas modernas de desenvolvimento backend, incluindo **design de API RESTful**, **migrations de banco de dados**, **gerenciamento de relacionamentos** e **documentação automatizada**.

## ✨ Funcionalidades

-   **📚 Gerenciamento de Livros**: Criação, leitura, atualização e exclusão de registros de livros com suporte para ISBNs.
-   **✍️ Gerenciamento de Autores**: Gerencie perfis de autores com recursos avançados como **Soft Deletes** para preservar o histórico de dados.
-   **🏷️ Categorização de Gêneros**: Organize livros em gêneros para melhor descoberta.
-   **🔍 Filtragem Avançada**: Recupere autores excluídos (soft-deleted) e restaure-os quando necessário.
-   **🔐 Autenticação**: Endpoints de API seguros usando **Laravel Sanctum** (pronto para integração).
-   **📄 Documentação Gerada Automaticamente**: Documentação da API ao vivo alimentada pelo **Scramble**, acessível em `/docs/api`.
-   **🧪 Testes**: Inclui cobertura de testes usando **Pest PHP**.

## 🛠 Tech Stack

-   **Framework**: [Laravel 12](https://laravel.com)
-   **Linguagem**: [PHP 8.2+](https://www.php.net)
-   **Banco de Dados**: PostgreSQL
-   **Documentação da API**: [Scramble](https://scramble.dedoc.co)
-   **Testes**: [Pest](https://pestphp.com)
-   **Containerização**: Docker (via Laravel Sail)

## 🚀 Instalação e Primeiros Passos

Siga estes passos para configurar o projeto localmente.

### Pré-requisitos

-   PHP 8.2 ou superior
-   Composer
-   PostgreSQL (ou Docker)

### Passos

1.  **Clone o repositório**
    ```bash
    git clone https://github.com/seu-usuario/books-api.git
    cd books-api
    ```

2.  **Instale as dependências**
    ```bash
    composer install
    ```

3.  **Configure o Ambiente**
    ```bash
    cp .env.example .env
    php artisan key:generate
    ```
    *Atualize o arquivo `.env` com as credenciais do seu banco de dados.*

4.  **Execute Migrations e Seeders**
    ```bash
    php artisan migrate --seed
    ```

5.  **Inicie o Servidor**
    ```bash
    php artisan serve
    ```

A API estará disponível em `http://localhost:8000`.

## 📑 Documentação da API

Este projeto usa **Scramble** para gerar automaticamente a documentação da API.

Assim que o servidor estiver rodando, visite:
👉 **[http://localhost:8000/docs/api](http://localhost:8000/docs/api)**

### Principais Endpoints

| Método | Endpoint | Descrição |
| :--- | :--- | :--- |
| `GET` | `/api/v1/books` | Listar todos os livros |
| `GET` | `/api/v1/authors` | Listar todos os autores |
| `GET` | `/api/v1/genre` | Listar todos os gêneros |
| `GET` | `/api/v1/trashed` | Listar autores excluídos (soft-deleted) |
| `PUT` | `/api/v1/restore/{author}` | Restaurar um autor excluído |

## 🤝 Contato

Criado por **[João Vitor R. da Silva](https://www.linkedin.com/in/joaovs/)** 

[![LinkedIn](https://img.shields.io/badge/LinkedIn-Conectar-blue?style=for-the-badge&logo=linkedin)](https://www.linkedin.com/in/seu-perfil)
[![GitHub](https://img.shields.io/badge/GitHub-Seguir-black?style=for-the-badge&logo=github)](https://github.com/joaooncode)

---

<div align="center">
    <i>Se você achou este projeto útil, por favor dê uma ⭐️!</i>
</div>
