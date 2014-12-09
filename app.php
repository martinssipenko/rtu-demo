<?php

require __DIR__.'/vendor/autoload.php';

use Silex\Application;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$app = new Application();

$log = new Logger('name');
$log->pushHandler(new StreamHandler('php://stdout', Logger::WARNING));


$app->get('/hello/{name}', function ($name) use ($app, $log) {
    $log->addWarning('Foo');
    $log->addError('Bar');
    return "\n\nHello ".$app->escape($name);
});

$app->run();
