<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $sports = array('Football','Tinis','BascatBall');

    return view('welcome', compact('sports'));

    }
}
