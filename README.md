<p align="center"><img src="https://recair.cl/img/logo.jpg" width="400"></p>

## Pagina web de recair

Proyecto realizado para el manejo de inventario mediante una pagina web autoadministrable para el negocio recair de Angol

- Laravel, como framework de PHP
- Hosting cpanelhost
- Bootstrap como framework de CSS
- Formularios de google para ingresar datos
- API de google sheets
- Base de datos MySQL

# Uso de google sheets en laravel

Primero se debe instalar la siguiente dependencia
```
composer require revolution/laravel-google-sheets
```
A continuacion se debe editar la configuracion de google mediante el siguiente comando:
```
php artisan vendor:publish --provider="PulkitJalan\Google\GoogleServiceProvider" --tag="config"
```
Ahora hay que obtener las credenciales de aca [google drive api](https://developers.google.com/console)

Finalmente configurar .env
```
 GOOGLE_APPLICATION_NAME=
 GOOGLE_CLIENT_ID=
 GOOGLE_CLIENT_SECRET=
 GOOGLE_REDIRECT=
 GOOGLE_DEVELOPER_KEY=
 GOOGLE_SERVICE_ENABLED=
 GOOGLE_SERVICE_ACCOUNT_JSON_LOCATION=
```


# Configuracion eficiente de git

Configuracion basica de git:

```
git config user.name "victor"
git config user.email "v.bustos01@ufromail.cl"

```

Si se desea agregar un repositorio cuya carpeta esta en el disco duro:
```
cd <DIRECTORIO DEL REPO>
git remote add origin <URL REPO .GIT>
git push -u origin master


Para que git recuerde las claves:

```
git config --global credential.helper cache
```

Para que github deje de recordar las claves:

```
git config --global credential.helper 'cache --timeout=3600'
```

## Buy us a coffe

Si quieres ayudar invitanos una taza de cafe[buy us a coffe](google.cl).