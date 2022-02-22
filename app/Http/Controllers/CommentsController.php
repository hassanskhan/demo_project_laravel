<?php

namespace App\Http\Controllers;

use App\Models\comments;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
class CommentsController extends Controller
{
    public function details($id){

        $details=Post::with('comments')->find($id);
        return view('details',['details'=>$details]);
    }
    public function comments(Request $request){

           
         $comment=new comments();
         $comment->comments=$request->comment;
         $comment->user_id=$request->user_id;           
        $post=Post::find($request->get('post_id'));
        $post->comments()->save($comment);
        return redirect()->back()->with('status','Thanks for comment This Post');
    }
   
}
