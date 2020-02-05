<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Competence;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\User;

class CompetenceController extends Controller
{
    
    public function store(Request $request)
    {

        $user = Auth::user();
        $competence = new Competence;
        $competence->titre = $request->input('titre');
        $competence->pourcentage = $request->input('pourcentage');
        $competence->cv_id = $user->cv->id;
        $competence->save();
        return redirect('/cv');

}
public function destroy($id){
    $competence=Competence::find($id);
    $competence->delete();
    return redirect('/cv');
  }
}