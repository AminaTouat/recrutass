<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecruteurController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:recruteur');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('user-dash-recru');
    }
}
