<?php

namespace App\Http\Controllers;
use App\Models\Tweet;
use App\Http\Controllers\Controller;
use App\Http\Requests\Tweet\CreateRequest;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function a(){
        $tweets=Tweet::orderBy('created_at','desc')->get();
        return view('tweet.index')->with('tweets', $tweets);
    }
}
