<?php
    use App\Controllers\BookController;
    //Books
    $app->get('/books', [BookController::class, 'index']);