<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function register()
    {
        return view("auth.register");
    }

    public function login()
    {
        return view('auth.login');
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
            'name' => 'required|unique:users,name',
            'password' => 'required'
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->password = Hash::make($request->password);
        $data = $user->save();

        if($data){
            return redirect()->back()->with('success', 'User added perfectly');
        }


    }

    public function check(Request $request){

        $request->validate([
            'name' => 'required',
            'password' => 'required'
        ]);



        $check_user = User::where('name', '=', $request->name)->first();

        if(!$check_user){
            return redirect()->back()->with('fail','User didnot find');
        }

        if(!Hash::check($request->password, $check_user->password)){
            return redirect()->back()->with('fail','password is incorrect');
        }
        $check_user1 = [
            'name' => $request->name,
            'password' => $request->password
        ];


        if(Auth::attempt($check_user1)){
            return redirect()->route('dashboard');
//
        }



    }


    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        return redirect()->route('login');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
