<?php

require __DIR__ . '/vendor/autoload.php';

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

// Container register
$container = new \Slim\Container;

$container['config'] = [
	'settings' => [
    	'addContentLengthHeader' => false,
        'displayErrorDetails' => true,
        'debug' => true
	]
];

$container['view'] = function ($container) {
    return new \Slim\Views\PhpRenderer( __DIR__ . '/resources/views' );
};

$app = new \Slim\App($container);


include __DIR__ . '/web/routes.php';

session_start();

$app->run();