<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../Config/db.php';

$app = AppFactory::create();

$app->get('/', function (Request $request, Response $response, $args) {

    $response->getBody()->write("Hello world!");

    return $response;
});
//require __DIR__ . '/routes/api.php';

//require __DIR__ . '/routes/web.php';

$app->run();