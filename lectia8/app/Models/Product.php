<?php
    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;
    use App\Models\Category;
    class Product extends Model
    {
        protected $table = 'products';
        protected $fillable = ['name', 'description', 'price', 'category_id'];
        public function category(): BelongsTo
        {
            return $this->belongsTo(Category::class);
        }
    }