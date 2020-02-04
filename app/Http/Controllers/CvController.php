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
    public function edit($id)
    {
        $cv = Auth::user()->cv->find($id);
    }
    public function update(Request $request, $id){
        $cv = Auth::user()->cv->find($id);
        $cv->Titre = $request->input('titre');
        $cv->save();
        return redirect('/cv');
      
    }
}
