<?php
    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;
    use App\Models\Mechanic;
    use App\Models\Owner;

    class Car extends Model
    {
        protected $table = "cars";

        protected $fillable = ["id", "model", "mechanic_id"];

        public function mechanic ():BelongsTo {
            return $this->belongsTo(Mechanic::class);
        }
        
        public function owner ():BelongsTo {
            return $this->belongsTo(Owner::class);
        }
    }