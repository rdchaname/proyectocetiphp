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
$app->router->get('/login', [\App\Controllers\LoginController::class, 'form']);
$app->router->post('/login', [\App\Controllers\LoginController::class, 'login']);

$app->router->get('/registro', [\App\Controllers\RegistroController::class, 'form']);
$app->router->post('/registro', [\App\Controllers\RegistroController::class, 'register']);

$app->router->get('/personas/edit/{id}', ['PersonaController', 'edit']);

# Comparar
$app->run();