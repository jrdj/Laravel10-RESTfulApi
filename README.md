<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Setup

1) install composer
2) create and fill .env with correct informations
3) php artisan key:generate
4) php artisan serve
5) php artisan migrate --seed
6) npm install && npm run dev

## Postman 

Retrieve all data - GET http://localhost:8000/api/v1/tasks

Retrieve single data - GET http://localhost:8000/api/v1/tasks/1

Headers: Key=Accept, Value=application/json
         Body: raw , JSON
         
Store data - POST http://localhost:8000/api/v1/tasks

Update all attributes - PUT http://localhost:8000/api/v1/tasks/11

Update single attribute - PATCH http://localhost:8000/api/v1/tasks/11/complete

Headers: Key=Accept, Value=application/json
         Body: none
         
Destroy data - DELETE http://localhost:8000/api/v1/tasks/11

