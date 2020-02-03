<?php

namespace App\Http\Controllers;
use\App\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class AffichecandController extends Controller
{
    public function index()
    {
        $user = Auth::guard('recruteur')->user();
        return view('recruteur.affichecondidat',['user' => $user])->with('users' , User::all());

    }
}
