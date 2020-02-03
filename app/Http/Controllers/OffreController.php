<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use App\Offre;

class OffreController extends Controller
{

   

    public function index()
    {
        $user = Auth::guard('recruteur')->user();
        $offres = Offre::where('recruteur_id', $user->id)->orderBy('created_at','desc')->paginate(5);
        //$offres = Offre::orderBy('created_at','desc')->paginate(5);
        return view('recruteur.indexo',compact('offres'),['user' => $user])->with('i',(request()->input('page',1)-1)*5);
    }
   
    public function create(){
        			
			
        $user = Auth::guard('recruteur')->user();
        return view('recruteur.offre',['user' => $user]);
    }
    public function store(Request $request){
       
        $request->validate([
            'intitule' => 'required',
            'description' => 'required',
            'Type' => 'required',
            'domaine' => 'required',
            'lieutravail' => 'required',
            'datefin' => 'required',
            'compétence' => 'required',
            'annéeExperience' => 'required',
            'duréemploi' => 'required',
            'url' => 'required',
            'niveau' => 'required',
            'prix' => 'required',
            'image_logo' => 'required',
            
        ]);
  
        
        $offre = new Offre;
        $offre->intitule = $request->input('intitule');
        $offre->description = $request->input('description');
        $offre->Type = $request->input('Type');
        $offre->domaine = $request->input('domaine');
        $offre->lieutravail = $request->input('lieutravail');
        $offre->datefin = $request->input('datefin');
        $offre->compétence = $request->input('compétence');
        $offre->annéeExperience = $request->input('annéeExperience');
        $offre->duréemploi = $request->input('duréemploi');
        $offre->url = $request->input('url');
        $offre->niveau = $request->input('niveau');
        $offre->prix = $request->input('prix');
        if($request->hasFile('image_logo'))
        {
     
            $file = $request->file('image_logo');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . "." . $extension;
            $file->move('upload/logo/', $filename);
            $offre->image_logo = $filename;
            $offre->save();
        } else {
            return $request;
            $offre->image_logo = '';
            // $user->name = request('name');
            // $user->email = request('email');
            // $user->save();
            // return view('User.Profile');
        }

        $offre->recruteur_id = Auth::guard('recruteur')->user()->id;
        $offre->save();

    
        return redirect()->route('recruteur.indexo')
                        ->with('success','offre created successfully.');
                       
        }
                     function show(Offre $offre)
                        {$user = Auth::guard('recruteur')->user();
                            return view('recruteur.showo',compact('offre'),['user' => $user]);
                        }
                    

                     function edit($id)
                        {
                            
                           //$offre = Offre::find($id);
                           $user = Auth::guard('recruteur')->user();
                           $offre = $user->offres->find($id);
                           return view('recruteur.edito',['user' => $user, 'offre' => $offre]);
                        }

                        function update(Request $request, Offre $offre)
                        {
                            
                            
                            $request->validate([
                                'intitule' => 'required',
                                'description' => 'required',
                                'Type' => 'required',
                                'domaine' => 'required',
                                'lieutravail' => 'required',
                                'datefin' => 'required',
                                'compétence' => 'required',
                                'annéeExperience' => 'required',
                                'duréemploi' => 'required',
                                'url' => 'required',
                                'niveau' => 'required',
                                'prix' => 'required',
                            ]);
                      
                            $offre->update($request->all());
                      
                            return redirect()->route('recruteur.indexo')
                                            ->with('success','offre updated successfully');
                        }
                     function destroy(Offre $offre)
                        {
                            $offre->delete();
                      
                            return redirect()->route('recruteur.indexo')
                                            ->with('success','offre updated successfully');
                        }

    
}
