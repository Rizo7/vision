<?php

namespace App\Http\Controllers;

use App\Models\Patient;
//use Barryvdh\DomPDF\PDF;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;


class PDFController extends Controller
{

    function Patients(){
        $patients = Patient::all();
        return view('patient.patient', compact('patients'));
    }


    public function generatePDF()
    {


        $patients = Patient::all();
        $pdf = PDF::loadView('pdf.invoice', $patients);
        return $pdf->download('invoice.pdf');

//
//
//        $data = [
//            'title' => 'Welcome to ItSolutionStuff.com',
//            'date' => date('m/d/Y')
//        ];
//
//        $pdf = PDF::loadView('myPDF', $data);
//
//        return $pdf->download('itsolutionstuff.pdf');
    }
}
