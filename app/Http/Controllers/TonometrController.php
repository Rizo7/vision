<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\Tonometr;
use Illuminate\Http\Request;

class TonometrController extends Controller
{
    public function store(Request $request)
    {
        $data = new Tonometr;
        $data->right = $request->right;
        $data->left = $request->left;
        $data->patient_id = $request->patient_id;
        $data->save();


//        $patient = Patient::with('getPlace','getAutoRE','tonoPatient')->where('id', $request->patient_id)->first();

        return redirect()->route('patientShow',['id'=>$request->patient_id]);
    }
}
