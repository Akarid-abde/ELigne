<?php

namespace App\Http\Controllers;

use App\cn;
use Illuminate\Http\Request;
use PDF;

class CnController extends Controller
{
        public function __construct()
    {
        $this->middleware("auth");
    }


    public function CnPdf($id)
    {
        $cns = cn::find($id);
        $pdf = \PDF::loadView('CN',compact("cns"));
        /*$pdf = \PDF::loadView('CN')->setPaper('a4','landscape')->setWarnings(false)->save('CN.pdf');*/
         PDF::setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif']);
         $pdf->save(storage_path().'/public/'.'CN.pdf');
/*         $destinationPath=public_path().'CN.pdf';
         $success = \File::move(base_path('CN.pdf'),$destinationPath);*/
        /*return $pdf->download('CN.pdf');*/
         return $pdf->stream('CN.pdf');      
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /* return view("CN")->with([
            "cns" => cn::all(),
        ]);*/
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
 //validateur
        $this->validate($request,[
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

        cn::create([
            'bénificier'  => $request->bénificier,
            'FormJuridique' => $request->FormJuridique,
            'ville' => $request->ville,
            'dateExpération' => $request->dateExpération,
            'pdf' => $pdf,
        ]);
        //redirect User
          session()->flash('success','le cv est bien enregistrer !!');
          return redirect()->back();

    }
    /**
     * Display the specified resource.
     *
     * @param  \App\cn  $cn
     * @return \Illuminate\Http\Response
     */
    public function show(cn $cn)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\cn  $cn
     * @return \Illuminate\Http\Response
     */
    public function edit(cn $cn)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\cn  $cn
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cn $cn)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\cn  $cn
     * @return \Illuminate\Http\Response
     */
    public function destroy(cn $cn)
    {
        //
    }
}
