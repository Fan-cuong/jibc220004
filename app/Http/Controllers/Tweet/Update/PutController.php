<?php

namespace App\Http\Controllers\Tweet\Update;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Tweet\UpdateRequest;
use App\Models\Tweet;

class PutController extends Controller
{
    public function d(UpdateRequest $request){
        $tweets = Tweet::where('id',$request->id())->firstOrFail();
        $tweets->content=$request->tweet();
        $tweets->save();
        return redirect()->route('tweet.index',['tweetId'=>$tweetId->id])->with('feedback.success',"更新しました。");
    }
}
