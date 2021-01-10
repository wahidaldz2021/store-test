<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request){
        return $request->fullUrl();
       /*  $name ='it-wit';
        $users=array(
            'name'=>'قداش maamar',
            'phone'=>'0770250204',
            'email'=>'maamar@gmail.com'
        );
        return view('user', compact('name', 'users')); */

    }
}
