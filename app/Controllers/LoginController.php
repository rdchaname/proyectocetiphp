<?php


namespace App\Controllers;


use Core\Controller;
use Core\View;

class LoginController extends Controller
{
    public function form(): string
    {
        $view = new View();
        return $view->render('login');
    }

    public function login()
    {

    }
}