<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Futar;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class FutarController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'dob' => 'required|date',
            'vehicle' => 'required|string',
            'email' => 'required|email|unique:futar,email',
            'password' => 'required|string|min:6|confirmed',
        ]);

        Futar::create([
            'name' => $request->name,
            'dob' => $request->dob,
            'vehicle' => $request->vehicle,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->back()->with('success', 'Sikeresen jelentkeztél futárnak!');
    }

    public function lista()
    {
        $lista = Futar::all(); 
        return view('admin.futarok', ['lista' => $lista]);
    }

    public function edit($id)
    {
        $futar = Futar::find($id);
        if (!$futar) {
            return redirect()->route('admin.futarok')->with('error', 'Futár nem található!');
        }
        return view('admin.futarForm', ['futar' => $futar]);
    }

    public function update(Request $req, $id)
    {
        $req->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'dob' => 'required|date',
            'vehicle' => 'required'
        ]);

        $futar = Futar::find($id);
        if (!$futar) {
            return redirect()->route('admin.futarok')->with('error', 'Futár nem található!');
        }

        $futar->name = $req->name;
        $futar->email = $req->email;
        $futar->dob = $req->dob;
        $futar->vehicle = $req->vehicle;
        $futar->save();

        return redirect()->route('futarEdit', $id)->with('success', 'Futár sikeresen módosítva!');
    }

    public function confirmDelete($id)
    {
        $futar = Futar::find($id);
        if (!$futar) {
            return response()->json(['error' => true, 'message' => 'Futár nem található!'], 404);
        }

        $content = view('confirmFutarDelete', ['futar' => $futar])->render();
        return response()->json(['error' => false, 'id' => $id, 'content' => $content], 200);
    }

    public function destroy(Request $req)
    {
        $futar = Futar::find($req->id);
        if ($futar) {
            $futar->delete();
        }
        return response()->json(['error' => false, 'id' => $req->id], 200);
    }
}
