<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function getSessionData(Request $request){
        if($request->session()->has('name')){
            echo $request->session()->get('name');
        }else{
            echo 'No data in this session';
        }

    }

    public function storeSessionData(Request $request){
        $request->session()->put('name', 'wahid');
        echo 'Data Has Been Added To The Session';

    }

    public function deleteSessionData(Request $request){
        $request->session()->forget('name');
        echo 'Data Has Been Removed From The Session';

    }
}
