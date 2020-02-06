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
        $user = Cv::find($id);
        
        $user->titre = $request->input('titre');
        $user->save();
        return redirect('/cv',['user' => $user]); 
    }
}
