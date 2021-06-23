<?php


namespace Core;


class Router
{
    protected Request $request;
    protected array $routes = ['get' => [], 'post' => []];

    public function __construct(Request $request)
    {
        $this->request = $request;
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

    public function compare(): string
    {
        $path = $this->request->getPath();
        $method = $this->request->getMethod();

        $action = false;
        $parameters = [];
        $routes = $this->routes[$method];
        foreach ($routes as $key => $route) {
            // rutas sin parametros
            if ($route['path'] === $path) {
                $action = $route['action'];
                break;
            } else {
                // rutas con parametros
                $route_split = explode('/', $route['path']);
                foreach ($route_split as $position => $part) {
                    if (substr($part, 0, 1) === '{') {
                        $route_split[$key] = '([A-Za-z0-9]+)';
                    }
                }
                $route_united = implode(',', $route_split);
                $route_regex = '#^' . $route_united . '$#';
                if (preg_match($route_regex, $path, $matches)) {
                    array_shift($matches);
                    $parameters = $matches;
                    $action = $route['action'];
                    break;
                }
            }
        }
        if ($action === false) {
            http_response_code(404);
            $view = new View();
            return $view->render('404');
        }

        $controller = $action[0];
        $method_controller = $action[1];
        $instance_controller = new $controller;
        return call_user_func_array([$instance_controller, $method_controller], $parameters);
    }

}