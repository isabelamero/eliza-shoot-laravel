# ELIZA-SHOOT-LARAVEL

## Descrição

O projeto **ELIZA-SHOOT-LARAVEL** é uma aplicação web para gerenciamento de portfólio de fotografia. Desenvolvido com o framework Laravel, o projeto permite que fotógrafos profissionais possam adicionar, editar e visualizar suas imagens de portfólio. Além disso, inclui seções como About, Contato, e Galeria.

## Pré-requisitos

- PHP >= 7.3
- Composer
- Banco de Dados PostgreSQL
- Node.js e npm (para gerenciar pacotes front-end)

## Instalação

Siga os passos abaixo para configurar o projeto localmente:

1. Clone o repositório:
    ```bash
    git clone https://github.com/SEU_USUARIO/eliza-shoot-laravel.git
    ```

2. Navegue até o diretório do projeto:
    ```bash
    cd eliza-shoot-laravel
    ```

3. Instale as dependências do PHP com o Composer:
    ```bash
    composer install
    ```

4. Instale as dependências do Node.js com o npm:
    ```bash
    npm install
    ```

5. Crie um arquivo `.env` a partir do `.env.example`:
    ```bash
    cp .env.example .env
    ```

6. Gere a chave da aplicação Laravel:
    ```bash
    php artisan key:generate
    ```

7. Configure o banco de dados no arquivo `.env`:
    ```
    DB_CONNECTION=pgsql
    DB_HOST=127.0.0.1
    DB_PORT=5432
    DB_DATABASE=seu_banco_de_dados
    DB_USERNAME=seu_usuario
    DB_PASSWORD=sua_senha
    ```

8. Execute as migrações para criar as tabelas no banco de dados:
    ```bash
    php artisan migrate
    ```

9. Inicie o servidor de desenvolvimento:
    ```bash
    php artisan serve
    ```

10. Acesse a aplicação no navegador:
    ```
    http://127.0.0.1:8000
    ```

## Uso

### Administração

- Acesse a administração das imagens:
    ```
    http://127.0.0.1:8000/imagens
    ```

- Acesse a administração do portfólio:
    ```
    http://127.0.0.1:8000/portfolio/novo (para criar uma nova imagem)
    http://127.0.0.1:8000/portfolio/editar/{id} (para editar uma imagem existente)
    ```

## Estrutura do Projeto

- **Routes**: Configuração das rotas.
- **Controllers**: Lógica de controle da aplicação.
- **Models**: Representação das tabelas do banco de dados.
- **Views**: Arquivos Blade para renderização das páginas.
- **Public**: Arquivos públicos, como CSS, JS e imagens.

## Funcionalidades

- **Galeria**: Visualização das imagens da galeria.
- **Administração**: Criação, edição e exclusão de imagens do portfólio.
- **About**: Seção sobre o fotógrafo.
- **Contato**: Formulário para contato.

## Tecnologias Utilizadas

- **Laravel**: Framework PHP.
- **PostgreSQL**: Banco de dados relacional.
- **Bootstrap**: Framework CSS.
- **JavaScript**: Linguagem de programação para funcionalidades front-end.

## Contribuição

Se você quiser contribuir com este projeto, sinta-se à vontade para enviar um pull request. 

## Licença

Este projeto está licenciado sob a [Licença MIT](https://opensource.org/licenses/MIT).

