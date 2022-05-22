<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Patient;
use Illuminate\Http\Request;

class ImageController extends Controller
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
            'image'=>'required|mimes:jpg,png,jpeg',
             'patient_id'=>'required'
         ]);

         $new_name = time().'.'.$request->image->extension();
         $test =$request->image->move(public_path('Images'), $new_name);

         $image = new Image;
         $image->name = $new_name;
         $image->user_id = $request->patient_id;
         $image->path = $new_name;
         $image->save();


//        $patient = Patient::with('getPlace','getAutoRE')->where('id', $request->patient_id)->first();

        return redirect()->route('patientShow',['id'=>$request->patient_id]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Image $image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $image)
    {
        //
    }


}
