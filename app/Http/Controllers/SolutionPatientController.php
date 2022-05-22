<?php

namespace App\Http\Controllers;

use App\Models\SolutionPatient;
use Illuminate\Http\Request;

class SolutionPatientController extends Controller
{
    //
    public function store(Request $request)
    {
        $data = new SolutionPatient;
        $data->solution_id = $request->solution_id;
        $data->patient_id = $request->patient_id;
        $data->save();

        return redirect()->route('patientShow',['id'=>$request->patient_id]);
    }

}
