<?php

namespace App\Http\Controllers;
use\App\Offre;
use\App\Comment;
use\App\Postulant;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        return view('listeDesEntreprises')->with('offres' , Offre::all());
    }
    public function showOffre($id)
    {

        $offres = Offre::find($id);
         $postulant = Postulant::where('offre_id' , $offres->id )->get();
        return view('informationSurlEntreprise')->with('offres' , $offres)
                                                 ->with('postulant' , $postulant);


                                                 
    }

}
