<?php

namespace App\Http\Controllers\Blog;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{

    
    //
    public function index(){
        return view ('blog.index');
        return 'Story of my life';
    }
}
