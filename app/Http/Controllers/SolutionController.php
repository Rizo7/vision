<?php

namespace App\Http\Controllers;

use App\Models\Solution;
use Illuminate\Http\Request;

class SolutionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $solutions = Solution::all();
        return view('home.solutionForm',compact('solutions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Solution;
        $data->solution = $request->solution;
        $data->save();

        return redirect()->route('indexSolution')->with('success', 'Solution added ferfectly');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Solution  $solution
     * @return \Illuminate\Http\Response
     */
    public function show(Solution $solution)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Solution  $solution
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Solution $solution)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Solution  $solution
     * @return \Illuminate\Http\Response
     */
    public function destroy(Solution $solution)
    {
        //
    }
}
