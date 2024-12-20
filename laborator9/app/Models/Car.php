<?php
    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;
    use App\Models\Mechanic;
    use App\Models\Owner;
use Illuminate\Database\Eloquent\Relations\HasOne;

    class Car extends Model
    {
        protected $table = "cars";
        protected $hidden = ['mechanic_id'];
        protected $fillable = ["id", "model"];

        public function mechanic ():BelongsTo {
            return $this->belongsTo(Mechanic::class);
        }
        
        public function owner ():HasOne {
            return $this->hasOne(Owner::class);
        }
    }