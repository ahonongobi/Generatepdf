<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
class GenerateInputPDFController extends Controller
{
    //

    public function preview2(Request $req){
        $email = $req->email;
        $ville =  $req->ville;
        $numero = $req->numero;
        $pays =   $req->pays;
        return view('preview-input',compact('email','ville','numero','pays'));
    }

    public function generate($email,$numero,$ville,$pays)

    {

        $pdf = PDF::loadView('preview-input',compact('email','numero','ville','pays'));    

        return $pdf->download('resume.pdf');

    }
}
