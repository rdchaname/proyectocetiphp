<?php


namespace Core;


class Request
{
    public function getMethod(): string
    {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }

    public function getPath(): string
    {
        $path = $_SERVER['REQUEST_URI'];
        $position = strpos($path, '?');
        if ($position !== false) {
            $path = substr($path, 0, $position);
        }
        $base_path = $this->getBasePath();
        return str_replace($base_path, '', $path);
    }

    protected function getBasePath(): string
    {
        $base_path = str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);
        return substr($base_path, 0, strlen($base_path) - 1);
    }
}