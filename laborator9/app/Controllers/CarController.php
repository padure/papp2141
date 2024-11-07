<?php
    namespace App\Controllers;
    
    use Psr\Http\Message\ResponseInterface as Response;
    use Psr\Http\Message\ServerRequestInterface as Request;
    use App\Models\Car;

    class CarController
    {
        public function index(Request $request, Response $response, $args)
        {
            $cars = Car::with('mechanic')->get();
            $response->getBody()->write(json_encode($cars));
            return $response->withHeader('Content-Type', 'application/json');
        }
        
        public function show(Request $request, Response $response, $args)
        {
            $car = Car::with('mechanic')
                        ->with('owner')            
                        ->find($args['id']);
            if(!$car){
                $response->getBody()->write(json_encode(["message" => "Nu exista"]));
                return $response->withHeader('Content-Type', 'application/json');
            }
            $response->getBody()->write(json_encode($car));
            return $response->withHeader('Content-Type', 'application/json');
        }
        
        public function store(Request $request, Response $response, $args)
        {
            $data = $request->getParsedBody();
            if(empty($data) || !is_array($data)){
                $response->getBody()->write(json_encode(["message" => "Nu exista date"]));
                return $response->withHeader('Content-Type', 'application/json');
            }
            Car::create($data);
            $response->getBody()->write(json_encode(["message" => "Masina adaugata cu succes!"]));
            return $response->withHeader('Content-Type', 'application/json');
        }
        
        public function update(Request $request, Response $response, $args)
        {
            $car = Car::find($args['id']);
            if(!$car){
                $response->getBody()->write(json_encode(["message" => "Nu exista"]));
                return $response->withHeader('Content-Type', 'application/json');
            }
            $car->fill(json_decode($request->getBody()->getContents(),true));
            $car->save();
            $response->getBody()->write(json_encode(["message" => "Masina editata cu succes!"]));
            return $response->withHeader('Content-Type', 'application/json');
        }
        
        public function delete(Request $request, Response $response, $args)
        {
            $car = Car::find($args['id']);
            if(!$car){
                $response->getBody()->write(json_encode(["message" => "Nu exista"]));
                return $response->withHeader('Content-Type', 'application/json');
            }
            $car->delete();
            $response->getBody()->write(json_encode(["message" => "Masina stersa cu succes!"]));
            return $response->withHeader('Content-Type', 'application/json');
        }
    }