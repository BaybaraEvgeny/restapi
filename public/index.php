<?php
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;

require '../vendor/autoload.php';
require '../src/config/db.php';

$app = new \Slim\App;
$app->get('/hello/{name}', function (ServerRequestInterface $request, ResponseInterface $response) {
    $name = $request->getAttribute('name');
    $response->getBody()->write("Hello, $name");

    return $response;
});

// Customer Routes
require '../src/routes/customers.php';

$app->run();