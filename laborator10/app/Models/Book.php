<?php
    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;

    class Book extends Model
    {
        protected $tables = "books";
        protected $fillable = [
            'title', 'pages', 'author', 'description', 'price', 'stock'
        ];
    }