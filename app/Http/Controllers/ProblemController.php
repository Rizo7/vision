<?php

namespace App\Http\Controllers;

use App\Models\Problem;
use Illuminate\Http\Request;

class ProblemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $problems = Problem::all();
        return view('home.problemForm', compact('problems'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

//        $request->validate([
//            $request->problem => 'required'
//        ]);

//        dd($request->all());
        $data = new Problem;
        $data->problem = $request->problem;
        $data1 = $data->save();

        if($data1){
            return redirect()->route('indexProblem')->with('success', 'added perfectly');
        }else{

//            return redirect()->route('indexProblem')-with('fail', 'Shikoyat qoshilmadi');
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Problem  $problem
     * @return \Illuminate\Http\Response
     */
    public function show(Problem $problem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Problem  $problem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Problem $problem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Problem  $problem
     * @return \Illuminate\Http\Response
     */
    public function destroy(Problem $problem)
    {
        //
    }
}
