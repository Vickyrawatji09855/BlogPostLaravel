<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blogs;

class EditPostController extends Controller
{
    public function edit($id){

        $post= Blogs::find($id);
        return view('editblog',compact('post'));
        
    }
}
