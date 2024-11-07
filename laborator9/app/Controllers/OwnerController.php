<?php
    namespace App\Controllers;
    
    use Psr\Http\Message\ResponseInterface as Response;
    use Psr\Http\Message\ServerRequestInterface as Request;
    use App\Models\Owner;

    class OwnerController
    {
        public function index(Request $request, Response $response, $args)
        {
            $owners = Owner::with('cars')->get();
            $response->getBody()->write(json_encode($owners));
            return $response->withHeader('Content-Type', 'application/json');
        }
        
        public function show(Request $request, Response $response, $args)
        {
            $owner = Owner::with('cars')->find($args['id']);
            if(!$owner){
                $response->getBody()->write(json_encode(["message" => "Nu exista"]));
                return $response->withHeader('Content-Type', 'application/json');
            }
            $response->getBody()->write(json_encode($owner));
            return $response->withHeader('Content-Type', 'application/json');
        }
        
        public function store(Request $request, Response $response, $args)
        {
            $data = $request->getParsedBody();
            if(empty($data) || !is_array($data)){
                $response->getBody()->write(json_encode(["message" => "Nu exista date"]));
                return $response->withHeader('Content-Type', 'application/json');
            }
            Owner::create($data);
            $response->getBody()->write(json_encode(["message" => "Proprietar adaugat cu succes!"]));
            return $response->withHeader('Content-Type', 'application/json');
        }
        
        public function update(Request $request, Response $response, $args)
        {
            $owner = Owner::find($args['id']);
            if(!$owner){
                $response->getBody()->write(json_encode(["message" => "Nu exista"]));
                return $response->withHeader('Content-Type', 'application/json');
            }
            $owner->fill(json_decode($request->getBody()->getContents(),true));
            $owner->save();
            $response->getBody()->write(json_encode(["message" => "Proprietar editat cu succes!"]));
            return $response->withHeader('Content-Type', 'application/json');
        }
        
        public function delete(Request $request, Response $response, $args)
        {
            $owner = Owner::find($args['id']);
            if(!$owner){
                $response->getBody()->write(json_encode(["message" => "Nu exista"]));
                return $response->withHeader('Content-Type', 'application/json');
            }
            $owner->delete();
            $response->getBody()->write(json_encode(["message" => "Proprietar sters cu succes!"]));
            return $response->withHeader('Content-Type', 'application/json');
        }
    }