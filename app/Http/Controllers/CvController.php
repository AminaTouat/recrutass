<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\CV;

class CvController extends Controller
{
     public function store(Request $request)
    {
        $id = Auth::user()->id;
        $user = new Cv();
      $user->candidat_id=$id;
        $user->save();
        return redirect('/cv',['user' => $user]); 
    }
}
