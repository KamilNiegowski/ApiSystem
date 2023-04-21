# Laravel REST API with Sanctum

## Setup

- `git clone https://github.com/KamilNiegowski/ApiSystem.git laravel-project`
- `cd laravel-project && cp .env.example .env`
- `composer install`
- `docker compose up -d --build`
- `php artisan migrate --database=mysql_migration`

Now that all the containers are ready, we can go in the browser to the address: `localhost`

## Routes

```

POST   /api/login
@body: email, password

Dodawanie waluty
POST   /api/currencies
Authorization: Bearer Token 
@body: currency, date (yyyy-mm-dd), amount (decimal 8, 2) 

Wyświetlenie wszystkich walut z data dzisiejszą
Authorization: Bearer Token 
GET   /api/currencies 

Wyświetlenie wszystkich walut z podanej daty
Authorization: Bearer Token 
GET   /api/currencies-date/:date 
Przykład /api/currencies-date/2023-04-24


Wyświetlenie podanej waluty z dzisiaj
Authorization: Bearer Token
GET   /api/currencies-today/:currency
Przykład /api/currencies-today/EUR


Wyświetlenie podanej waluty z wszystkich dni
Authorization: Bearer Token
GET   /api/currencies/:currency
Przykład /api/currencies/EUR


Wyświetlenie podanej waluty z podanej daty
Authorization: Bearer Token
GET   /api/currencies/:currency/:date
Przykład /api/currencies/EUR/2023-04-24

```
