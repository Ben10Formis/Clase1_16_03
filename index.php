<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require './vendor/autoload.php';

$app = new \Slim\App;
$app->get('/hello/{name}', function (Request $request, Response $response) {
    $name = $request->getAttribute('name');
    $response->getBody()->write("Hello, $name");

    return $response;
});
$app->run();

//http://localhost:8080/clase01_16_03/index.php/hello/romi

$MetodoUno = new \Slim\App;
$MetodoUno->get('/hello/Romi', function (Request $request, Response $response) {
	echo "hola mundo";
});

$MetodoUno->run();