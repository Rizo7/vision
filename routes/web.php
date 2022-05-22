<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/








route::get('login', [\App\Http\Controllers\UserController::class,'login'])->name('login');
route::get('register',[\App\Http\Controllers\UserController::class,'register'])->name('register');

route::post('addUser',[\App\Http\Controllers\UserController::class,'store'])->name('addUser');
route::post('checkUser',[\App\Http\Controllers\UserController::class,'check'])->name('checkUser');

route::get('logout',[\App\Http\Controllers\UserController::class,'logout'])->name('logout');


    Route::group(['middleware' => 'checkLogin'], function () {


        Route::get('/', function () {
            return view('welcome');
        });


        Route::get('generate-pdf', [\App\Http\Controllers\PDFController::class, 'Patients']);
        Route::get('pdf', [\App\Http\Controllers\PDFController::class, 'generatePDF'])->name('downloadPDF');


        route::get('index',[\App\Http\Controllers\PlaceController::class,'index'])->name('placeIndex');
        route::post('store',[\App\Http\Controllers\PlaceController::class,'store'])->name('addPlace');
        route::post('countPlace',[\App\Http\Controllers\PlaceController::class, 'count'])->name('countPlace');
        route::delete('deletePlace/{id}',[\App\Http\Controllers\PlaceController::class,'destroy'])->name('deletePlace');

        route::get('dashboard',[\App\Http\Controllers\PatientController::class,'dashboard'])->name('dashboard');
        route::get('yesterday',[\App\Http\Controllers\PatientController::class, 'dashboardYesterday'])->name('yesterday');


        route::get('dashboard/patient',[\App\Http\Controllers\PatientController::class,'index'])->name('addPatient');
        route::post('dashboard/patient/save',[\App\Http\Controllers\PatientController::class,'store'])->name('savePatient');
        route::get('dashboard/patient/edit/{id}',[\App\Http\Controllers\PatientController::class, 'edit'])->name('editPatient');
        route::post('dashboard/patient/update/{id}',[\App\Http\Controllers\PatientController::class, 'update']);
        route::get('dashboard/patient/update1/{id}',[\App\Http\Controllers\PatientController::class, 'update1']);
        route::get('dashboard/patient/search',[\App\Http\Controllers\PatientController::class,'search'])->name('search');
        route::get('dashboard/patient/add',[\App\Http\Controllers\PatientController::class, 'mainChange'])->name('patientShow');
        route::get('problem/index', [\App\Http\Controllers\ProblemController::class, 'index'])->name('indexProblem');
        route::post('problem/store',[\App\Http\Controllers\ProblemController::class,'store'])->name('addProblem');
        route::get('solution/index',[\App\Http\Controllers\SolutionController::class,'index'])->name('indexSolution');
        route::post('solution/store', [\App\Http\Controllers\SolutionController::class, 'store'])->name('addSolution');

        route::post('autoRef/store', [\App\Http\Controllers\AutoRefController::class,'store'])->name('addAutoRef');
        route::get('patients/all', [\App\Http\Controllers\PatientController::class, 'dashboardAll'])->name('allPatients');


        route::post('dashboard/image',[\App\Http\Controllers\ImageController::class, 'store'])->name('imageStore');

        route::post('patient_problem',[\App\Http\Controllers\PatientProblemController::class, 'store'])->name('patient_problem');
        route::post('patient_solution', [\App\Http\Controllers\SolutionPatientController::class, 'store'])->name('patient_solution');
        route::post('tonometr', [\App\Http\Controllers\TonometrController::class, 'store'])->name('tonometr');
        route::post('kerametrPatient', [\App\Http\Controllers\KerController::class, 'store'])->name('kerStore');
        route::post('tashhisPatient', [\App\Http\Controllers\UTTController::class, 'store'])->name('UttStore');

    });




