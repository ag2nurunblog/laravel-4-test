[Readme structure by: @rsilveira65](https://github.com/rsilveira65)

# Laravel Test

## Usage

### Run the project with build in laravel server (http://localhost:8000)

#### Set all database info in .env file

#### Run the following command

``` bash
$ composer install
$ php artisan serve
```

### Run the project with Docker (Make sure that you have Docker installed)

#### Create the Docker containers

``` bash
$ composer install
$ docker-compose -f docker-compose-dev.yml up -d
```

### Migrations

#### Run the following command

``` bash
$ php artisan migrate
```

### Seed (Creates 50 companies, 50 users groups and 50 users)

#### Run the following command

``` bash
$ php artisan db:seed
```

Laravel Test
===================


Este teste tem por objetivo avaliar seus conhecimentos no framework Laravel 5.3

O framework está disponível em: https://laravel.com

----------


Descritivo do teste
-------------


> **Tarefas:**

> - Elaborar um sistema protegido por senha. 
> - Apenas usuários autenticados poderão ter acesso aos dados cadastrados.
> - Implementar um [CRUD](https://en.wikipedia.org/wiki/Create,_read,_update_and_delete) de usuários, grupos de usuários e empresas.
> - O formulário de usuários deverá ter campos de relacionamento com grupos de usuários e empresas, seguindo o modelo do diagrama ER disponível neste repositório. 

----------


>**Opcionais:**
> - Criar migrations para gerar a estrutura de tabelas.
> - Utilizar seeders para popular as tabelas com uma primeira carga de dados. 

<i class="icon-folder-open"></i>Deploy
-------------

Gostaríamos que o deploy da aplicação seja feita no <i class="icon-upload"></i> **[Heroku](https://www.heroku.com/)**. 

> **Nota:** Deverá ser criado uma free account no Heroku, não há necessidade de adquirir um plano que gere custos.
