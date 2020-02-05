<?php

namespace App\Http\Controllers;
use App\Offre;
use Illuminate\Http\Request;
use App\Illuminate\Http\UploadedFile;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;

use App\Recruteur;  
use Auth;


class ChartController extends Controller
{
    
    // public function __construct()
    // {
      
    //     $user = Auth::guard('recruteur')->user();
    //     $this->middleware(' $user'); 
    // }


    public function index($annee)
    {
     $id=Auth::guard('recruteur')->user()->id;
     $record['chart'] = Offre::select(\DB::raw("COUNT(*) as count"))
                    ->whereYear('created_at', $annee)
                    ->where('offres.recruteur_id','=', $id)
                    ->groupBy(\DB::raw("Month(created_at)"))
                    ->pluck('count');
      
      return view('recruteur/chartLine', $record); 
    }
  
  

function viewChartLine1(Request $request)
{    
    $id=Auth::guard('recruteur')->user()->id;
    $req=$request->get('year');

    $record['chart'] = Offre::select(\DB::raw("COUNT(*) as count"))
    ->where('offres.recruteur_id','=', $id)
    ->whereYear('created_at', $req)
    ->groupBy(\DB::raw("Month(created_at)"))
    ->pluck('count');
  return view('recruteur/chartLine', $record); 

}

}
