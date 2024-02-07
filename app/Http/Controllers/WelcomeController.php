<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blogs;

class WelcomeController extends Controller
{
    public function welcome(){

       $blog= Blogs::paginate(10);
    //    dd($blog);

       return view('welcome', compact("blog"));

    }
}
