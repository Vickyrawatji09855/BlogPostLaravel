<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blogs;

class UpdatePostController extends Controller
{
    public function update(Request $request,$id){
        // dd($id);
       
        $request->validate([
            'title' => 'required',
            'author' => 'required | max:15'
        ]);

        

    

  
       
            $user = Blogs::find($id);
            $user->title = $request->title;
            $user->Content = $request->content;
            $user->author = $request->author;
            $user->Publication_Date = $request->Publication;
            $user->update();

            $blog= Blogs::paginate(10);

            return view('welcome', compact("blog"));

            // return redirect()->back();


    }
}
