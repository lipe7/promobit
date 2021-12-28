# Desafio Promobit

## Descrição do Projeto

-   Versão Laravel 8.74.0
-   Versão PHP 7.4.9
-   Versão MySQL 5.7

### Executando o projeto

Clone o projeto:

```
git clone https://github.com/lipe7/promobit.git
```

O arquivo `.env.example` possuem dados genéricos para configuração da aplicação. Faça uma copia do `.env.example` e renomeie para `.env`.

Instale as dependências:

```
composer install
```

Gere o APP_KEY executando:

```
php artisan key:generate
```

Crie um banco e configure no .env:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE='nome_do_banco'
DB_USERNAME=root
DB_PASSWORD=
```

Rode o comando :

```
php artisan optimize
```

Rode o servidor :

```
php artisan serve
```

## Autor

> [Filipi Campos](https://www.linkedin.com/in/7lipe/)
>
> [felipec165@gmail.com](mailto:felipec165@gmail.com)

### Relatório de relevância de produtos

SQL para extração :

```
SELECT t.name, count(p.id) as qtd_products
FROM product_tag as pt
JOIN product as p ON p.id = pt.product_id
JOIN tag as t ON t.id = pt.tag_id
GROUP BY t.id;

Retorno :


[{
    "name" : "Tag 1",
    "qtd_products" : 2
},
{
    "name" : "Tag 2",
    "qtd_products" : 2
},
{
    "name" : "Tag 3",
    "qtd_products" : 1
}]

```

`Arquivo DB `promobit.sql` na raiz do projeto.`

Não foi utilizado migrations nesse projeto, 
para logar na aplicação segue abaixo os campos referentes ao banco localizado na raiz do projeto:

email: admin@promobit.com
password: 123456

```

