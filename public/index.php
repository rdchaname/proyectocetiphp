<?php

# Definir la zona horario de la aplicación
date_default_timezone_set('America/Lima');

# En ambiente de desarrollo es importante activar el mostrar errores. Desactivar en producción
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require __DIR__ . "/../vendor/autoload.php";

$app = new \Core\Application();

# Definición de rutas
$app->router->get('/login', ['ClaseControlador', 'metodo']);
$app->router->post('/login', ['ClaseControlador', 'metodo']);

$app->router->get('/registro', ['ClaseControlador', 'metodo']);
$app->router->post('/registro', ['ClaseControlador', 'metodo']);

echo "<pre>";
//var_dump($_SERVER);
//var_dump(basename($_SERVER['SCRIPT_NAME']));
var_dump($app->request->getPath());
echo "</pre>";
exit;