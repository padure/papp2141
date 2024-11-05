<?php
    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\HasMany;
    use App\Models\Car;

    class Mechanic extends Model
    {
        protected $table = "mechanics";

        protected $fillable = ["id", "name"];

        public function cars():HasMany
        {
            return $this->hasMany(Car::class);
        }
    }