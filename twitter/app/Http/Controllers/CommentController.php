<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Tweet;

class CommentController extends Controller
{
    public function store(Tweet $tweet)
    {
       
        $comment=new Comment();
        $comment-> tweet_id = $tweet->id;
        $comment->content=request()->get('content');
        $comment->save();


        return redirect()->route('tweet.show',$tweet->id)->with('success', 'Comment created successfully');
    }
}
