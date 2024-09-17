<?php

    $app->get('/', function (Request $request, Response $response, $args) {

        $dsn = "mysql:host=localhost;dbname=slimphp;charset=utf8mb4";

        $pdo = new PDO($dsn,'thartsch', 'password',[
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]);

        $stmt = $pdo->query('SELECT * FROM "players" ');

        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $body = json_encode($data);

        $response->getBody()->write($body);

    return $response;
    });
