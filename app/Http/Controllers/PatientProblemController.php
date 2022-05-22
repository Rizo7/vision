<?php

namespace App\Http\Controllers;

use App\Models\Patient_problem;
use Illuminate\Http\Request;

class PatientProblemController extends Controller
{
    public function store(Request $request)
    {

        $data = new Patient_problem;
        $data->patient_id = $request->patient_id;
        $data->problem_id = $request->problem_id;
        $data->save();
         return redirect()->route('patientShow',['id'=>$request->patient_id]);
    }
}
