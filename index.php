<?php

require_once 'vendor/autoload.php';

$pattern = 'proxy';


if ($pattern === 'singleton') {
    var_dump(require_once 'Patterns/Singleton/UseCase.php');
    die();
}

if ($pattern === 'proxy') {
    var_dump(require_once 'Patterns/Proxy/UseCase.php');
    die();
}
