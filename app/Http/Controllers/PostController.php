<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Allpost=Post::all();
        return view('dashboard',['allposts'=>$Allpost]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostRequest $request)
    {
    
    Post::create($request->all());
    return redirect()->back()->with('status','Post Created Successfully');
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit=Post::find($id);
        return view('edit',['edit'=>$edit]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePostRequest  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostRequest $request,$id)
    {
        //
        $update=Post::find($id);
        $update->title=$request->title;
        $update->description=$request->description;
        $update->user_id=$request->user_id;
        $update->save();
        return redirect()->route('user.posts')->with('status','Update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $postdelete=Post::find($id);
        $postdelete->delete();
        return redirect()->back()->with('status','post delete successfully');
    }
}
