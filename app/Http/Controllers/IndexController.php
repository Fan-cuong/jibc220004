<?php

namespace App\Http\Controllers;
use App\Models\Tweet;
use App\Http\Controllers\Controller;
use App\Http\Requests\Tweet\CreateRequest;
use Illuminate\Http\Request;
use App\Http\Requests\Tweet\UpdateRequest;
use App\Http\Requests\Tweet\DeleteRequest;
use App\Services\TweetService;


class IndexController extends Controller
{
    public function a(Request $request,TweetService $TweetService){
        $tweets=Tweet::orderBy('created_at','DESC')->get();
        $tweetService=new TweetService();
        $tweets=$tweetService->getTweets();
        
        return view('tweet.index')->with('tweets', $tweets);
    }
}
