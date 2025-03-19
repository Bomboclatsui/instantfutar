<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class FelhasznaloController extends Controller
{
    public function lista(){
        $lista = User::all();
        return view('admin.felhasznalok',["lista" => $lista]);
    }
}
