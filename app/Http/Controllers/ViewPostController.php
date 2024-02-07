<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blogs;

class ViewPostController extends Controller
{
    public function view($id){

        $blog=Blogs::find($id);
        return view('fullview',compact('blog'));
    }
}
