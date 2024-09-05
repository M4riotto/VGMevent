
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Projeto de Cadastro de Eventos com Integração Jetstream

Este é um projeto Laravel para cadastro de eventos que utiliza o sistema de login Jetstream e o XAMPP para conexão com o banco de dados. Abaixo, você encontrará instruções detalhadas sobre como configurar o ambiente de desenvolvimento e executar o projeto.

## Pré-requisitos

Antes de começar, certifique-se de ter as seguintes ferramentas instaladas:

- [PHP](https://www.php.net/manual/pt_BR/install.php) (versão 7.4 ou superior)
- [Composer](https://getcomposer.org/)
- [XAMPP](https://www.apachefriends.org/index.html) (para gerenciar o servidor web e o banco de dados)
- [Node.js](https://nodejs.org/) (para gerenciar pacotes frontend)

## Configuração do Ambiente de Desenvolvimento

### 1. Clone o Repositório

```bash
git clone https://github.com/M4riotto/VGMevent
cd seu-repositorio
```
### 2. Instale as Dependências
Execute o comando abaixo para instalar as dependências do Laravel e do frontend:

```bash
composer install
npm install
```
### 3. Configure o Arquivo .env
Copie o arquivo .env.example para um novo arquivo .env e configure as variáveis de ambiente:

```bash
cp .env.example .env
```
Abra o arquivo .env e configure as seguintes variáveis para o seu ambiente:

env
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nome_do_banco
DB_USERNAME=seu_usuario
DB_PASSWORD=sua_senha

// Configure outras variáveis conforme necessário
```

### 4. Gere a Chave da Aplicação
Execute o comando abaixo para gerar uma chave de aplicação única:

```bash
php artisan key:generate
```

### 5. Crie o Banco de Dados
Crie um banco de dados no XAMPP para o seu projeto. Você pode fazer isso através do phpMyAdmin.

### 6. Execute as Migrations e Seeders
Execute as migrations para criar as tabelas no banco de dados:

```bash
php artisan migrate
```
### 7. Em seguida, execute os seeders para popular o banco de dados com dados iniciais:

```bash
php artisan db:seed
```

### 8. Inicie o Servidor de Desenvolvimento
Você pode iniciar o servidor de desenvolvimento embutido do Laravel com o seguinte comando:

```bash
php artisan serve
```
O servidor estará disponível em http://localhost:8000.
