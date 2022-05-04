<?php
$GLOBALS['path'] = '';
spl_autoload_register(function ($class){

    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    $GLOBALS['path'] = dirname(__DIR__) . "/src/{$class}.php";

    if (is_readable($GLOBALS['path'])) {
        require_once $GLOBALS['path'];
    }
});

use Subdirectory\subClass1;

$value1 = new Class1();
echo $value1->printMessage(Class1::class) . ": " . $GLOBALS['path'] . "<br>";

$value2 = new subClass1();
echo $value2->printMessage(subClass1::class) . ": " . $GLOBALS['path'];





