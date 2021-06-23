# Proyecto PHP Ceti

## Parte 02

### 1. Componente Routing: compare()

Método en clase Router para realizar comparación de petición de cliente con rutas definidas.

```php
<?php

namespace Core;

class Router
{
    public function compare(){
    
    }
}
```

### 2. Application: run()

Método en clase Application para invocar a método compare() de clase Router.

```php
<?php

namespace Core;

class Application
{
    public function run()
    {
        
    }
}
```

### 3. Rutas con parámetros

Rutas definidas en las cuales se pueden incluir parámetros como parte de la ruta. Se usará ```{parametro}``` para
indicar que será un parámetro.

```php
$app->router->get('/personas/edit/{id}', ['PersonaController', 'edit']);
```

### 4. Router: compare() con expresiones regurales.

Para poder realizar la comparación de rutas con parámetros se usará expresiones reguales y de la
función ```preg_match()```;

### 5. Componente Controller: Uso de call_user_func_array()

Cambiar la forma en que de definen los actions de las rutas.

```php

```

Haciendo uso de la función ```call_user_func_array()``` se instanciará la clase Controlador y se llamará a un método
dentro de esta clase.

```php
<?php

namespace Core;

class Controller
{

}
```

Controladores del proyecto.

```php
<?php

namespace App\Controllers;

use Core\Controller;

class RegistroController extends Controller
{

}
```

### 6. Componente View: render()

Los controladores pueden hacer el llamado a archivos de vista. Estos archivos deben ubicarse en la carpeta ```views```;

```php
<?php

namespace Core;

class View
{

}
```

### 7. Uso de AdminLTE para vistas