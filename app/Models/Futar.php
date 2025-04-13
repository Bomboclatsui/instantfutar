<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Futar extends Model
{
    use HasFactory;

    protected $table = 'futar';

    protected $fillable = [
        'name',
        'dob',
        'vehicle',
        'email',
        'password'
    ];
}
