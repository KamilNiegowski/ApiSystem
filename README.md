# Laravel REST API with Sanctum

## Setup

- `git clone https://github.com/KamilNiegowski/ApiSystem.git laravel-project`
- `cd laravel-project && chmod +x docker-compose/running-site.sh`
- `cp .env.example .env`
- `docker compose  up -d --build`

Now that all the containers are ready, we can go in the browser to the address: `localhost`

## Routes

```

POST   /api/login
@body: token

Dodawanie waluty
POST   /api/currencies
@body: currency (string), date (yyyy-mm-dd), amount (decimal 8, 2) 

Wyświetlenie wszystkich walut z data dzisiejszą
GET   /api/currencies 


Wyświetlenie wszystkich walut z podanej daty
GET   /api/currencies-date/:date 
Przykład /api/currencies-date/2023-04-24


Wyświetlenie podanej waluty z dzisiaj
GET   /api/currencies-today/:currency
Przykład /api/currencies-today/EUR


Wyświetlenie podanej waluty z wszystkich dni
GET   /api/currencies/:currency
Przykład /api/currencies/EUR


Wyświetlenie podanej waluty z podanej daty
GET   /api/currencies/:currency/:date
Przykład /api/currencies/EUR/2023-04-24

```
