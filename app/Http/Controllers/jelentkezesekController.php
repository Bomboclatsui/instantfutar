<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;
use Illuminate\Support\Facades\Auth;

class ApplicationController extends Controller
{
    public function showApplicationForm() {
        return view('apply');
    }

    public function submitApplication(Request $request) {
        Application::create([
            'user_id' => Auth::id(),
            'experience' => $request->experience,
            'status' => 'pending',
        ]);

        return redirect('/')->with('success', 'Jelentkezés sikeresen elküldve!');
    }
}
