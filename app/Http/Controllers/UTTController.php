<?php

namespace App\Http\Controllers;

use App\Models\UTT;
use Illuminate\Http\Request;

class UTTController extends Controller
{
    function store(Request $request){


        $data = new UTT;

        $data->problem = $request->problem;
        $data->patient_id = $request->patient_id;
        $data->save();

        return redirect()->route('patientShow',['id'=>$request->patient_id]);

    }
}
