<?php

namespace App\Http\Controllers;

use App\Models\Ker;
use App\Models\Patient;
use Illuminate\Http\Request;

class KerController extends Controller
{
    public function store(Request $request){

       $data = new Ker;
       $data->Right_R1_MM = $request->Right_R1_MM;
       $data->Right_R1_D = $request->Right_R1_D;
       $data->Right_R1_AX = $request->Right_R1_AX;
        $data->Right_R2_MM = $request->Right_R2_MM;
        $data->Right_R2_D = $request->Right_R2_D;
        $data->Right_R2_AX = $request->Right_R2_AX;
        $data->Left_R1_MM = $request->Left_R1_MM;
        $data->Left_R1_D = $request->Left_R1_D;
        $data->Left_R1_AX = $request->Left_R1_AX;
        $data->Left_R2_MM = $request->Left_R2_MM;
        $data->Left_R2_D = $request->Left_R2_D;
        $data->Left_R2_AX = $request->Left_R2_AX;
        $data->patient_id = $request->patient_id;
        $data->save();

//        $patient = Patient::with('getPlace','getAutoRE','getImages','problemPatient','solutionPatient','tonoPatient','kerPatient')->where('id', $request->patient_id)->first();

        return redirect()->route('patientShow',['id'=>$request->patient_id]);


    }
}
