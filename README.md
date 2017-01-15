# AG2 NURUN - TESTE BACK-END
===================

## Instalação para Desenvolvimento
```sh
$ composer install
$ cp .env.example .env
$ php artisan key:generate
$ php artisan migrate #antes de rodar este comando verifique sua configuracao com banco em .env
$ php artisan db:seed #nao obrigatorio, serve para gerar os seeders criados (dados de teste)
$ php artisan serve
```

Teste Laravel
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
