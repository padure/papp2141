<?php
    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;
    use App\Models\Car;

    class Owner extends Model
    {
        protected $table = "owners";

        protected $fillable = ["id", "name", "car_id"];

        public function car (): BelongsTo
        {
            return $this->belongsTo(Car::class);
        }
    }