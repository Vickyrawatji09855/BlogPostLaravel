<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blogs;

class DeletePostController extends Controller
{
    public function delete($id){
        $blog= Blogs::paginate(10);
       $blogs= Blogs::where('id', $id)->delete();
       dd($blogs);
       if($blogs){
        return view('welcome',compact('blog'));
       }

    }
}
