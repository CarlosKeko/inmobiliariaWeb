<?php

namespace App\Http\Controllers;

use App\Models\Servicio;
use App\Models\User;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function welcome(Request $request) {
        
        $perfiles = User::query();
        
        if ($request->filled("servicios")) {
            $perfiles->whereHas('servicios', function($q) use($request){
                $q->where('nombre', 'like', $request->servicios);
            });

        }

        if ($request->filled("especialidades")) {
            $perfiles->whereHas('especialidades', function($q) use($request){
                $q->where('nombre', 'like', $request->especialidades);
            });

        }

        if ($request->filled("idiomas")) {
            $perfiles->whereHas('idiomas', function($q) use($request){
                $q->where('nombre', 'like', $request->idiomas);
            });
            
        }

        return view('welcome', [
            'perfiles' => $perfiles->get()
        ]);

        // $users = User::paginate();

        // return view('welcome', compact('users'));
    }

    public function store(Request $request) {
        return $request->all();
        return view('welcome');
    }
}
