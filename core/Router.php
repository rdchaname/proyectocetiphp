<?php


namespace Core;


class Router
{
    protected array $routes = ['get' => [], 'post' => []];

    public function __construct()
    {

    }

    public function get($path, $action)
    {
        $this->routes['get'][] = [
            'path' => $path,
            'action' => $action
        ];
    }

    public function post($path, $action)
    {
        $this->routes['post'][] = [
            'path' => $path,
            'action' => $action
        ];
    }

}