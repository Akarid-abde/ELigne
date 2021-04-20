<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\fiche;

class ClientController extends Controller
{
    //
         public function __construct()
    {
        $this->middleware("auth");
    }

    public function index(){
    	return view('user.client');
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.client');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    	return  $request->typefiche;
                 //validateur
      /*  $this->validate($request,[
            'typefiche' => "required"

        ]);
        //store data

        fiche::create([
            'user_id' =>  $request->userID,
            'typefiche'  => $request->typefiche
        ]);
        //redirect User

          session()->flash('success','Demande Bien Fait');
          return redirect()->back(); */
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\fiche  $fiche
     * @return \Illuminate\Http\Response
     */
    public function show(fiche $fiche)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\fiche  $fiche
     * @return \Illuminate\Http\Response
     */
    public function edit(fiche $fiche)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\fiche  $fiche
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $user = User::find($id);
        // validateur
       $this->validate($request,[
            'ville' => "required",
            'adresse' => "required",
        ]);
        //store data
        $user->update([
            'ville' => $request->ville,
            'adresse' => $request->adresse,
        ]);
        //redirect User
          session()->flash('success','bien enregistrer !!');
          return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\fiche  $fiche
     * @return \Illuminate\Http\Response
     */
    public function destroy(fiche $fiche)
    {
        //
    }
}
