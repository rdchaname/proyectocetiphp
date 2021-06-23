# Proyecto PHP Ceti

## Parte 01

### 1. Iniciar proyecto de composer

Crear composer.json usando comando de composer: ```composer init```.

### 2. Definir namespaces principales

Añadir en archivo composer la propiedad ```autoload``` , indicando los namespaces principales para las
carpetas ```app``` y ```core```.

```json
{
  "autoload": {
    "psr-4": {
      "App\\": "app/",
      "Core\\": "core/"
    }
  }
}
```

### 3. Generar archivos de autoload

Ejecutar el comando: ```composer install``` para generar carpeta ```vendor```, que contiene archivos necesarios para
implementar el estándar PSR-4.

### 4. Implementar Front Controller usando .htaccess

Crear carpeta ```public``` donde se ubicará el único archivo .php (index.php) que será el único punto de entrada a la
aplicación. En esta carpeta también se colocarán archivos estáticos públicos (css, js, imágenes, videos, etc).

```
RewriteEngine On

# Front Controller
RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME} !-f
RewriteRule ^ index.php [L]
```

### 5. Crear archivo index.php en carpeta public

Este archivo debe contener en el inicio la inclusión del archivo ```autoload.php``` de la carpeta vendor generada
previamente.

```php
<?php

require __DIR__ . "/../vendor/autoload.php";
```

### 6. Creación de clase Application en Core

Esta clase será la encargada de iniciar todos los componentes del proyecto. Debe seguir el patrón singleton, para evitar
crear mas de una instancia de esta clase.

```php
<?php

namespace Core;

class Application
{

}
```

### 7. Componente Routing

Clase Router encargada de definir rutas y comparar con la petición del cliente.

```php
<?php

namespace Core;

class Router
{

}
```

### 8. Componente Request

Clase Request encargada de obtener información a partir de la petición del cliente.

```php
<?php

namespace Core;

class Request
{

}
```