<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Futar;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class FutarListController extends Controller
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

    public function list()
    {
        $list = Futar::all();
        return view('futarokCard', ['lista' => $list]);
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

    public function delete(Request $req)
    {
        $futar = Futar::findOrFail($req->id);
        $futar->delete();

        return redirect()->back()->with('success', 'Futár sikeresen törölve!');
    }
    public function confirmDelete($id){
        $data['error'] = false;
        $data['id'] = $id;
        $futar = Futar::find($id);
        $data['content'] = view('confirmFutarDelete',['futar' => $futar])->render();
        return response()->json($data,200,['Content-Type' => 'application/json']);
    }

    public function destroy(Request $req){
        $data['error'] = false;
        $data['id'] = $req->id;
        $futar = Futar::find($req->id);
        $futar->delete();
        return response()->json($data,200,['Content-type' => 'application/json']);

    }
}
