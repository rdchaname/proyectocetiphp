<?php


namespace Core;


class View
{
    public function render($viewFile, $parameters = []): string
    {
        return $this->getContentViewFile($viewFile, $parameters);
    }

    protected function getContentViewFile($viewFile, $parameters): string
    {
        extract($parameters);
        ob_start();
        /** @noinspection PhpIncludeInspection */
        require __DIR__ . "/../views/$viewFile.php";
        return ob_get_clean();
    }
}