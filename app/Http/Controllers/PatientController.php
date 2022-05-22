<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\Place;
use App\Models\Problem;
use App\Models\Solution;
use App\Models\SolutionPatient;
use Carbon\Carbon;
use Illuminate\Http\Request;
use MongoDB\Driver\Session;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $places = Place::get();

        return view('home.patientForm', compact('places', $places));

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
            'lastname' => 'required',
            'name' => 'required',
            'birth_year' => 'required',
            'phone_number' => 'required|digits:9',
            'birth_place' => 'required'
        ]);





        $data = new Patient;
        $data->name = $request->name;
        $data->lastname = $request->lastname;
        $data->birth_year = $request->birth_year;
        $data->phpne_number = $request->phone_number;
        $data->birth_place = $request->birth_place;
        $data1 =  $data->save();



        if($data1){
            return redirect()->route('dashboard')->with('success', 'Patient added ');
        }else{
            return redirect()->back()->with('fail','go wrong');
        }

    }

    public function edit($id)
    {
        $patient = Patient::with('getPlace')->where('id', $id)->first();
        $places = Place::all();
        return view('home.patientEditForm',compact('patient'), compact('places'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {




        $patient = Patient::where('id',$id)->first();

        $patient->name = $request->input('name');
        $patient->lastname = $request->input('lastname');
        $patient->birth_place = $request->input('birth_place');
        $patient->phpne_number = $request->input('phone_number');
        $patient->birth_year = $request->input('birth_year');
        $patient->update();

        return redirect('dashboard')->with('success', 'Updated perfectly');

    }


    function update1($id){


        $patient = Patient::where('id',$id)->first();
        $patient->name = $patient->name.'.';



        $patient->update();
        return redirect('dashboard')->with('success', 'Updated perfectly');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */


    public function mainChange(Request $request)
    {

        $patient = Patient::with('getPlace','getAutoRE','getImages','problemPatient','solutionPatient','tonoPatient','kerPatient','Utt')->where('id', $request->id)->get()->first();
         $years_old = Carbon::createFromDate($patient->birth_year)->diff(Carbon::today())->format('%y yosh, %m oy and %d kun');
         $problems = Problem::all();
         $solutions = Solution::all();

        return view('home.patientShow',compact('solutions','years_old','problems','patient'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patient $patient)
    {
        //
    }

    public function dashboard(){
//        $a = $_GET['query'];
        $patients = Patient::with('getPlace')->whereDate('updated_at', '=', Carbon::today()->toDateString())->orderByDesc('updated_at')->get();
        $count = count($patients);
        return view('home.home',compact('patients', 'count'));
    }

    public function dashboardYesterday()
    {
//        dd(Carbon::yesterday()->toDateString());
        $patients = Patient::with('getPlace')->whereDate('updated_at', '=', Carbon::yesterday()->toDateString())->get();
        $count = count($patients);
        return view('home.home',compact('patients', 'count'));
    }

    function dashboardAll(){
        $patients = Patient::all();
        $count = count($patients);
        return view('home.home', compact('patients', 'count'));
    }

    public function search(Request $request)
    {
//

        $search_text = $request->text;
        if(strlen($search_text) > 2) {
            $patients = Patient::where('lastname', 'LIKE', '%' . $search_text . '%')->get();
            $count = count($patients);
            return view('home.home', compact('patients', 'count'));
        }
        else{
            $count = 0;
            $patients = [];


            return view('home.home',['count' => $count, 'patients' => $patients]);
        }
    }
}
