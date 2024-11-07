<?php
    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\HasMany;
    use App\Models\Car;

    class Owner extends Model
    {
        protected $table = "owners";

        protected $fillable = ["id", "name", "car_id"];

        public function cars (): HasMany
        {
            return $this->hasMany(Car::class);
        }
    }