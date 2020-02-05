<?php

namespace App\Http\Controllers;
use\App\Offre;
use\App\Comment;
use Illuminate\Http\Request;
use\App\Recruteur;
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
    public function index1()
    {
        return view('index')->with('recruteurs' , Recruteur::all())
        ;
    }
    public function showOffre1($name)
    {

        $recruteur      = Recruteur::where('name' , $name)->first();


        return view('profilefrontrecru')->with('recruteurs' , $recruteur)
                                                ;

    }

}
