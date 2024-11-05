<?php
require __DIR__ . '/../vendor/autoload.php';
use Slim\Exception\HttpNotFoundException;
use Psr\Http\Message\ServerRequestInterface;
use Slim\Psr7\Response;

use Slim\Factory\AppFactory;



$app = AppFactory::create();
$app->addRoutingMiddleware();
//Middleware
$errorMiddleware = $app->addErrorMiddleware(true, true, true);

// Set the Not Found Handler
$errorMiddleware->setErrorHandler(
    HttpNotFoundException::class,
    function (ServerRequestInterface $request, Throwable $exception, bool $displayErrorDetails) {
        $response = new Response();
        $response->getBody()->write('404 NOT 
        ');

        return $response->withStatus(404);
    });

require __DIR__ .'/../config/database.php';
//Routes
require_once __DIR__ .'/../routes/web.php';

$app->run();