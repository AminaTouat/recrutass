<?php

namespace App\Http\Controllers;

use App\Formation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\User;
use DataTables;
class FormationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       
        
            $user = Auth::user();
            $formations = $user->cv->formation;
            $competences = $user->cv->competence;
            $experiences = $user->cv->experience;
            $cv = $user->cv;
            return view('candidat.cv', ['user'=> $user ,'formations' =>$formations,'competences' =>$competences , 'experiences' =>$experiences , 'cv' =>$cv ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $user = Auth::user();
        $formation = new Formation;
        $formation->TitreFormation = $request->input('TitreFormation');
        $formation->Description = $request->input('Description');
        $formation->etablissement = $request->input('etablissement');
        $formation->Date_debut = $request->input('Date_debut');
        $formation->Date_fin = $request->input('Date_fin');
        $formation->Lieu = $request->input('Lieu');
        $formation->Type_etablissement = $request->input('Type_etablissement');
        $formation->Niveau = $request->input('Niveau');

        $formation->cv_id = $user->cv->id;
        $formation->save();
        return redirect('/cv')->with(['user' => $user]);
    }
    public function edit($id)
    {
        $formations = Auth::user()->cv->formation->find($id);
            return view('candidat.editFormation', ['formations'=> $formations]);
    }
    public function update(Request $request, $id)
    {
        // $user = Auth::user();
        // $id = $user->cv->formation->id;
        $formation = Auth::user()->cv->formation->find($id);
        $formation->TitreFormation = $request->input('TitreFormation');
        $formation->Description = $request->input('Description');
        $formation->etablissement = $request->input('etablissement');
        $formation->Date_debut = $request->input('Date_debut');
        $formation->Date_fin = $request->input('Date_fin');
        $formation->Lieu = $request->input('Lieu');
        $formation->Type_etablissement = $request->input('Type_etablissement');
        $formation->Niveau = $request->input('Niveau');
        $formation->save();
        return redirect('/cv');

    }
    public function destroy($id){
        $formation=Formation::find($id);
        $formation->delete();
        return redirect('/cv');
      }
  
}