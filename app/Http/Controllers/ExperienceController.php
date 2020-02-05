<?php

namespace App\Http\Controllers;

use App\experience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\User;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $experiences = $user->cv->experiences;
        $competences = $user->cv->competence;
        return view('candidat.cv', ['user'=> $user ,'experiences' =>$experiences,'competences' =>$competences]);
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
        $experience = new Experience;
        $experience->Titre = $request->input('Titre');
        $experience->Description = $request->input('Description');
        $experience->Entreprise = $request->input('Entreprise');
        $experience->Date_debut = $request->input('Date_debut');
        $experience->Date_fin = $request->input('Date_fin');
        $experience->Lieu = $request->input('Lieu');
        $experience->Type_entreprise = $request->input('Type_entreprise');
        $experience->Secteur = $request->input('Secteur');
        $experience->Fonction = $request->input('Fonction');
        $experience->Niveau = $request->input('Niveau');

        $experience->cv_id = $user->cv->id;
        $experience->save();
        return redirect('/cv')->with(['user' => $user]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function show(experience $experience)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $experiences = Auth::user()->cv->experience->find($id);
            return view('candidat.editexperience', ['experiences'=> $experiences]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
             // $user = Auth::user();
        // $id = $user->cv->formation->id;
        $experience = Auth::user()->cv->experience->find($id);
        $experience->Titre = $request->input('Titre');
        $experience->Description = $request->input('Description');
        $experience->Entreprise = $request->input('Entreprise');
        $experience->Date_debut = $request->input('Date_debut');
        $experience->Date_fin = $request->input('Date_fin');
        $experience->Lieu = $request->input('Lieu');
        $experience->Type_entreprise = $request->input('Type_entreprise');
        $experience->Secteur = $request->input('Secteur');
        $experience->Fonction = $request->input('Fonction');
        $experience->Niveau = $request->input('Niveau');
        $experience->save();
        return redirect('/cv');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $experience=Experience::find($id);
        $experience->delete();
        return redirect('/cv');
      }
    }

