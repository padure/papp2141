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
            $id = $args['id'];
            $mechanic = Mechanic::find($id);
            if(!$mechanic){
                $response->getBody()->write(json_encode(["message" => "Nu exista"]));
                return $response->withHeader('Content-Type', 'application/json');
            }
            $response->getBody()->write($mechanic->toJson());
            return $response->withHeader('Content-Type', 'application/json');
        }

        public function store (Request $request, Response $response, $args)
        {
            $mechanic = $request->getParsedBody();
            Mechanic::create($mechanic);
            $response->getBody()->write(json_encode(["message" => "Mechanicul a fost adaugat cu succes!"]));
            return $response->withHeader('Content-Type', 'application/json');
        }

        public function update (Request $request, Response $response, $args)
        {
            $mechanic = json_decode($request->getBody()->getContents(), true);

            if(empty($mechanic) || !is_array($mechanic)){
                $response->getBody()->write(json_encode(["message" => "Adugati date valide!"]));
                return $response->withHeader('Content-Type', 'application/json');
            }

            $old_mechanics = Mechanic::find($args['id']);

            if(!$old_mechanics){
                $response->getBody()->write(json_encode(["message" => "Nu exista"]));
                return $response->withHeader('Content-Type', 'application/json');
            }

            $old_mechanics->fill($mechanic);
            $old_mechanics->save();
            
            $response->getBody()->write(json_encode(["message" => "Datele au fost actualizate"]));
            return $response->withHeader('Content-Type', 'application/json');
        }
    }