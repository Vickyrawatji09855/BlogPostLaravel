<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Blogs;

class CreatePostController extends Controller
{

    public function logic(){

        $data = [
            ["name" => "gaurav", "validityDate" => '2024-02-08'],
            ["name" => "saurav", "validityDate" => '2024-04-08'],
            ["name" => "saurav2", "validityDate" => '2024-05-08'],
            ["name" => "saurav3", "validityDate" => '2024-01-08'],
            ["name" => "saurav4", "validityDate" => '2024-02-09'],
            ["name" => "saurav5", "validityDate" => '2024-02-28'],
            ["name" => "saurav6", "validityDate" => '2024-02-18'],
            ["name" => "saurav7", "validityDate" => '2024-02-06'],
            ["name" => "saurav8", "validityDate" => '2024-02-04']
        ];
        $blogs= Blogs::all();

        
        $tomorrow = date('Y-m-d', strtotime('+1 day'));


$threeMonthsLater = date('Y-m-d', strtotime($tomorrow . ' +3 months'));


$filteredData = array_filter($data, function ($item) use ($tomorrow, $threeMonthsLater) {
    return ($item['validityDate'] >= $tomorrow && $item['validityDate'] < $threeMonthsLater);
});

// Output the filtered data
dd(print_r($filteredData));


    //    $i=0;
    //     foreach( $blogs as $blog){
    //         // dd($blog->Publication_Date);
    //         $data[$i]['validityDate'] =$blog->Publication_Date;
    //         $i++;
    //         if($i>=9){
    //             break;
    //         }
    //     }
   }

public function createblog(Request $request){

    $blog= Blogs::all();
    $request->validate([
        'title' => 'required',
        'author' => 'required | max:15'
    ]);
  
    // dd($request->title);
    $user = new Blogs;


    $user->title = $request->title;
    $user->Content = $request->content;
    $user->author = $request->author;
    $user->Publication_Date = $request->Publication;
    $user->save();

    return view('welcome', compact('blog'));
}

}
