# Projeto Laravel

Este projeto foi desenvolvido utilizando a versão mais recente do Laravel, adotando práticas modernas de desenvolvimento, como Services, Repositories, Enums, e Interfaces, para garantir um código mais modular, reutilizável e fácil de manter.

## Requisitos

- PHP: 8.1 ou superior
- Laravel: 10.x
- Composer: 2.x
- Banco de Dados: MySQL ou PostgreSQL (ou qualquer banco suportado pelo Laravel)
- Node.js: 16.x ou superior (para gerenciamento de assets)

## Instalação

Clone o repositório:

```bash
git clone https://github.com/seu-usuario/seu-projeto.git
cd seu-projeto

Instale as dependências do Composer:

composer install

Copie o arquivo .env.example para .env e configure suas variáveis de ambiente, especialmente as relacionadas ao banco de dados:

cp .env.example .env

Gere a chave da aplicação:

php artisan key:generate

Execute as migrações e os seeders:

php artisan migrate --seed

Instale as dependências do NPM e compile os assets:

npm install
npm run dev

Inicie o servidor de desenvolvimento:

php artisan serve

Arquitetura do Projeto
Services
Os Services encapsulam a lógica de negócios da aplicação, fornecendo uma camada intermediária entre os Controllers e os Repositories. Eles garantem que a lógica da aplicação seja mantida fora dos controllers, facilitando a manutenção e os testes.

Repositories
Os Repositories são responsáveis por encapsular a lógica de acesso aos dados, tornando a aplicação mais flexível e permitindo mudanças na camada de persistência sem afetar outras partes do código.

Enums
Utilizamos Enums para definir constantes, como roles de usuário e permissões, de forma tipada e segura. Os enums ajudam a evitar o uso de strings “mágicas” e tornam o código mais claro e menos propenso a erros.

Interfaces
As Interfaces são utilizadas para definir contratos que os Services e Repositories devem seguir. Isso garante que as classes sejam intercambiáveis, facilitando a injeção de dependências e permitindo substituições simples em testes ou mudanças futuras.

Quasar Framework
Oferece uma interface de usuário rica e responsiva, pronta para ser usada em aplicações web e mobile.

Arquitetura baseada em Services
Facilita a comunicação com APIs externas, encapsulando a lógica de negócios e mantendo o código organizado.

Interfaces TypeScript
Garante que os dados manipulados tenham os tipos corretos, evitando erros de tipagem em tempo de execução.

Funcionalidades Principais
Quasar Framework: Oferece uma interface de usuário rica e responsiva, pronta para ser usada em aplicações web e mobile.
Arquitetura baseada em Services: Facilita a comunicação com APIs externas, encapsulando a lógica de negócios e mantendo o código organizado.
Interfaces TypeScript: Garante que os dados manipulados tenham os tipos corretos, evitando erros de tipagem em tempo de execução.