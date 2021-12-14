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

3. Criar as rotas no arquivo **web.php**

    3.1. GET - INDEX  (listar todos os posts)

    3.2. GET - INDEX  (criar view para mostrar um post específico)

    3.2. GET - CREATE (criar view para criar post)

    3.3. POST - STORE  (função para popular a tabela de post no banco)

    3.4. GET - EDIT   (criar view para editar post)
    
    3.5. PUT - CREATE (função para editar a tabela de post no banco)

## Observações
- Use bootstrap;
- Use o view do Laravel;
- Pesquise sobre relacionamento no Laravel para fazer o relacionamento entre **Posts** e **Comments**
- Crie um blade master para não ficar copiando e colando código HTML