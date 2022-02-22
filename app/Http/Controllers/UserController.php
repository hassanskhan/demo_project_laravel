<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function mypost(){
        $user_id=Auth::id();
        $userposts=User::find($user_id)->posts;
        return view('myposts',['myposts'=>$userposts]);
    }
}
