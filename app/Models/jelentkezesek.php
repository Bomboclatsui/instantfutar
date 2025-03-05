<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Application extends Model {
    use HasFactory;

    public $table = "jelentkezesek";
    public $primarykey = "jelentkezesek_id";
    protected $fillable = ['user_id', 'status', 'experience'];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
