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

Wyświetlenie podanej waluty z dzisiaj
GET   /api/currencies-today/:currency

Wyświetlenie podanej waluty z wszystkich dni
GET   /api/currencies/:currency

Wyświetlenie podanej waluty z podanej daty
GET   /api/currencies/:currency/:date

```
