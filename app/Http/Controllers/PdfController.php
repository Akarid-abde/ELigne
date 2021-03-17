<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PdfController extends Controller
{
    //
    public function CnPdf()
    {
    	$pdf = \PDF::loadView('CN');
    	return $pdf->download('CN.pdf');

    }
}
