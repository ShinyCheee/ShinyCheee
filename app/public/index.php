<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
use Psr\Container\ContainerInterface;
use Slim\Views\PhpRenderer;

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../Config/db.php';

$app = AppFactory::create();

$app->get('/', function (Request $request, Response $response, $args) {
    $viewData = [
        'title' => 'Title'
    ];
    $renderer = new PhpRenderer(__DIR__ . '/views/', $viewData);

    return $renderer->render($response, 'index.php', [
        'title' => 'Huan'
    ]);
});
$app->get('/players', function (Request $request, Response $response) {
    $sql = "SELECT * FROM players";

    try {
        $db = new DB();
        $conn = $db->connect();

        $stmt = $conn->query($sql);
        $players = $stmt->fetchAll(PDO::FETCH_OBJ);

        $db = null;

        $response->getBody()->write(json_encode($players));
        return $response
            ->withHeader('Content-Type', 'application/json')
            ->withStatus(200);
    } catch (PDOException $e) {
        $error = array(
            "error" => $e->getMessage()
        );
    }

    $response->getBody()->write(json_encode($error));
    return $response
        ->withHeader('Content-Type', 'application/json')
        ->withStatus(500);
});

$app->run();