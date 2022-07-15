# Tag
_Proyecto para crear tag_
## Comenzando 🚀


### Pre-requisitos 📋
```
Docker
Docker Compose
Laravel
```
### Instalación 🔧

```
docker-compose build app
docker-compose up -d 
docker-compose exec app composer install
docker-compose exec app php artisan key:generate
docker-compose exec app php artisan migrate
```

ir a http://server_domain_or_IP:8000
## Ejecutando las pruebas ⚙️
```
docker-compose exec app php artisan make:test
```
## Construido con 🛠️
* [Laravel](https://laravel.com/) - El framework web usado
* [Composer](https://getcomposer.org/) - Manejador de dependencias
* [Docker](https://www.docker.com/) - Usado para generar el ambiente dev
* [Mysql](https://rometools.github.io/rome/) - Usado para como base de datos

## Autores ✒️
* **Luis capote** - [Luis Capote](https://github.com/thekingf4)

