# Laravel REST API with Sanctum

## Usage

Change the *.env.example* to *.env* and add your database info

For SQLite, add

```
DB_CONNECTION=sqlite
DB_HOST=127.0.0.1
DB_PORT=3306
```

Create a _database.sqlite_ file in the _database_ directory

```
# Run the webserver on port 8000
php artisan serve
```

## Routes

```
# Public



POST   /api/login
@body: email, password

POST   /api/register
@body: name, email, password, password_confirmation



POST   /api/currencies
@body: currency, date yyyy-mm-dd, amount 

GET   /api/currencies
GET   /api/currencies/:currency
GET   /api/currencies/:currency/:date


```
