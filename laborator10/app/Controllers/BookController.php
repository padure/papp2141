<?php

namespace App\Controllers;

use App\Models\Book;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class BookController
{
    public function index(Request $request, Response $response, $args)
    {
        $books = Book::all();
        ob_start();
        require_once __DIR__ . '/../../views/index.view.php';
        $html = ob_get_clean();
        $response->getBody()->write($html);
        return $response;
    }

    public function create(Request $request, Response $response, $args)
    {
        ob_start();
        require_once __DIR__ . '/../../views/create.view.php';
        $html = ob_get_clean();
        $response->getBody()->write($html);
        return $response;
    }

    public function store(Request $request, Response $response, $args)
    {
        $data = $request->getParsedBody();
        Book::create($data);
        return $response
            ->withHeader('Location', '/books')
            ->withStatus(302);
    }

    public function edit(Request $request, Response $response, $args)
    {
        $book = Book::find($args['id']);
        ob_start();
        require_once __DIR__ . '/../../views/edit.view.php';
        $html = ob_get_clean();
        $response->getBody()->write($html);
        return $response;
    }

    public function update(Request $request, Response $response, $args)
    {
        $book = Book::find($args['id']);
        $data = $request->getParsedBody();
        $book->fill($data);
        $book->save();
        return $response
            ->withStatus(302)
            ->withHeader('Location', '/books');
    }

    public function delete(Request $request, Response $response, $args)
    {
        $book = Book::find($args['id']);
        $book->delete();
        return $response
            ->withStatus(302)
            ->withHeader('Location', '/books');
    }

    public function show(Request $request, Response $response, $args)
    {
        $book = Book::find($args['id']);
        ob_start();
        require_once __DIR__ . '/../../views/show.view.php';
        $html = ob_get_clean();
        $response->getBody()->write($html);
        return $response;
    }
}
