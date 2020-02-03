<?php

namespace App\Http\Controllers;
use\App\Offre;
use\App\Comment;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        return view('listeDesEntreprises')->with('offres' , Offre::all())
        ;
    }
    public function showOffre($intitule)
    {

        $offre      = Offre::where('intitule' , $intitule)->first();


        return view('informationSurlEntreprise')->with('offres' , $offre)
                                                 ->with('comments' , Comment::all());

    }

}
