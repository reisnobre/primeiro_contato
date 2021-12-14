# Projeto Primeiro Contato

Projeto com intuito de aprender um pouco sobre o mundo do Laravel.

## Explicação sobre o projeto

Aqui será feito um CRUD completo de **POST** e **COMMENTS**, segue abaixo a estruturas das tabelas:

### Posts

|Coluna  | Tipo            |
|--------|-----------------|
|title   |    VARCHAR      |
|content |    TEXT         |

### Comments

|Coluna  | Tipo            |
|--------|-----------------|
|text    |    TEXT         |
|post_id |    FOREIGN      |

## Roteiro do que deve ser feito

1. Instale o Laravel.

2. Crie as migrations seguindo as estruturas acima.

3. Criar as rotas e as controllers (usa o comando **php artisan make:model --mcr**, assim será criado a model, migration, controller resource que cria por padrão as controllers listada na tabela abaixo).

|Método HTTP| Controller |O que deve ser feito                              |
|-----------|-------------|-------------------------------------------------|
| GET       | INDEX       |  (listar todos os posts)                        |
| GET       | SHOW        |  (criar view para mostrar um post específico)   |
| GET       | CREATE      |  (criar view para criar post)                   |
| POST      | STORE       |  (função para popular a tabela de post no banco)|
| GET       | EDIT        |  (criar view para editar post)                  |
| PUT       | UPDATE      |  (função para editar a tabela de post no banco) |
| DELETE    | DELETE      |  (função para editar a tabela de post no banco) |

## Observações

- Use bootstrap;

- Use o view do Laravel;

- Pesquise sobre relacionamento no Laravel para fazer o relacionamento entre **Posts** e **Comments**

- Crie um blade master para não ficar copiando e colando código HTML