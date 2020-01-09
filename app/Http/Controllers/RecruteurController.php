<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recruteur;
use Illuminate\Support\Facades\Auth;

class RecruteurController extends Controller
{
    public function update_avatar(Request $request) {
        // Handle the user upload of avatar
  if($request->hasFile('avatar')){
      $avatar = $request->file('avatar');
      $filename = time() . '.' . $avatar->getClientOriginalExtension();
      $path = public_path('/uploads/avatar/'.$filename);
      Image::make($avatar->getRealPath())->resize(300, 300)->save($path);
      $user = Auth::guard('recruteur')->user();
      $user->avatar = $filename;
      $user->save();
  }
  return view('recruteur.recruteur', array('user' => Auth::guard('recruteur')->user()) );

}
public function header()
    {
        $user = Auth::guard('recruteur')->user();
        return view('layouts.recruteur.header', ['user' => $user]);
    }
    public function index()
{
    $user = Auth::guard('recruteur')->user();
    return view('recruteur.recruteur', ['user' => $user]);
}
    public function create()
    {
        return view('recruteur.recruteur');
    }

public function store(Request $request)
{ 
    $id = Auth::guard('recruteur')->user()->id;
    $user = Recruteur::find($id);
    $user->name = $request->name;
    $user->adresseentre = $request->adresseentre;
    $user->emailentre = $request->emailentre;
    $user->telephoneentre = $request->telephoneentre;
    $user->discriptionentre = $request->discriptionentre;
    $user->nomrecru = $request->nomrecru;
    $user->sitewebentre = $request->sitewebentre;
    $user->prenomrecru = $request->prenomrecru;
    $user->emailrecru = $request->emailrecru;
    $user->telephonerecru = $request->telephonerecru;
    $user->Ville = $request->Ville;
    $user->Sexe = $request->Sexe;
    $user->Linkedin = $request->Linkedin;
    $user->twitter = $request->twitter;
    $user->facebook = $request->facebook;
    $user->Civilite = $request->Civilite;
    $user->etatentre = $request->etatentre;
    
    $user->save();
    return back()->with( [ 'user' => $user ] );
}
public function edit($id)
{
    $user = Auth::guard('recruteur')->user();
    return view('recruteur.edit', ['user' => $user]);
}
public function update(Request $request, $id)
{
 
    $id = Auth::guard('recruteur')->user()->id;
    $user = Recruteur::find($id);
    // $user->name = $request->name;

    $user->adresseentre = $request->adresseentre;
    $user->emailentre = $request->emailentre;
    $user->telephoneentre = $request->telephoneentre;
    $user->discriptionentre = $request->discriptionentre;
    $user->nomrecru = $request->nomrecru;
    $user->sitewebentre = $request->sitewebentre;
    $user->prenomrecru = $request->prenomrecru;
    $user->emailrecru = $request->emailrecru;
    $user->telephonerecru = $request->telephonerecru;
    $user->Ville = $request->Ville;
    $user->Sexe = $request->Sexe;
    $user->Linkedin = $request->Linkedin;
    $user->twitter = $request->twitter;
    $user->facebook = $request->facebook;
    $user->Civilite = $request->Civilite;
    $user->etatentre = $request->etatentre;
    
    $user->save();
    return redirect('/recruteur');
}
}
