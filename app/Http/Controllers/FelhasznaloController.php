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
    public function modosit(Request $request)
    {
        $user = User::find($request->id);
        
        if (!$user) {
            return redirect()->back()->with('error', 'Felhasználó nem található!');
        }
        
        $user->tipus = ($user->tipus === 'admin') ? 'user' : 'admin';
        $user->save();

        return redirect()->back()->with('success', 'Jogosultság módosítva!');
    }
    public function torol(Request $req)
    {
        $felhasznalo = User::findOrFail($req->id);
        $felhasznalo->delete();

        return redirect()->back()->with('success', 'Felhasználó sikeresen törölve!');
    }
    
}
