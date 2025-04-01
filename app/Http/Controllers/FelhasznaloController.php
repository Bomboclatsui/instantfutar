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
    public function confirmDelete($id){
        $data['error'] = false;
        $data['id'] = $id;
        $felhasznalo = User::find($id);
        $data['content'] = view('confirmFelhasznaloDelete',['felhasznalo' => $felhasznalo])->render();
        return response()->json($data,200,['Content-Type' => 'application/json']);
    }

    public function destroy(Request $req){
        $data['error'] = false;
        $data['id'] = $req->id;
        $felhasznalo = User::find($req->id);
        $felhasznalo->delete();
        return response()->json($data,200,['Content-type' => 'application/json']);

    }
    

    public function edit(string $id){
        $felhasznalo = User::find($id);
        if(!$felhasznalo){
            return redirect()->route('felhasznalok');
        }

        return view('felhasznaloForm',['felhasznalo' => $felhasznalo]);
    }

    public function update(string $id, Request $req){
        $auto = User::find($id);
        if(!$felhasznalo){
            return redirect()->route('felhasznalok');
        }
    }
}
