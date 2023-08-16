<?php
spl_autoload_register(function ($class) {
    $namespace = 'Calculator\\';
    $baseDir = __DIR__ . '/src/';

    if (strpos($class, $namespace) === 0) {
        $classWithoutNamespace = str_replace($namespace, '', $class);
        $classPath = $baseDir . str_replace('\\', '/', $classWithoutNamespace) . '.php';

        if (file_exists($classPath)) {
            require $classPath;
        }
    }
});

