<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Offre;
class LiveSearchController extends Controller
{
    public function allJobs (Request $request)
    {
        $search = $request ->get('search');
        $ad = $request ->get('ad');
        if($search && $ad)
        {
            $offres = Offre:: where ('domaine','LIKE','%'.$search.'%')
            ->orWhere ('Type','LIKE','%'.$search.'%')
            ->orWhere ('intitule','LIKE','%'.$search.'%')
            ->orWhere ('compétence','LIKE','%'.$search.'%')
            ->Where ('lieutravail','LIKE','%'.$search.'%')
            ->paginate(5);
        }
        return view ('live_search', ['offres'=>$offres]);

    }
    
}
