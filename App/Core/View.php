<?php
namespace App\Core;
class View
{
    public static function render($view, $data): string
    {
        $view =  dirname(__DIR__).'/Views/Post/' . strtolower($view) . '.php';
        die($view);
        if(!file_exists($view)) {
            throw new \Exception("Template {$view} not found ");
        }

        $obLevel = ob_get_level();
        ob_start();
        $php = file_get_contents($view);
        extract($data, EXTR_SKIP);
        try {
            eval('?' . '>' . $php);
        } catch (\Exception $e) {
            while (ob_get_level() > $obLevel) {
                ob_end_clean();
            }
            throw $e;
        }
        return ob_get_clean();
    }
}