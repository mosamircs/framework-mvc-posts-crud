<?php
spl_autoload_register(function($class)
{ 
    $extension = ".php";
    $file = __DIR__. '\\' . $class . $extension;
    $file = str_replace('\\', DIRECTORY_SEPARATOR, $file);
    if (file_exists($file)) {
        include $file;  
    }
});