<?php


namespace App\Controllers;


class PersonaController extends \Core\Controller
{
    public function edit($id): string
    {
        return "Parametro ID: " . $id;
    }
}