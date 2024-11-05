<?php
namespace App\Controllers;

use App\Models\Category;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

    class CategoryController
{
    public function index(Request $request, Response $response)
    {
        $category = Category::all();
        $response->getBody()->write($category->toJson());
        return $response->withHeader('Content-Type', 'application/json');

    }
    public function store(Request $request, Response $response, $args)
    {
        $data = $request->getParsedBody();
        $category = Category::create($data);
        $response->getBody()->write($category->toJson());
        return $response->withHeader('Content-Type', 'application/json');
    }
    public function show(Request $request, Response $response, $args)
    {
        $category = Category::with('products')->find($args['id']);
        $response->getBody()->write(json_encode($category));
        return $response->withHeader('Content-Type', 'application/json');
    }
    public function update(Request $request, Response $response, $args)
    {
        $data = json_decode($request->getBody()->getContents(), true);

        // Verificarea dacă datele sunt valide
        if (is_null($data) || !is_array($data)) {
            $response->getBody()->write(json_encode(['error' => 'Date invalide trimise pentru actualizare.']));
            return $response->withStatus(400)->withHeader('Content-Type', 'application/json');
        }

        $category = Category::find($args['id']);
        if (!$category) {
            $response->getBody()->write(json_encode(['error' => 'Produsul nu a fost găsit.']));
            return $response->withStatus(404)->withHeader('Content-Type', 'application/json');
        }

        $category->fill($data);
        $category->save();

        $response->getBody()->write(json_encode($category));
        return $response->withHeader('Content-Type', 'application/json');
    }
    public function delete(Request $request, Response $response, $args)
    {
        $category = Category::find($args['id']);
        $category->delete();
        $response->getBody()->write(json_encode(['status' => 'Category deleted']));
        return $response->withHeader('Content-Type', 'application/json');
    }

}
//Pe acasa trebuie cu cateogiii
//in loc de tabelul category facem un proect nou si in loc de tabelul category facem categorii
//facem si in insomnia
