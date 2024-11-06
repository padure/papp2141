<?php
    use Psr\Http\Message\ResponseInterface as Response;
    use Psr\Http\Message\ServerRequestInterface as Request;
    use App\Controllers\MechanicController;

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