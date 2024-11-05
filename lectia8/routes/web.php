<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use App\Controllers\CategoryController;
use App\Controllers\ProductController;
use Slim\Routing\RouteCollectorProxy;

$app->get('/', function (Request $request, Response $response, $args) {
    $response->getBody()->write("Go to /categories");
    return $response;
});
//Category
$app->group("/categories", function (RouteCollectorProxy $group) {
    $group->get("", CategoryController::class .":index");
    $group->post("", CategoryController::class .":store");
    $group->get("/{id}", CategoryController::class .":show");
    $group->put("/{id}", CategoryController::class .":update");
    $group->delete("/{id}", CategoryController::class .":delete");
});
//Products
$app->group('/products', function (RouteCollectorProxy $group) {
    $group->get('', [ProductController::class, 'index']);
    $group->post('', [ProductController::class, 'create']);
    $group->get('/{id}', [ProductController::class, 'show']);
    $group->put('/{id}', [ProductController::class, 'update']);
    $group->delete('/{id}', [ProductController::class, 'delete']);
});