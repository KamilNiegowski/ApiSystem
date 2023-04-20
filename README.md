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

POST   /api/currencies
@body: currency, date yyyy-mm-dd, amount 

GET   /api/currencies
GET   /api/currencies-date/:date 
GET   /api/currencies/:currency
GET   /api/currencies/:currency/:date

```
