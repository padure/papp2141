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
    }