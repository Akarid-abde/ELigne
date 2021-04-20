<?php

namespace App\Http\Controllers;

use App\fiche;
use App\cn;
use Illuminate\Http\Request;

class FicheController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        //validateur
        $this->validate($request,[
            'typefiche' => "required",
            'user_id' => "required",

            'bénificier' => "required",
            'FormJuridique' => "required",
            'ville' => "required",
            'dateExpération' => "required",
            'pdf' => "required",
        ]);
        //store data

         if($request->hasFile('pdf'))
        {
        $pdf= $request->pdf->store('public');
        }

        //store Data
        fiche::create([
            'user_id' =>  $request->user_id,
            'typefiche'  => $request->typefiche
        ]);

        cn::create([
            'bénificier'  => $request->bénificier,
            'FormJuridique' => $request->FormJuridique,
            'ville' => $request->ville,
            'dateExpération' => $request->dateExpération,
            'pdf' => $pdf,
        ]);
        //redirect User

          session()->flash('success','Demande Bien Fait');
          return redirect()->back(); 
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
    public function update(Request $request, fiche $fiche)
    {
        //
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
