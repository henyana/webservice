# webservice
Webservice using Laravel 8 and JWT

## Items done status:
1. Data dummy users dan sparepart sebanyak 5 data menggunakan seeder
2. API login
3. API get User
4. API get Spareparts
5. Semua API menggunakan middleware auth jwt

## Create database
webservice

## Run once
1. composer install
2. php artisan migrate

## Run the server
> php artisan serve

## Endpoints
1. POST http://localhost:8000/api/login
   Body:Form-data
   email:user1@email.com
   password:user1pass