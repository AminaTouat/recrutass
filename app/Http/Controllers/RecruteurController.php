<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recruteur;
use Illuminate\Support\Facades\Auth;

class RecruteurController extends Controller
{
    public function index()
    {
        $user = Auth::guard('recruteur')->user();
        return view('recruteur', ['user' => $user]);
    }
    public function store(Request $request)
    { 
        $id = Auth::guard('recruteur')->user()->id;
        $user = Recruteur::find($id);
        $user->name = $request->name;
        $user->adresseentre = $request->adresseentre;
        $user->save();
        return back()->with( [ 'user' => $user ] );
    }
}
