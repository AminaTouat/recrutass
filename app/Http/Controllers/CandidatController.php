<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\User;
use Illuminate\Support\Facades\Auth;
use Image;


class CandidatController extends Controller
{
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function update_avatar(Request $request) {
          	// Handle the user upload of avatar
    	if($request->hasFile('avatar')){
    		$avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            $path = public_path('/uploads/avatar/'.$filename);
    		Image::make($avatar->getRealPath())->resize(300, 300)->save($path);
    		$user = Auth::user();
    		$user->avatar = $filename;
    		$user->save();
    	}
    	return view('candidat.home', array('user' => Auth::user()) );
    
    }
    public function index()
    {
        $user = Auth::user();
        return view('candidat.home', ['user' => $user]);
    }
    public function header()
    {
        $user = Auth::user();
        return view('layouts.candidat.header', ['user' => $user]);
    }
    public function contact()
    {
        $user = Auth::user();
        return view('candidat.contact', ['user' => $user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('candidat.home');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        $id = Auth::user()->id;
        $user = User::find($id);
        $user->name = $request->name;
        $user->prenom = $request->input('prenom');
        $user->datenaiss = $request->input('datenaiss');
        $user->civilite = $request->input('civilite');
        $user->sexe = $request->input('sexe');
        $user->address = $request->input('address');
        $user->linkedIN = $request->input('linkedIN');
        $user->facebook = $request->input('facebook');
        $user->twitter = $request->input('twitter');
        $user->github = $request->input('github');
        $user->emailT = $request->input('emailT');
        $user->phone = $request->input('phone');
        $user->ville = $request->input('ville');
        $user->save();
        return back()->with( [ 'user' => $user ] );
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
        $user = User::find($id);
        return view('candidat.edit', ['user' => $user]);
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
        $id = Auth::user()->id;
        $user = User::find($id);
        $user->name = $request->name;
        $user->prenom = $request->prenom;
        $user->datenaiss = $request->datenaiss;
        $user->civilite = $request->civilite;
        $user->sexe = $request->sexe;
        $user->address = $request->address;
        $user->linkedIN = $request->linkedIN;
        $user->emailT = $request->emailT;
        $user->phone = $request->phone;
        $user->ville = $request->ville;
        $user->save();
        return redirect('/home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

    }
}
