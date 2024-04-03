<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

### Subir o projeto

````
docker-compose up --build -d
````

### Popular banco de dados
````
docker exec -it {ID_DOCKER} bash
php artisan migrate:fresh --seed
````

### End points

````
GET -> /api/users
POST -> /api/users
PUT -> /api/users/1

GET -> /api/categories

GET -> /api/products?category=2&sort=desc&price_greater_than=150

POST -> /api/primo/7

````
