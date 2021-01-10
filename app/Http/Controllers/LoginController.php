<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function index(){
        return view('login');

    }

    public function loginSubmit(Request $request){
        $validateData=$request->validate([
            'email'=>'required|email',
            'password'=>'required|min:12|max:24'
        ]);
        $email =$request->input('email');
        $password =$request->input('password');
        return 'Email: '.$email.' - Password: '.$password;
    }


    public function addUser(Request $request){
        $validateData=$request->validate([
            'email'=>'required|email',
            'password'=>'required|min:12|max:24'
        ]);
        DB::table('users')->insert([
            'email' => $request->email,
            'password'=>$request->password
        ]);
        return back()->with('user Created','User Has Been Created Successfully!');
    }
}
