<?php

namespace App\Http\Controllers;
use\App\Offre;
use\App\Comment;
use\App\Postulant;
use Illuminate\Http\Request;
use\App\Recruteur;
class WebsiteController extends Controller
{
    public function index()
    {
<<<<<<< HEAD
=======
        
>>>>>>> statistique
        return view('listeDesEntreprises')->with('offres' , Offre::all());
    }
    public function showOffre($id)
    {

        $offres = Offre::find($id);
         $postulant = Postulant::where('offre_id' , $offres->id )->get();
        return view('informationSurlEntreprise')->with('offres' , $offres)
                                                 ->with('postulant' , $postulant);


                                                 
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
