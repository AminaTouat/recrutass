<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Offre;
use App\Postulant;
use Illuminate\Support\Facades\Auth;

class PostulantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        if (auth()->guest()) {
            return redirect('/login')->withErrors([
                'email' => "Vous devez être connecté pour voir cette page.",
            ]);
        }
        $offre = Offre::findOrFail($id);
        return view('modal.modalPostulan',['offre'=>$offre]);
        
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
    public function store(Request $request , $id)
    {
        
        $postulant = new Postulant;
        $postulant->candidat_id=Auth::user()->id;
        $postulant->offre_id=$request->input('offre_id');
        $postulant->Niveau = $request->input('Niveau');
        $postulant->dernier_post = $request->input('dernier_post');
        $postulant->type_post = $request->input('type_post');
        $postulant->anne_experience = $request->input('anne_experience');
        $postulant->Niveau = $request->input('Niveau');
        $postulant->save();
        return redirect('/')
                         ->with('success','candidature ajoutée avec succés.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
    }
}
