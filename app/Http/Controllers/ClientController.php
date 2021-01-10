<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ClientController extends Controller
{
    public function getAllpost(){
        $responses = http::get('https://jsonplaceholder.typicode.com/posts');
        return $responses->json();
    }

    public function addPost(){
        $responses =Http::post('https://jsonplaceholder.typicode.com/posts',[
            'userId' => 1,
            'title' => 'New Post',
            'body'=> 'balbala'
        ]);
        return $responses->json();
    }

    public function updatePost(){
        $responses =Http::put('https://jsonplaceholder.typicode.com/posts/1',[
            'title' => 'update Post2',
            'body'=> 'update balbala'
        ]);
        return $responses->json();
    }

    public function deletePost($id){
        $responses =Http::put('https://jsonplaceholder.typicode.com/posts/'.$id);
        return $responses->json();
    }
}
