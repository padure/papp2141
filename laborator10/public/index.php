<?php
    use Psr\Http\Message\ResponseInterface as Response;
    use Psr\Http\Message\ServerRequestInterface as Request;
    use Slim\Factory\AppFactory;

    require __DIR__ . '/../vendor/autoload.php';

    $app = AppFactory::create();
    require_once __DIR__ . '/../config/database.php';
    require_once __DIR__ . '/../routes/web.php';
    $app->run();