<?php

namespace App\Http\Controllers\Tweet\Update;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tweet;
use App\Http\Requests\Tweet\UpdateRequest;


class IndexController extends Controller
{
    public function c(Request $request){
        $tweetId = (int) $request->route('tweetId');
        $tweets = Tweet::where('id',$tweetId)->firstOrFail();
        return view('tweet.update')->with('tweets', $tweets);
        //     if(is_null ($tweets)){
        //         throw new NotFoundHttpException('存在しないつぶやきです。');
        // }
    }
}
