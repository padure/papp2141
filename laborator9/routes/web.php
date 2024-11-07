<?php
    //Server
    use Psr\Http\Message\ResponseInterface as Response;
    use Psr\Http\Message\ServerRequestInterface as Request;
    //Controllers
    use App\Controllers\MechanicController;
    use App\Controllers\CarController;
    use App\Controllers\OwnerController;
    //Index
    $app->get('/', function (Request $request, Response $response, $args) {
        $response->getBody()->write("Hello world!");
        return $response;
    });
    //Rute mechanics
    $app->get('/mechanics', [MechanicController::class, 'index']);
    $app->get('/mechanics/{id}', [MechanicController::class, 'show']);
    $app->post('/mechanics', [MechanicController::class, 'store']);
    $app->put('/mechanics/{id}', [MechanicController::class, 'update']);
    $app->delete('/mechanics/{id}', [MechanicController::class, 'delete']);
    //Rute cars
    $app->get('/cars', [CarController::class, 'index']);
    $app->get('/cars/{id}', [CarController::class, 'show']);
    $app->post('/cars', [CarController::class, 'store']);
    $app->put('/cars/{id}', [CarController::class, 'update']);
    $app->delete('/cars/{id}', [CarController::class, 'delete']);
    //Rute owners
    $app->get('/owners', [OwnerController::class, 'index']);
    $app->get('/owners/{id}', [OwnerController::class, 'show']);
    $app->post('/owners', [OwnerController::class, 'store']);
    $app->put('/owners/{id}', [OwnerController::class, 'update']);
    $app->delete('/owners/{id}', [OwnerController::class, 'delete']);