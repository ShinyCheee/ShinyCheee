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

    return $renderer->render($response, 'index.php', $viewData);
});
$app->get('/players', function (Request $request, Response $response) {
    $sql = "SELECT * FROM players WHERE name = 'Tom'";

        $db = new DB();
        $conn = $db->connect();

        $stmt = $conn->query($sql);
        $players = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $db = null;

        $renderer = new PhpRenderer(__DIR__ . '/views/', $players);
        return $renderer->render($response, 'GameOverview.php', $players[0]);

});

$app->run();