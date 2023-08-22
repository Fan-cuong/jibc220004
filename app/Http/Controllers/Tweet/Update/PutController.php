<?php

namespace App\Http\Controllers\Tweet\Update;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tweet;
use App\Http\Requests\Tweet\UpdateRequest;
use App\Services\TweetService;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;


class PutController extends Controller
{
    public function d(UpdateRequest $request ,TweetService $tweetService){
        if(!$tweetService->checkOwnTweet($request->user()-> id, $request->id())){
            throw new AccessDeniedHttpException();
        }
        // $tweetId = (int) $request->route('tweetId');
        $tweets = Tweet::where('id',$request->id())->firstOrFail();
        $tweets->content=$request->tweet();
        $tweets->save();
        return redirect()->route('tweet.index',['tweetId'=>$tweetId->id])->with('feedback.success',"更新しました。");
    }
}
