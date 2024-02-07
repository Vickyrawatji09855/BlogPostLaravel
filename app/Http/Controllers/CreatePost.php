<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreatePost extends Controller
{
    public function create(){
        return view('createblog');
    }
}
