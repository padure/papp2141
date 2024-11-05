<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Product;

class Category extends Model{
    protected $table = "categories";
    protected $fillable = ['name'];

    public function products(): HasMany 
    {
        return $this->hasMany(Product::class);
    }
}