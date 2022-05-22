<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\Place;
use Illuminate\Http\Request;

class PlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $count = 0;
        $places = Place::all();
        return view('home.placeForm',compact('places','count'));
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
            'name' => 'required|unique:places,name'
        ]);

        $place = new Place;
        $place->name = $request->name;
        $data = $place->save();

        if($data){
            return redirect()->back()->with('success','Add perfectly');
        }else{
            return redirect()->back()->with('fail','Something is wrong');
        }
    }




    public function count(Request $request){

        $patients = Patient::where('birth_place', '=', $request->place_id)->get();
        $count = count($patients);
        $places = Place::all();
        return view('home.placeForm',compact('places','count'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function show(Place $place)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Place $place)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $data = Place::where('id',$id)->first();
        $data->delete();
        $users = Patient::where('birth_place', $id);
        $users->delete();
        return redirect()->back()->with('success', 'deleted item');
    }
}
