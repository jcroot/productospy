# products-covid19py
Sitio para ver productos que se venden para el uso contra el virus COVID19.


Levantar en sitio en cualquier server (Apache, etc.)

[Ir a productospy.org](https://productospy.org/)


## Tecnologías utilizadas (Toolkit):
- JavaScript (Leaflet, JQuery, Boostrap)
- CSS
- HTML
- [PHP 7.4 (Laravel 6)](https://laravel.com/docs)
- [Composer](https://getcomposer.org/download/)
- Datos OSM (Nominatim como buscador)



## Contribuir

- Crear fork.
- Crear un feature branch: git checkout -b nueva-feature
- Comitear tus cambios: git commit -am 'Añadir alguna feature'
- Push el branch: git push origin nueva-feature
- Enviar un pull request.

## Pasos:

```sh
	git clone https://github.com/josego85/products-covid19py.git
	sudo chown -R www-data:www-data ./products-covid19py
	cd products-covid19py
	composer install 
	composer update
	cp .env.example .env
	php artisan key:generate
	php artisan serve 
```


## Base de datos:

```sh
	mysql -u root -p
	CREATE DATABASE products_covid19 CHARACTER SET utf8 COLLATE utf8_general_ci;
	exit
	mysql -u tu_usuario -p products_covid19 < ~/products_covid19.sql
        mysql -u tu_usuario -p products_covid19 < ~/cities.sql 
	GRANT ALL PRIVILEGES ON products_covid19.* TO tu_usuario@'localhost' IDENTIFIED BY 'xxxxxxxxxxxxx';
	FLUSH PRIVILEGES;
	exit
```

## Todo list:
- Mejoras en la lista de vendedores sin ubicación.
