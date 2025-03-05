<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model {
    use HasFactory;
    
    public $table = "rendelesek";
    public $primarykey = "rendelesek_id";

    protected $fillable = ['user_id', 'status'];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function deliveries() {
        return $this->hasMany(Delivery::class);
    }
}
