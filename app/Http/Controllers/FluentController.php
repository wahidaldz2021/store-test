<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;


class FluentController extends Controller
{
    public function index(){
        echo '<h1> Fluent Strings </h1>';
        $slice =Str::of('Welecom to my Site Web Channel')->after('Welecom to my');
        echo $slice .'<br>';
        $slice2 =Str::of('App\Http\Controllers\Wahid')->afterLast('\\');
        echo $slice2 .'<br>';
        $string =Str::of('Hello')->append('World !');
        echo $string .'<br>';
        $result =Str::of('WAHID')->lower();
        echo $result .'<br>';
        $replaced =Str::of('Laraval 7.0')->replace('7.0','8.21');
        echo $replaced .'<br>';
        $converted =Str::of('this is title')->title();
        echo $converted .'<br>';
        $slug =Str::of('Laraval 8 Framework')->slug('-');
        echo $slug .'<br>';
        $str =Str::of('Laraval Framework')->substr(8,5);
        echo $str .'<br>';
        $str2 =Str::of('/Laraval 8/')->trim('/');
        echo $str2 .'<br>';
        $str3 =Str::of('laraval 8')->upper();
        echo $str3 .'<br>';

    }
}
