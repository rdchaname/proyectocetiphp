<?php


namespace App\Controllers;


use Core\Controller;
use Core\View;

class RegistroController extends Controller
{
    public function form(): string
    {
        $view = new View();
        return $view->render('registro');
    }

    public function register()
    {

    }
}