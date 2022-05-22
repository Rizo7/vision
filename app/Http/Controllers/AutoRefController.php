<?php

namespace App\Http\Controllers;

use App\Models\AutoRef;
use App\Models\Patient;
use Illuminate\Http\Request;

class AutoRefController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'patient_id' => 'required',
            'r_sph' => 'required',
            'l_sph' => 'required',
            'r_cyl' => 'required',
            'l_cyl' => 'required',
            'r_ax' => 'required',
            'l_ax' => 'required',
            'clear' => 'required'
        ]);

        $data = new AutoRef;
        $data->right_sph = $request->r_sph;
        $data->right_cyl = $request->r_cyl;
        $data->right_ax = $request->r_ax;
        $data->left_sph = $request->l_sph;
        $data->left_cyl = $request->l_cyl;
        $data->left_ax = $request->l_ax;
        $data->user_id = $request->patient_id;
        $data->clear = $request->clear;
        $data->clear_left = $request->clear_left;
        $data->clear_with_glasses = $request->clear_with_glasses;
        $data->clear_left_with_glasses = $request->clear_left_with_glasses;

        $data->save();



//        $patient = Patient::with('getPlace','getAutoRE','getImages','problemPatient','solutionPatient','tonoPatient','kerPatient')->where('id', $request->patient_id)->first();

        return redirect()->route('patientShow',['id'=>$request->patient_id]);


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AutoRef  $autoRef
     * @return \Illuminate\Http\Response
     */
    public function show(AutoRef $autoRef)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AutoRef  $autoRef
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AutoRef $autoRef)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AutoRef  $autoRef
     * @return \Illuminate\Http\Response
     */
    public function destroy(AutoRef $autoRef)
    {
        //
    }
}
