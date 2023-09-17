<?php

declare(strict_types=1);

require_once dirname(__DIR__) . '/vendor/autoload.php';

define('BASE_PATH', dirname(__DIR__));

$request = \IvanPortillo\framework\Http\Request::createFromGlobals();

$router = new \IvanPortillo\framework\Routing\Router();

$kernel = new \IvanPortillo\framework\Http\Kernel($router);

$response = $kernel->handle($request);

$response->send();