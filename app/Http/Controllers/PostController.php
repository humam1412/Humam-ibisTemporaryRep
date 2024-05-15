<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\posting;

class PostController extends Controller
{
    public function index(){
    

        return view('Articles', [
            "title" => "ALL POSTINGS",
           "post" => posting::latest()->filter(request(['search', 'category']))->get()
           //eager load
          // "post" => posting::with(['user', 'category'])->latest()->get()
            
        ]); 
    }
    public function index2(){
    

        return view('home', [
            "title" => "ALL POSTINGS",
           "post" => posting::latest()->filter(request(['search', 'category']))->get()
           //eager load
          // "post" => posting::with(['user', 'category'])->latest()->get()
            
        ]); 
    }
    //memunculkan single post - route model binding
    public function show(posting $post){
        return view('post', [
            "title" => "single post",
            "post" => $post
        ]); 
    }
}
