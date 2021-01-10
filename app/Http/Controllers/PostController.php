<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function getAllPost(){
        $posts = DB::table('posts')->get();
        return view('posts',compact('posts'));
    }

    public function addPost(){
        $posts = DB::table('posts')->get();
        return view('add-post');

    }

    public function addpostSubmit(Request $request){
        DB::table('posts')->insert([
            'title' => $request->title,
            'body'=>$request->body
        ]);
        return back()->with('post_created','Post Has Been Created Successfully!');
    }

    public function getPostById($id){
        $post = DB::table('posts')->where('id', $id)->first();
        return view('single-post', compact('post'));

    }

    public function deletePost($id){
        $post = DB::table('posts')->where('id', $id)->delete();
        return back()->with('post_deleted','Post Has Been Deleted Successfully!');

    }

    public function updatePost(Request $request){
        $post = DB::table('posts')->where('id', $request->id)->update([
            'title' => $request->title,
            'body'=>$request->body,
        ]);
        return back()->with('post_update','Post Has Been Updated Successfully!');
    }

    /* public function store(Request $request){
        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required'
            ]);
            $contact = new Contact([
                'first_name' => $request->get('first_name'),
                'last_name' => $request->get('last_name'),
                'email' => $request->get('email'),
                'job_title' => $request->get('job_title'),
                'city' => $request->get('city'),
                'country' => $request->get('country')
                ]);
        $contact->save();
        return redirect('/contacts')->with('success', 'Contact saved!');
    } */

}
