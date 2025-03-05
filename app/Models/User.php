<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable {
    use HasFactory;

    public $table = "user";
    public $primarykey = "user_id";
    protected $fillable = ['name', 'email', 'password', 'role'];
    protected $hidden = ['password'];

    public function applications() {
        return $this->hasMany(Application::class);
    }

    public function orders() {
        return $this->hasMany(Order::class);
    }
}
