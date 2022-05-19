<?php
spl_autoload_register(function ($class) {
    $parse = explode('\\', $class);
    if (array_shift($parse) == 'Oikos') {
        $file = array_pop($parse) . '.php';

        $path = __DIR__ . '/';
        if ($parse) $path .= implode('/', $parse);

        require_once $path . '/' . $file;
    }
});