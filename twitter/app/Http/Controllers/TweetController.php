<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tweet;
class TweetController extends Controller
{
public function show(Tweet $tweet){

    return view('tweets.show', ['tweet' => $tweet]);
}
//     public function index()
//     {
//         return view('tweet.index');
// }


public function edit(Tweet $tweet){

    $editing=true;
    return view('tweets.show',compact('tweet','editing'));
}


public function update(Tweet $tweet){


    request()->validate([
        'content' => 'required|min:3|max:240'
       ]);
    $tweet->content=request()->get('content','');
    $tweet->save();
    return redirect()->route('tweet.show',$tweet->id)->with('success', 'Tweet updated successfully');
}


    public function store()
    {
       request()->validate([
        'content' => 'required|min:3|max:240'
       ]);
       $tweet= Tweet::create(
        ['content'=>request()->get('content','')]
    );
    
      return redirect()->route('dashboard')->with('success', 'Tweet created successfully');        
    }

    public function destroy(Tweet $id)
    {
    $id->delete();
     
        return redirect()->route('dashboard')->with('success', 'Tweet deleted successfully');
    }
}
