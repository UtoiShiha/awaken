<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require 'vendor/autoload.php';

use App\models\Comic;
use App\util\DB;
$app = new \Slim\App;
$app->get('/hello/{name}', function (Request $request, Response $response, array $args) {
    $name = $args['name'];
    $response->getBody()->write("Hello, $name");

    return $response;
});
$app->get('/',function (Request $request, Response $response, array $args) {

    $comic = new Comic(DB::getInstance());
    $jsonOption = JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE;
    return $response->withJson($comic->getInfo(),200,$jsonOption);
});
$app->run();
