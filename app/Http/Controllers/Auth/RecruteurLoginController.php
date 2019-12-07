<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RecruteurLoginController extends Controller
{
    public function __construct(){
        $this->middleware('guest:recruteur');
    }
    public function showLoginFrom(){
        return view('auth\recruteur.login');
    }
    public function login(){
        return true;
    }
}
