<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;
    
    public $table = "szallitasok";
    public $primarykey = "szallitasok_id";
    
    protected $fillable = ['delivery_id', 'weight', 'dimensions', 'content_description'];
    
    public function delivery()
    {
        return $this->belongsTo(Delivery::class);
    }
}