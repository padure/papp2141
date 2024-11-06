<?php
    namespace App\Controllers;
    use App\Models\Mechanic;
    use Psr\Http\Message\ResponseInterface as Response;
    use Psr\Http\Message\ServerRequestInterface as Request;

    class MechanicController
    {
        public function index (Request $request, Response $response, $args)
        {
            $mechanics = Mechanic::all();
            $response->getBody()->write($mechanics->toJson());
            return $response->withHeader('Content-Type', 'application/json');
        }

        public function show (Request $request, Response $response, $args)
        {

        }
    }